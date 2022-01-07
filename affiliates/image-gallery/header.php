<?php
   //include 'connection.php'; 
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Tricol">
    <meta name="keywords" content="Tricol">

    <!-- Title Page-->
    <title>Trinity College Gallery</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap4/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link rel="icon" href="images/icon/icon.png">
    <link href="css/theme.css" rel="stylesheet" media="all">
    <script src="https://www.youtube.com/player_api"></script>
    <link href="style.css" rel="stylesheet" media="all">
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-2 d-none d-lg-block">
            <div class="container">
                <div class="header-2__inner clearfix">
                    <div class="logo float-left">
                        <a href="index">
                            <img src="images/icon/logo-black.png" alt="Trinity International College"  />
                        </a>
                    </div>
<!--                    <div class="search-btn-wrap float-right">
                        <button class="search-btn" data-toggle="modal" data-target="#searchModal">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>-->
                    <nav class="nav-header float-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item has-mega">
                                <a href="index">Home</a>
                            </li>
                            <li class="list-inline-item has-mega">
                                <a href="facility">Facilities</a>
                                <div class="mega-menu">
                                    <div class="row no-gutters">
                                        <div class="col-lg-6 mega-menu__col">
                                            <ul class="mega-menu__list list-unstyled">
                                                <li>
                                                    <a href="chemistry" class="has-dropdown"> Chemistry Lab</a>
                                                    <ul class="dropdown-list list-unstyled second">
                                                        <li>
                                                            <a class="border-bottom-0" href="physics">Physics Lab</a>
                                                        </li>
                                                        <li>
                                                            <a class="border-bottom-0" href="biology">Biology Lab</a>
                                                        </li>
                                                        <li>
                                                            <a class="border-bottom-0" href="computer">Computer Lab</a>
                                                        </li>
                                                        <li>
                                                            <a class="border-bottom-0" href="homecon">Home Economics</a>
                                                        </li>
                                                        
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 mega-menu__col">
                                            <ul class="mega-menu__list list-unstyled">
                                                <li>
                                                    <a class="border-right-0" href="admin">Administrative</a>
                                                </li>
                                                <li>
                                                    <a class="border-right-0" href="hostel">Hostels</a>
                                                </li>
                                                <li> <a href="clinic"> Clinic</a></li>
                                                <li><a href="art">Art Lab</a> </li>
                                                <li><a href="language">Language Lab</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                     
                      <!--  <li class="list-inline-item has-dropdown">
                                    <a href="">Facilities</a>
                                    <ul class="dropdown-list list-unstyled is-right">
                                        <li class="has-dropdown">
                                            <a href="">Laboratory</a>
                                            <ul class="dropdown-list list-unstyled second">
                                                <li>
                                                    <a href="chemistry">Chemistry Lab</a>
                                                </li>
                                                <li>
                                                    <a class="border-bottom-0" href="physics">Physics Lab</a>
                                                </li>
                                                <li>
                                                    <a class="border-bottom-0" href="biology">Biology Lab</a>
                                                </li>
                                                <li>
                                                    <a class="border-bottom-0" href="computer">Computer Lab</a>
                                                </li>
                                                <li>
                                                    <a class="border-bottom-0" href="homecon">Home Economics</a>
                                                </li>
                                                <li>
                                                    <a class="border-bottom-0" href="art">Art Lab</a>
                                                </li>
                                                <li>
                                                    <a class="border-bottom-0" href="language">Language Lab</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="admin">Administrative</a>
                                        </li>
                                        <li>
                                            <a href="clinic">Clinic</a>
                                        </li>
                                        <li>
                                            <a href="hostel">Hostels</a>
                                        </li>
                                    </ul>
                                </li>-->
                            
                            <li class="list-inline-item has-dropdown">
                                <a href="student">Our Students</a>
                            </li>
                            <li class="list-inline-item has-dropdown">
                                <a href="staff">Our Staff</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- SEARCH MODAL-->
        <div class="modal fade" id="searchModal" role="dialog">
            <button class="close" type="button" data-dismiss="modal">
                <i class="zmdi zmdi-close"></i>
            </button>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <form id="searchModal__form" method="POST">
                            <input id="searchModal__input" type="text" name="search" placeholder="Search here..." />
                            <button id="searchModal__submit" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SEARCH MODAL-->
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none bg-c1b header-mobile-2">
            <div class="header-mobile__bar">
                <div class="container-fluid clearfix">
                    <a class="logo" href="index">
                        <img src="images/icon/logo-white.png" alt="Trinity International College" />
                    </a>
                    <button class="hamburger hamburger--slider float-right" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="list-inline-item has-mega">
                                <a href="index">Home</a>
                            </li>
                            
                        <li class="list-inline-item has-dropdown">
                                    <a href="">Facilities</a>
                                    <ul class="dropdown-list list-unstyled is-right">
                                        
                                        <li class="has-dropdown">
                                            <a href="">Laboratory</a>
                                            <ul class="dropdown-list list-unstyled second">
                                                <li>
                                                    <a href="chemistry">Chemistry Lab</a>
                                                </li>
                                                <li>
                                                    <a class="border-bottom-0" href="physics">Physics Lab</a>
                                                </li>
                                                <li>
                                                    <a class="border-bottom-0" href="biology">Biology Lab</a>
                                                </li>
                                                <li>
                                                    <a class="border-bottom-0" href="computer">Computer Lab</a>
                                                </li>
                                                <li>
                                                    <a class="border-bottom-0" href="homecon">Home Economics</a>
                                                </li>
                                                <li>
                                                    <a class="border-bottom-0" href="art">Art Lab</a>
                                                </li>
                                                <li>
                                                    <a class="border-bottom-0" href="language">Language Lab</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="admin">Administrative</a>
                                        </li>
                                        <li>
                                            <a href="clinic">Clinic</a>
                                        </li>
                                        <li>
                                            <a href="hostel">Hostels</a>
                                        </li>
                                    </ul>
                                </li>
                            
                            <li class="list-inline-item has-dropdown">
                                <a href="student">Our Students</a>
                            </li>
                            <li class="list-inline-item has-dropdown">
                                <a href="staff">Our Staff</a>
                            </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->