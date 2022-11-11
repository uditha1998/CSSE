<?php
include_once(dirname(__FILE__) . '/model/include.php');
include_once(dirname(__FILE__) . '/auth.php');
?>
<!DOCTYPE html>
<html lang="en">


    <head>
        <title>Construction Management</title>
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
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />

        <style>
            .table-responsive{
                overflow: visible;
            }
            .dataTables_wrapper .dataTables_filter input {
                border: 1px solid #aaa;
                border-radius: 3px;
                padding: 5px;
                background-color: transparent;
                margin-left: 3px;
                width: max-content;
                height: 34px;
            }
        </style>

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
                <?php include './include/header.php'; ?>
                <div class="sb2-2">
                    <div class="sb2-2-2">
                        <ul>
                            <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                            </li>
                            <li class="active-bre"><a href="#"> Ui Form</a>
                            </li>
                        </ul>
                    </div>
                    <div class="sb2-2-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box-inn-sp">
                                    <div class="inn-title">
                                        <h4>Manage Delivery Log </h4>
                                        <p>Here is the delivery log in All Sites</p>
                                        <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                        <ul id="dr-users" class="dropdown-content">
                                            <li><a href="#!">Add New</a>
                                            </li>
                                            <li><a href="#!">Edit</a>
                                            </li>
                                            <li><a href="#!">Update</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                            </li>
                                            <li><a href="#!"><i class="material-icons">subject</i>View All</a>
                                            </li>
                                        </ul>

                                        <!-- Dropdown Structure -->

                                    </div>
                                    <div class="tab-inn">
                                        <div class="table-responsive table-desi">
                                            <table class="table table-hover" id="datatables-basic">
                                                <thead>
                                                    <tr>
                                                        <th>Item Name</th>
                                                        <th>Price</th>
                                                        <th>Quantity</th>
                                                        <th>Site Name</th>
                                                        <th>Recorded Date</th>

                                                        <th>View</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $MATERIAL = new Material();

                                                    foreach ($MATERIAL->getAll() as $material) {
                                                        ?>
                                                        <tr>

                                                            <td><?= $material['name'] ?></td>
                                                            <td><?= $material['unitPrice'] ?></td>
                                                            <td><?= $material['quantity'] ?></td>
                                                            <td>Colombo</td>
                                                            <td><?= $material['date'] ?></td>


                                                            <td>
                                                                <a href="view-raw-material.php?id="><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                            </td>
                                                            <td>
                                                                <a href="edit-raw-material.php?id="><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                            </td>
                                                            <td>
                                                                <a href="" ><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    }
                                                    ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--== BOTTOM FLOAT ICON ==-->
        <!--== BOTTOM FLOAT ICON ==-->


        <!--======== SCRIPT FILES =========-->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script src="js/custom.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                // Datatables basic
                $('#datatables-basic').DataTable({
                    responsive: true
                });
                // Datatables with Buttons
                var datatablesButtons = $('#datatables-buttons').DataTable({
                    lengthChange: !1,
                    buttons: ["copy", "print"],
                    responsive: true
                });
                datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)")
            });
        </script>
    </body>


</html>