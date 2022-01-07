<?php include 'head.php'; ?>

<!-- Main Content -->

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Student</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="add-student"><i class="zmdi zmdi-home"></i> New Student</a></li>
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
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="card project_list">
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

                                    $user = DB::getInstance()->query("SELECT * FROM student WHERE reff_by ='$code'  ORDER BY id DESC ");
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
</section>

<?php include '../foot.php' ;?>

<!--                                     <tr>
                                        <td>
                                            <img class="rounded avatar" src="affliates/assets/images/xs/avatar2.jpg" alt="">
                                        </td>
                                        <td>
                                            <a class="single-user-name" href="javascript:void(0);">Jannie Dvis</a><br>
                                            <small>Design Lead</small>
                                        </td>
                                        <td>
                                            <strong>One Page Landing</strong><br>
                                            <small>Cost: $100</small>
                                        </td>                                        
                                        <td class="hidden-md-down">
                                            <ul class="list-unstyled team-info margin-0">                                               
                                                <li><img src="affliates/assets/images/xs/avatar5.jpg" alt="Avatar"></li>
                                                <li><img src="affliates/assets/images/xs/avatar6.jpg" alt="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td class="hidden-md-down">
                                            <div class="progress">
                                                <div class="progress-bar l-green" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">High</span></td>
                                        <td>21 Dec 2019</td>
                                        <td>
                                            <select onChange="window.location.href=this.value">
                                                <option value="edit">full reg</option>
                                                <option value="edit">update</option>
                                                <option value="edit">delete</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img class="rounded avatar" src="affliates/assets/images/xs/avatar10.jpg" alt="">
                                        </td>
                                        <td>
                                           
                                        </td>
                                        <td>
                                            <strong>iOS Game</strong><br>
                                            <small>Cost: $890</small>                                                
                                        </td>                                        
                                        <td class="hidden-md-down">
                                          
                                        </td>
                                        <td class="hidden-md-down">
                                            <div class="progress">
                                                <div class="progress-bar l-blue" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-info">Medium</span></td>
                                        <td>26 Dec 2019</td>
                                    </tr>
                                     -->