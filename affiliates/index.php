<?php 
require_once 'core/init.php';
?>
<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Tricol :: Sign In</title>
<!-- Favicon-->
<link rel="icon" href="assets/images/icon.png" type="image/x-icon">
<!-- Custom Css -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.min.css">    
</head>

<body class="theme-blush">

<div class="authentication">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <form class="card auth_form" method="POST">
                    <div class="header">
                        <a href="../affliate"><img class="logo" src="assets/images/logo.png" alt=""></a>
                        <h5>Log in</h5>
                    </div>
                    <div class="body">
                        <?php
                        
                        //Checking if token exists
                        if(Input::exists()){
                            if(Token::check(Input::get('token'))){

                                $validate =new Validate();
                                $validation = $validate->check($_POST, array(
                                    'email' => array('required' => true),
                                    'password' => array('required' => true)
                                ));
 
                                //Checking if validation passes
                                if($validation->passed()){
                                    //Log user in
                                    $user = new User();

                                    $remember = (Input::get('remember') === 'on') ? true : false;
                                    $login = $user->login(Input::get('email'), Input::get('password'), $remember);

                                    if($login){
                                        //Redirecting to member page
                                        //Redirect::to('home');
                                        echo $grp = escape($user->data()->group);
                                        echo $status = escape($user->data()->status);
                                        echo $role = escape($user->data()->role);
                                        if($role =='User'){
                                            //Staff
                                            echo  " <script> window.location='home'</script>";
                                        }elseif( $role =='Admin'){
                                            //Super Admin
                                            echo  " <script> window.location='home'</script>";
                                        }elseif($role =='Affiliate' && $status == 'Active'){
                                            //Super Admin
                                            echo  " <script> window.location='user/affiliate-home'</script>";
                                        }elseif($role =='Student'){
                                            //Staff
                                            echo  " <script> window.location='home'</script>";
                                        }
                                        else{
                                        // echo  " <script> window.location='index?err=sorry, login failed!'</script>";s
                                        echo  " <script> alert('Oops! Your account has not been activated. contact the administrator');window.location='index'</script>";
                                        }
                                }else {
                                    // foreach ($validation->errors() as $error){
                                        echo  " <script> alert('Sorry, login failed');window.location='index'</script>";
                                        
                                        // $error ='Sorry, login failed' .'<br>';

                                        // echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>

                                        //     <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                        //         <span aria-hidden='true'>&times;</span>
                                        //     </button>
                                        //     <strong>Oops!</strong> $error.

                                        // </div>";
                                    }
                                }

                            }
                        }
                        ?>﻿
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Username">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">                                
                                <span class="input-group-text"><a href="forgot-password.html" class="forgot" title="Forgot Password"><i class="zmdi zmdi-lock"></i></a></span>
                            </div>                            
                        </div>
                        <div class="checkbox">
                            <input id="remember_me" name="remember" type="checkbox">
                            <label for="remember_me">Remember Me</label>
                        </div>
                        <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                        <button type="submit" name="submit" class="btn btn-primary btn-block waves-effect waves-light">SIGN IN</button>                       
                        <div class="signin_with mt-3">
                            <p class="mb-0">Follow us</p>
                            <a class="btn btn-primary btn-icon btn-icon-mini btn-round facebook text-white"><i class="zmdi zmdi-facebook"></i></a>
                            <a class="btn btn-primary btn-icon btn-icon-mini btn-round twitter text-white"><i class="zmdi zmdi-twitter"></i></a>
                            <a class="btn btn-primary btn-icon btn-icon-mini btn-round google text-white"><i class="zmdi zmdi-google-plus"></i></a>
                        </div>
                    </div>
                </form>
                <div class="copyright text-center">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>,
                    <span>Designed by <a href="https://hybridsoft.com.ng/" target="_blank">Hybridsoft ltd</a></span>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <img src="assets/images/signin.svg" alt="Sign In"/>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
</body>
</html>