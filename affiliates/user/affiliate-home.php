<?php include 'head.php'; ?>

<!-- Main Content -->

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Dashboard</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home"><i class="zmdi zmdi-home"></i> Overview</a></li>
                </ul>
                <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
            </div>
        </div>
    </div>
    <?php include 'top-section.php';?>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong><i class="zmdi zmdi-chart"></i> Student</strong> Report</h2>
                        <!--<ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                    <li><a href="javascript:void(0);">Report</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>-->
                    </div>
                    <div class="body mb-2">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="state_w1 mb-1 mt-1">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5><?php // echo$nreg;?></h5>
                                            <span><i class="zmdi zmdi-balance"></i>New Reg</span>
                                        </div>
                                        <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#868e96">5,2,3,7,6,4,8,1</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="state_w1 mb-1 mt-1">
                                    <div class="d-flex justify-content-between">
                                        <div>                                
                                            <h5><?php // echo $freg;?></h5>
                                            <span><i class="zmdi zmdi-turning-sign"></i> Full Reg.</span>
                                        </div>
                                        <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#2bcbba">8,2,6,5,1,4,4,3</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="state_w1 mb-1 mt-1">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5><?php echo $Ireg ;?></h5>
                                            <span><i class="zmdi zmdi-alert-circle-o"></i> Incomplete Reg.</span>
                                        </div>
                                        <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#82c885">4,4,3,9,2,1,5,7</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="state_w1 mb-1 mt-1">
                                    <div class="d-flex justify-content-between">
                                        <div>                            
                                            <h5><?php echo $acReg;?></h5>
                                            <span><i class="zmdi zmdi-active"></i> Active Student</span>
                                        </div>
                                        <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#45aaf2">7,5,3,8,4,6,2,9</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover c_table theme-color dataTable js-exportable">
                                <thead>
                                    <tr>                                       
                                        <th style="width:50px;"> </th>
                                        <th>Name</th>
                                        <th>Email</th> 
                                        <th>Gender</th>
                                        <th>Class</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 

                                    $user = DB::getInstance()->query("SELECT * FROM student WHERE reff_by ='$code' AND (status='Paid' or status='Approve') ORDER BY id DESC LIMIT 5");
                                    if($user ->error()){
                                        echo 'No record in the database';
                                    }else{
                                        $i = 0;
                                       foreach($user->results() as $std){
                                           $i++;
                                           $name = $std->fname ." ". $std->lname;
                                           $emil = $std->email;
                                        //  student mode of payment
                                           $db = dbConnect()->prepare("SELECT id FROM users WHERE email='$emil'");
                                           $db->execute();
                                           $rx = $db->fetch();
                                           $id = $rx['id'];
                                           
                                           //student mode of payment
                                           $dbx = dbConnect()->prepare("SELECT * FROM payment WHERE student='$id'");
                                           $dbx->execute();
                                           $ra = $dbx->fetch();
                                           $mod = $ra['mode'];
                                           $amt = $ra['amount'];
                                        ?>
                                    <tr>
                                        <td>
                                            <?php echo $i; ?>
                                            <!--<img class="rounded avatar" src="affliates/assets/images/xs/avatar1.jpg" alt="">-->
                                        </td>
                                        <td> <?php echo $name; ?> </td>
                                        <td> <?php echo $std->email; ?><br><small><?php echo $std->phone; ?></small> </td>      
                                        
                                        <td class="hidden-md-down">
                                            <?php echo $std->gender; ?>
                                        </td>
                                        <td class="hidden-md-down">
                                            <?php echo $std->classenrol; ?>
                                        </td>
                                        <td class="hidden-md-down">
                                            <?php echo number_format($amt); ?><br><small><?php echo $mod; ?></small>
                                        </td>
                                       <!-- <td class="hidden-md-down">
                                            <?php 
                                            if($std->status =='Active'){?>
                                                <span class="badge badge-success"><?php echo $std->status; ?> </span>
                                            <?php 
                                            }else{?>
                                                <span class="badge badge-danger"> <?php echo $std->status; ?></span>
                                            <?php }?>
                                            
                                        </td>-->
                                        <td><?php echo $std->created; ?></td>
                                        <td>
                                            <select onChange="window.location.href=this.value" class="form-control show-tick" >
                                                <option value="" selected>-- Select --</option>
                                                <option value="?approve=<?php echo $std->id; ?>"> Confirm</option>
                                                <option value="view?eml=<?php echo $emil; ?>"> View</option>
<!--                                                <option value="?decline=<?php echo $std->id; ?>"> View</option>-->
                                            </select>
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
        
    </div>
</section>

<?php include '../foot.php' ;?>