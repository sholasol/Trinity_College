<?php 
include 'head.php';

if(isset($_POST['submit'])){
    $stdnt = $_POST['std'];
    
    if(empty($_POST['fname'])){
    
    echo  " <script>alert('Please fill in the child's first name'); window.location='home?code=$stdnt'</script>";
    }elseif(empty($_POST['lname'])){
    
    echo  " <script>alert('Please fill in the child's last name'); location='home?code=$stdnt'</script>";
    }
    elseif(empty($_POST['dob'])){
    
    echo  " <script>alert('Please fill in child's date of birth'); location='home?code=$stdnt'</script>";
    }
    elseif(empty($_POST['email'])){
    
    echo  " <script>alert('Please fill in your email or child's email); location='home?code=$stdnt'</script>";
    }
    elseif(empty($_POST['phone'])){
    
    echo  " <script>alert('Please fill in your phone number or child's phone number'); location='home?code=$stdnt'</script>";
    }
    elseif(empty($_POST['ffname'])){
    
    echo  " <script>alert('Please fill in fathers's full name'); location='home?code=$stdnt'</script>";
    }
    elseif(empty($_POST['fphone'])){
    
    echo  " <script>alert('Please fill in fathers's phone number'); location='home?code=$stdnt'</script>";
    }
    elseif(empty($_POST['femail'])){
    
    echo  " <script>alert('Please fill in fathers's email'); location='home?code=$stdnt'</script>";
    }
    elseif(empty($_POST['mfname'])){
    
    echo  " <script>alert('Please fill in mothers's full name'); location='home?code=$stdnt'</script>";
    }
    elseif(empty($_POST['memail'])){
    
    echo  " <script>alert('Please fill in mother's email '); location='home?code=$stdnt'</script>";
    }
    elseif(empty($_POST['mphone'])){
    
    echo  " <script>alert('Please fill in mother's phone number'); location='home?code=$stdnt'</script>";
    }else{
        
        
//sanitizing 
$sanitizer = filter_var_array($_POST, FILTER_SANITIZE_STRING);
$amount = $sanitizer['amt'];
$term = $sanitizer['term'];
$fname = $sanitizer['fname'];
$lname = $sanitizer['lname'];
$mname = $sanitizer['mname'];
$phone = $sanitizer['phone'];
$eml   = $sanitizer['email'];
$dob   = $sanitizer['dob'];
$gender = $sanitizer['gender'];
$origin = $sanitizer['origin'];
$natl = $sanitizer['natl'];
$lga = $sanitizer['lga'];
$sch = $sanitizer['sch'];
$preclass = $sanitizer['preclass'];
$enrolclass = $sanitizer['enrolclass'];
$mode = $sanitizer['payment'];
$code = $sanitizer['code'];

$center = $sanitizer['center'];

//Father
$ffname = $sanitizer['ffname'];
$faddress= $sanitizer['faddress'];
$fphone = $sanitizer['fphone'];
$femail = $sanitizer['femail'];
$foadd= $sanitizer['foaddress'];
$foccu = $sanitizer['foccu'];

//Mother
$mfname = $sanitizer['mfname'];
$maddress= $sanitizer['maddress'];
$mphone = $sanitizer['mphone'];
$memail = $sanitizer['memail'];
$moadd= $sanitizer['moaddress'];
$moccu = $sanitizer['moccu'];

//Guardian
$gfname = $sanitizer['gfname'];
$gaddress= $sanitizer['gaddress'];
$gphone = $sanitizer['gphone'];
$gemail = $sanitizer['gemail'];
$goadd= $sanitizer['goaddress'];
$goccu = $sanitizer['goccu'];



$_SESSION['code']= $code;
$_SESSION['amt']= $amount;
$_SESSION['term']= $term;
$_SESSION['fname'] = $fname;
$_SESSION['lname'] = $lname;
$_SESSION['mname'] = $mname;
$_SESSION['phone'] = $phone;
$_SESSION['email'] = $eml;
$_SESSION['dob']  = $dob;
$_SESSION['gender'] = $gender;
$_SESSION['origin'] = $origin;
$_SESSION['natl'] = $natl;
$_SESSION['lga'] = $lga;
$_SESSION['sch'] = $sch;
$_SESSION['preclass'] = $preclass;
$_SESSION['enrolclass'] = $enrolclass;
$_SESSION['payment'] = $mode;
$_SESSION['center'] = $center;


//Father
$_SESSION['ffname'] = $ffname;
$_SESSION['faddress']= $faddress;
$_SESSION['fphone'] = $fphone;
$_SESSION['femail'] = $femail;
$_SESSION['foaddress']= $foadd;
$_SESSION['foccu'] = $foccu;

//Mother
$_SESSION['mfname'] = $mfname;
$_SESSION['maddress']= $maddress;
$_SESSION['mphone'] = $mphone;
$_SESSION['memail'] = $memail;
$_SESSION['moaddress']= $moadd;
$_SESSION['moccu'] = $moccu;

//Guardian
$_SESSION['gfname'] = $gfname;
$_SESSION['gaddress']= $gaddress;
$_SESSION['gphone'] = $gphone;
$_SESSION['gemail'] = $gemail;
$_SESSION['goaddress']= $goadd;
$_SESSION['goccu'] = $goccu;


$sts = "Paid";

//
////echo  " <script>alert('$som'); window.location='home'</script>";
//if(empty($dob)){
//    echo  " <script>alert('Please enter child's date of birth); window.location='home'</script>";
//}


$db = dbConnect()->prepare("SELECT * FROM student WHERE studentcode='$code'");
$db->execute();
$rx = $db->fetch();
$pp = $rx['passport'];
$bircert = $rx['birthcert'];
$cen = $rx['center'];

if($pp ==''){
   if (is_uploaded_file($_FILES ['passport'] ['tmp_name'])) {
    
//Student Passport
        $imgFile = $_FILES['passport']['name'];
        $tmp_dir = $_FILES['passport']['tmp_name'];
        $imgSize = $_FILES['passport']['size'];
        
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
    
} 
}

if($bircert ==''){
    
 if (is_uploaded_file($_FILES ['bcert'] ['tmp_name'])) {       
        
        //Student Birthcertificate
        $imgFile = $_FILES['bcert']['name'];
        $tmp_dir = $_FILES['bcert']['tmp_name'];
        $imgSize = $_FILES['bcert']['size'];
        
        //Processing the image
        {
        $upload_dir = '../upload/'; // upload directory

        $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension

        // valid image extensions
        $valid_extensions = array('jpeg', 'jpg', 'png', 'pdf', 'doc', 'docx', 'gif'); // valid extensions

        // rename uploading image
        $proImage_birth = rand(1000,1000000).".".$imgExt;
        $cert = $proImage_birth;

        // allow valid image file formats
        if(in_array($imgExt, $valid_extensions)){			
                // Check file size '500MB'
                if($imgSize < 500000000){
                        move_uploaded_file($tmp_dir,$upload_dir.$proImage_birth);
                }
                
        }
        
        }
      
        $up = dbConnect()->prepare("UPDATE student SET passport=:pt, birthcert =:bt WHERE studentcode=:em");
        $up->bindParam(':pt', $proImage);
        $up->bindParam(':bt', $proImage_birth);
        $up->bindParam(':em', $code); // student code
        $up->execute();
        
 }
}

 
 
if($mode =="bank"){
    
    
    //update student information and redirect to upload payment evidence  
     //process student information without payment evidence
        $upd = dbConnect()->prepare("UPDATE student SET mname=:mn, gender=:gnd,  ffname=:ffn, femail=:feml,
        fphone=:fph, foaddr=:foadr, faddr=:faddr, foccu=:focc, mfname=:mfn, memail=:meml, mphone=:mph, 
        moaddr=:moaddr, maddr=:maddr, moccu=:mocc, gfname=:gfn, gphone=:gph, gemail=:geml, goaddr=:goaddr,
        gaddr=:gaddr, goccu=:gocc, preclass=:precls, classenrol=:cenrol, lga=:lga, 
       nationality=:natl, preschool=:presch, dob=:dob, state=:state, examcode=:excode, center=:cen  WHERE studentcode=:scode
               ");
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
       $upd->bindParam(':scode', $code);


       $upd->bindParam(':precls', $preclass);
       $upd->bindParam(':cenrol', $enrolclass);
       $upd->bindParam(':lga', $lga);
       $upd->bindParam(':natl', $natl);
       $upd->bindParam(':presch', $sch);
       $upd->bindParam(':dob', $dob);
       $upd->bindParam(':state', $origin);
       $upd->bindParam(':excode', $code);
       $upd->bindParam(':cen', $center);
       if($upd->execute()){
           
           $e="Your form has been submitted! Please upload the bank evidence."; 
           echo  " <script>alert('$e'); window.location='bank?code=$code'</script>";
       }
       
       
}

        
    }
}




//$amount = $_SESSION['amount']; 
?>

<!-- Main Content -->

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Payment</h2>
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
        
        
        <div class="row clearfix">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="card project_list">
                        <form >
                                <script src="https://js.paystack.co/v1/inline.js"></script>
                                    <button type="button" onclick="payWithPaystack()" class="btn btn--full" > Pay Now (10,500)</button> 
                                  </form>
                              <script>
                            function payWithPaystack(){
                              //const api ="pk_test_5609cd59091947fb62c6fb317c5f976237f421e1";
                              //const api ="pk_live_e06ce2025a7311c3847af831fdd2be6acbfede80"; //trinity
                              //const api ="sk_live_120ecc897b70eea7ef48f1a3220db117ed91c3cb";
                              
                              const api ="pk_live_e06ce2025a7311c3847af831fdd2be6acbfede80";
                              var handler = PaystackPop.setup({
                                key: api,
                                email: '<?php echo $email ?>',
                                amount: <?php echo $amount * 100; ?>,
                                currency: "NGN",
                                ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                                firstname: '<?php echo $name; ?>',
                                // label: "Optional stding that replaces customer email"
                                metadata: {
                                   custom_fields: [
                                      {
                                          display_name: "<?php echo $name ?>",
                                          variable_name: "Trinity Enrolment Payment",
                                          value: "<?php echo $phn ?>"
                                      }
                                   ]
                                },
                                callback: function(response){
                                   //alert('success. tdansaction ref is ' + response.reference);
                                   const referenced = response.reference;
                                   window.location.href= 'success.php?success='+referenced;
                                },
                                onClose: function(){
                                    alert('window closed');
                                }
                              });
                              handler.openIframe();
                            }
                          </script>
                    </div>
                </div>
            </div>
    </div>
</section>

<?php include 'foot.php' ;?>