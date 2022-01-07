<?php 

require_once 'core/init.php';


$user = new User();

if($user->isLoogedIn()){
    $name = escape($user->data()->fname)." ".escape($user->data()->lname);
    $uid = escape($user->data()->id);
    $email = escape($user->data()->email);
    $grp = escape($user->data()->group);
    $phn = escape($user->data()->phone);
    $fn = escape($user->data()->fname);
    $ln = escape($user->data()->lname);
    $std_code = escape($user->data()->studentcode);
    $acode = escape($user->data()->studentcode);
     
}else{
    //Redirect::to('index');
    echo  " <script> window.location='index'</script>";
}

//// Status
//$stad = DB::getInstance()->query("SELECT *  FROM student WHERE studentcode='$std_code' ");
//if($stad ->error()){
//    //echo 'No record in the database';
//}else{
//    $stas =$stad  -> first() -> status;
//}

$stad = dbConnect()->prepare("SELECT *  FROM student WHERE studentcode='$std_code'");
$stad->execute();
$rb = $stad->fetch();
$stas = $rb['status'];
$ppts =$rb['passport'] ;


// Total Affiliate
$stat = DB::getInstance()->query("SELECT count(id) AS aff FROM users WHERE role='Affiliate' ");
if($stat ->error()){
    echo 'No record in the database';
}else{
    $aff = $stat -> first() -> aff;
}



// Active Affiliates
$stat1 = DB::getInstance()->query("SELECT count(id) AS acf FROM users WHERE role='Affiliate' AND status='Active' ");
if($stat1 ->error()){
    echo 'No record in the database';
}else{
    $acf = $stat1 -> first() -> acf;
}


//Total Students    
$Tstd = DB::getInstance()->query("SELECT count(id) AS tstd FROM student ");
if($Tstd ->error()){
    echo 'No record in the database';
}else{
    $stdn = $Tstd -> first() -> tstd;
    if( $stdn == NULL){$stdn =0;}
}



//Active Students
$std = DB::getInstance()->query("SELECT count(id) as rstd FROM users WHERE role='Student'");
if($std ->error()){
    echo 'No record in the database';
}else{
    $totA = $std -> first() -> rstd;
    if($totA == NULL){$tot=0;}
}

//Total Users    
$Tusr = DB::getInstance()->query("SELECT count(id) AS usr FROM users ");
if($Tusr ->error()){
    echo 'No record in the database';
}else{
    $usr = $Tusr -> first() -> usr;
    if($usr== NULL){$usr=0;}
}

//Active Users    
$ATusr = DB::getInstance()->query("SELECT count(id) AS usr FROM users  WHERE status='Active'");
if($ATusr ->error()){
    echo 'No record in the database';
}else{
    $Ausr = $ATusr -> first() -> usr;
    if($Ausr== NULL){$Ausr=0;}
}

//Active Admin
$admn = DB::getInstance()->query("SELECT count(id) as adm FROM users WHERE role='Admin'");
if($admn ->error()){
    echo 'No record in the database';
}else{
    $adm = $admn -> first() -> adm;
    if($adm== NULL){$adm=0;}
}


$perc = $acf/$aff * 100;
$Sperc = $totA/$stdn * 100;
//$TUpers = $us->usr/1 * 100;
$Tauser = $Ausr/$usr * 100;
$Tradm = $adm/$usr * 100;
?>
<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>:: Trinity International College :: Admin Dashboard</title>
<link rel="shortcut icon" type="image/x-icon" href="../assets/img/icon.png"> <!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
<link rel="stylesheet" href="assets/plugins/charts-c3/plugin.css"/>

<link rel="stylesheet" href="assets/plugins/jquery-steps/jquery.steps.css">

<!-- Bootstrap Select Css -->
<link href="assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

<link rel="stylesheet" href="assets/plugins/morrisjs/morris.min.css" />
<link rel="stylesheet" href="assets/plugins/charts-c3/plugin.css"/>

<!-- Bootstrap Material Datetime Picker Css -->
<link href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
<!-- JQuery DataTable Css -->
<link rel="stylesheet" href="assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">

<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/style.min.css">
<style>
    .box{
        color: #111;
        padding: 20px;
        display: none;
        margin-top: 20px;
    }
    .paystack{ background: #ffffff; }
    .bank{ background: #ffffff; }
</style>

</head>

<body class="theme-blush">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/logo.png" width="48" height="48" alt="Tricol"></div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Main Search -->
<div id="search">
    <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
    <form>
      <input type="search" value="" placeholder="Search..." />
      <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>

<!-- Right Icon menu Sidebar -->
<div class="navbar-right">
    <ul class="navbar-nav">
        <li><a href="#search" class="main_search" title="Search..."><i class="zmdi zmdi-search"></i></a></li>
        <li class="dropdown">
            <a href="home" class="dropdown-toggle" title="App" ><i class="zmdi zmdi-apps"></i></a>
        </li>
        <li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" title="Notifications" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>
                <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
            </a>
            <ul class="dropdown-menu slideUp2">
                <li class="header">Notifications</li>
                <li class="body">
                    <ul class="menu list-unstyled">
                       <!-- <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle bg-blue"><i class="zmdi zmdi-account"></i></div>
                                <div class="menu-info">
                                    <h4>8 New Members joined</h4>
                                    <p><i class="zmdi zmdi-time"></i> 14 mins ago </p>
                                </div>
                            </a>
                        </li>-->
                    </ul>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-flag"></i>
            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
            </a>
            <ul class="dropdown-menu slideUp2">
                <li class="header">Tasks List </li>
                <li class="body">
                    <ul class="menu tasks list-unstyled">
                        <!--<li>
                            <div class="progress-container progress-primary">
                                <span class="progress-badge">eCommerce Website</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                        <span class="progress-value">86%</span>
                                    </div>
                                </div>                        
                                <ul class="list-unstyled team-info">
                                    <li class="m-r-15"><small>Team</small></li>
                                    <li>
                                        <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                                    </li>
                                    <li>
                                        <img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                                    </li>
                                    <li>
                                        <img src="assets/images/xs/avatar4.jpg" alt="Avatar">
                                    </li>                            
                                </ul>
                            </div>
                        </li>-->
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="logout" class="mega-menu" title="Sign Out"><i class="zmdi zmdi-power"></i></a></li>
    </ul>
</div>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="home"><img src="assets/images/logo.png" width="25" alt="Trinity College"><span class="m-l-10">Application</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile"><img src="../upload/<?php echo $ppts; ?>"></a>
                    <div class="detail">
                        <h4><?php echo $fn; ?></h4>
                        <small><?php if($grp ==2){echo 'Super Admin';}else{echo 'Applicant';} ?></small>                        
                    </div>
                </div>
            </li>
            <?php
            
            
            if($stas =='Unpaid'){
               echo "<li class='active open'><a href='home'><i class='zmdi zmdi-book'></i><span>Application</span></a></li>"; 
               echo "<li'><a href='evidence'><i class='zmdi zmdi-book'></i><span>Payment Evidence</span></a></li>"; 
               echo "<li><a href='student'><i class='zmdi zmdi-apps'></i><span>Enrolment Status </span></a></li>"; 
               echo "<li><a href='newstudent'><i class='zmdi zmdi-apps'></i><span>Register New Student </span></a></li>";
               echo "<li><a href='profile'><i class='zmdi zmdi-apps'></i><span>My Profile</span></a></li>";
            }
           // if($no >1)
            else{
                echo "<li class='active open'><a href='complete'><i class='zmdi zmdi-book'></i><span>Application Status</span></a></li>";
                echo "<li><a href='timetable'><i class='zmdi zmdi-calendar'></i><span>Exam Timetable</span></a></li>"; 
                echo "<li><a href='newstudent'><i class='zmdi zmdi-apps'></i><span>Register New Student </span></a></li>";
                 
                echo "<li><a href='profile'><i class='zmdi zmdi-apps'></i><span>My Profile</span></a></li>"; 
            }
            ?>
            <!--
            <li><a href="student"><i class="zmdi zmdi-apps"></i><span>Enrolment</span></a></li>
            <li><a href="timetable"><i class="zmdi zmdi-calendar"></i><span>Timetable</span></a></li>
           <li><a href="affiliate"><i class="zmdi zmdi-account-box"></i><span>Affiliate</span></a></li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-flower"></i><span>Department</span></a>
                <ul class="ml-menu">
                    <li><a href="icons.html">Department</a></li>
                    <li><a href="icons-themify.html">Registration</a></li>
                    <li><a href="icons-weather.html">Update</a></li>
                </ul>
            </li>
            <li><a href="profile"><i class="zmdi zmdi-account"></i><span>My Profile</span></a></li>-->
            <li><a href="logout"><i class="zmdi zmdi-power"></i><span>Sign Out</span></a></li>
        </ul>
    </div>
</aside>

<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs sm">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat"><i class="zmdi zmdi-comments"></i></a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="setting">
            <div class="slim_scroll">
                <div class="card">
                    <h6>Theme Option</h6>
                    <div class="light_dark">
                        <div class="radio">
                            <input type="radio" name="radio1" id="lighttheme" value="light" checked="">
                            <label for="lighttheme">Light Mode</label>
                        </div>
                        <div class="radio mb-0">
                            <input type="radio" name="radio1" id="darktheme" value="dark">
                            <label for="darktheme">Dark Mode</label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h6>Color Skins</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple"><div class="purple"></div></li>
                        <li data-theme="blue"><div class="blue"></div></li>
                        <li data-theme="cyan"><div class="cyan"></div></li>
                        <li data-theme="green"><div class="green"></div></li>
                        <li data-theme="orange"><div class="orange"></div></li>
                        <li data-theme="blush" class="active"><div class="blush"></div></li>
                    </ul>                                        
                </div>
                <div class="card">
                    <h6>General Settings</h6>
                    <ul class="setting-list list-unstyled">
                        <li>
                            <div class="checkbox rtl_support">
                                <input id="checkbox1" type="checkbox" value="rtl_view">
                                <label for="checkbox1">RTL Version</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox ms_bar">
                                <input id="checkbox2" type="checkbox" value="mini_active">
                                <label for="checkbox2">Mini Sidebar</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox3" type="checkbox" checked="">
                                <label for="checkbox3">Notifications</label>
                            </div>                        
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox4" type="checkbox">
                                <label for="checkbox4">Auto Updates</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox5" type="checkbox" checked="">
                                <label for="checkbox5">Offline</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox6" type="checkbox" checked="">
                                <label for="checkbox6">Location Permission</label>
                            </div>
                        </li>
                    </ul>
                </div>                
            </div>                
        </div>       
        <div class="tab-pane right_chat" id="chat">
            <div class="slim_scroll">
                <div class="card">
                    <ul class="list-unstyled">
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Sophia <small class="float-right">11:00AM</small></span>
                                        <span class="message">There are many variations of passages of Lorem Ipsum available</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Grayson <small class="float-right">11:30AM</small></span>
                                        <span class="message">All the Lorem Ipsum generators on the</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Isabella <small class="float-right">11:31AM</small></span>
                                        <span class="message">Contrary to popular belief, Lorem Ipsum</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="me">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">John <small class="float-right">05:00PM</small></span>
                                        <span class="message">It is a long established fact that a reader</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Alexander <small class="float-right">06:08PM</small></span>
                                        <span class="message">Richard McClintock, a Latin professor</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>