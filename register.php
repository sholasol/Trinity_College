<?php 
include 'header.php';
?><div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url(assets/img/art.jpg);">
        <div class="container">
            <h2> Registration/Affiliates Portal </h2>
            <p>Our affiliates program offer individual 10% of the total student fee at the completion of the registration</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index">Home</a> <span><i class="fa fa-angle-double-right"></i> Affiliate portal </span></li>
            </ul>
        </div>
    </div>
</div>
<div class="choose-area bg-img pt-30" style="background-image:url(assets/img/vv.jpg);">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="inner">
                <div class="form-wrapper">
                <?php 
                //Referal Code
                function random_num($size) {
                    $length = $size;
                    $key = '';
                    $keys = range(0, 5);

                        for ($i = 0; $i < $length; $i++) {
                                $key .= $keys[array_rand($keys)];
                        }
                        return  $key;
                }
                $code= random_num(5);
                $refer = "www.trinityng.com/admission-portal?id=$code";
                
                if(isset($_POST['submit'])){
                   
                    if(empty($_POST['fname'])){
                        $e='Please fill in your first name';
                        echo "<div class='form control alert alert-danger alert-dismissible fade show' role='alert'>
                            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <strong>Oops!</strong> $e.
                        </div>";
                    }if(empty($_POST['lname'])){
                        $e='Please fill in your last name';
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <strong>Oops!</strong> $e.
                        </div>";
                    }if(empty($_POST['phone'])){
                        $e='Please fill in your phone number';
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <strong>Oops!</strong> $e.
                        </div>";
                    }if(empty($_POST['email'])){
                        $e='Please fill in your email address';
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <strong>Oops!</strong> $e.
                        </div>";
                    }if(empty($_POST['password'])){
                        $e='Please fill in your password';
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <strong>Oops!</strong> $e.
                        </div>";
                    }if(empty($_POST['accept-term'])){
                        $e='You must accept term and conditions';
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <strong>Oops!</strong> $e.
                        </div>";
                    }else{
                        $fname = check_input($_POST['fname']);
                        $lname = check_input($_POST['lname']);
                        $email = check_input($_POST['email']);
                        $phone = check_input($_POST['phone']);
                        $password = check_input($_POST['password']);
                        $date = date('Y-m-d');
                        $grp =3;
                        
                        
                        $salt = "cxÐŽàuH@ÓƒåUËPžÝþÊâ0sþna”È(ø ";
                        $pw =  Hash::make($password, $salt);

                        $query = dbConnect()->prepare("SELECT * FROM users WHERE email=? AND phone=?");
                        $query->execute([$email,$phone]);

                        if($query->rowcount() >0){
                            $e='user details already exist.';
                            echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
                                    <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                    <strong>Oops! </strong> $e.
                                </div>";
                        }else{
                           $ins = dbConnect()->prepare("INSERT INTO users(fname,lname,email,password,salt, phone,role,status, code, refferal) VALUES (?,?,?,?,?,?,?,?,?,?)");
                            $ins->execute([$fname, $lname, $email, $pw, $salt, $phone,'Affiliate','offline',$code ,$refer]);
                            if($ins){
                                
                               //Sending Email
                                 $frm = 'info@trinityng.com';
                                 $name = $fname.' '.$lname;
                                 $recipient = $email;
                                 $sub = "Trinity International College Affiliate";
                                 $link ='https://trinityng.com/affliate';
                                 $msg ='Thank you for registering with Trinity International College as an affiliate marketer, Ofada, Ogun State. Kindly login at https://trinityng.com/affliate with your email and password';
                                 
                                   //Email message
                                  $message = '<html><body>';
                                  $message .= '<img src="http://trinityng.com/assets/img/logo.png" alt="Tricol" />';
                                  $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
                                  $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
                                  $message .= "<tr><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
                                  $message .= "<tr><td><strong>Registration:</strong> </td><td>" . $sub . "</td></tr>";
                                  $message .= "<tr><td><strong>Message:</strong> </td><td>" .$msg. "</td></tr>";
                                  $message .= "<tr><td><strong>Affiliate Portal:</strong> </td><td>" .$link. "</td></tr>";
                                  $message .= "<tr><td><strong>Referral Link:</strong> </td><td>" .$refer. "</td></tr>";

                                  $message .= "</table>";
                                  $message .= "</body></html>";
                                
                                
                                $to = $email;

                                $subject = 'Trinity International College Affiliate';

                                $headers = "From: " . $frm. "\r\n";
                                $headers .= "Reply-To: ". $frm . "\r\n";
                                $headers .= "MIME-Version: 1.0\r\n";
                                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                
                                if (mail($to, $subject, $message, $headers)) {
                                    
                                    $e='Please check your email for login details. You can also';
                                 echo "<div class='alert animated default-btn alert-dismissible fade show' role='alert' style='color: red;'>
                                    <span style='color: yellow;'><strong>Congratulations!</strong> $e <a href='affiliates'>Login Here</a><s/pan>
                                </div>";
                                    
                                 
                                }
                                
                            }else{
                                $e='registration failed contact administrative.';
                                echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
                                    <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                    <strong>Oops! </strong> $e.
                                </div>";
                            }
                        }
                       
                    }
                }
                
                function check_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                  }
                ?>
                </div>
                <form method="POST" action="">
                    <div class="form-wrapper">
                            <label for="">First Name</label>
                            <input type="text" name="fname" class="form-control">
                        </div>
                        <div class="form-wrapper">
                            <label for="">Last Name</label>
                            <input type="text" name="lname" class="form-control">
                        </div>
                    <div class="form-wrapper">
                            <label for="">Phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                    <div class="form-wrapper">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-wrapper">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="accept-term"> I accept the Terms of Use & Privacy Policy.
                            <span class="checkmark"></span>
                        </label>
                    </div> <br>
                    <div class="form-wrapper">
                        <label id="review-term">
                            <a class="text-dark" data-toggle="modal" data-target="#exampleModalCenter"> Review term of use and policy</a>
                        </label>
                    </div>
                   <button type="submit" name="submit" class="button animated default-btn" style="padding-top:12px">Register Now</button>
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


<!--  TERMS AND CONDITIONS  --> 
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Trinity International School Terms and Conditions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <p class="text-dark">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

            </p>
            <p class="text-dark"> 
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php';?>
<script>
$(document).ready(function(){
     $('#remember-me').on('change',function(){
         alert('Am clicked');
     })
 })
</script>
</body>

</html>