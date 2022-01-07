<?php include 'head.php'; ?>

<!-- Main Content -->

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Enrolment Status</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="!#"><i class="zmdi zmdi-home"></i> Enrolment Status</a></li>
                </ul>
                <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <?php include 'top-section.php'; ?>
        
        
        <div class="row clearfix">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="card project_list">
                        <div class="table-responsive">
                            <table class="table table-hover c_table theme-color">
                                <thead>
                                    <tr>                                       
                                        <th colspan="2"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 

                                $q = dbConnect()->prepare("SELECT * FROM student WHERE email=?");
                                $q->execute([$email]);
                                    if($q->rowcount() < 1){
                                        echo 'No record in the database';
                                    }else{
                                        $i = 0;
                                       while($prf = $q->fetch()){
                                           $i++;
                                           $name = $prf['fname'] ." ". $prf['lname'];
                                           $sts =$prf['status'] ;
                                           //$imgUser =$prf['image'];
                                        //    $brc = $user->branch;
                                        ?>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Full Name:</th>
                                        <td><?php echo $name ?></td>
                                        <td rowspan="9">
                                            <div class="badge align-content-center">

                                                <?php 
                                                echo "<img src='assets/images/logo.png' alt='Tricol'>";
//                                                    if($imgUser == 0){
//                                                        echo "<img src='assets/images/logo.png' alt='Tricol'>";
//                                                    }else{
//                                                        echo "<img src='assets/images/user/$imgUser'>";
//                                                    }
                                                    ?>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Date of Birth:</th>
                                        <td><?php echo $prf['dob'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Email Address:</th>
                                        <td><?php echo $prf['email'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Phone Number:</th>
                                        <td><?php echo $prf['phone'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Class Enroled:</th>
                                        <td><?php echo $prf['classenrol'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Enrolment Status:</th>
                                        <td>
                                            <?php 
                                            if($sts =='Paid'){echo 'Approved';}else{echo 'Pending';}
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th>Payment Status:</th>
                                        <td> <span class="badge badge-primary"><?php echo $prf['status'] ?> </span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th>Exam Date:</th>
                                        <td> <span class="badge badge-primary"><?php echo 'Saturday, March, 20th, 2021'; // echo $prf['examdate'] ?> </span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th>Exam Code:</th>
                                        <td> <span class="badge badge-primary"><?php echo $prf['studentcode'] ?> </span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Examination Timetable</th>
                                        <td> <span class="badge badge-primary"><a href="timetable" style="color: #fff;">Download</a></span></td>
                                    </tr>
                                    
                                <?php }}?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>

<?php include 'foot.php' ;?>