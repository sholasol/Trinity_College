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
    <meta name="author" content="">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Welcome to Trinity College</title>

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
    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="vendor/revolution/css/layers.css" />
    <link rel="stylesheet" href="vendor/revolution/css/navigation.css" />
    <link rel="stylesheet" href="vendor/revolution/css/settings.css" />
    
    <!-- Main CSS-->
    <link rel="icon" href="images/icon/icon.png">
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop header-1 d-none d-lg-block">
            <div class="container-fluid">
                <div class="section__content section__content--w1760">
                    <div class="row no-gutters header__content">
                        <div class="col-md-5">
                            <button class="mini-cart-btn">
                                <span class="icon">
                                    <i class="fa fa-camera text-danger"></i>
                                </span>
                            </button>
                        </div>
                        <div class="col-md-2 logo-wrap">
                            <a href="index">
                                <img src="images/icon/logo-black.png" alt="Trinity International College"  />
                            </a>
                        </div>
                    <div class="col-md-5 navheader-wrap">
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
                            <li class="list-inline-item has-dropdown">
                                <a href="student">Our Students</a>
                            </li>
                            <li class="list-inline-item has-dropdown">
                                <a href="staff">Our Staff</a>
                            </li>
                            
<!--                            <li class="list-inline-item has-dropdown">
                                <a href="event">Events</a>
                            </li>-->
                        </ul>
                    </nav>
<!--                            <nav class="nav-header">
                                <ul class="list-unstyled list-inline">
                                    <?php 
                                    $usss = dbConnect()->prepare("SELECT * FROM gallery WHERE status=?");
                                    $usss->execute([1]);
                                    while($mn = $usss->fetch()){
                                    
                                    ?>
                                    <li class="list-inline-item has-mega">
                                        <a href="?ref=<?php echo $mn['title'];?>"><?php echo $mn['title'];?></a>
                                    </li>
                                <?php }?>
                                </ul>
                            </nav>-->
                            <div class="search-btn-wrap">
                                <button class="search-btn" data-toggle="modal" data-target="#searchModal">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
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
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid clearfix">
                    <a class="logo" href="index1.html">
                        <img src="images/icon/logo-black.png" alt="Umber" />
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
                                                    <a class="border-right-0" href="administration">Administrative</a>
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