<?php include 'header.php';?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95" style="background-image:url(assets/img/art.jpg);">
        <div class="container">
            <h2>Request for Admission</h2>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index">Home</a> </li>
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
                    }else{
                        
                        $e='Your form has been submitted';
                        echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
                            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <strong>Congratulations</strong> $e.
                        </div>";
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
                    <h3>Request Form</h3>
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
                        <input type="password" class="form-control">
                    </div>
                    <div class="form-wrapper">
                        <label for="">Confirm Password</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> I accept the Terms of Use & Privacy Policy.
                            <span class="checkmark"></span>
                        </label>
                    </div>
                   <button type="submit" name="submit" class="button animated default-btn" style="padding-top:12px">Register Now</button>
                </form>
            </div>
        </div>
    </div>
</div>







<?php include 'footer.php'; ?>