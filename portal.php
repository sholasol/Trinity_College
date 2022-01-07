<?php 
include 'header2.php';
?><div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url(assets/img/art.jpg);">
        <div class="container">
            <h2> Admission/Student Portal </h2>
            <p>Our school offers a unique educational experience for all students by providing a curriculum which is unique to the Corona Schools.</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i> Admission portal </span></li>
            </ul>
        </div>
    </div>
</div>
<div class="choose-area bg-img" style="background-image:url(assets/img/vv.jpg);">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="inner">
                <form action="" method="post">
                    <h3>LOGIN</h3>
                        <?php
                        
                        //Checking if token exists
                        if(Input::exists()){
                            if(Token::check(Input::get('token'))){

                                $validate = new Validate();
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
                                        $grp = escape($user->data()->group);
                                        $stp = escape($user->data()->role);
                                        $act = escape($user->data()->status);
                                        $role = escape($user->data()->role);
                                        if($role =='Student'){
                                            //Staff
                                            echo  " <script> window.location='student/home'</script>";
                                        }
                                    }else {
                                        //echo '<p>Sorry, log in failed</p>';
                                        //header("Location:index?err=" . urlencode("sorry, login failed!"));
                                        echo  " <script> alert('Invalid login details');window.location='portal'</script>";
                                    }
                                }else {
                                    foreach ($validation->errors() as $error){
                                        //echo $error, '<br>';

                                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>

                                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                            <strong>Oops!</strong> $error.

                                        </div>";
                                    }
                                }

                            }
                        }
                        ?>﻿

                    <div class="form-wrapper">
                        <label for="email">Email</label>
                        <input type="text" id="email" class="form-control" name="email">
                    </div>
                    <div class="form-wrapper">
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control" name="password">
                    </div> <br>
                    <div class="form-wrapper">
                         <div class="checkbox">
                            <label for="remember-me">
                                <input id="remember_me" name="remember" type="checkbox">
                                Remember me
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <label style="display:inline;float: left;"> <a href="#" style="color:blue"> Forgot Password?</a></label>                       
                    </div>
<?php 

// // Store the string into variable 
// $password = 'Password'; 

// // Use password_hash() function to 
// // create a password hash 
// $hash_default_salt = password_hash($password, 
//                             PASSWORD_DEFAULT); 

// $hash_variable_salt = password_hash($password, 
//         PASSWORD_DEFAULT, array('cost' => 9)); 

// // Use password_verify() function to 
// // verify the password matches 
// echo password_verify('Password', 
//             $hash_default_salt ) . "<br>"; 

// echo password_verify('Password', 
//             $hash_variable_salt ) . "<br>"; 

// // echo password_verify('Password123', 
// //             $hash_default_salt ); 
// echo password_hash('password', PASSWORD_DEFAULT). '<br>';
// $admin_salt = password_hash('admin',PASSWORD_DEFAULT, array('cost' => 9)); 
// // echo password_verify('admin', $admin_salt);
//                 function Hash_pass($data) {
//                     $data = password_hash($data, PASSWORD_DEFAULT, array('cost' => 9));
//                     $data = md5($data);
//                     // $data = htmlspecialchars($data);
//                     return $data;
//                   }
?> 
                    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                    <button class="button animated default-btn" style="padding-top:12px" type="submit" name="submit">LOGIN</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="video-area bg-img pt-270 pb-270" style="background-image:url(assets/img/sch.jpg);">
    <div class="video-btn-2">
        <a class="video-popup" href="https://www.youtube.com/watch?v=3EVvk6Qtxt8">
            <img class="animated" src="assets/img/icon-img/viddeo-btn.png" alt="">
        </a>
    </div>
</div>
<div class="achievement-area pt-130 pb-115">
    <div class="container align-items-center">
        <div class="section-title mb-75">
            <h2>Our <span>Achievement</span></h2>
            <span> There is no magic to achievment. It's really hard work, choices and persistence.</span>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-one">
                    <div class="count-img">
                        <img src="assets/img/icon-img/service-11.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">25</h2>
                        <span>YEARS OF EXCELLENCE</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-two">
                    <div class="count-img">
                        <img src="assets/img/icon-img/achieve-2.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">2070</h2>
                        <span>GRADUATES</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-three">
                    <div class="count-img">
                        <img src="assets/img/icon-img/achieve-3.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">170</h2>
                        <span>AWARD WINNING</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-four">
                    <div class="count-img">
                        <img src="assets/img/icon-img/achieve-4.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">200</h2>
                        <span>STAFFS</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-slider-wrap mt-45">
            <div class="testimonial-text-slider">
                <div class="testi-content-wrap">
                    <div class="testi-big-img">
                        <img alt="" src="assets/img/testimonial/award-1.jpg">
                    </div>
                   <div class="row no-gutters">
                       <div class="ml-auto col-lg-6 col-md-12">
                           <div class="testi-content bg-img default-overlay" style="background-image:url(assets/img/bgimg.jpg);">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                                
                               <p>Sometimes you just need something really smart to say to inspire and motivate oneself and those around you.  Trinity gave the opportunity to be motivated, inspired and learn.</p>
                                <div class="testi-info">
                                   <h5>AYESHA HOQUE</h5>
                                   <span>Students Of AMMT Department</span>
                                   <h5> Goodwill messages from Alumni</h5>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                           </div>
                       </div>
                   </div>
                </div>
                <div class="testi-content-wrap">
                   <div class="testi-big-img">
                        <img alt="" src="assets/img/testimonial/award-3.jpg">
                    </div>
                   <div class="row no-gutters">
                        <div class="ml-auto col-lg-6 col-md-12">
                           <div class="testi-content bg-img default-overlay" style="background-image:url(assets/img/bg/bg-education.jpg);">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p>If You are planning for a year, sow rice; if you are planning for a decade, plant trees; if you are planning for a lifetime, educate people</p>
                                <div class="testi-info">
                                   <h5>Tayeb Rayed</h5>
                                   <span>Students Of AMMT Department</span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                           </div>
                       </div>
                   </div>
                </div>
                <div class="testi-content-wrap">
                    <div class="testi-big-img">
                        <img alt="" src="assets/img/testimonial/award-5.jpg">
                    </div>
                   <div class="row no-gutters">
                        <div class="ml-auto col-lg-6 col-md-12">
                           <div class="testi-content bg-img default-overlay" style="background-image:url(assets/img/bg/bg-education.jpg);">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p>Live as if you were to die tomorrow. Learn as if you were to live forever” – Mahatma Gandhi</p>
                                <div class="testi-info">
                                   <h5>Robiul siddikee</h5>
                                   <span>Students Of AMMT Department</span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                           </div>
                        </div>
                   </div>
                </div>
                <div class="testi-content-wrap">
                   <div class="testi-big-img">
                        <img alt="" src="assets/img/testimonial/award-3.jpg">
                    </div>
                    <div class="row no-gutters">
                       <div class="ml-auto col-lg-6 col-md-12">
                           <div class="testi-content bg-img default-overlay" style="background-image:url(assets/img/bg/bg-education.jpg);">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p>Education is the most powerful weapon which you can use to change the world</p>
                                <div class="testi-info">
                                   <h5>Modhu Dada</h5>
                                   <span>Students Of AMMT Department</span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                           </div>
                       </div>
                   </div>
                </div>
            </div>
            <div class="testimonial-image-slider">
                <div class="sin-testi-image">
                    <img src="assets/img/testimonial/award-1.jpg" alt="" style="height:100px">
                </div>
                <div class="sin-testi-image">
                    <img src="assets/img/testimonial/award-2.jpg" alt="" style="height:100px">
                </div>
                <div class="sin-testi-image">
                    <img src="assets/img/testimonial/award-3.jpg" alt="" style="height:100px">
                </div>
                <div class="sin-testi-image">
                    <img src="assets/img/testimonial/award-5.jpg" alt="" style="height:100px">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="brand-logo-area pb-130">
    <div class="container">
        <div class="brand-logo-active owl-carousel">
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/1.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/2.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/3.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/4.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/1.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/2.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/3.png" alt=""></a>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php';?>

</body>

</html>
