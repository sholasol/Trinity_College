<?php 

require_once 'core/init.php';


$user = new User();

/*
 * 
 * 
 * 
 * if($user->isLoogedIn()){
    $name = escape($user->data()->fname)." ".escape($user->data()->lname);
    $uid = escape($user->data()->id);
    $email = escape($user->data()->email);
    $grp = escape($user->data()->group);
    
    //Number of subscribers
//    $sub = dbConnect()->prepare("SELECT count(custID) AS cust FROM sorder");
//    $sub->execute();
//    $a=$sub->fetch();
//    $subs = $a['cust'];
//    
  
  
    
}else{
    //Redirect::to('index');
    echo  " <script> window.location='index'</script>";
}
 * 
 */

?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Trinity International College</title>
    <meta name="description" content="School, Admission, Trinity, College, International">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon.png">
    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/icons.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- form css link -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/css/form-style.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="dist/mfb.css" rel="stylesheet">
    <script src="assets/js/three.min.js" type="text/javascript"></script>
    <script src="assets/js/panolens.min.js" type="text/javascript"></script>
    <script src="assets/js/pano.js" type="text/javascript"></script>
    <script src="assets/js/three.min.js"></script>
    <script src="assets/js/photo-sphere-viewer.min.js"></script>

    <style>
    *{padding:0;margin:0;}

.float{
        position: fixed;
	width:40px;
	height:140px;
	bottom:300px;
	right:0px;
	background-color:#b30708;
	color:#FFF;
	border-radius:10px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
        z-index: 9999;
}


.my-float{
	margin-top:22px;
        
}

span.test2 {
  writing-mode: vertical-rl; 
}
</style>
   
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-190039312-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-190039312-1');
</script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '428144381749362');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=428144381749362&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>

<body>
<header class="header-area">
    <div class="header-top bg-img" style="background-image:url(assets/img/icon-img/header.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-12 col-sm-8">
                    <div class="header-contact">
                        <a href="school-tour" class="float">
                            <span class="test2">  <i class="fa fa-desktop my-float invt"> </i> 
                                School Tour</span>
                        </a>
                        <!-- Floating Action Button -->
                        <!--<ul id="menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
                        <li class="mfb-component__wrap">
                          <a href="#" class="mfb-component__button--main">
                            <i class="mfb-component__main-icon--resting fa fa-desktop"></i>
                            <i class="mfb-component__main-icon--active fa fa-book"></i>
                            School Tour
                          </a>
                          <ul class="mfb-component__list">
                            <li>
                              <a href="" data-mfb-label="Our Facilities" class="mfb-component__button--child">
                                <i class="mfb-component__child-icon fa fa-book"></i>
                              </a>
                            </li>
                            <li>
                              <a href="" data-mfb-label="Our Schools" class="mfb-component__button--child">
                                <i class="mfb-component__child-icon fa fa-book"></i>
                              </a>
                            </li>
                            <li>
                              <a href="" data-mfb-label="Our Schools" class="mfb-component__button--child">
                                <i class="mfb-component__child-icon fa fa-book"></i>
                              </a>
                            </li>
                            <li>
                              <a href="" data-mfb-label="Our Schools" class="mfb-component__button--child">
                                <i class="mfb-component__child-icon fa fa-book"></i>
                              </a>
                            </li>
                            <li>
                              <a href="" data-mfb-label="Our Schools" class="mfb-component__button--child">
                                <i class="mfb-component__child-icon ion-social-octocat"></i>
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>-->
                        <ul>
                            <li><i class="fa fa-phone"></i>+234 706 8666 097</li>
                            <li><i class="fa fa-phone"></i>+234 706 8666 145</li>
                            <li><a href=""> VLE</a></li>
<!--                            <li><a href="alumni"> Alumni</a></li>-->
                            <li><a href="pta"> PTA</a></li>
                            <li> <a href="group"> Group</a></li>
                            <li><a href="blog"> Blog</a></li>
                            <li><a href="contact"> Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 col-sm-4">
                    <div class="login-register">
                        <ul>
                            <li><a class="facebook" href="https://www.facebook.com/tricolofada/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="youtube" href="https://www.youtube.com/channel/UCZbt9XA2CEye4fx6rmg7WCw"><i class="fa fa-youtube-play" target="_blank"></i></a></li>
                            <li><a class="twitter" href="https://twitter.com/CollegeOfada"><i class="fa fa-twitter" target="_blank"></i></a></li>
                            <li><a class="google-plus" href="https://www.instagram.com/trinityinternationalcollege" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
<!--                        <ul>
                            <li><a href="login-register">Login</a></li>
                            <li><a href="login-register">Register</a></li>
                        </ul>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-bar clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-4">
                    <div class="logo">
                        <a href="index">
                            <img alt="" src="assets/img/logo.png">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-6 col-8">
                    <div class="menu-cart-wrap">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="index"> HOME </a>
                                    </li>
                                     <li><a href=""> ACADEMICS <i class="fa fa-angle-down"></i> </a>
                                        <ul class="submenu">
                                            <li><a href="facilities">FACILITIES</a></li>
                                            <li><a href="http://schwrite-ng.com/tricol/" target="_blank">PORTAL</a></li>
                                            <li><a href="curriculum">CURRICULUM</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-position top-hover"><a href="our-school"> ABOUT <i class="fa fa-angle-down"></i> </a>
                                        <ul class="mega-menu">
                                            <li>
                                                <ul>
                                                    <!--<li class="mega-menu-title"><a href="about-chairman">FROM THE CHAIRMAN (BOT)'S DESK</a></li>-->
                                                    <li class="mega-menu-title"><li><a href="chairman">CHAIRMAN'S DESK</a></li>
                                                    <li class="mega-menu-title"><li><a href="governor">BOARD OF GOVERNORS</a></li>
                                                    <li class="mega-menu-title"><li><a href="establish">COMMITTEES </a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title"><li><a href="our-school">OUR SCHOOL</a></li>
                                                    <li class="mega-menu-title"><li><a href="vision">VISION & MISSION</a></li>
                                                    <li><a href="standard" class="mega-menu-title">OUR STANDARD</a></li>
                                                    
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title"><li><a href="management"> MANAGEMENT STAFF</a></li>
                                                    <li><a href="prefect-profile" class="mega-menu-title">PREFECTS' PROFILE</a></li>
                                                    <li><a href="facilities" class="mega-menu-title">FACILITIES</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    
                                                    <li><a href="our-libary" class="mega-menu-title">LIBARY SERVICE</a></li>
                                                    <li><a href="health-care" class="mega-menu-title">HEALTH CARE</a></li>
                                                    <li><a href="event" class="mega-menu-title">EVENTS</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="#"> ADMISSIONS <i class="fa fa-angle-down"></i> </a>
                                        <ul class="submenu">
                                            <li><a href="contact">ADMISSION INQUIRY</a></li>
                                            <li><a href="admissions/signup" target="_blank">REQUEST FOR ADMISSION </a></li>
                                            <li><a href="entrance">ENTRANCE EXAMINATION</a></li>
                                            <li><a href="admissions/login" target="_blank">ADMISSION PORTAL</a></li>
                                            <li><a href="admissions" target="_blank">STUDENT PORTAL</a></li>
                                        </ul>
<!--                                        <ul class="submenu">
                                            <li><a href="contact">ADMISSION INQUIRY</a></li>
                                            <li><a href="admission-portal">REQUEST FOR ADMISSION </a></li>
                                            <li><a href="entrance">ENTRANCE EXAMINATION</a></li>
                                            <li><a href="portal">ADMISSION PORTAL</a></li>
                                            <li><a href="admissions" target="_blank">STUDENT PORTAL</a></li>
                                        </ul>-->
                                    </li>
                                    <!--<li><a href="course"> INFORMATION</a>
                                        <ul class="submenu">
                                            <li><a href="#!">2020/2021 SCHOOL CALENDER</a></li>
                                            <li><a href="news">NEWSLETTER</a></li>
                                            <li><a href="#!">MEALS & ACCOMMODATION</a></li>
                                            <li><a href="#!">SCHOOL ROUTINE</a></li>
                                            <li><a href="gallery">GALLERY</a></li>
                                            <li><a href="alumni">ALUMNI GALLERY</a></li>
                                        </ul>
                                    </li>-->
                                    <li class="mega-menu-position top-hover"><a href=""> INFORMATION <i class="fa fa-angle-down"></i> </a>
                                        <ul class="mega-menu">
                                            <li>
                                                <ul>
                                                    <!--<li class="mega-menu-title"><a href="about-chairman">FROM THE CHAIRMAN (BOT)'S DESK</a></li>-->
                                                    <li class="mega-menu-title"><li><a href="">2020/2021 SCHOOL CALENDER</a></li>
                                                    <li class="mega-menu-title"><li><a href="news">NEWSLETTER</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title"><li><a href="">MEALS & ACCOMMODATION</a></li>
                                                    <li><a href="" class="mega-menu-title">SCHOOL ROUTINE</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title"><li><a href="gallery">GALLERY</a></li>
                                                    <li class="mega-menu-title"><li><a href="alumni">OUR ALUMNI EVENTS</a></li>
                                                    <li class="mega-menu-title"><li><a href="alumni"> ALUMNI GALLERY</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    
                                                    <li><a href="our-libary" class="mega-menu-title">LIBARY SERVICE</a></li>
                                                    <li><a href="health-care" class="mega-menu-title">HEALTH CARE</a></li>
                                                    <li><a href="event" class="mega-menu-title">EVENTS</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="alumni"> ALUMNI </a>
                                    </li>
                                    <li><a href="erollment" class="animated" style="color:red;"><i class="fa fa-book"></i> ENROL YOUR CHILD</a>  </li>
<!--                                    <li><a href="#"> AFFILIATE <i class="fa fa-angle-down"></i> </a>
                                        <ul class="submenu">
                                            <li><a href="about-chairman">FROM THE CHAIRMAN</a></li>
                                            <li><a href="our-school">OUR SCHOOL</a></li>
                                        </ul>
                                    </li>-->
<!--                                    <li><a href="contact"> CONTACT </a></li>-->
                                </ul>
                            </nav>
                        </div>
                       <!-- <div class="cart-search-wrap">
                            <div class="cart-wrap">
                                <button class="icon-cart">
                                    <i class="fa fa-map"></i>
                                </button>
                                <div class="shopping-cart-content">
                                    <ul>
                                        <li class="single-shopping-cart">
                                            <div class="shopping-cart-img">
                                                <a href="#"><img alt="" src="assets/img/cart/1.png"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="#">Ofada </a></h4>
                                                <h6>Capmus</h6>
                                                <span>Ogun</span>
                                            </div>
                                        </li>
                                        <li class="single-shopping-cart">
                                            <div class="shopping-cart-img">
                                                <a href="#"><img alt="" src="assets/img/cart/2.png"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="#">Abuja </a></h4>
                                                <h6>Campus</h6>
                                                <span>Abuja</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>-->
                        <div class="cart-search-wrap">
                            <div class="header-search">
                                <button class="search-toggle">
                                    <i class="fa fa-search"></i>
                                </button>
                                <div class="search-content">
                                    <form action="#">
                                        <input type="text" placeholder="Search">
                                        <button>
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                                    <li><a href="index"> HOME </a>
                                    </li>
                                    <li><a href="#"> ABOUT <i class="fa fa-angle-down"></i> </a>
                                        <ul class="submenu">
                                            <li><a href="chairman">FROM THE CHAIRMAN BOARD OF GOVERNORS</a></li>
                                            <li><a href="governor">BOARD OF GOVERNORS</a></li>
                                            <li><a href="our-school">OUR SCHOOL</a></li>
                                            <li><a href="management"> MANAGEMENT STAFF</a></li>
                                            <li><a href="#!">GENERAL MANAGEMENT STAFF</a></li>
                                            <li><a href="prefect-profile">PREFECTS' PROFILE</a></li>
                                        </ul>
                                    </li>
                                     <li><a href="#"> ACADEMICS <i class="fa fa-angle-down"></i> </a>
                                        <ul class="submenu">
                                            <li><a href="course">FACILITIES</a></li>
                                            <li><a href="event">PORTAL</a></li>
                                            <li><a href="shop">CURRICULUM</a></li>
                                        </ul>
                                    <li><a href="#"> ADMISSIONS <i class="fa fa-angle-down"></i> </a>
                                        <ul class="submenu">
                                            <li><a href="contact">ADMISSION INQUIRY</a></li>
                                            <li><a href="admission-portal">REQUEST FOR ADMISSION </a></li>
                                            <li><a href="entrance">ENTRANCE EXAMINATION</a></li>
                                            <li><a href="student">ADMISSION PORTAL</a></li>
                                            <li><a href="admissions" target="_blank">STUDENT PORTAL</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"> INFORMATION</a>
                                        <ul class="submenu">
                                            <li><a href="our-libary">LIBARY SERVICE</a></li>
                                            <li><a href="health-care" >HEALTH CARE</a></li>
                                            <li><a href="affliate" >AFFILIATE</a></li>
                                            <li><a href="gallery">GALLERY</a></li>
                                            <li><a href="alumni">OUR ALUMNI EVENTS</a></li>
                                            <li><a href="alumni"> ALUMNI GALLERY</a></li>
                                            <li><a href="">MEALS & ACCOMMODATION</a></li>
                                            <li><a href="">2020/2021 SCHOOL CALENDER</a></li>
                                            <li><a href="news">NEWSLETTER</a></li>
                                        </ul></li>
                                    <li><a href="alumni"> ALUMNI </a> </li>
                                    <li><a href="contact"> CONTACT </a></li>
                                    <li><a href="erollment" class="animated" style="color:red;"><i class="fa fa-book"></i> ENROL YOUR CHILD</a>  </li>
                                    
                                </ul>
                                
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>