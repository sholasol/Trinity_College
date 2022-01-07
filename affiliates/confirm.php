<?php 
include 'head.php';
if(isset($_POST['submit'])){
//sanitizing 
$sanitizer = filter_var_array($_POST, FILTER_SANITIZE_STRING);
$amount = $sanitizer['amt'];
$scode = $sanitizer['std'];
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
$mode =  "Confirmed by Account Department";

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



$_SESSION['amt']= $amount;
$_SESSION['std']= $scode;
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
        
        
 }

//Student Code
    $length = 7;    
    $std = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
    
    
    //process student information without payment evidence
        $upd = dbConnect()->prepare("INSERT INTO student SET 
        fname=:fn, lname=:ln, mname=:mn, email=:em, phone=:ph,  reff_by=:ref, gender=:gnd, passport=:pt, birthcert =:bt, status=:sts, 
        ffname=:ffn, femail=:feml, fphone=:fph, foaddr=:foadr, faddr=:faddr, foccu=:focc, mfname=:mfn, memail=:meml, mphone=:mph,moaddr=:moaddr, 
        maddr=:maddr, moccu=:mocc, gfname=:gfn, gphone=:gph, gemail=:geml, goaddr=:goaddr, gaddr=:gaddr, goccu=:gocc, preclass=:precls, classenrol=:cenrol,
        lga=:lga,  nationality=:natl, preschool=:presch, dob=:dob, state=:state, examcode=:excode, studentcode=:scode, center=:cen ");
        
       $upd->bindParam(':fn', $fname);
       $upd->bindParam(':ln', $lname);
       $upd->bindParam(':mn', $mname);
       $upd->bindParam(':em', $eml);
       $upd->bindParam(':ph', $phone);
       $upd->bindParam(':ref', $acode);
       $upd->bindParam(':gnd', $gender);
       $upd->bindParam(':pt', $proImage);
       $upd->bindParam(':bt', $proImage_birth);
       $upd->bindParam(':sts', $sts);
        
       
       
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
       $upd->bindParam(':excode', $std);
       $upd->bindParam(':scode', $std);
       $upd->bindParam(':cen', $center);
       
       if($upd->execute()){
            $salt = "cxÐŽàuH@ÓƒåUËPžÝþÊâ0sþna”È(ø ";
            $pw =  Hash::make($phone, $salt);
            
            //Registering student as user.
              $ins = dbConnect()->prepare("INSERT INTO users(fname,lname, studentcode, email,password,salt, phone,role,status, ref_by) VALUES (?,?,?,?,?,?,?,?,?,?)");
              $ins->execute([$fname, $lname, $std, $eml, $pw, $salt, $phone,'Student','Active',$acode]);
              
              $stdID = dbConnect()->prepare("SELECT id FROM users WHERE studentcode='$std'");
              $stdID->execute();
              $rs = $stdID->fetch();
              $u_id = $rs['id'];
            
            //processing payment
        $pym =  dbConnect()->prepare("INSERT INTO payment SET student=:std, 
          amount=:amt, mode=:mode, refrence=:ref, payfor=:pay, date=:dt,  studentcode=:scode
       ");
          $pym->bindParam(':std', $u_id);
          $pym->bindParam(':amt', $amount);
          $pym->bindParam(':mode', $mode);
          $pym->bindParam(':ref', $ref);
          $pym->bindParam(':pay', $payfor);
          $pym->bindParam(':dt', $dt);
          //$pym->bindParam(':evi', $proImage);
          $pym->bindParam(':scode', $std);
          if($pym->execute()){

             

             $e="Registration form has been submitted!"; 
             echo  " <script>alert('$e'); window.location='view?eml=$std'</script>";
          }
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
                        <li class="breadcrumb-item active">New Student Application</li>
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
                            <h2><strong>Application:</strong> <small>for confirmed payment with Account Department</small> </h2>
                        </div>
                        <div class="body">
                            <form id="wizard_with_validation" method="POST"  enctype="multipart/form-data">
                                <input type="hidden" name="amt" value="10500"/>
                                
                                <h3>Exam Venue</h3>
                                <fieldset> 
                                    <br><br>
                                   <div class="form-group form-float">
                                       <img src='assets/images/logo.png' alt='Tricol'> 
                                   </div><br><br>
                                   <div class="form-group form-float">
                                       <label class="btn btn-primary btn-block">Exam Venues</label><br>
                                       <table class="table table-hover c_table theme-color">
                                           <tr>
                                               <td>
                                                   <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="center" id="inlineRadio2" value="Abuja" required>
                                                    <label class="form-check-label" for="inlineRadio2">Abuja Center</label>
                                                  </div>   
                                               </td>
                                               <td>
                                                  <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="center" id="inlineRadio2" value="Badagry" >
                                                    <label class="form-check-label" for="inlineRadio2">Badagry Center</label>
                                                  </div> 
                                               </td>
                                           </tr> 
                                           <tr>
                                               <td>
                                                 <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="center" id="inlineRadio2" value="Asaba" >
                                                    <label class="form-check-label" for="inlineRadio2">Asaba Center</label>
                                                  </div>   
                                               </td>
                                               <td>
                                                  <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="center" id="inlineRadio2" value="Lagos" >
                                                    <label class="form-check-label" for="inlineRadio2">Lagos Center</label>
                                                  </div>  
                                               </td>
                                           </tr>
                                           <tr>
                                               <td>
                                                  <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="center" id="inlineRadio2" value="Port-Harcourt" >
                                                    <label class="form-check-label" for="inlineRadio2">Port Harcourt Center</label>
                                                  </div>  
                                               </td>
                                               <td>
                                                  <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="center" id="inlineRadio2" value="Warri" >
                                                    <label class="form-check-label" for="inlineRadio2">Warri Center</label>
                                                  </div>  
                                               </td>
                                           </tr> 
                                           <tr>
                                               <td>
                                                   <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="center" id="inlineRadio2" value="Online" >
                                                    <label class="form-check-label" for="inlineRadio2">Online exam</label>
                                                  </div> 
                                               </td>
                                               <td>
                                                   <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="center" id="inlineRadio2" value="Walk-in" >
                                                    <label class="form-check-label" for="inlineRadio2">Walk in at an Agreed Time</label>
                                                  </div> 
                                               </td>
                                           </tr> 
                                       </table>
                                   </div>
                                </fieldset>
                               <h3>Child's Details</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <label>Passport Photograph</label>
                                        <input type="file" class="form-control"  name="passport" required>
                                    </div>
                                    <div class="row">
                                        <div class="form-group form-float col-md-4">
                                            <label>First Name</label>
                                            <input type="text" class="form-control"  name="fname" required>
                                        </div>
                                        <div class="form-group form-float col-md-4">
                                            <label>Middle Name</label>
                                            <input type="text" class="form-control"  name="mname" >
                                        </div> 
                                        <div class="form-group form-float col-md-4">
                                            <label>Surname</label>
                                         <input type="text" class="form-control"  name="lname" required>
                                       </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group form-float col-md-4">
                                            <label>Phone</label>
                                            <input type="text" class="form-control"  name="phone" >
                                        </div>
                                        <div class="form-group form-float col-md-4">
                                            <label>Email</label>
                                            <input type="text" class="form-control"  name="email" required>
                                        </div>
                                        <div class="form-group form-float col-md-4">
                                            <label>Date of Birth</label>
                                            <input type="date" class="form-control"  name="dob" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group form-float col-md-4">
                                           <label>Birth Certificate</label>
                                           <input type="file" class="form-control"  name="bcert">
                                       </div>
                                       <div class="form-group form-float col-md-4">
                                           <label>Gender</label><br>
                                           <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Female" required>
                                            <label class="form-check-label" for="inlineRadio1">Female</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Male">
                                            <label class="form-check-label" for="inlineRadio2">Male</label>
                                          </div>
                                       </div>
                                        <div class="form-group form-float col-md-4">
                                            <label>State of Origin</label>
                                            <input type="text" class="form-control"  name="origin" >
                                       </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group form-float col-md-6">
                                            <label>Nationality</label>
                                            <input type="text" class="form-control"  name="natl" required>
                                        </div>
                                        <div class="form-group form-float col-md-6">
                                            <label>LGA</label>
                                            <input type="text" class="form-control"   name="lga" >
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="form-group form-float col-md-4">
                                            <label>Present School</label>
                                            <input type="text" class="form-control"  name="sch" required>
                                        </div>
                                        <div class="form-group form-float col-md-4">
                                            <label>Present Class</label>
                                            <input type="text" class="form-control"   name="preclass" required>
                                        </div>
                                        <div class="form-group form-float col-md-4">
                                            <label> Class Enroled For</label>
                                            <input type="text" class="form-control"  name="enrolclass" required>
                                        </div>
                                    </div>
                                </fieldset>
                                <h3>Parent and Guardian</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <label>Father's Detail</label>
                                    </div>
                                    <div class="row">
                                        <div class="form-group form-float col-md-6">
                                            <label>Full Name</label>
                                            <input type="text" class="form-control"  name="ffname" required>
                                        </div>
                                        <div class="form-group form-float col-md-6">
                                            <label>Telephone</label>
                                            <input type="text" class="form-control"   name="fphone" required>
                                        </div> 
                                        <div class="form-group form-float col-md-6">
                                            <label>Email</label>
                                            <input type="text" class="form-control"  name="femail" >
                                       </div>
                                    
                                        <div class="form-group form-float col-md-6">
                                            <label>Father's Home Address</label>
                                            <input type="text" class="form-control"  name="faddress" required>
                                        </div>
                                        <div class="form-group form-float col-md-6">
                                            <label>Office Address</label>
                                            <input type="text" class="form-control"  name="foaddress" >
                                        </div> 
                                        <div class="form-group form-float col-md-6">
                                            <label>Occupation</label>
                                            <input type="text" class="form-control" name="foccu" required>
                                       </div>
                                    </div><hr class="bg-blue"/>
                                    <div class="form-group form-float">
                                        <label>Mothers's Detail</label>
                                    </div>
                                    <div class="row">
                                        <div class="form-group form-float col-md-6">
                                            <label>Full Name</label>
                                            <input type="text" class="form-control"  name="mfname" required>
                                        </div>
                                        <div class="form-group form-float col-md-6">
                                            <label>Telephone</label>
                                            <input type="text" class="form-control"  name="mphone" required>
                                        </div> 
                                        <div class="form-group form-float col-md-6">
                                            <label>Email</label>
                                            <input type="text" class="form-control"  name="memail" >
                                       </div>
                                    
                                        <div class="form-group form-float col-md-6">
                                            <label>Mother's Home Address</label>
                                            <input type="text" class="form-control" name="maddress" required>
                                        </div>
                                        <div class="form-group form-float col-md-6">
                                            <label>Office Address</label>
                                            <input type="text" class="form-control"  name="moaddress" >
                                        </div> 
                                        <div class="form-group form-float col-md-6">
                                            <label>Occupation</label>
                                            <input type="text" class="form-control"  name="moccu" required>
                                       </div>
                                    </div><hr class="bg-blue"/>
                                    <div class="form-group form-float">
                                        <label>Gaurdian's Detail</label>
                                    </div>
                                    <div class="row">
                                        <div class="form-group form-float col-md-6">
                                            <label>Full Name</label>
                                            <input type="text" class="form-control"  name="gfname">
                                        </div>
                                        <div class="form-group form-float col-md-6">
                                            <label>Telephone</label>
                                            <input type="text" class="form-control" name="gphone">
                                        </div> 
                                        <div class="form-group form-float col-md-6">
                                            <label>Email</label>
                                            <input type="text" class="form-control"  name="gemail">
                                       </div>
                                    
                                        <div class="form-group form-float col-md-6">
                                            <label>Gaurdian's Home Address</label>
                                            <input type="text" class="form-control"  name="gaddress" >
                                        </div>
                                        <div class="form-group form-float col-md-6">
                                            <label>Office Address</label>
                                            <input type="text" class="form-control"  name="goaddress" >
                                        </div> 
                                        <div class="form-group form-float col-md-6">
                                            <label>Occupation</label>
                                            <input type="text" class="form-control"  name="goccu" >
                                       </div>
                                    </div>
                                </fieldset>
                                <h3>Payment</h3>
                                <fieldset> <br>
                                    <label class="label-default col-md-12">Payment Confirmed with Account Department</label><br><br>
                                    
                                    
                                    
                                    <div class="paystack box">
                                        <div class="row">
                                            <div class="form-group form-float">
                                                  <img src="../assets/bgs/logo.png" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bank box">
                                        <div class="form-group form-float">
                                            <label>To pay with bank code follow the following instructions:</label>
                                            <label>Walk into the closest UBA bank.</label>
                                            <label>Pick up and fill a deposit slip (In place of depositor's name, add the following code: RandomCode )</label>
                                            <label>Bank details:</label>
                                            <label>Account Name: Trinity International College</label>
                                            <label>Bank Name: UBA</label>
                                            <label>Account No.: 1019572249</label>
                                                
                                      </div>
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

<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
<script src="assets/bundles/c3.bundle.js"></script>

<!-- Jquery DataTable Plugin Js --> 
<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.flash.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>

<script src="assets/js/pages/tables/jquery-datatable.js"></script>

<script src="assets/plugins/momentjs/moment.js"></script> <!-- Moment Plugin Js --> 
<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> 

<script src="assets/js/pages/forms/basic-form-elements.js"></script>

<script src="assets/plugins/jquery-validation/jquery.validate.js"></script> <!-- Jquery Validation Plugin Css -->
<script src="assets/plugins/jquery-steps/jquery.steps.js"></script> <!-- JQuery Steps Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="assets/js/pages/forms/form-wizard.js"></script>

<script src="assets/js/pages/index.js"></script>


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
</body>
</html>