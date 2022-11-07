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
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Quicksand:300,400,500" rel="stylesheet">

        <!-- FONT-AWESOME ICON CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!--== ALL CSS FILES ==-->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/mob.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/materialize.css" />


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

                        <li class="divider"></li>
                        <li><a href="#" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--== BODY CONTNAINER ==-->
        <?php include './include/header.php'; ?>

        <!--== BODY INNER CONTAINER ==-->
        <div class="sb2-2">
            <!--== breadcrumbs ==-->
            <div class="sb2-2-2">
                <ul>
                    <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="active-bre"><a href="#"> Dashboard</a>

                </ul>
            </div>
            <!--== DASHBOARD INFO ==-->
            <div class="ad-v2-hom-info">
                <div class="ad-v2-hom-info-inn">
                    <ul>
                        <li>
                            <div class="ad-hom-box ad-hom-box-1">
                                <span class="ad-hom-col-com ad-hom-col-1"><i class="fa fa-bar-chart"></i></span>
                                <div class="ad-hom-view-com">
                                    <p><i class="fa  fa-arrow-up up"></i> Today Views</p>
                                    <h3>22,520</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="ad-hom-box ad-hom-box-2">
                                <span class="ad-hom-col-com ad-hom-col-2"><i class="fa fa-usd"></i></span>
                                <div class="ad-hom-view-com">
                                    <p><i class="fa  fa-arrow-up up"></i> Earnings</p>
                                    <h3>22,520</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="ad-hom-box ad-hom-box-3">
                                <span class="ad-hom-col-com ad-hom-col-3"><i class="fa fa-address-card-o"></i></span>
                                <div class="ad-hom-view-com">
                                    <p><i class="fa  fa-arrow-up up"></i> Users</p>
                                    <h3>22,520</h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="ad-hom-box ad-hom-box-4">
                                <span class="ad-hom-col-com ad-hom-col-4"><i class="fa fa-envelope-open-o"></i></span>
                                <div class="ad-hom-view-com">
                                    <p><i class="fa  fa-arrow-up up"></i> Inquiry</p>
                                    <h3>22,520</h3>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


            <!--== User Details ==-->
            <div class="sb2-2-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-inn-sp">
                            <div class="inn-title">
                                <h4>User Details</h4>
                                <p>Here are the type of Users</p>
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
                                    <li><a href="#!"><i class="material-icons">play_for_work</i>Download</a>
                                    </li>
                                </ul>
                                <!-- Dropdown Structure -->

                            </div>
                            <div class="tab-inn">
                                <div class="table-responsive table-desi">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>User Type</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                                </td>
                                                <td><a href="#"><span class="list-enq-name">Isiwara Uditha</span><span class="list-enq-city">Colombo,Srilanka</span></a>
                                                </td>
                                                <td>0771345232</td>
                                                <td>isiwara@construction.com</td>
                                                <td>Manager</td>

                                            </tr>
                                            <tr>
                                                <td><span class="list-img"><img src="images/user/2.png" alt=""></span>
                                                </td>
                                                <td><a href="#"><span class="list-enq-name">Pamodya Dilshani</span><span class="list-enq-city">Colombo,Srilanka</span></a>
                                                </td>
                                                <td>0771345232</td>
                                                <td>sahan@construction.com</td>

                                                <td>Accounting</td>

                                            </tr>
                                            <tr>
                                                <td><span class="list-img"><img src="images/user/3.png" alt=""></span>
                                                </td>
                                                <td><a href="#"><span class="list-enq-name">Deshitha thennakon</span><span class="list-enq-city">Colombo,Srilanka</span></a>
                                                </td>
                                                <td>0773265229</td>
                                                <td>deshitha@construction.com</td>
                                                <td>Line Manager</td>

                                            </tr>
                                         
                                        </tbody>
                                    </table>
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
    </body>


</html>