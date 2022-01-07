<?php 
include 'head.php';

// Global parameters ..........
$created = date('Y-m-d H-m-s');
$targetDir = "uploads/";
$allowTypes = array('jpg','jpeg');


// Uploading image with title and description
if(isset($_POST['uploadImageCaptionDesc'])){
    if(empty($_POST['cat'])){
        echo "<script>alert('Please select image Category')</script>";
    } else {
        
         $countfiles = count($_FILES['imgDesc']['name']);
         if($countfiles < 1){
             $msg= "Oops! Select at least an image";

                echo  " <script>alert('$msg');window.location='imgUpload' </script>";
         }
         else{
         $caption = check_input($_POST['caption']);
         $descr = check_input($_POST['description']);
         $cat = check_input($_POST['cat']);
         $dt = date('Y-m-d');
             // Looping all files
        for($i=0;$i<$countfiles;$i++){

         $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');  
         $filename = $_FILES['imgDesc']['name'][$i];
         $imgExt = strtolower(pathinfo($filename, PATHINFO_EXTENSION)); // get image extension

         $target_path = "uploads/".$filename;

         if(in_array($imgExt, $valid_extensions)){

            // Upload file
            if(move_uploaded_file($_FILES['imgDesc']['tmp_name'][$i],'uploads/'.$filename)){
               $fl= dbConnect()->prepare("INSERT INTO imgUpload SET title=:tit, category=:cat, image=:img, description=:dsc, page=:pg, created=:dt");
               $fl->bindParam(':cat', $cat);
               $fl->bindParam(':tit', $caption);
               $fl->bindParam(':img', $target_path);
               $fl->bindParam(':dsc', $descr);
               $fl->bindParam(':pg', $cat);
               $fl->bindParam(':dt', $dt);
               if($fl->execute()){
                   $msg= "Image uploaded successfully";

                echo  " <script>alert('$msg');window.location='imgUpload' </script>";
               }

            }else{
                $msg= "Oops! Unable to process the image";

                echo  " <script>alert('$msg');window.location='imgUpload' </script>";
            }
         }else{
             $msg= "Oops! Invalid file type";

                echo  " <script>alert('$msg');window.location='imgUpload' </script>";
         }
        }
         }
        
        
    }
    
    /*
    if(isset($_POST['caption']) && isset($_POST['description'])){
    // File upload configuration
    
    $caption = check_input($_POST['caption']);
    $descr = check_input($_POST['description']);

        $image_name = $_FILES['imgDesc']['name'];
        $tmp_name   = $_FILES['imgDesc']['tmp_name'];
        $size       = $_FILES['imgDesc']['size'];
        $type       = $_FILES['imgDesc']['type'];
        $error      = $_FILES['imgDesc']['error'];
        
        // File upload path
        $fileName = basename($_FILES['imgDesc']['name']);
        $targetFilePath = $targetDir . $fileName;
        
        // Check whether file type is valid
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        if(in_array($fileType, $allowTypes)){ 
            $ins = dbConnect()->prepare("INSERT INTO slidder (image,title,description,created) VALUES(?,?,?,?)");
            $ins->execute([$image_name,$caption,$descr,$created]);
            // Store images on the server
             if($ins){
                move_uploaded_file($_FILES['imgDesc']['tmp_name'],$targetFilePath);
                $images_arr[] = $targetFilePath;
                echo "<script> alert('Uploaded Successfully'); </script>";
            }else{
               echo "<script> alert('Oops! server error'); </script>"; 
            }            
        }
    } */
}

    if (isset($_POST['value'])) {
        ob_end_clean();
        $value = $_POST['value'];
        $id = $_POST['id'];
        $query = dbConnect()->prepare("UPDATE slidder SET status=? WHERE id = ?");
        if ($query->execute([$value, $id])) {
            echo "Updated";
            exit();
        }else{
            echo "Error Updating";
            exit();
        }

        
    }



 function check_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

    if (isset($_POST['value'])) {
        ob_end_clean();
        $value = $_POST['value'];
        $id = $_POST['id'];
        $query = dbConnect()->prepare("UPDATE gallery SET status=? WHERE id = ?");
        if ($query->execute([$value, $id])) {
            echo "Updated";
            exit();
        }else{
            echo "Error Updating";
            exit();
        }

        
    }


?>

<!-- Main Content -->

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
<?php 
// Batch Operation for Deleting Images
if(isset($_POST['deleteAllBtn'])){
    $checkbox = $_POST['check'];
    for($k=0;$k<count($checkbox);$k++){
    $del_id = $checkbox[$k];
   // echo $tablename; 
    $delAll = dbConnect()->prepare("DELETE FROM $tablename WHERE id=$del_id");
    $delAll->execute();
   }
    if($delAll){
        $e='Data deleted successfully !';
         echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Congratulations</strong> $e.
        </div>";
    }else{
        $e='Oops! operation failed';
         echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Congratulations</strong> $e.
        </div>";
     }
}


//  Deleting the image uploaded
 if(isset($_GET['g_id']) && isset($_GET['category']) && isset($_GET['dimage'])){
     $dec = $_GET['dimage'];
     $categ = $_GET['category'];
     $g = $_GET['g_id'];
     // echo  " <script> alert('$categ');</script>";
     $del = dbConnect()->prepare("DELETE FROM $tablename WHERE id=$dec");
     $del->execute();
     if($del){
         // echo  "<script> alert('Deleted');";
        $e='Data deleted successfully !';
         echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Congratulations</strong> $e.
        </div>";
         // header('location: category?'.'g_id='.$gID.'&category='.$tablename);
     }else{
        // echo  "<script> alert('Operation failed');";
        // header('location: category?'.'g_id='.$gID.'&category='.$tablename);
        $e='Oops! failed to delete';
         echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Congratulations</strong> $e.
        </div>";
     }

 }

// Updating category with Title and Description
if(isset($_POST['updateWithFull']) && isset($_POST['imageTitle'])){
    $iTitle = $_POST['imageTitle'];
    $iDesc = $_POST['description'];
    $imgVal = $_POST['oldImg'];
    $img = $_FILES['imgDesc']['name'];
    $upCatID = $_POST['updateCat_id'];
    if($img !=''){
        // $targetDir = "uploads/";
        // $allowTypes = array('jpg','jpeg');
        // File upload path
        $fileName = basename($_FILES['imgDesc']['name']);
        $targetFilePath = $targetDir . $fileName;

        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        if(in_array($fileType, $allowTypes)){

            $sql_update=dbConnect()->prepare("UPDATE $tablename SET 
            image=?,
            title=?,
            description=?
            WHERE id=?"); 
            $sql_update->execute([$img,$iTitle,$iDesc,$upCatID]); 
            if($sql_update){
            move_uploaded_file($_FILES['imgDesc']['tmp_name'],$targetFilePath);
            unlink($targetDir.$imgVal);
            $e='updating category with description';
             echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
                <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>Success! </strong> $e.
            </div>";             
            }else{
            $e='operation failed';
             echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
                <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>Oops! </strong> $e.
            </div>";  
            } 
        }
    }else{
        $sql_update=dbConnect()->prepare("UPDATE $tablename SET 
            title=?,
            description=?
            WHERE id=?"); 
        $sql_update->execute([$iTitle,$iDesc,$upCatID]);
        if($sql_update){
        $e='operation successful';
         echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Congratulations! </strong> $e.
        </div>"; 
       }else{
            $e='operation failed';
             echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
                <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>Oops! </strong> $e.
            </div>";  
        }
    }

}

// Updating category with caption
if(isset($_POST['updateWithFull']) && isset($_POST['caption'])){
    $uCID = $_POST['updateCat_id'];
    $iCapt = $_POST['caption'];
    $img = $_FILES['imgDesc']['name'];
    $imgValCap = $_POST['oldImgCap'];

    if($img !=''){

        $fileName = basename($_FILES['imgDesc']['name']);
        $targetFilePath = $targetDir . $fileName;

        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        if(in_array($fileType, $allowTypes)){

            $sql_update=dbConnect()->prepare("UPDATE $tablename SET 
            image=?,
            title=?
            WHERE id=?"); 
            $sql_update->execute([$img,$iCapt,$uCID]); 
            if($sql_update){
            move_uploaded_file($_FILES['imgDesc']['tmp_name'],$targetFilePath);
            unlink($targetDir.$imgValCap);
            $e='updating category with caption';
             echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
                <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>Success! </strong> $e.
            </div>";             
            }else{
            $e='operation failed';
             echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
                <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>Oops! </strong> $e.
            </div>";  
            }
            
        }
    }else{
        $sql_update=dbConnect()->prepare("UPDATE $tablename SET 
            title=?
            WHERE id=?"); 
        $sql_update->execute([$iCapt,$uCID]);
        if($sql_update){
        $e='operation successful';
         echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Congratulations! </strong> $e.
        </div>"; 
       }else{
            $e='operation failed';
             echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
                <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>Oops! </strong> $e.
            </div>";  
        }
    }

}

// Updating category with Image
if(isset($_POST['updateWithFull']) && isset($_POST['catTyp'])){
    $uCID = $_POST['updateCat_id'];
    $img = $_FILES['imgDesc']['name'];
    $imgValOn = $_POST['catTyp'];
    // echo $_FILES['imgDesc']['name'];
    $fileName = basename($_FILES['imgDesc']['name']);
    $targetFilePath = $targetDir . $fileName;

    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    if(in_array($fileType, $allowTypes)){

        $sql_update=dbConnect()->prepare("UPDATE $tablename SET image=? WHERE id=?"); 
        $sql_update->execute([$img,$uCID]);

        if($sql_update){
        move_uploaded_file($_FILES['imgDesc']['tmp_name'],$targetFilePath);
        unlink($targetDir.$imgValOn);
        $e='updating category with image';
         echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Success! </strong> $e.
        </div>";             
        }else{
            $e='operation failed';
             echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
                <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>Oops! </strong> $e.
            </div>";  
        }  
    }
}


?>








                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Image Gallery</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home"><i class="zmdi zmdi-account-box"></i> </a></li>
                        <li class="breadcrumb-item active"><a href="gallery" class="breadcrumb-item active">
                            School Gallery
                        </a></li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <!-- Advanced Form Example With Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>List of Images</strong> 
                                <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Upload</button>
                                
                            </h2>
                        </div>
                    <div class="body">
                        <div class="body">
                            <div class="table-responsive">
                            <form method="POST">
                                <table class="table table-hover c_table theme-color dataTable js-exportable">
                            <!-- <table class="table table-hover c_table theme-color dataTable js-exportable"> -->
                                <!-- <table id="mainTable" class="table table-striped c_table"> -->
                                <thead>
                                    <tr>     
                                        <th><input type="checkbox" id="checkAl"> All</th>
                                        <th style="width:50px;"> </th>
                                        <th>Image</th>
                                        <th>Title </th>
                                        <th>Description</th>
                                        <th> Date</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $i = 0;
                                    $im = dbConnect()->prepare("SELECT * FROM imgUpload");  
                                    $im->execute();
                                    while($rz = $im->fetch()){
                                        $imgUpload = $rz['image'];
                                        $i++;
                                    /*
                                    $user = DB::getInstance()->query("SELECT * FROM imgUpload");
                                    if($user ->error()){
                                        echo 'No record in the database';
                                    }else{
                                        $i = 0;
                                        foreach($user->results() as $up){
                                           $i++;
                                           $imgUpload = $up->image
                                      */             
                                                 
                                    ?>
                                    <tr>
                                        <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $rz['id']; ?>"></td>
                                       <td><?php echo $i; ?> </td>
                                       <td> 
                                           <img src="<?php echo $rz['image'] ?>" width="70" class="img-circle" /> 
                                       </td>
                                       <td> <label class="badge <?php if($rz['title'] ==''){echo 'badge-danger';}else{echo 'badge-success';} ?>"> <?php if($rz['title'] ==''){echo 'None';}else{echo $rz['title'];} ?> </label></td>
                                       
                                       <td><label class="badge <?php if($rz['description'] ==''){echo 'badge-danger';}else{echo 'badge-success';} ?>"> <?php if($rz['description'] ==''){echo 'None';}else{echo substr($rz['description'], 0, 15);} ?> </label></td>
                                       
                                       <td> <?php echo $rz['created']; ?></td>
                                       <td>
                                          <!--  <a href="?g_id=<?php echo $gID;?>&category=<?php echo $tablename;?>&dimage=<?php echo $up->id?>" class=" btn btn-sm btn-danger "  onclick="return confirm('Are you sure to delete this image?')" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to delete data"><i class="icon zmdi zmdi-hc-fw text-white"></i>
                                            </a>

                                            <button type="button" class="btn btn-primary waves-effect m-r-20 btn-sm" data-toggle="modal" data-target="#edit-category<?php echo $up->id;?>"><i class="icon zmdi zmdi-hc-fw text-white"></i></button>

                                            <input <?php if($up->id==1){echo 'checked';}?>  type="checkbox" class="activateUser" id="<?php echo ($up->id);?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Check to activate branch" value="<?php echo $up->status;?>">-->
                                       </td>
                                    </tr>
                                    <?php 
                                    include 'modal/editcategory.php';
                                }?>
                                </tbody>
                            </table>
                                <button type="submit" class="btn btn-success" name="deleteAllBtn">DELETE</button>
                            </form>
                            </div>
                        </div>                           
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Jquery Core Js --> 

<!-- Default Size -->
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Upload Images</h4>
            </div>
            <div class="modal-body"> 
                <div class="card">
                        <div class="body">
                            <div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-primary">
                                    <div class="panel-heading" role="tab" id="headingThree_1">
                                        <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseThree_1" aria-expanded="false"
                                                aria-controls="collapseThree_1"> Upload with title and description </a> </h4>
                                    </div>
                                    <div id="collapseThree_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_1">
                                        <div class="panel-body"> 
                                <form method="post" id="uploadFormCaption" enctype="multipart/form-data">
                                                <div class="row clearfix">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <input type="text" name="caption" class="form-control" placeholder="Enter image title">
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control" name="cat" required>
                                                                <option value="">-Select-</option>
                                                                <option value="art">Art Laboratory</option>
                                                                <option value="event">Event</option>
                                                                <option value="admin">Administrative</option>
                                                                <option value="biology">Biology Lab</option>
                                                                <option value="computer">Computer Lab</option>
                                                                <option value="clinic">School Clinic</option>
                                                                <option value="economics">Home Economics</option>
                                                                <option value="hostel">Hostels</option>
                                                                <option value="physics">Physics Lab</option>
                                                                <option value="chemistry">Chemistry Lab</option>
                                                                <option value="language">Language Lab</option>
                                                                <option value="staff">Staffs</option>
                                                                <option value="student">Students</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row clearfix">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <textarea rows="4" class="form-control no-resize" placeholder="Please type in your description ..." name="description"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>  
                                                        <div class="form-group">                  
                                                            <div class="card">
                                                                <div class="body">
                                                                    <p>upload image file (jpg, jpeg only) dimension 1760x761 </p>
                                                                    <input type="file" class="dropify form-control" data-allowed-file-extensions="jpg jpeg" name="imgDesc[]" id="imgDesc" multiple>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            
                                                        <div class="form-group">  
                                                            <button type="submit" name="uploadImageCaptionDesc" class="btn btn-primary"> Submit </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>                        
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-default btn-round waves-effect">SAVE CHANGES</button> -->
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<?php include 'foot.php' ;?>

<script>
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });
});
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.activateUser').on('change',function(){
            let id = this.id;
            let value = this.value;
            (value == 1) ? value=0 : value = 1;
            // alert(value);
            $.ajax({
                type:'POST',
                data:{id:id,value:value},
                dataType: 'text',
                success: function(data){
                    alert(data);
                }
            })
        });
    })
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.activateUser').on('change',function(){
            let id = this.id;
            let value = this.value;
            (value == 1) ? value=0 : value = 1;
            // alert(value);
            $.ajax({
                type:'POST',
                data:{id:id,value:value},
                dataType: 'text',
                success: function(data){
                    alert(data);
                }
            })
        })
    })
</script>
<script>
$("#checkAl").click(function () {
$('input:checkbox').not(this).prop('checked', this.checked);
});
</script>
</body>
</html>