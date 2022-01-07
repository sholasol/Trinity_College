<?php include 'head.php'; ?>

<!-- Main Content -->

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Affiliate</h2>
<!--                 <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="add-affiliate"><i class="zmdi zmdi-home"></i> New Affiliate</a></li>
                </ul> -->
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
                                        <th class="hidden-md-down">Mobile</th>
                                        <th class="hidden-md-down" width="150px">Company</th>
                                        <th>State</th>
                                        <th>Dob</th>
                                        <th>Joined</th>
                                        <!-- <th>Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 

                                $q = dbConnect()->prepare("SELECT * FROM users WHERE role=?");
                                $q->execute(['Affiliate']);
                                    if($q->rowcount() < 1){
                                        echo 'No record in the database';
                                    }else{
                                        $i = 0;
                                       while($afl = $q->fetch()){
                                           $i++;
                                           $name = $afl->fname ." ". $afl->lname;
                                        //    $brc = $user->branch;
                                        ?>
                                    <tr>
                                        <td>
                                            <img class="rounded avatar" src="affliates/assets/images/xs/avatar1.jpg" alt="">
                                        </td>
                                        <td> <?php echo $name; ?> </td>
                                        <td> <?php echo $afl->email; ?> </td>      
                                        <td class="hidden-md-down">
                                            <?php echo $afl->phone; ?>
                                        </td>
                                        <td> <?php if($afl->company == NULL){echo $afl->company;}else{echo 'None';} ?> </td> 
                                        <td class="hidden-md-down">
                                            <?php echo $afl->state; ?>
                                        </td>
                                        <td><span class="badge badge-info">
                                            <?php echo $afl->company; ?></span></td>
                                        <td><?php echo $afl->joined; ?></td>
                                      <!--   <td>
                                            <select onChange="window.location.href=this.value" class="form-select">
                                                <option value="registration"> Full reg</option>
                                                <option value="update"> Update</option>
                                                <option value="?id=<?php echo $afl->id; ?>"> Delete</option>
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