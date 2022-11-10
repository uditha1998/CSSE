<!DOCTYPE html>
<html lang="en">
    <?php
    $id = $_GET['id'];
    include_once(dirname(__FILE__) . '/model/include.php');
    include_once(dirname(__FILE__) . '/auth.php');
    ?>


    <head>
        <title>Purchase Order</title>
        <!--== META TAGS ==-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!--== FAV ICON ==-->
        <link rel="shortcut icon" href="images/fav.ico">

        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">

        <!-- FONT-AWESOME ICON CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!--== ALL CSS FILES ==-->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/mob.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/materialize.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    </head>

    <body>
        <!--== MAIN CONTRAINER ==-->
        <div class="container-fluid sb1">
            <div class="row">
                <!--== LOGO ==-->
                <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                    <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                    <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                    <a href="index-2.html" class="logo"><img src="images/logo1.png" alt="" />
                    </a>
                </div>
                <!--== SEARCH ==-->
                <div class="col-md-6 col-sm-6 mob-hide">
                    <form class="app-search">
                        <input type="text" placeholder="Search..." class="form-control">
                        <a href="#"><i class="fa fa-search"></i></a>
                    </form>
                </div>
                <!--== NOTIFICATION ==-->
                <div class="col-md-2 tab-hide">
                    <div class="top-not-cen">
                        <a class='waves-effect btn-noti' href='#'><i class="fa fa-commenting-o" aria-hidden="true"></i><span>5</span></a>
                        <a class='waves-effect btn-noti' href='#'><i class="fa fa-envelope-o" aria-hidden="true"></i><span>5</span></a>
                        <a class='waves-effect btn-noti' href='#'><i class="fa fa-tag" aria-hidden="true"></i><span>5</span></a>
                    </div>
                </div>
                <!--== MY ACCCOUNT ==-->
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <!-- Dropdown Trigger -->
                    <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img src="images/user/6.png" alt="" />My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>

                    <!-- Dropdown Structure -->
                    <ul id='top-menu' class='dropdown-content top-menu-sty'>
                        <li><a href="setting.html" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Admin Setting</a>
                        </li>
                        <li><a href="listing-all.html" class="waves-effect"><i class="fa fa-list-ul" aria-hidden="true"></i> Listings</a>
                        </li>
                        <li><a href="hotel-all.html" class="waves-effect"><i class="fa fa-building-o" aria-hidden="true"></i> Hotels</a>
                        </li>
                        <li><a href="package-all.html" class="waves-effect"><i class="fa fa-umbrella" aria-hidden="true"></i> Tour Packages</a>
                        </li>
                        <li><a href="event-all.html" class="waves-effect"><i class="fa fa-flag-checkered" aria-hidden="true"></i> Events</a>
                        </li>
                        <li><a href="offers.html" class="waves-effect"><i class="fa fa-tags" aria-hidden="true"></i> Offers</a>
                        </li>
                        <li><a href="user-add.html" class="waves-effect"><i class="fa fa-user-plus" aria-hidden="true"></i> Add New User</a>
                        </li>
                        <li><a href="#" class="waves-effect"><i class="fa fa-undo" aria-hidden="true"></i> Backup Data</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--== BODY CONTNAINER ==-->
        <div class="container-fluid sb2">
            <div class="row">
            </div>
            <?php
            include './include/header.php';
            ?>
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> View Purchase Order</a>
                        </li>
                    </ul>
                </div>

                <div class="sb2-2-add-blog sb2-2-1">
                    <h2>View purchase Order</h2>

                    <?php
                    $PURCHASE_ORDER = new PurchaseOrder();
                    $PURCHASE_ORDER->setId($id);
                    $DATA = $PURCHASE_ORDER->getterAllById();
                    ?>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Chose What To do With The Purchase Order</h4>
                                </div>
                                <div class="bor">
                                    <form>
                                        <div class="row">
                                            <?php
                                            if ($DATA['status'] == 0) {
                                                ?>
                                                <div class="input-field col s2">
                                                    <input value="Approve" " data-id="1" data-id2="<?= $DATA['id'] ?>" class="btn btn-success update" style="background-color: green">
                                                </div> 
                                                <div class="input-field col s2">
                                                    <input value="Decline"  data-id="2" data-id2="<?= $DATA['id'] ?>" class=" btn btn-danger update" style="background-color: orange">
                                                </div> 
                                                <?php
                                            } else if ($DATA['status'] == 1) {
                                                ?>
                                                <div class="input-field col s2">

                                                    <input  class="btn btn-danger" style="background-color: #00BCD4"  value = "Approved">                                            
                                                </div>
                                                <?php
                                            } else if ($DATA['status'] == 2) {
                                                ?>
                                                <div class="input-field col s2">

                                                    <input   class="btn btn-danger" style="background-color: orange"  value = "Declined">                                            
                                                </div>
                                                <?php
                                            } else if ($DATA['status'] == 3) {
                                                ?>
                                                <div class="input-field col s2">

                                                    <input  class="btn btn-success" style="background-color:red " value = "Reffered"> 
                                                </div>

                                                <?php
                                            }
                                            ?>
                                            <div class="input-field col s2">

                                                <input  class="btn btn-danger" id="delete" data-id="<?= $DATA['id'] ?>"  style="background-color:red" value = "Delete"> 
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="list-title" readonly="" value="<?= $DATA['id'] ?>" type="text" class="validate">
                                                <label for="list-title">Order No</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="list-name" readonly=""value="  <?php
                                                $MATERIAL = new Material();
                                                echo $MATERIAL->getName($DATA['item']);
                                                ?>" type="text" class="validate">
                                                <label for="list-name">Item Name</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="list-title" readonly="" type="text" class="validate">
                                                <label for="list-title">Supplier Name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="list-name" readonly=""
                                                       value="<?php
                                                       $SITE = new Site();
                                                       echo $SITE->getName($DATA['siteId']);
                                                       ?>"
                                                       type="text" 

                                                       class="validate">
                                                <label for="list-name">Site Name</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="list-title" readonly="" value="Rs.30000.00" type="text" class="validate">
                                                <label for="list-title">Price</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="list-name" readonly=""value="<?= $DATA['quantitty'] ?>"type="text" class="validate">
                                                <label for="list-name" value>Quantity</label>
                                            </div>
                                        </div>  
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="list-title" readonly="" 
                                                       value=" <?php
                                                       if ($DATA['staff'] == 0) {
                                                           $MANAGER = new User();
                                                           echo "Not Approved";
                                                       } else {
                                                           $MANAGER = new User();
                                                           echo $MANAGER->getManagerName($DATA['staff']);
                                                       }
                                                       ?>"
                                                       type="text" class="validate">
                                                <label for="list-title">Approved By</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="list-name" readonly=""type="text" class="validate">
                                                <label for="list-name">Referral</label>
                                            </div>
                                        </div>  


                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--== BOTTOM FLOAT ICON ==-->
    <section>
        <div class="fixed-action-btn vertical">
            <a class="btn-floating btn-large red pulse">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a>
                </li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a>
                </li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a>
                </li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a>
                </li>
            </ul>
        </div>
    </section>

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/ajax/purchase-order.js" type="text/javascript"></script>
</body>


</html>