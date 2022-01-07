
<?php include 'head.php'; ?>

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Survey Page</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="breadcrumb-item">New Student</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    <a href="" class="btn btn-info btn-icon float-right"><i class="zmdi zmdi-check"></i></a>
                </div>
            </div>
        </div> 
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Create</strong> Student</h2>
                        </div>
                        <div class="body">
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
                        $fname = check_input($_POST['fname']);
                        $lname = check_input($_POST['lname']);
                        $email = check_input($_POST['email']);
                        $phone = check_input($_POST['phone']);
                        $password = "password";
                        $date = date('Y-m-d');
                        
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
                        $ins = dbConnect()->prepare("INSERT INTO users(fname,lname,email,password,salt, phone,role,status) VALUES (?,?,?,?,?,?,?,?)");
                            $ins->execute([$fname, $lname, $email, $pw, $salt, $phone,'Student','Active']);
                            if($ins){
                                $e='Your form has been submitted';
                                echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
                                    <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                    <strong>Congratulations</strong> $e.
                                </div>";
                            }else{
                                $e='registration failed. Try again.';
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
                            <form method="POST">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="fname" class="form-control" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="lname" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>                                    
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="E-mail">
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea rows="4" name="remark" class="form-control no-resize" placeholder="Remarks"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
                                </div>
</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'foot.php'; ?>