<?php include 'head.php'; ?>

<!-- Main Content -->

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Profile</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="add-affiliate"><i class="zmdi zmdi-home"></i> Change Pasword</a></li>
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
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card widget_2">
                    <div class="body">
                        <h6>Refferal Link</h6>
                        <h2 style="line-height:0.7">
                            <small class="info green-text"><?php echo $ref;?> </small>
                            <button class="btn btn-sm btn-default"> copy </button></h2>
                        <small>Refferal student and get 5% of their first payment</small>

                        <!-- <div class="progress">
                            <div class="progress-bar l-amber" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card widget_2">
                    <div class="body">
                        <h6>Student</h6>
                        <h2><?php echo $rstd;?> <small class="info">of <?php echo $rst->tstd; ?></small></h2>
                        <small>Total Refferered Student</small>
                        <div class="progress">
                            <?php $perc = $rstd/$rst->tstd * 100; ?>
                            <div class="progress-bar l-blue" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $perc.'%';?>;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card widget_2">
                    <div class="body">
                        <h6>Affiliate</h6>
                        <h2><?php echo $af; ?> <small class="info">of <?php echo $aff; ?></small></h2>
                        <small>Total Active Affiliates </small>
                        <div class="progress">
                            <?php $Aperc = $af/$aff * 100; ?>
                            <div class="progress-bar l-purple" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $Aperc.'%';?>;"></div>
                        </div>
                    </div>
                </div>
            </div>
<!--             <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card widget_2 big_icon domains">
                    <div class="body">
                        <h6>Courses</h6>
                        <h2>8 <small class="info">of 10</small></h2>
                        <small>Total Registered Courses</small>
                        <div class="progress">
                            <div class="progress-bar l-green" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
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
                                           $name = $prf->fname ." ". $prf->lname;
                                           $imgUser =$prf->image;
                                        //    $brc = $user->branch;
                                        ?>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Full Name:</th>
                                        <td><?php echo $name ?></td>
                                        <td rowspan="9">
                                            <div class="badge align-content-center">

                                                <?php 
                                                    if($imgUser == 0){
                                                        echo "<img src='../assets/images/profile_av.png' alt='User'>";
                                                    }else{
                                                        echo "<img src='assets/images/user/$imgUser'>";
                                                    }
                                                    ?>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Email Address:</th>
                                        <td><?php echo $prf->email ?></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Phone Number:</th>
                                        <td><?php echo $prf->phone ?></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Role:</th>
                                        <td><?php echo $prf->role ?></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Status:</th>
                                        <td>
                                        <?php 
                                            if($prf->status =='Active'){?>
                                                <span class="badge badge-success"><?php echo $prf->status; ?> </span>
                                            <?php 
                                            }else{?>
                                                <span class="badge badge-danger"> <?php echo $prf->status; ?></span>
                                            <?php }?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Gender:</th>
                                        <td> <span class="badge badge-primary"><?php echo $prf->gender ?> </span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Address:</th>
                                        <td> <?php echo $prf->address ?> </span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> State:</th>
                                        <td> <span class="badge badge-success"><?php echo $prf->state ?> </span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-info">&nbsp;</span></td>
                                        <th> Passcode:</th>
                                        <td> <span class="badge bg-black"><?php echo $prf->password ?> </span></td>
                                        
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