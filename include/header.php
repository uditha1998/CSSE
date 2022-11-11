<?php
$USER1 = new User();
$USER_DATA = $USER1->getterAllById($_SESSION["id"]);
?>
<div class = "container-fluid sb2">
    <div class = "row">
        <div class = "sb2-1">
            <!--== USER INFO ==-->
            <div class = "sb2-12">
                <ul>
                    <li><img src = "images/placeholder.jpg" alt = "">
                    </li>
                    <li>
                        <h5><?=$USER_DATA['name']?> <span> <?=$USER1->getManagerType($USER_DATA['userType'])?></span></h5>
                    </li>
                    <li></li>
                </ul>
            </div>
            <!--== LEFT MENU ==-->
            <div class = "sb2-13">
                <ul class = "collapsible" data-collapsible = "accordion">
                    <li><a href = "#" class = "menu-active"><i class = "fa fa-bar-chart" aria-hidden = "true"></i> Dashboard</a>
                    </li>
                    <li><a href = "javascript:void(0)" class = "collapsible-header"><i class = "fa fa-list-ul" aria-hidden = "true"></i> Manage Purchase Orders</a>
                        <div class = "collapsible-body left-sub-menu">
                            <ul>
                                <li><a href = "./add-purchase-order.php">Create</a>
                                </li>
                                <li><a href = "./manage-purchase-order.php">View</a>
                                </li>

                                </li>
                            </ul>
                        </div>
                    </li>



                    <li><a href = "javascript:void(0)" class = "collapsible-header"><i class = "fa fa-list-ul" aria-hidden = "true"></i> Manage Supplier</a>
                        <div class = "collapsible-body left-sub-menu">
                            <ul>
                                </li>
                                <li><a href = "./add-supplier.php">Create</a> </li>

                                <li><a href = "./manage-suppliers.php">Manage</a> </li>

                            </ul>
                        </div>
                    </li>

                    <?php
                    if ($USER_DATA['userType'] == 0) {
                        ?>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-list-ul" aria-hidden="true"></i> Manage Sites</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    </li>
                                    <li><a href="./add-site.php">Create Site</a> </li>

                                    <li><a href="./manage-site.php">Manage Site</a> </li>

                                </ul>
                            </div>
                        </li>
                        <li><a href = "javascript:void(0)" class = "collapsible-header"><i class = "fa fa-list-ul" aria-hidden = "true"></i> Manage Employee</a>
                            <div class = "collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href = "./add-employee.php">Create</a>
                                    </li>
                                    <li><a href = "./manage-employee.php">Manage</a>
                                    </li>

                                    </li>
                                </ul>
                            </div>
                        </li>
                    <?php } ?>
                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-list-ul" aria-hidden="true"></i> Manage Delivery Log</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                </li>
                                <li><a href="./add-raw-material.php">Create </a> </li>

                                <li><a href="./manage-raw-material.php">Manage </a> </li>

                            </ul>
                        </div>
                    </li>
                    <li><a href="log-out.php" class="collapsible-header"><i class="fa fa-list-ul" aria-hidden="true"></i>Log out</a>
                        <div class="collapsible-body left-sub-menu">
                          
                        </div>
                    </li>

                </ul>
            </div>
        </div>


    </div>
</div>