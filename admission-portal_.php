<?php 
include 'header.php';
 
?><div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url(assets/img/art.jpg);">
        <div class="container">
            <h2> Admission/Student Portal </h2>
            <p>Our school offers a unique educational experience for all students by providing a curriculum which is unique to the Trinity International Schools.</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index">Home</a> <span><i class="fa fa-angle-double-right"></i> Admission portal </span></li>
            </ul>
        </div>
    </div>
</div>
<div class="choose-area bg-img pt-30" style="background-image:url(assets/img/vv.jpg);">
    <div class="container">
        <div class="wrapper">
            <div class="inner">
                <div class="form-wrapper">
                <?php 
                if(isset($_GET['id'])){
                    $reff_by =$_GET['id'];
                }else{
                    $reff_by="";
                }
              
                
                if(isset($_POST['submit'])){
                    $phone = check_input($_POST['phone']);
                    
                    // Allow +, - and . in phone number
                     $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
                     // Remove "-" from number
                     $phone_to_check = str_replace("-", "", $filtered_phone_number);
                   
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
                    }
                    if (strlen($phone_to_check) < 9 || strlen($phone_to_check) > 14) {
                            $e='Phone number is invalid';
                            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                <strong>Oops!</strong> $e.
                            </div>";
                         }
                     
                    else{
                            $fname = check_input($_POST['fname']);
                            $lname = check_input($_POST['lname']);
                            $email = check_input($_POST['email']);
                            $phone = check_input($_POST['phone']);
                            $date = date('Y-m-d'); 
                            $salt = "cxÐŽàuH@ÓƒåUËPžÝþÊâ0sþna”È(ø ";
                            $pw =  Hash::make($phone, $salt);
                            
                            //Ckecking if the user email already exists. Process the new registration and login with old credential
                            $que = dbConnect()->prepare("SELECT * FROM users WHERE email=?");
                            $que->execute([ $email]);

                            if($que->rowcount() >0){
                                
                            //Checking if the student had already been registered 
                                
                            $query = dbConnect()->prepare("SELECT * FROM student WHERE (fname=? AND lname=? AND email=?)");
                            $query->execute([$fname, $lname, $email]);

                                if($query->rowcount() >0){
                                    $e='Student registration details for '.$fname.', '.$lname.' already exists';
                                    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                            <strong>Oops! </strong> $e.
                                        </div>";
                                }
                                else{
                                    //if student is not in existence but the user email exists
                                    //Student Code
                                    $length = 7;    
                                    $std = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);

                                    $ins = dbConnect()->prepare("INSERT INTO student(fname,lname,email,phone,status,reff_by, created, studentcode) VALUES (?,?,?,?,?,?,?,?)");
                                    $ins->execute([$fname,$lname,$email,$phone, 'Unpaid',$reff_by, $date, $std]);
                                    if($ins){
                                        //Sending Email
                                     $frm = 'info@trinityng.com';
                                     $name = $fname.' '.$lname;
                                     $recipient = $email;
                                     $sub = "Trinity International College Enrolment";
                                     $link ='https://www.trinityng.com/student/';
                                     $msg ='Thank you for registering with Trinity International College, Ofada, Ogun State.To complete your registration on the admission portal, kindly login at  www.trinityng.com/student with your email and phone number' .'('.$email.', '. $phone.')';

                                        //Email message
                                      $message = '<html><body>';
                                      $message .= '<img src="http://trinityng.com/assets/img/logo.png" alt="Tricol" />';
                                      $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
                                      $message .= "<tr><td><strong>Registration:</strong> </td><td>" . $sub . "</td></tr>";
                                      $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
                                      $message .= "<tr><td><strong>Username:</strong> </td><td>" . $email . "</td></tr>";
                                      $message .= "<tr><td><strong>Password:</strong> </td><td>" . $phone . "</td></tr>";
                                      $message .= "<tr><td><strong>Regsitration Portal:</strong> </td><td><a href='$link'>" .$link. "</a></td></tr>";

                                      $message .= "<tr><td><strong>Message:</strong> </td><td>" .$msg. "</td></tr>";


                                      $message .= "</table>";
                                      $message .= "</body></html>";


                                    $to = $email;

                                    $subject = 'Trinity International College Enrolment';

                                    $headers = "From: " . $frm. "\r\n";
                                    $headers .= "Reply-To: ". $frm . "\r\n";
                                    $headers .= "MIME-Version: 1.0\r\n";
                                    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

                                        if (mail($to, $subject, $message, $headers)) {
                                          $e='Please check your email for login details.';
                                         echo "<div class='alert animated default-btn alert-dismissible fade show' role='alert' style='color: red;'>
                                            <span style='color: yellow;'><strong>Congratulations!</strong> $e. <a href='student'>Login Here</a><s/pan>
                                        </div>";
                                        } else {
                                          $e="Oops! Something went wrong and we couldn't send your message.";
                                            echo  " <script>alert('$e'); </script>";
                                        }
                                    }else{
                                        $e="Oops! Could not process student registration. Kindly try again";
                                        echo  " <script>alert('$e'); </script>";
                                    }


                                }
                                
                            }else{
                               //User email has not been registered, student has not been registered 
                            $query = dbConnect()->prepare("SELECT * FROM student WHERE (fname=? AND lname=? AND email=?)");
                            $query->execute([$fname, $lname, $email]);

                            if($query->rowcount() >0){
                                $e='Student registration details for '.$fname.', '.$lname.' already exists';
                                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                        <strong>Oops! </strong> $e.
                                    </div>";
                            }
                            else{
                                
                                //INSERT INTO input SET code=:cd, input=:inp, qty=:qt, price=:prc, cost=:cst
                        
                        
                                //Student Code
                                $length = 7;    
                                $std = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);

                                $ins = dbConnect()->prepare("INSERT INTO student(fname,lname,email,phone,status,reff_by, created, studentcode) VALUES (?,?,?,?,?,?,?,?)");
                                $ins->execute([$fname,$lname,$email,$phone, 'Unpaid',$reff_by, $date, $std]);
                                if($ins){
                                //Registering student as user.
                                $ins = dbConnect()->prepare("INSERT INTO users(fname,lname, studentcode, email,password,salt, phone,role,status, ref_by) VALUES (?,?,?,?,?,?,?,?,?,?)");
                                $ins->execute([$fname, $lname,$std, $email, $pw, $salt, $phone,'Student','offline',$reff_by]);
                            
                                //Sending Email
                                 $frm = 'info@trinityng.com';
                                 $name = $fname.' '.$lname;
                                 $recipient = $email;
                                 $sub = "Trinity International College Enrolment";
                                 $link ='https://www.trinityng.com/student/';
                                 $msg ='Thank you for registering with Trinity International College, Ofada, Ogun State.To complete your registration on the admission portal, kindly login at  www.trinityng.com/student with your email and phone number' .'('.$email.', '. $phone.')';
                                
                                    //Email message
                                  $message = '<html><body>';
                                  $message .= '<img src="http://trinityng.com/assets/img/logo.png" alt="Tricol" />';
                                  $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
                                  $message .= "<tr><td><strong>Registration:</strong> </td><td>" . $sub . "</td></tr>";
                                  $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
                                  $message .= "<tr><td><strong>Username:</strong> </td><td>" . $email . "</td></tr>";
                                  $message .= "<tr><td><strong>Password:</strong> </td><td>" . $phone . "</td></tr>";
                                  $message .= "<tr><td><strong>Regsitration Portal:</strong> </td><td><a href='$link'>" .$link. "</a></td></tr>";
                                  
                                  $message .= "<tr><td><strong>Message:</strong> </td><td>" .$msg. "</td></tr>";
                                  

                                  $message .= "</table>";
                                  $message .= "</body></html>";
                                
                                
                                $to = $email;

                                $subject = 'Trinity International College Enrolment';

                                $headers = "From: " . $frm. "\r\n";
                                $headers .= "Reply-To: ". $frm . "\r\n";
                                $headers .= "MIME-Version: 1.0\r\n";
                                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

                                if (mail($to, $subject, $message, $headers)) {
                                  $e='Please check your email for login details.';
                                 echo "<div class='alert animated default-btn alert-dismissible fade show' role='alert' style='color: red;'>
                                    <span style='color: yellow;'><strong>Congratulations!</strong> $e. <a href='student'>Login Here</a><s/pan>
                                </div>";
                                } else {
                                  $e="Oops! Something went wrong and we couldn't send your message.";
                                    echo  " <script>alert('$e'); </script>";
                                }
                                
                       
                                
                                
                            }else{
                                $e='registration failed please try again later.';
                                echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
                                    <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                    <strong>Oops! </strong> $e.
                                </div>";
                            }
                                
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
                    <h3>Registration Form</h3>
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
                            <input type="tel" name="phone" class="form-control">
                        </div>
                    <div class="form-wrapper">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                   <!-- <div class="form-wrapper">
                        <label for="">Password</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="form-wrapper">
                        <label for="">Confirm Password</label>
                        <input type="password" class="form-control">
                    </div>-->
                   <div class="form-wrapper">
                   <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      Read Terms & Conditions
                    </button>
                   </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> I accept the Terms of Use & Privacy Policy .
                            <span class="checkmark"></span>
                        </label>
                    </div>
                   <button type="submit" name="submit" class="button animated default-btn" style="padding-top:12px">Register Now</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="video-area bg-img pt-270 pb-270" style="background-image:url(assets/bgs/biostd.jpg);">
    <div class="video-btn-2">
        <a class="video-popup" href="https://www.youtube.com/watch?v=soVO0g_JLPA">
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
                        <span>STAFF</span>
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

 <!--MODAL -->
 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Terms & Conditions</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <fieldset> 
                    <div class="form-group form-float">
                       * Trinity International College accepts students between the ages of 10 and 16.
                    </div>
                    <div class="form-group form-float">
                       * Candidates in their final year in primary school may apply.
                    </div>
                    <div class="form-group form-float">
                       * Candidates should be at least 10 years old on resumption.
                    </div>
                    <div class="form-group form-float">
                       * Kindly note that the application attracts a non-refundable fee of N10,000 (N10,500 for online payments).
                    </div>
                </fieldset>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</body>

</html>