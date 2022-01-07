<?php 
include 'header.php';

if(isset($_GET['code'])){
   
$cd = $_GET['code']; 
}

$get = dbConnect()->prepare("SELECT * FROM student WHERE studentCode=?");
$get->execute([$code]);
$rw = $get->fetch();
$name = $rw['fname'].' '.$rw['lname'];
$em = $rw['email'];
$ph  =$rw['phone'];

if(isset($_POST['submit'])){
    
    
    
    if($_FILES['payment']['size'] == 0 )
    {
        echo  " <script>alert('Please upload payment evidence'); window.location='congratulations' </script>";
    }
    
    if($_FILES['passport']['size'] == 0 )
    {
        echo  " <script>alert('Please upload a passport photograph'); window.location='congratulations' </script>";
    }else{
        
        //Student Passport
        $imgFilePsp = $_FILES['passport']['name'];
        $tmp_dirpsp = $_FILES['passport']['tmp_name'];
        $imgSizepsp = $_FILES['passport']['size'];
        
        //Processing the image
        {
        $upload_dirpsp = 'upload/'; // upload directory

        $imgExtpsp = strtolower(pathinfo($imgFilePsp,PATHINFO_EXTENSION)); // get image extension

        // valid image extensions
        $valid_extensions = array('jpeg', 'jpg', 'png', 'pdf', 'doc', 'docx', 'gif'); // valid extensions

        // rename uploading image
        $proImagepsp = rand(1000,1000000).".".$imgExtpsp;
        $pspt = $proImagepsp;

        // allow valid image file formats
        if(in_array($imgExtpsp, $valid_extensions)){			
                // Check file size '500MB'
                if($imgSizepsp < 500000000){
                        move_uploaded_file($tmp_dirpsp,$upload_dirpsp.$proImagepsp);
                }
                
        }
        
        }
        
        
        
        //Student Payment
        $imgFile = $_FILES['payment']['name'];
        $tmp_dir = $_FILES['payment']['tmp_name'];
        $imgSize = $_FILES['payment']['size'];
        
        //Processing the image
        {
        $upload_dir = 'upload/'; // upload directory

        $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension

        // valid image extensions
        $valid_extensions = array('jpeg', 'jpg', 'png', 'pdf', 'doc', 'docx', 'gif'); // valid extensions

        // rename uploading image
        $proImage = rand(1000,1000000).".".$imgExt;
        $payment = $proImage;

        // allow valid image file formats
        if(in_array($imgExt, $valid_extensions)){			
                // Check file size '500MB'
                if($imgSize < 500000000){
                        move_uploaded_file($tmp_dir,$upload_dir.$proImage);
                }
                
        }
        
        }
        
        
        $upd = dbConnect()->prepare("UPDATE student SET payment=?, passport=?, status=? WHERE studentCode=?");
        if($upd->execute([$payment, $pspt, 'Paid', $cd])){
            
                $frm = 'info@trinityng.com';
                    //$name = $fn.' '.$ln;
                    $recipient = $em;
                    $sub = "Student Enrolment Enrolment";
                    $link ='https://www.trinityng.com';
                    $msg ='Notification of new student registration';

                       //Email message
                     $message = '<html><body>';
                     $message .= '<img src="http://trinityng.com/assets/img/logo.png" alt="Tricol" />';
                     $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
                     $message .= "<tr><td><strong>Registration:</strong> </td><td>" . $sub . "</td></tr>";
                     $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
                     $message .= "<tr><td><strong>Username:</strong> </td><td>" . $em . "</td></tr>";
                     $message .= "<tr><td><strong>Password:</strong> </td><td>" . $ph . "</td></tr>";

                     $message .= "<tr><td><strong>Message:</strong> </td><td>" .$msg. "</td></tr>";


                     $message .= "</table>";
                     $message .= "</body></html>";


                   $to = $frm;

                   $subject = 'Trinity International College Enrolment';

                   $headers = "From: " . $frm. "\r\n";
                   $headers .= "Reply-To: ". $frm . "\r\n";
                   $headers .= "MIME-Version: 1.0\r\n";
                   $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

                       if (mail($to, $subject, $message, $headers)) {
                           echo  " <script>alert('Operation successful'); window.location='index' </script>";
                       }
            
            
            
        }else{
            echo  " <script>alert('Operation failed'); window.location='congratulations' </script>";
        }
    }
}
?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url(assets/img/art.jpg);">
        <div class="container">
            <h2> Supporting Document </h2>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index">Home</a> <span><i class="fa fa-angle-double-right"></i> Upload Document </span></li>
            </ul>
        </div>
    </div>
</div>



<div class="cart-main-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6 col-md-6">
                        <div class="cart-tax">
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gray">Upload Supporting Document</h4>
                            </div>
                            <div class="tax-wrapper">
                                <form method="POST" enctype="multipart/form-data" style="width:100% !important;">
                                <div class="tax-select-wrapper">
                                    <div class="tax-select">
                                        <label>
                                            * Payment Evidence
                                        </label>
                                        <input type="file" name="payment">
                                    </div>
                                    <div class="tax-select">
                                        <label>
                                            * Passport Photograph
                                        </label>
                                        <input type="file" name="passport">
                                    </div>
                                    <button name="submit" class="btn btn-primary btn-block" type="submit">Upload</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="brand-logo-area pb-130">
    <div class="container">
        <div class="brand-logo-active owl-carousel">
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/1.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/2.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/3.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/4.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/1.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/2.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/3.png" alt=""></a>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php';?>

</body>

</html>