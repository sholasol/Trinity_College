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
                                        <th></th>                             
                                        <th style="width:50px;"> </th>
                                        <th>Name</th>
                                        <th>Email</th>                                        
                                        <th class="hidden-md-down">Mobile</th>
                                        <th class="hidden-md-down" width="150px">Department</th>
                                        <th>M/Status</th>
                                        <th>Dob</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 

                                   $q = dbConnect()->prepare("SELECT u.id,u.phone,u.status,s.fname,s.lname,s.email,s.phone,s.reff_by,s.created,u.image FROM users AS u INNER JOIN student AS s ON u.email=s.reff_by WHERE s.reff_by=?");
                                    $q->execute([$email]);
                                    if($q->rowcount() < 1){
                                        echo 'No record in the database';
                                    }else{
                                        $i = 0;
                                       while($std = $q->fetch()){
                                           $i++;
                                           $name = $std->fname ." ". $std->lname;
                                           $img = $std->image;
                                        //    $brc = $user->branch;
                                        ?>
                                    <tr>
                                        <td> <?php echo $i;?></td>
                                        <td>
                                            <?php if($img!=''){$src = $img;}else{$src = 'assets/images/xs/avatar1.jpg';}?>
                                            
                                            <img class="rounded avatar" src="<?php echo $src;?>" alt="">
                                        </td>
                                        <td> <?php echo $name; ?> </td>
                                        <td> <?php echo $std->email; ?> </td>      
                                        <td class="hidden-md-down">
                                            <?php echo $std->phone; ?>
                                        </td>
                                        <td> <?php echo '--'; ?> </td> 
                                        <td class="hidden-md-down">
                                            <?php echo ' -- '; ?>
                                        </td>
                                        <td><span class="badge badge-info">
                                            <?php echo ' -- '; ?></span></td>
                                        <td><?php echo $std->created; ?></td>
                                   <!--      <td>
                                            <select onChange="window.location.href=this.value" class="form-select">
                                                <option value="registration"> Full reg</option>
                                                <option value="update"> Update</option>
                                                <option value="?id=<?php echo $std->id; ?>"> Delete</option>
                                            </select>
                                        </td> -->
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