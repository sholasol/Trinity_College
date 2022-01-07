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
    <div class="container-fluid">
        <?php include 'top-section.php'; ?>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong><i class="zmdi zmdi-chart"></i> Student</strong> Report</h2>
                        <ul class="header-dropdown">
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!--<div class="body mb-2">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="state_w1 mb-1 mt-1">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5>2,365</h5>
                                            <span><i class="zmdi zmdi-balance"></i> Revenue</span>
                                        </div>
                                        <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#868e96">5,2,3,7,6,4,8,1</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="state_w1 mb-1 mt-1">
                                    <div class="d-flex justify-content-between">
                                        <div>                                
                                            <h5>365</h5>
                                            <span><i class="zmdi zmdi-turning-sign"></i> Returns</span>
                                        </div>
                                        <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#2bcbba">8,2,6,5,1,4,4,3</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="state_w1 mb-1 mt-1">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5>65</h5>
                                            <span><i class="zmdi zmdi-alert-circle-o"></i> Queries</span>
                                        </div>
                                        <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#82c885">4,4,3,9,2,1,5,7</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="state_w1 mb-1 mt-1">
                                    <div class="d-flex justify-content-between">
                                        <div>                            
                                            <h5>2,055</h5>
                                            <span><i class="zmdi zmdi-print"></i> Invoices</span>
                                        </div>
                                        <div class="sparkline" data-type="bar" data-width="97%" data-height="55px" data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#45aaf2">7,5,3,8,4,6,2,9</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <div class="body">
                        <div id="chart-area-spline-sracked" class="c3_chart d_sales"></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row clearfix">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="card project_list">
                    <div class="header">
                        <h2><strong><i class="zmdi zmdi-chart"></i> Recent</strong> Student</h2>
                        <ul class="header-dropdown">
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                        <div class="table-responsive">
                            <table class="table table-hover c_table theme-color dataTable js-exportable">
                                <thead>
                                    <tr>                                       
                                        <th style="width:50px;"> </th>
                                        <th>Name</th>
                                        <th>Email</th>                                        
                                        <th class="hidden-md-down">Mobile</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 

                                    $user = DB::getInstance()->query("SELECT * FROM student ORDER BY id DESC LIMIT 5");
                                    if($user ->error()){
                                        echo 'No record in the database';
                                    }else{
                                        $i = 0;
                                       foreach($user->results() as $std){
                                           $i++;
                                           $name = $std->fname ." ". $std->lname;
                                        //    $brc = $user->branch;
                                        ?>
                                    <tr>
                                        <td>
                                            <?php echo $i; ?>
                                            <!--<img class="rounded avatar" src="affliates/assets/images/xs/avatar1.jpg" alt="">-->
                                        </td>
                                        <td> <?php echo $name; ?> </td>
                                        <td> <?php echo $std->email; ?> </td>      
                                        <td class="hidden-md-down">
                                            <?php echo $std->phone; ?>
                                        </td>
                                        <td><?php echo $std->created; ?></td>
                                        <td>
                                            <select onChange="window.location.href=this.value" class="form-control show-tick" >
                                                <option value="" selected>-- Select --</option>
                                                <option value="?approve=<?php echo $std->id; ?>"> Approve</option>
                                                <option value="?decline=<?php echo $std->id; ?>"> Decline</option>
                                                <!--<option value="?delete=<?php echo $afl['id']; ?>"> Delete</option>-->
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
        
        <!--<div class="row clearfix">
            <div class="col-md-12 col-lg-8">
                <div class="card">
                    <div class="header">
                        <h2><strong>DEPARTMENTS</strong> Statistics</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>                        
                    </div>
                    <div class="body">
                        <div id="world-map-markers" class="jvector-map"></div>                            
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Distribution</strong></h2>
                        <ul class="header-dropdown">
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
                        </ul>
                    </div>
                    <div class="body text-center">
                        <div id="chart-pie" class="c3_chart d_distribution"></div>
                        <button class="btn btn-primary mt-4 mb-4">View More</button>                            
                    </div>
                </div>
            </div>
        </div>-->
        
    </div>
</section>

<?php include 'foot.php' ;?>