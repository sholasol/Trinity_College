<?php 
include 'head.php';

// Global parameters ..........
$created = date('Y-m-d H-m-s');
$tablename = $_GET['category'];
$gID = $_GET['g_id'];
$targetDir = "uploads/";
$allowTypes = array('jpg','jpeg');


if(isset($_POST['uploadImage'])){

   $category = $_GET['category'];

    // File upload configuration 
    $images_arr = array();
    foreach($_FILES['images']['name'] as $key=>$val){
        $image_name = $_FILES['images']['name'][$key];
        $tmp_name   = $_FILES['images']['tmp_name'][$key];
        $size       = $_FILES['images']['size'][$key];
        $type       = $_FILES['images']['type'][$key];
        $error      = $_FILES['images']['error'][$key];
        
        // File upload path
        $fileName = basename($_FILES['images']['name'][$key]);
        $targetFilePath = $targetDir . $fileName;
        
        // Check whether file type is valid
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        if(in_array($fileType, $allowTypes)){ 
            $ins = dbConnect()->prepare("INSERT INTO $tablename (image,g_id,created) VALUES(?,?,?)");
            $ins->execute([$image_name, $gID, $created]);
            // Store images on the server
            move_uploaded_file($_FILES['images']['tmp_name'][$key],$targetFilePath);
                $images_arr[] = $targetFilePath;
        }
    }
        if($ins){
            echo "<script> alert('Uploaded Successfully'); </script>";
        }else{
           echo "<script> alert('Oops! server error'); </script>"; 
        } 
    // Generate gallery view of the images

}

// Uploading image with caption
if(isset($_POST['uploadImageCaption'])){
    if(isset($_POST['caption'])){
    // File upload configuration
    // $targetDir = "uploads/";
    // $allowTypes = array('jpg','jpeg');
    $caption = check_input($_POST['caption']);

        $image_name = $_FILES['image']['name'];
        $tmp_name   = $_FILES['image']['tmp_name'];
        $size       = $_FILES['image']['size'];
        $type       = $_FILES['image']['type'];
        $error      = $_FILES['image']['error'];
        
        // File upload path
        $fileName = basename($_FILES['image']['name']);
        $targetFilePath = $targetDir . $fileName;
        
        // Check whether file type is valid
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        if(in_array($fileType, $allowTypes)){ 
            $ins = dbConnect()->prepare("INSERT INTO $tablename (s_category,image,g_id,title,created) VALUES(?,?,?,?,?)");
            $ins->execute([1,$image_name, $gID, $caption,$created]);
            // Store images on the server
             if($ins){
                move_uploaded_file($_FILES['image']['tmp_name'],$targetFilePath);
                $images_arr[] = $targetFilePath;
                echo "<script> alert('Uploaded Successfully'); </script>";
            }else{
               echo "<script> alert('Oops! server error'); </script>"; 
            }            
        }

    // Generate gallery view of the images
    }
}

// Uploading image with title and description
if(isset($_POST['uploadImageCaptionDesc'])){
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
            $ins = dbConnect()->prepare("INSERT INTO $tablename (s_category,image,g_id,title,description,created) VALUES(?,?,?,?,?,?)");
            $ins->execute([2,$image_name, $gID, $caption,$descr,$created]);
            // Store images on the server
             if($ins){
                move_uploaded_file($_FILES['imgDesc']['tmp_name'],$targetFilePath);
                $images_arr[] = $targetFilePath;
                echo "<script> alert('Uploaded Successfully'); </script>";
            }else{
               echo "<script> alert('Oops! server error'); </script>"; 
            }            
        }

    // Generate gallery view of the images
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

// //  Deleting the image uploaded
//  if(isset($_GET['g_id']) && isset($_GET['category']) && isset($_GET['dimage'])){
//      $dec = $_GET['dimage'];
//      $categ = $_GET['category'];
//      $g = $_GET['g_id'];
//      // echo  " <script> alert('$categ');</script>";
//      $del = dbConnect()->prepare("DELETE FROM $tablename WHERE id=$dec");
//      $del->execute();
//      if($del){
//          echo  " <script> alert('Deleted')";
//          header('location: category?'.'g_id='.$gID.'&category='.$tablename);
//      }else{
//         echo  " <script> alert('Operation failed')";
//         header('location: category?'.'g_id='.$gID.'&category='.$tablename);
//      }

//  }



?>

<!-- Main Content -->
<!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -->
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
                    <h2><?php echo $_GET['category']?> Category</h2>
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
                            <h2><strong>List of <?php echo $_GET['category']?> Images</strong> 
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
                                        <th><input type="checkbox" id="checkAl"> Select All</th>
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
                                    $user = DB::getInstance()->query("SELECT * FROM $tablename");
                                    if($user ->error()){
                                        echo 'No record in the database';
                                    }else{
                                        $i = 0;
                                        foreach($user->results() as $up){
                                           $i++;
                                           $imgUpload = $up->image
                                    ?>
                                    <tr>
                                        <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $up->id; ?>"></td>
                                       <td><?php echo $i; ?> </td>
                                       <td> <img src="<?php if(!empty($imgUpload)){echo 'uploads/'.$imgUpload;}else{echo '../assets/images/users/4.jpg';}?>" alt="<?php echo $imgUpload;?>" width="70"
                                                                class="img-circle" /> </td>
                                       <td> <label class="badge <?php if($up->title ==''){echo 'badge-danger';}else{echo 'badge-success';} ?>"> <?php if($up->title ==''){echo 'None';}else{echo $up->title;} ?> </label></td>
                                       
                                       <td><label class="badge <?php if($up->description ==''){echo 'badge-danger';}else{echo 'badge-success';} ?>"> <?php if($up->description ==''){echo 'None';}else{echo substr($up->description, 0, 15);} ?> </label></td>
                                       <td> <?php echo $up->created; ?></td>
                                       <td>
                                            <a href="?g_id=<?php echo $gID;?>&category=<?php echo $tablename;?>&dimage=<?php echo $up->id?>" class=" btn btn-sm btn-danger "  onclick="return confirm('Are you sure to delete this image?')" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to delete data"><i class="icon zmdi zmdi-hc-fw text-white"></i>
                                            </a>

                                            <button type="button" class="btn btn-primary waves-effect m-r-20 btn-sm" data-toggle="modal" data-target="#edit-category<?php echo $up->id;?>"><i class="icon zmdi zmdi-hc-fw text-white"></i></button>
                                       </td>
                                    </tr>
                                    <?php 
                                    include 'modal/editcategory.php';
                                }}?>
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


 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Terms & Conditions</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <fieldset> 
                    <div class="form-group form-float">
                       * Trinity International College accepts students between the ages of 10 and 16.
                    </div>
                    <div class="form-group form-float">
                       * Candidates in their final year in primary school may apply.
                    </div>
                    <div class="form-group form-float">
                       * Candidates should be at least 10 years old on resumption.
                    </div>
                    <div class="form-group form-float">
                       * Kindly note that the application attracts a non-refundable fee of N10,000 (N10,500 for online payments).
                    </div>
                </fieldset>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Jquery Core Js --> 

<!-- Default Size -->
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Create New category</h4>
            </div>
            <div class="modal-body"> 
                <div class="card">
                        <!-- <div class="header"> -->
                            <!-- <h4><strong>Choose </strong> Basic</h4> -->
                       <!--      <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                </li>
                            </ul> -->
                        <!-- </div> -->
                        <div class="body">
                            <div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-primary">
                                    <div class="panel-heading" role="tab" id="headingOne_1">
                                        <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_1" aria-expanded="true" aria-controls="collapseOne_1"> Upload with no caption </a> </h4>
                                    </div>
                                    <div id="collapseOne_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_1">
                                        <div class="panel-body"> 
                                            <form method="post" id="uploadForm" enctype="multipart/form-data">
                                                <div class="row clearfix">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">                  
                                                            <div class="card">
                                                                <div class="body">
                                                                    <p>upload multiple file (jpg, jpeg only) dimension (960x585)</p>
                                                                    <input type="file" class="dropify" data-allowed-file-extensions="jpg jpeg" name="images[]" id="images" multiple >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <!-- display upload status -->
                                                            <div id="uploadStatus"></div>
                                                            <!-- gallery view of uploaded images --> 
                                                            <div class="gallery" id="imagesPreview"></div>
                                                        </div>      
                                                        <div class="form-group">  
                                                            <button type="submit" name="uploadImage" class="btn btn-primary"> Submit </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-primary">
                                    <div class="panel-heading" role="tab" id="headingTwo_1">
                                        <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTwo_1" aria-expanded="false"
                                                aria-controls="collapseTwo_1"> Upload with caption(960x585) </a> </h4>
                                    </div>
                                    <div id="collapseTwo_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_1">
                                        <div class="panel-body"> 
                                <form method="post" id="uploadFormCaption" enctype="multipart/form-data">
                                                <div class="row clearfix">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <input type="text" name="caption" class="form-control" placeholder="Enter image caption">
                                                        </div>
                                                        <div class="form-group">                  
                                                            <div class="card">
                                                                <div class="body">
                                                                    <p>upload image file (jpg, jpeg only)</p>
                                                                    <input type="file" class="dropify" data-allowed-file-extensions="jpg jpeg" name="image" id="image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <!-- display upload status -->
                                                            <div id="uploadStatus"></div>
                                                            <!-- gallery view of uploaded images --> 
                                                            <div class="gallery" id="imagesPreview"></div>
                                                        </div>      
                                                        <div class="form-group">  
                                                            <button type="submit" name="uploadImageCaption" class="btn btn-primary"> Submit </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
                                                                    <p>upload image file (jpg, jpeg only)</p>
                                                                    <input type="file" class="dropify" data-allowed-file-extensions="jpg jpeg" name="imgDesc" id="imgDesc">
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

    // $('#uploadForm').ajaxForm({
    //     target:'#imagesPreview',
    //     beforeSubmit:function(){
    //         $('#uploadStatus').html('<img src="uploading.gif"/>');
    //     },
    //     success:function(){
    //         $('#images').val('');
    //         $('#uploadStatus').html('');
    //     },
    //     error:function(){
    //         $('#uploadStatus').html('Images upload failed, please try again.');
    //     }
    // });

    })
</script>
<script>
$("#checkAl").click(function () {
$('input:checkbox').not(this).prop('checked', this.checked);
});
</script>
</body>
</html>