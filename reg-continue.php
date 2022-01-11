<?php
include 'header.php';

if(isset($_POST['submit'])){
    
    $fn = check_input($_POST['fname']);
    $ln = check_input($_POST['lname']);
    $on = check_input($_POST['oname']);
    $ph = check_input($_POST['phone']);
    $dob = check_input($_POST['dob']);
    $em = check_input($_POST['email']);
    $gn = check_input($_POST['gender']);
    $st = check_input($_POST['state']);
    $nt = check_input($_POST['natl']);
    $lg = check_input($_POST['lga']);
    $sc = check_input($_POST['sch']);
    $pc = check_input($_POST['preclass']);
    $ec = check_input($_POST['enrolclass']);
    //Father's information
    $ffn = check_input($_POST['ffname']);
    $fph = check_input($_POST['fphone']);
    $fem = check_input($_POST['femail']);
    $fadd = check_input($_POST['faddress']);
    $foadd = check_input($_POST['foaddress']);
    $focc = check_input($_POST['foccu']);
    $code = check_input($_POST['code']);

    $date = date('Y-m-d');
    $amt = 10000;
   
    
   
    

        if(empty($fn)){
            echo  " <script>alert('First name field is required'); window.location='admission-portal' </script>";
        }
        if(strlen($fn) < 3){
            echo  " <script>alert('First name is too short'); window.location='admission-portal' </script>";
        }
        if(empty($ln)){
            echo  " <script>alert('Last name field is required'); window.location='admission-portal' </script>";
        }
        if(strlen($ln) < 3){
            echo  " <script>alert('Last name is too short'); window.location='admission-portal' </script>";
        }
        if(empty($em)){
            echo  " <script>alert('Email field is required'); window.location='admission-portal' </script>";
        }
        
        if(empty($ph)){
            echo  " <script>alert('Phone number field is required'); window.location='admission-portal' </script>";
        }
        if(strlen($ph) < 9){
            echo  " <script>alert('Please enter a valid phone number'); window.location='admission-portal' </script>";
        }
        if(empty($dob)){
            echo  " <script>alert('Date of birth is required'); window.location='admission-portal' </script>";
        }
        if(empty($gn)){
            echo  " <script>alert('Gender is required'); window.location='admission-portal' </script>";
        }
        if(empty($pc)){
            echo  " <script>alert('Present class is required'); window.location='admission-portal' </script>";
        }
        if(empty($ec)){
            echo  " <script>alert('Class enrol for is required'); window.location='admission-portal' </script>";
        }
        if(empty($ffn)){
            echo  " <script>alert('Father, Mother or Guardian name field is required'); window.location='admission-portal' </script>";
        }

        if(strlen($ffn) < 3){
            echo  " <script>alert('Father, Mother or Guardian name is too short'); window.location='admission-portal' </script>";
        }

        if(empty($fph)){
            echo  " <script>alert('Father, Mother or Guardian phone field is required'); window.location='admission-portal' </script>";
        }

        if(strlen($fph) < 9){
            echo  " <script>alert('Father, Mother or Guardian phone is invalid. enter atleast 9 digits'); window.location='admission-portal' </script>";
        } 
        if(empty($fem)){
            echo  " <script>alert('Father, Mother or Guardian email field is required'); window.location='admission-portal' </script>";
        }
        else{


             //processing school logo
        if (is_uploaded_file($_FILES ['payment'] ['tmp_name'])) {
    
            //Student Passport
                    $imgFile = $_FILES['payment']['name'];
                    $tmp_dir = $_FILES['payment']['tmp_name'];
                    $imgSize = $_FILES['payment']['size'];
    
                    //Processing the image
                    {
                    $upload_dir = 'upload/'; // upload directory
    
                    $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
    
                    // valid image extensions
                    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx'); // valid extensions
    
                    // rename uploading image
                    $proImage = rand(1000,1000000).".".$imgExt;
    
                    // allow valid image file formats
                    if(in_array($imgExt, $valid_extensions)){			
                            // Check file size '500MB'
                            if($imgSize < 500000000){
                                    move_uploaded_file($tmp_dir,$upload_dir.$proImage);
                                    
                            }else{
                                echo "<script> alert('Oop! Image size is too large !!!');</script>";
                            }
    
                    }
    
                    }
    
            }



            
            $prc = dbConnect()->prepare("UPDATE student SET  mname=?, gender=?, foaddr=?, faddr=?, 
                preclass=?,  preschool=?, dob=?, lga=?, nationality=?, state=?, created=?, examcode=? WHERE studentCode=? ");
            if($prc->execute([$on, $gn,  $foadd, $fadd,  $pc,  $sc, $dob, $lg, $nt, $st, $date, $code, $code])){

                $pym = dbConnect()->prepare("INSERT INTO payment SET studentcode=?, amount=?, evidence=? ");
                $pym -> execute([$code,$amt, $proImage]);
                
                    $frm = 'info@trinityng.com';
                    $name = $fn.' '.$ln;
                    $recipient = $em;
                    $sub = "Trinity International College Enrolment";
                    $link ='https://www.trinityng.com';
                    $msg ='Thank you for registering with Trinity International College, Ofada, Ogun State. To upload payment evidence and passport, click https://www.trinityng.com/congratulations/';

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


                   $to = $em;

                   $subject = 'Trinity International College Enrolment';

                   $headers = "From: " . $frm. "\r\n";
                   $headers .= "Reply-To: ". $frm . "\r\n";
                   $headers .= "MIME-Version: 1.0\r\n";
                   $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

                       if (mail($to, $subject, $message, $headers)) {
                           echo  " <script>alert('Registration successful'); window.location='succes?code=$code' </script>";
                       }else{
                           echo  " <script>alert('Could not send email'); window.location='succes?code=$code' </script>";
                       }
            
                
            
                    }
                    else{
                        echo  " <script>alert('Operation Failed'); window.location='admission-portal' </script>";
                    }
            

        }
    
    

    
}
    

 function check_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
