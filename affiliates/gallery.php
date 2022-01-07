<?php 
include 'head.php';


                
if(isset($_POST['submit'])){
    $title = check_input($_POST['title']);
   
    if(empty($_POST['title'])){
        $e='Please fill in the title';
        echo "<div class='form control alert alert-danger alert-dismissible fade show' role='alert'>
            <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Oops!</strong> $e.
        </div>";
    }else{
        
        $date = date('Y-m-d H-m-s');

        $query = dbConnect()->prepare("SELECT * FROM gallery WHERE title=?");
        $query->execute([$title]);
        if($query->rowcount() >0){
            $e='Category already exist !!!';
            echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
                    <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Oops! </strong> $e.
                </div>";
        }else{
            $ins = dbConnect()->prepare("INSERT INTO gallery(title,created) VALUES (?,?)");
            $ins->execute([$title,$date]);
            if($ins){
                // CREATE TABLE IF NOT EXISTS $title 
                // (id INT NOT NULL AUTO_INCREMENT, 
                // PRIMARY KEY(id), 
                // image TEXT(100), 
                // g_id
                // Time INT(10), Type INT(6), 
                // World VARCHAR(32);
                echo $title;
                $newGal = "CREATE TABLE IF NOT EXISTS $title (
                      `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                      `s_category` int(11) NULL,
                      `image` text(100) NULL,
                      `g_id` int(11) NULL,
                      `title` varchar(200) NULL,
                      `description` varchar(300) NULL,
                      `created` datetime NULL
                    )";
                    if (!$newGal) {
                        echo "Error creating SQL table: ";
                        
                    } 
                 $e='Successfully created !!!';
                 echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
                    <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Congratulations</strong> $e.
                </div>";
            }else{
                $e='Oop! error creating.';
                echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
                    <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Oops! </strong> $e.
                </div>";
            }

    }
}
}

if(isset($_POST['update-gallery'])){
    if(isset($_POST['title'])){
        $updID = $_POST['edit_id'];
        $date = date('Y-m-d H-m-s');
    $sql_update=dbConnect()->prepare("UPDATE `gallery` SET 
    title='$_POST[title]',
    created='$date'
    where id=?");  
    $sql_update->execute([$updID]);
    if($sql_update){
    echo "<script> alert('Updated');window.location='copy' </script>";
    }
    }
}


 if(isset($_GET['dgallery']) && isset($_GET['ngallery'])){
     $dec = $_GET['dgallery'];
     $dnm = $_GET['ngallery'];
     $del = dbConnect()->prepare("DELETE FROM gallery WHERE id='$dec'");
     $del->execute();
     if($del){
         $dell = dbConnect()->prepare("DROP TABLE $dnm");
         $dell->execute();
         if($dell){
         echo  " <script> alert('Operation Successful');window.location='copy'</script>";
         }
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
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Trinity International College</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home"><i class="zmdi zmdi-account-box"></i> </a></li>
                        <li class="breadcrumb-item active">School Gallery</li>
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
                            <h2><strong>List of Categories</strong> 
                                <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">New Category</button>
                                
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                            <table class="table table-hover c_table theme-color dataTable js-exportable">
                                <thead>
                                    <tr>                                       
                                        <th style="width:50px;"> </th>
                                        <th>Title</th>
                                        <th>status </th>
                                        <th> Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 

                                    $user = DB::getInstance()->query("SELECT * FROM gallery");
                                    if($user ->error()){
                                        echo 'No record in the database';
                                    }else{
                                        $i = 0;
                                        foreach($user->results() as $gal){
                                           $i++;
                                    ?>
                                    <tr>
                                        <td><?php echo $i; ?> </td>
                                       <td> 
                                            <a class="text-success" href="category?g_id=<?php echo $gal->id;?>&category=<?php echo $gal->title;?>"><?php echo $gal->title; ?></a>
                                         </td>
                                       <td> <label class="badge <?php if($gal->status ==0){echo 'badge-danger';}else{echo 'badge-success';} ?>"> <?php if($gal->status ==0){echo 'Disabled';}else{echo 'Approved';} ?> </label></td>
                                       <td> <?php echo $gal->created; ?></td>
                                       <td>
                                        <a type="button" class="text-success" data-toggle="modal" data-target="#edit-gallery<?php echo $gal->id;?>">
                                        edit</a>

                                        <a href="?dgallery=<?php echo ($gal->id);?>&ngallery=<?php echo ($gal->title);?>" class="fas fa-trash text-danger"  onclick="return confirm('Are you sure to delete this category? deleting this will result in loss of images associated with this category.')" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to delete data">delete</a>

                                       <input <?php if($gal->status==1){echo 'checked';}?>  type="checkbox" class="activateUser" id="<?php echo ($gal->id);?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Check to activate branch" value="<?php echo $gal->status;?>">
                                       </td>
                                    </tr>
                                    <?php 
                                    //Update Modal goes here
                                    include 'edit-gallery.php';
                                }}?>
                                </tbody>
                            </table>
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
                <form method="post">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">                                    
                                <input type="text" class="form-control" name="title" placeholder="Enter gallery title" />
                            </div>
                            <div class="form-group">   
                            <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">                                
                                <button type="submit" name="submit" class="btn btn-primary"> Submit </button>
                            </div>
                        </div>
                    </div>
                </form>
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
        })
    })
</script>
</body>
</html>