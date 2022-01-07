<?php 
include 'head.php';

if(isset($_GET['code'])){
    $eml = $_GET['code'];
}

$db = dbConnect()->prepare("SELECT * FROM student WHERE studentcode='$eml'");
$db->execute();
$rx = $db->fetch();

$pp = $rx['passport'];
$gn = $rx['gender'];
$cen = $rx['center'];
$stt = $rx['status'];

if($pp ==''){
    $req ='required';
}else{$req ='';}

if($gn ==''){
    $reqq ='required';
}else{$reqq ='selected';}

if($pp ==''){
    $req ='required';
}else{$req ='';}

if($gn ==''){
    $reqq ='required';
}else{
    $reqq ='';
    
}
if($gn =='Female'){
    $fml='checked';
}else{
    $fml='';
}
if($gn =='Male'){
    $ml='checked';
}else{
    $ml='';
}
if(!empty($cen)){
    $cl='checked required';
    $nm = $cen;
}else{
    $cl='required';
    $nm = 'Select Center';
}
?>

<!-- Main Content -->

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Trinity International College </h2>
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
                            <h2><strong>Application</strong> </h2>
                        </div>
                        <div class="body">
                            <form id="wizard_with_validation" method="POST" action="pays.php" enctype="multipart/form-data">
                                <input type="hidden" name="amt" value="10500"/>
                                <input type="hidden" name="std" value="<?php echo $eml ?>"/>
                                
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
                                                      <input class="form-check-input" type="radio" name="center" id="inlineRadio2" value="<?php echo $cen ?>" <?php echo $cl ?>>
                                                    <label class="form-check-label" for="inlineRadio2">Chosen Center (<?php echo $nm ?>)</label>
                                                  </div> 
                                               </td>
                                               <td>
                                                   <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="center" id="inlineRadio2" value="Ofada" required>
                                                    <label class="form-check-label" for="inlineRadio2">Ofada Center</label>
                                                  </div>   
                                               </td>
                                           </tr>
                                           <tr>
                                               <td>
                                                   <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="center" id="inlineRadio2" value="Abuja" >
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
                                            <input type="text" class="form-control" value="<?php echo $rx['fname'] ?>" name="fname" required>
                                        </div>
                                        <div class="form-group form-float col-md-4">
                                            <label>Middle Name</label>
                                            <input type="text" class="form-control" value="<?php echo $rx['mname'] ?>" name="mname" >
                                        </div> 
                                        <div class="form-group form-float col-md-4">
                                            <label>Surname</label>
                                         <input type="text" class="form-control" value="<?php echo $rx['lname'] ?>" name="lname" required>
                                       </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group form-float col-md-4">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" value="<?php echo $rx['phone'] ?>" name="phone" >
                                        </div>
                                        <div class="form-group form-float col-md-4">
                                            <label>Email</label>
                                            <input type="text" class="form-control" value="<?php echo $rx['email'] ?>" name="email" required>
                                        </div>
                                        <div class="form-group form-float col-md-4">
                                            <label>Date of Birth</label>
                                            <input type="date" class="form-control" value="<?php echo $rx['dob'] ?>" name="dob" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group form-float col-md-4">
                                           <label>Birth Certificate</label>
                                           <input type="file" class="form-control"  name="bcert">
                                       </div>
                                        <div class="row">
                                        <div class="form-group form-float col-md-4">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" value="<?php echo $rx['fname'] ?>" name="fname" required>
                                        </div>
                                        <div class="form-group form-float col-md-4">
                                            <label>Middle Name</label>
                                            <input type="text" class="form-control" value="<?php echo $rx['mname'] ?>" name="mname" >
                                        </div> 
                                        <div class="form-group form-float col-md-4">
                                            <label>Surname</label>
                                         <input type="text" class="form-control" value="<?php echo $rx['lname'] ?>" name="lname" required>
                                       </div>
                                    </div>
                                        <div class="form-group form-float col-md-4">
                                            <label>State of Origin</label>
                                            <input type="text" class="form-control" value="<?php echo $rx['state'] ?>" name="origin" >
                                       </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group form-float col-md-6">
                                            <label>Nationality</label>
                                            <input type="text" class="form-control" value="<?php echo $rx['nationality'] ?>"  name="natl" required>
                                        </div>
                                        <div class="form-group form-float col-md-6">
                                            <label>LGA</label>
                                            <input type="text" class="form-control" value="<?php echo $rx['lga'] ?>"  name="lga" >
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="form-group form-float col-md-4">
                                            <label>Present School</label>
                                            <input type="text" class="form-control" value="<?php echo $rx['preschool'] ?>"  name="sch" required>
                                        </div>
                                        <div class="form-group form-float col-md-4">
                                            <label>Present Class</label>
                                            <input type="text" class="form-control"  value="<?php echo $rx['preclass'] ?>" name="preclass" required>
                                        </div>
                                        <div class="form-group form-float col-md-4">
                                            <label> Class Enroled For</label>
                                            <input type="text" class="form-control" value="<?php echo $rx['classenrol'] ?>"  name="enrolclass" required>
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
                                            <input type="text" class="form-control" value="<?php echo $rx['ffname'] ?>" name="ffname" required>
                                        </div>
                                        <div class="form-group form-float col-md-6">
                                            <label>Telephone</label>
                                            <input type="text" class="form-control" value="<?php echo $rx['fphone'] ?>"  name="fphone" required>
                                        </div> 
                                        <div class="form-group form-float col-md-6">
                                            <label>Email</label>
                                            <input type="text" class="form-control" value="<?php echo $rx['femail'] ?>" name="femail" >
                                       </div>
                                    
                                        <div class="form-group form-float col-md-6">
                                            <label>Father's Home Address</label>
                                            <input type="text" class="form-control" value="<?php echo $rx['faddr'] ?>" name="faddress" required>
                                        </div>
                                        <div class="form-group form-float col-md-6">
                                            <label>Office Address</label>
                                            <input type="text" class="form-control" value="<?php echo $rx['foaddr'] ?>" name="foaddress" >
                                        </div> 
                                        <div class="form-group form-float col-md-6">
                                            <label>Occupation</label>
                                            <input type="text" class="form-control" value="<?php echo $rx['foccu'] ?>" name="foccu" required>
                                       </div>
                                    </div><hr class="bg-blue"/>
                                    <div class="form-group form-float">
                                        <label>Mothers's Detail</label>
                                    </div>
                                    <div class="row">
                                        <div class="form-group form-float col-md-6">
                                            <label>Full Name</label>
                                            <input type="text" class="form-control" value="<?php echo $rx['mfname'] ?>" name="mfname" required>
                                        </div>
                                        <div class="form-group form-float col-md-6">
                                            <label>Telephone</label>
                                            <input type="text" class="form-control" value="<?php echo $rx['mphone'] ?>" name="mphone" required>
                                        </div> 
                                        <div class="form-group form-float col-md-6">
                                            <label>Email</label>
                                            <input type="text" class="form-control" value="<?php echo $rx['memail'] ?>" name="memail" >
                                       </div>
                                    
                                        <div class="form-group form-float col-md-6">
                                            <label>Mother's Home Address</label>
                                            <input type="text" class="form-control" value="<?php echo $rx['maddr'] ?>" name="maddress" required>
                                        </div>
                                        <div class="form-group form-float col-md-6">
                                            <label>Office Address</label>
                                            <input type="text" class="form-control" value=" <?php echo $rx['moaddr'] ?>"  name="moaddress" >
                                        </div> 
                                        <div class="form-group form-float col-md-6">
                                            <label>Occupation</label>
                                            <input type="text" class="form-control" value="<?php echo $rx['moccu'] ?>" name="moccu" required>
                                       </div>
                                    </div><hr class="bg-blue"/>
                                    <div class="form-group form-float">
                                        <label>Gaurdian's Detail</label>
                                    </div>
                                    <div class="row">
                                        <div class="form-group form-float col-md-6">
                                            <label>Full Name</label>
                                            <input type="text" class="form-control" value="<?php echo $rx['gfname'] ?>" name="gfname">
                                        </div>
                                        <div class="form-group form-float col-md-6">
                                            <label>Telephone</label>
                                            <input type="text" class="form-control" value="<?php echo $rx['gphone'] ?>" name="gphone">
                                        </div> 
                                        <div class="form-group form-float col-md-6">
                                            <label>Email</label>
                                            <input type="text" class="form-control" value="<?php echo $rx['gemail'] ?>" name="gemail">
                                       </div>
                                    
                                        <div class="form-group form-float col-md-6">
                                            <label>Gaurdian's Home Address</label>
                                            <input type="text" class="form-control" value="<?php echo $rx['gaddr'] ?>" name="gaddress" >
                                        </div>
                                        <div class="form-group form-float col-md-6">
                                            <label>Office Address</label>
                                            <input type="text" class="form-control" value="<?php echo $rx['goaddr'] ?>"  name="goaddress" >
                                        </div> 
                                        <div class="form-group form-float col-md-6">
                                            <label>Occupation</label>
                                            <input type="text" class="form-control" value="<?php echo $rx['goccu'] ?>" name="goccu" >
                                       </div>
                                    </div>
                                </fieldset>
                                <h3>Payment</h3>
                                <fieldset> <br>
                                    <label class="label-default col-md-12">Payment Method</label><br><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="payment" id="inlineRadio1" value="paystack" required>
                                        <label class="form-check-label" for="inlineRadio1">Pay with Paystack</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="payment" id="inlineRadio2" value="bank">
                                        <label class="form-check-label" for="inlineRadio2">Pay with bank code</label>
                                    </div>
                                    
                                    
                                    <div class="paystack box">
                                        <div class="row">
                                            <div class="form-group form-float">
                                                  <img src="assets/images/paystack.png" alt=""/>
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