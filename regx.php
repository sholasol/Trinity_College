<?php
include 'header.php';

if(isset($_POST['submit'])){
    
    $fn = check_input($_POST['fname']);
    $ln = check_input($_POST['lname']);
    $ec = check_input($_POST['enrolclass']);
    //Father's information
    $parent = check_input($_POST['parent']);
    $ph = check_input($_POST['phone']);
    $em = check_input($_POST['email']);
    $prof = check_input($_POST['profession']);
    
   
    //Student Code
    $length = 7;    
    $std = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
    $date = date('Y-m-d');
    
    
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
    
    if(empty($ec)){
        echo  " <script>alert('Class enrol for is required'); window.location='admission-portal' </script>";
    }

    if(empty($prof)){
        echo  " <script>alert('Your profession is required'); window.location='admission-portal' </script>";
    }
    if(empty($parent)){
        echo  " <script>alert('Your full name is required'); window.location='admission-portal' </script>";
    }
   
    else{
        
        $prc = dbConnect()->prepare("INSERT INTO student SET studentCode=?, fname=?, lname=?, email=?, phone=?, ffname=?,  foccu=?, 
            classenrol=?,  examcode=?");
        if($prc->execute([$std, $fn, $ln, $em, $ph,$parent, $prof, $ec, $std])){
            
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
    

 function check_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
