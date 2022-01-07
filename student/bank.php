<?php 
include 'head.php'; 

if(isset($_GET['code'])){
    $codes = $_GET['code'];
}else{
   $codes = $std_code;
}

$q = dbConnect()->prepare("SELECT * FROM student WHERE studentcode=?");
$q->execute([$codes]);
$rx = $q->fetch();


$amount = 10000;
$mode = 'bank';



$sts = "Paid";
$dt =date('Y-m-d');
$payfor = "Entrance Examination Fee";
$ref ="";

//Exam Code
    function random_num($size) {
        $length = $size;
        $key = '';
        $keys = range(0, 5);

            for ($i = 0; $i < $length; $i++) {
                    $key .= $keys[array_rand($keys)];
            }
            return  $key;
    }
    $code= random_num(5);
    
   //Student Code
    $length = 7;    
    $std = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
    
  if(isset($_POST['submit'])){ 
      
      
      
      //check if a file is selected
  if (is_uploaded_file($_FILES ['evidence'] ['tmp_name'])) {
      //payment evidence file
      $imgFile = $_FILES['evidence']['name'];
        $tmp_dir = $_FILES['evidence']['tmp_name'];
        $imgSize = $_FILES['evidence']['size'];
        
        //Processing the image
        {
        $upload_dir = '../upload/'; // upload directory

        $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension

        // valid image extensions
        $valid_extensions = array('jpeg', 'jpg', 'png', 'pdf', 'doc', 'docx', 'gif'); // valid extensions

        // rename uploading image
        $proImage = rand(1000,1000000).".".$imgExt;
        $pspt = $proImage;

        // allow valid image file formats
        if(in_array($imgExt, $valid_extensions)){			
                // Check file size '500MB'
                if($imgSize < 500000000){
                        move_uploaded_file($tmp_dir,$upload_dir.$proImage);
                }
                
        }
        
        }
      
      
      //processing payment
      $pym =  dbConnect()->prepare("INSERT INTO payment SET student=:std, 
        amount=:amt, mode=:mode, refrence=:ref, payfor=:pay, date=:dt, evidence=:evi, studentcode=:scode
     ");
        $pym->bindParam(':std', $uid);
        $pym->bindParam(':amt', $amount);
        $pym->bindParam(':mode', $mode);
        $pym->bindParam(':ref', $ref);
        $pym->bindParam(':pay', $payfor);
        $pym->bindParam(':dt', $dt);
        $pym->bindParam(':evi', $proImage);
        $pym->bindParam(':scode', $codes);
        if($pym->execute()){
            
            //update payment status
            $upd = dbConnect()->prepare("UPDATE student SET  status='Paid' WHERE studentcode='$codes'");
            $upd->execute();
            
           $e="Congratulations! Download the examination timetable here."; 
             echo  " <script>alert('$e'); window.location='profiles?code=$codes'</script>";
            
        }else{
            $e="Oops! Unable to process your payment. try again"; 
             echo  " <script>alert('$e'); window.location='evidence'</script>";
        }
    }else{
        $e="Oops! kindly upload the payment evidence."; 
             echo  " <script>alert('$e'); window.location='evidence'</script>";
    }
    
    

  }




?>

<!-- Main Content -->

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Upload Payment Evidence</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home"><i class="zmdi zmdi-home"></i> Return Home</a></li>
                </ul>
                <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <?php // include 'top-section.php'; ?>
        
        
        <div class="row clearfix">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="card project_list">
                        <div class="table-responsive">
                            <form id="wizard_with_validation" method="POST"  enctype="multipart/form-data">
                                <input type="hidden" name="amt" value="10500"/>
                                
                                <h3>Payment </h3>
                                <fieldset> 
                                    <br><br>
                                    <div class="form-group form-float">
                                        <label>To pay with bank code follow the following instructions:</label>
                                        <label>Walk into the closest UBA bank.</label>
                                        <label>Pick up and fill a deposit slip (In place of depositor's name, add the following code: RandomCode )</label>
                                        <label>Bank details:</label>
                                        <label>Account Name: Trinity International College</label>
                                        <label>Bank Name: UBA</label>
                                        <label>Account No.: 1019572249</label>

                                    </div>
                                    <div class="form-group form-float ">
                                        <label>Payment Evidence</label>
                                        <input type="file" class="form-control"  name="evidence" required>
                                    </div>
                                    <div class="form-group form-float col-md-6">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit Application</button>
                                   </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>

<?php include 'foot.php' ;?>