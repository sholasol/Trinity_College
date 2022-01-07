<?php 

require_once 'core/init.php';


$user = new User();



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
    <!-- WhatsApp chat widget -->
<script defer src="https://widget.tochat.be/bundle.js?key=5c1f4e0d-4888-489f-a100-468719cb356f"></script>

    <style>
        .wd {
            width:300px !important;
        }
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

.floatx{
        position: fixed;
	width:40px;
	height:130px;
	bottom:450px;
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
.my-float2{
	margin-top:30px;
        
}

span.test2 {
  writing-mode: vertical-rl; 
}


/* .my-float{
	margin-top:22px;
        
}

span.test2 {
  writing-mode: vertical-rl; 
} */

/*Testimonial Slider Start her*/
.testimonial{
    margin: 0 70px 20px 0;
    text-align: center;
    position: relative;
}
.testimonial:before{
    content: "\f10e";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    width: 50px;
    height: 50px;
    line-height: 50px;
    background: #001489;
    font-size: 30px;
    color: #fff;
    position: absolute;
    top: 0;
    right: -52px;
}
.testimonial .description{
    padding: 25px;
    margin-bottom: 30px;
    border: 1px solid #553e4e;
    font-size: 16px;
    color: #736d6d;
    line-height: 30px;
    position: relative;
    text-align: left;
}
.testimonial .description:before{
    content: "";
    border-top: 8px solid #001489;
    border-left: 8px solid transparent;
    border-right: 8px solid transparent;
    position: absolute;
    bottom: -11px;
    left: 50%;
    text-align: left;
    transform: translateX(-50%);
}
.testimonial .description:after{
    content: "";
    width: 19px;
    height: 22px;
    border: 1px solid #553e4e;
    border-top: 1px solid #fff;
    border-left: 1px solid #fff;
    margin-left: -2.5px;
    position: absolute;
    bottom: -17.5px;
    left: 50%;
    text-align: left;
    z-index: -1;
    transform: rotate(45deg) translateX(-50%);
}
.testimonial .pic{
    display: inline-block;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 3px solid #001489;
    margin-bottom: 15px;
}
.testimonial .pic img{
    width: 100%;
    height: auto;
    border-radius: 50%;
}
.testimonial .title{
    display: block;
    font-size: 20px;
    font-weight: 600;
    color: #001489;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin: 0 0 7px 0;
}
.testimonial .post{
    display: block;
    font-size: 15px;
    color: #736d6d;
    text-transform: capitalize;
}
.owl-theme .owl-controls{ margin-top: 0; }
.owl-theme .owl-controls .owl-page span{
    width: 35px;
    height: 15px;
    background: #553e4e;
    border-radius: 0;
    opacity: 0.8;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.45);
    transition: all 0.3s ease 0s;
}
.owl-theme .owl-controls .owl-page.active span{
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background: #001489;
}
@media only screen and (max-width: 479px){
    .testimonial .description{ padding: 10px; }
}
form {
  width: 50%;
  padding-left: 2px !important; }

  .form-control {
  border: 1px solid #ccc;
  display: block;
  /* width: 100%; */
  width: 250px !important;
  height: 40px;
  padding: 0 20px;
  border-radius: 20px;
  font-family: "Muli-Bold";
  background: none; }
</style>
   
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="f4c28eac-1672-4bcb-a188-54bad59779fc";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
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
                        <a href="assets/calendar.pdf" target="_blank" class="floatx">
                            <span class="test2">  <i class="fa fa-calendar my-float2 invt"> </i> 
                                Calendar</span>
                        </a>
                        <ul class="d-none d-lg-flex">
                            <li><i class="fa fa-phone"></i>  +234 706 8666 097</li>
                            <li><i class="fa fa-phone"></i>+234 706 8666 145</li>
                            <li><a href="http://schwrite-ng.com/tricol/" target="_blank"> VLE</a></li>
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
                                    <li><a href=""> ADMISSIONS <i class="fa fa-angle-down"></i> </a>
                                        <ul class="submenu">
                                            <li><a href="contact">ADMISSION INQUIRY</a></li>
                                            <li><a href="admission-portal">REQUEST FOR ADMISSION </a></li>
                                            <li><a href="entrance">ENTRANCE EXAMINATION</a></li>
                                            <li><a href="student">ADMISSION PORTAL</a></li>
                                            <li><a href="admissions" target="_blank">STUDENT PORTAL</a></li>
                                        </ul>
                                    </li>
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
                                                    <li><a href="affliate" class="mega-menu-title">AFFILIATE</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="alumni"> ALUMNI </a>
                                    </li>
                                    <li><a href="admission-portal" class="animated" style="color:red;"><i class="fa fa-book"></i> ENROL YOUR CHILD</a>  </li>
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
                        </div>
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
                        </div>-->
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