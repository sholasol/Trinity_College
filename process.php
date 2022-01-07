<?php 
include 'header.php';

if(isset($_POST['submit'])){
    
    
   //$phone = check_input($_POST['phone']);
   // Allow +, - and . in phone number
//    $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
    // Remove "-" from number
//    $phone_to_check = str_replace("-", "", $filtered_phone_number);
    
    if(empty($_POST['fname'])){
    
     echo  " <script>alert('Please fill in the child's first name'); window.location='admission-portal' </script>";
    }
    else{
        echo  " <script>alert('Done'); window.location='admission-portal' </script>";
    }
    /*
    elseif(empty($_POST['lname'])){
    
    echo  " <script>alert('Please fill in the child's last name'); </script>";
    }
    elseif(empty($_POST['dob'])){
    
    echo  " <script>alert('Please fill in child's date of birth'); </script>";
    }
    elseif(empty($_POST['email'])){
    
    echo  " <script>alert('Please fill in your email or child's email); </script>";
    }
    elseif(empty($_POST['phone'])){
    
    echo  " <script>alert('Please fill in your phone number or child's phone number'); </script>";
    }
    elseif(empty($_POST['ffname'])){
    
    echo  " <script>alert('Please fill in fathers's full name'); </script>";
    }
    elseif(empty($_POST['fphone'])){
    
    echo  " <script>alert('Please fill in fathers's phone number'); </script>";
    }
    elseif(empty($_POST['femail'])){
    
    echo  " <script>alert('Please fill in fathers's email'); </script>";
    }
    elseif(empty($_POST['mfname'])){
    
    echo  " <script>alert('Please fill in mothers's full name'); </script>";
    }
    elseif(empty($_POST['memail'])){
    
    echo  " <script>alert('Please fill in mother's email '); </script>";
    }
    elseif(empty($_POST['mphone'])){
    
    echo  " <script>alert('Please fill in mother's phone number'); </script>";
    }elseif (strlen($phone_to_check) < 9 || strlen($phone_to_check) > 14) {
        echo  " <script>alert('Phone number is invalid'); </script>";
     }else{
         
        $fname = check_input($_POST['fname']);
        $lname = check_input($_POST['lname']);
        $email = check_input($_POST['email']);
        $phone = check_input($_POST['phone']);
        $date = date('Y-m-d'); 
        $salt = "cxÐŽàuH@ÓƒåUËPžÝþÊâ0sþna”È(ø ";
        $pw =  Hash::make($phone, $salt);
             
        
        $mname = check_input['mname'];
        $dob   = check_input['dob'];
        $gender = check_input['gender'];
        $origin = check_input['origin'];
        $natl = check_input['natl'];
        $lga = check_input['lga'];
        $sch = check_input['sch'];
        $preclass = check_input['preclass'];
        $enrolclass = check_input['enrolclass'];


        //Father
        $ffname = check_input['ffname'];
        $faddress= check_input['faddress'];
        $fphone = check_input['fphone'];
        $femail = check_input['femail'];
        $foadd= check_input['foaddress'];
        $foccu = check_input['foccu'];

        //Mother
        $mfname = check_input['mfname'];
        $maddress= check_input['maddress'];
        $mphone = check_input['mphone'];
        $memail = check_input['memail'];
        $moadd= check_input['moaddress'];
        $moccu = check_input['moccu'];

        //Guardian
        $gfname = check_input['gfname'];
        $gaddress= check_input['gaddress'];
        $gphone = check_input['gphone'];
        $gemail = check_input['gemail'];
        $goadd= check_input['goaddress'];
        $goccu = check_input['goccu'];
        
        //check existing user
        $que = dbConnect()->prepare("SELECT * FROM users WHERE email=?");
        $que->execute([ $email]);

        if($que->rowcount() >0){
            
            //Uploading Passport
             if (is_uploaded_file($_FILES ['passport'] ['tmp_name'])) {
    
            //Student Passport
                    $imgFile = $_FILES['passport']['name'];
                    $tmp_dir = $_FILES['passport']['tmp_name'];
                    $imgSize = $_FILES['passport']['size'];

                    //Processing the image
                    {
                    $upload_dir = 'upload/'; // upload directory

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

            }
            
            //Uploading Payment
            if (is_uploaded_file($_FILES ['payment'] ['tmp_name'])) {       
        
        //Student Birthcertificate
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
        $proImage_birth = rand(1000,1000000).".".$imgExt;
        $payment = $proImage_birth;

        // allow valid image file formats
        if(in_array($imgExt, $valid_extensions)){			
                // Check file size '500MB'
                if($imgSize < 500000000){
                        move_uploaded_file($tmp_dir,$upload_dir.$proImage_birth);
                }
                
        }
        
            }
            
                }
            
            
            //Student Code
            $length = 7;    
            $std = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
            
            $ins = dbConnect()->prepare("INSERT INTO student(fname,lname,email,phone,status, created, studentcode) VALUES (?,?,?,?,?,?,?,?)");
            $ins->execute([$fname, $lname, $email, $phone, 'Unpaid', $date, $std]);
            if($ins){

                //process student information without payment evidence
               $upd = dbConnect()->prepare("INSERT INTO student SET  fname=:fn, lname=:ln, email=:eml , mname=:mn, gender=:gnd,  ffname=:ffn, femail=:feml,
               fphone=:fph, foaddr=:foadr, faddr=:faddr, foccu=:focc, mfname=:mfn, memail=:meml, mphone=:mph, 
               moaddr=:moaddr, maddr=:maddr, moccu=:mocc, gfname=:gfn, gphone=:gph, gemail=:geml, goaddr=:goaddr,
               gaddr=:gaddr, goccu=:gocc, preclass=:precls, classenrol=:cenrol, lga=:lga, nationality=:natl,
               preschool=:presch, dob=:dob, state=:state, passport=:psp, payment=:pym");
               
                  $upd->bindParam(':fn', $fname);
                  $upd->bindParam(':ln', $lname);
                  $upd->bindParam(':eml', $email);
                  
                  
                  $upd->bindParam(':mn', $mname);
                  $upd->bindParam(':gnd', $gender);

                  $upd->bindParam(':ffn', $ffname);
                  $upd->bindParam(':feml', $femail);
                  $upd->bindParam(':fph', $fphone);
                  $upd->bindParam(':foadr', $foadd);
                  $upd->bindParam(':faddr', $faddress);
                  $upd->bindParam(':focc', $foccu);
                  $upd->bindParam(':mfn', $mfname);
                  $upd->bindParam(':meml', $memail);
                  $upd->bindParam(':mph', $mphone);
                  $upd->bindParam(':moaddr', $moadd);
                  $upd->bindParam(':maddr', $maddress);
                  $upd->bindParam(':mocc', $moccu);
                  $upd->bindParam(':gfn', $gfname);
                  $upd->bindParam(':gph', $gphone);
                  $upd->bindParam(':geml', $gemail);
                  $upd->bindParam(':goaddr', $goadd);
                  $upd->bindParam(':gaddr', $gaddress);
                  $upd->bindParam(':gocc', $goccu);


                  $upd->bindParam(':precls', $preclass);
                  $upd->bindParam(':cenrol', $enrolclass);
                  $upd->bindParam(':lga', $lga);
                  $upd->bindParam(':natl', $natl);
                  $upd->bindParam(':presch', $sch);
                  $upd->bindParam(':dob', $dob);
                  $upd->bindParam(':state', $origin);
                  $upd->bindParam(':cen', $center);
                  $upd->bindParam(':psp', $pspt);
                  $upd->bindParam(':pym', $payment);
                  if($upd->execute()){
                      
                       //Sending Email
                                 $frm = 'info@trinityng.com';
                                 $name = $fname.' '.$lname;
                                 $recipient = $email;
                                 $sub = "Trinity International College Enrolment";
                                 $link ='https://www.trinityng.com/student/';
                                 $msg ='Thank you for registering with Trinity International College, Ofada, Ogun State.To complete your registration on the admission portal, kindly login at  www.trinityng.com/student with your email and phone number' .'('.$email.', '. $phone.')';
                                
                                    //Email message
                                  $message = '<html><body>';
                                  $message .= '<img src="http://trinityng.com/assets/img/logo.png" alt="Tricol" />';
                                  $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
                                  $message .= "<tr><td><strong>Registration:</strong> </td><td>" . $sub . "</td></tr>";
                                  $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
                                  $message .= "<tr><td><strong>Username:</strong> </td><td>" . $email . "</td></tr>";
                                  $message .= "<tr><td><strong>Password:</strong> </td><td>" . $phone . "</td></tr>";
                                  $message .= "<tr><td><strong>Regsitration Portal:</strong> </td><td><a href='$link'>" .$link. "</a></td></tr>";
                                  
                                  $message .= "<tr><td><strong>Message:</strong> </td><td>" .$msg. "</td></tr>";
                                  

                                  $message .= "</table>";
                                  $message .= "</body></html>";
                                
                                
                                $to = $email;

                                $subject = 'Trinity International College Enrolment';

                                $headers = "From: " . $frm. "\r\n";
                                $headers .= "Reply-To: ". $frm . "\r\n";
                                $headers .= "MIME-Version: 1.0\r\n";
                                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

                                if (mail($to, $subject, $message, $headers)) {
                                    $e="Congratulation! Your form has been submitted! Please upload the bank evidence."; 
                                    echo  " <script>alert('$e'); window.location='admission-portal'</script>";
                                }
                                
                                $e="Congratulation! Your form has been submitted! Please upload the bank evidence."; 
                                    echo  " <script>alert('$e'); window.location='admission-portal'</script>";
                      
                      
                      

                      
                  }
            }
       
        }

     
    }
    
    */
    
}


// function check_input($data) {
//    $data = trim($data);
//    $data = stripslashes($data);
//    $data = htmlspecialchars($data);
//    return $data;
//}

//$amount = $_SESSION['amount']; 
?>
