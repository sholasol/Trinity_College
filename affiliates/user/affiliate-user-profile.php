<?php include 'head.php'; ?>

<!-- Main Content -->

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Profile</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="affiliate-home"><i class="zmdi zmdi-home"></i> Home </a></li>
                </ul>
                <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
            </div>
        </div>
    </div>

<!-- Affiliate Complete Registration Pane -->
    <div class="container-fluid">
        <?php include 'top-section.php';?>
    <!--  ######################## -->
        
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

                                $q = dbConnect()->prepare("SELECT * FROM users WHERE email=?");
                                $q->execute([$email]);
                                    if($q->rowcount() < 1){
                                        echo 'No record in the database';
                                    }else{
                                        $i = 0;
                                       while($prf = $q->fetch()){
                                           $i++;
                                           $name = $prf['fname'] ." ". $prf['lname'];
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
                                        <th> Address:</th>
                                        <td><?php echo $prf['address'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Status:</th>
                                        <td> <span class="badge badge-success"><?php echo $prf['status'] ?> </span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Referral Code:</th>
                                        <td> <span class="badge badge-primary"><?php echo $prf['refferal'] ?> </span></td>
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

<?php include '../foot.php' ;?>