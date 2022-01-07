<?php
include 'head.php'; 

// if(isset($_GET['approve'])){
//     $apr = $_GET['approve'];
//     $st='Active';
    
//     $apv = dbConnect()->prepare("UPDATE users SET status='$st' WHERE id='$apr'");
//     $apv->execute();
//     if($apv){
//         echo  " <script> alert('Operation Successful');window.location='affiliate'</script>";
//     }
// }

 if(isset($_GET['delete'])){
     $dec = $_GET['delete'];
     $del = dbConnect()->prepare("DELETE FROM student WHERE studentcode='$dec'");
     $del->execute();
     if($del){
         $dell = dbConnect()->prepare("DELETE FROM users WHERE studentcode='$dec'");
         $dell->execute();
         if($dell){
         echo  " <script> alert('Operation Successful');window.location='pstudent'</script>";
         }
     }
 }
?>

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
    <div class="container-fluid">
    <?php include 'top-section.php'; ?>
        
        
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

                                    $user = DB::getInstance()->query("SELECT * FROM student WHERE status='Unpaid' ORDER BY id DESC");
                                    if($user ->error()){
                                        echo 'No record in the database';
                                    }else{
                                        $i = 0;
                                       foreach($user->results() as $std){
                                           $i++;
                                           $name = $std->fname ." ". $std->lname;
                                           $emil = $std->email;
                                           $scode = $std->studentcode;
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
                                                <option value="reg?code=<?php echo $scode; ?>"> Complete Registration</option>
                                                <!--<option value="?approve=<?php echo $std->id; ?>"> Confirm</option>-->
                                                <option value="view?eml=<?php echo $scode; ?>"> View</option>
                                                <?php 
                                                if($email =='marketing@trinityng.com'){
                                                    echo "<option value='?delete=$scode'>Delete</option>";
                                                }
                                                ?>
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

<?php include 'foot.php' ;?>