<?php
include 'head.php'; 

if(isset($_GET['eml'])){
    $eml = $_GET['eml'];
}
?>

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
                                

                                $q = dbConnect()->prepare("SELECT * FROM student WHERE studentcode=?");
                                $q->execute([$eml]);
                                    if($q->rowcount() < 1){
                                        echo 'No record in the database';
                                    }else{
                                        $i = 0;
                                       while($prf = $q->fetch()){
                                           $i++;
                                           $name = $prf['fname'] ." ". $prf['lname'];
                                           $sts =$prf['status'] ;
                                           $ppt =$prf['passport'] ;
                                        //    $brc = $user->branch;
                                        
                                        //student mode of payment
                                           $dbx = dbConnect()->prepare("SELECT * FROM payment WHERE studentcode='$eml'");
                                           $dbx->execute();
                                           $rv = $dbx->fetch();
                                           $evi = $rv['evidence'];
                                           $amt = $rv['amount'];
                                           $no =$dbx->rowCount();
                                        ?>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Full Name:</th>
                                        <td><?php echo $name ;?></td>
                                        <td rowspan="9">
                                            <div class="badge align-content-center">

                                                <?php 
                                                echo "<img src='assets/images/logo.png' alt='Tricol'>";
                                                
                                                    ?>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Passport</th>
                                        <td>
                                            <?php 
                                            if($ppt !=''){
                                            echo " <img src='../upload/$ppt' width='70' height='70'>";
                                            }else{
                                                
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Student Code:</th>
                                        <td><?php echo $prf['studentcode'] ?></td>
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
                                        <th> Previous School:</th>
                                        <td><?php echo $prf['preschool'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Previous Class</th>
                                        <td><?php echo $prf['preclass'] ?></td>
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
                                        <td> <span class="badge badge-primary"> March, 20th, 2021<?php // echo $prf['examdate'] ?> </span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th>Exam Code:</th>
                                        <td> <span class="badge badge-primary"><?php echo $prf['studentcode'] ?> </span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Examination Timetable</th>
                                        <td> <span class="badge badge-primary">
                                                <?php 
                                            if($no > 0){
                                                 echo " <a href='timetable' style='color: #fff;'>Download</a>";
                                            }
                                             ?>   
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Father's Name:</th>
                                        <td><?php echo $prf['ffname'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Father Email:</th>
                                        <td><?php echo $prf['femail'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Father's Phone:</th>
                                        <td><?php echo $prf['fphone'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Father's Address:</th>
                                        <td><?php echo $prf['faddr'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Father's Occupation:</th>
                                        <td><?php echo $prf['foccu'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Father's office:</th>
                                        <td><?php echo $prf['foaddr'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Mother's Name:</th>
                                        <td><?php echo $prf['mfname'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Mother's Phone:</th>
                                        <td><?php echo $prf['mphone'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Mother's Address:</th>
                                        <td><?php echo $prf['maddr'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Mother's Email:</th>
                                        <td><?php echo $prf['memail'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Mother's Occupation:</th>
                                        <td><?php echo $prf['moccu'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Mother's Office:</th>
                                        <td><?php echo $prf['moaddr'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Payment evidence:</th>
                                        <td>
                                            <?php 
                                            if($no > 0){
                                            echo " <iframe class='responsive-iframe' width='400' height='400'  src='../upload/$evi'></iframe><br><br>";
                                            }else{
                                                
                                            }
                                            ?>
                                        </td>
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