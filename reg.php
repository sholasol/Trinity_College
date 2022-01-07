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
    
    //mother's information
    $mfn = check_input($_POST['mfname']);
    $mph = check_input($_POST['mphone']);
    $mem = check_input($_POST['memail']);
    $madd = check_input($_POST['maddress']);
    $moadd = check_input($_POST['moaddress']);
    $mocc = check_input($_POST['moccu']);
    
    //Guardian's information
    $gfn = check_input($_POST['gfname']);
    $gph = check_input($_POST['gphone']);
    $gem = check_input($_POST['gemail']);
    $gadd = check_input($_POST['gaddress']);
    $goadd = check_input($_POST['goaddress']);
    $gocc = check_input($_POST['goccu']);
    
    //Student Code
    $length = 7;    
    $std = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
    $date = date('Y-m-d');
    
     //echo  $em;
    
    //check existing user
        $que = dbConnect()->prepare("SELECT * FROM users WHERE email=?");
        $que->execute([ $em]);

        if($que->rowcount() >0){
            echo  " <script>alert('$em already exists'); window.location='admission-portal' </script>";
        }else{
    
   
    

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
        if(empty($ffn) && empty($mfn) && empty($gfn)){
            echo  " <script>alert('Father, Mother or Guardian name field is required'); window.location='admission-portal' </script>";
        }

        if(strlen($ffn) < 3 && strlen($mfn) < 3 && strlen($gfn) < 3){
            echo  " <script>alert('Father, Mother or Guardian name is too short'); window.location='admission-portal' </script>";
        }

        if(empty($fph) && empty($mph) && empty($gph)){
            echo  " <script>alert('Father, Mother or Guardian phone field is required'); window.location='admission-portal' </script>";
        }

        if(strlen($fph) < 9 && strlen($mph) < 9 && strlen($gph) < 9){
            echo  " <script>alert('Father, Mother or Guardian phone is invalid. enter atleast 9 digits'); window.location='admission-portal' </script>";
        } 
        if(empty($fem) && empty($mem) && empty($gem)){
            echo  " <script>alert('Father, Mother or Guardian email field is required'); window.location='admission-portal' </script>";
        }
        else{
            
            $prc = dbConnect()->prepare("INSERT INTO student SET studentCode=?, fname=?, mname=?, lname=?, email=?, gender=?, phone=?, ffname=?, femail=?, fphone=?, foaddr=?, faddr=?, foccu=?, 
                 mfname=?, memail=?, mphone=?, moaddr=?, maddr=?, moccu=?, gfname=?, gphone=?, gemail=?, goaddr=?, gaddr=?, goccu=?, preclass=?, classenrol=?, preschool=?, dob=?, lga=?, nationality=?, state=?, created=?, examcode=?");
            if($prc->execute([$std, $fn, $on, $ln, $em, $gn, $ph, $ffn, $fem, $fph, $foadd, $fadd, $focc, $mfn, $mem, $mph, $moadd, $madd, $mocc, $gfn, $gph, $gem, $goadd, $gadd, $gocc, $pc, $ec, $sc, $dob, $lg, $nt, $st, $date, $std])){
                
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
                           echo  " <script>alert('Registration successful'); window.location='success?code=$std' </script>";
                       }else{
                           echo  " <script>alert('Could not send email'); window.location='success?code=$std' </script>";
                       }
            
                
            
                    }
                    else{
                        echo  " <script>alert('Operation Failed'); window.location='admission-portal' </script>";
                    }
            

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
