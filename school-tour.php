<!DOCTYPE html>
<html>

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
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="dist/mfb.css" rel="stylesheet">
    <script src="assets/js/three.min.js" type="text/javascript"></script>
    <script src="assets/js/panolens.min.js" type="text/javascript"></script>
    <script src="assets/js/pano.js" type="text/javascript"></script>
    <script src="assets/js/three.min.js"></script>
    <script src="assets/js/photo-sphere-viewer.min.js"></script>
    <style>
        html,
        body {
            margin: 0;
            width: 100%;
            height: 100%;
            /*overflow: hidden;*/
        }
        
        #container {
            width: 100%;
            height: 100%;
        }
    *{padding:0;margin:0;}

    span.test2 {
      writing-mode: vertical-rl; 
    }
    </style>
</head>

<body>
<header class="header-area">
    <div class="header-top bg-img" style="background-image:url(assets/img/icon-img/header.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-12 col-sm-8">
                    <div class="header-contact">
                        <ul>
                            <li><i class="fa fa-phone"></i>  +234 706 866 6145</li>
                            <li><i class="fa fa-envelope-o"></i><a href="">info@trinityng.com</a></li>
                            <li><a href=""> VLE</a></li>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-bar clearfix" style="height:5em">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-4">
                    <div class="logo">
                        <a href="index">
                            <img alt="" src="assets/img/logo.png" width="50" height="50">
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
                                    <li><a href="shop"> OTHER CENTRES<i class="fa fa-angle-down"></i> </a>
                                        <ul class="submenu">
                                            <li><a href="">PRE-SCHOOL</a></li>
                                            <li><a href="" target="_blank">PRIMARY</a></li>
                                            <li><a href="">SECONDARY</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="erollment" class="animated" style="color: red;"><i class="fa fa-book"></i> ENROLL YOUR CHILD</a></li>

                                </ul>
                            </nav>
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
                                            <li><a href="?tour=008983">PRE-SCHOOL</a></li>
                                            <li><a href="?tour=008983">PRIMARY</a></li>
                                            <li><a href="?tour=008983">SECONDARY</a></li>
                                            <!-- <li><a href="#!">GENERAL MANAGEMENT STAFF</a></li>
                                            <li><a href="#!">PREFECTS' PROFILE</a></li> -->
                                        </ul>
                                    </li>
                                </ul>
                                
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
    <div id="container"></div>
<!-- rgba(58, 67, 77, 0.7) -->
    <script>
        //var imd = 'img/pano.jpeg';
        var div = document.getElementById('container');
        var PSV = new PhotoSphereViewer({
            panorama: 'assets/img/school-tour/pano6.jpg',
            container: div,
            time_anim: 3000,
            navbar: true,
            navbar_style: {
                backgroundColor: 'rgba(192,192,192,1)'
            },
        });
    </script>
</body>

</html>