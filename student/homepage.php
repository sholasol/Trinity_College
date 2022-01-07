<?php 
include 'head.php';

$db = dbConnect()->prepare("SELECT * FROM student WHERE studentcode='$std_code'");
$db->execute();
$rx = $db->fetch();

$code =$rx['studentcode'];
?>

<!-- Main Content -->

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Trinity International College<?php  echo $std_code;?></h2>
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
                            <form id="wizard_with_validation" method="POST" action="pay.php" enctype="multipart/form-data">
                                <input type="hidden" name="amt" value="10500"/>
                                
                                <h3>Welcome, <?php echo $name; ?></h3>
                                <fieldset> 
                                    <br><br>
                                   <div class="form-group form-float">
                                       <img src='assets/images/logo.png' alt='Tricol'> 
                                   </div>
                                    
                                  <div class="table-responsive">
                                      <!-- <table class="table table-hover c_table theme-color dataTable js-exportable">-->
                                        <table class="table table-hover c_table theme-color ">
                                            <strong>Please select a student</strong>
                                            <thead>
                                                <tr>                                       
                                                    <th> </th>
                                                    <th width="55%">Name</th>
                                                    <th width="20%">Student Code</th> 
                                                    <th width="10%"> Status</th>
                                                    <th width="10%"> Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i=0;
                                                    $dbx = dbConnect()->prepare("SELECT * FROM student WHERE email='$email'");
                                                    $dbx->execute();
                                                    while($rn = $dbx->fetch()){
                                                        $sta = $rn['status'];
                                                        $i++;
                                                        
                                                   ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td>
                                                        <a class="text-primary" href="home?code=<?php echo $rn['studentcode']?>"><?php echo $rn['fname'].' '.$rn['lname']; ?></a>
                                                    </td>
                                                    <td><?php echo $rn['studentcode']?></td>
                                                    <td>
                                                        <?php 
                                                        if($sta=='Paid'){
                                                            echo 'Registration Completed';
                                                        }else{
                                                            echo ' Please complete your registration.';
                                                        }
                                                         ?>
                                                    </td>
                                                    <td>
                                                        <a class="text-primary" href="profiles?code=<?php echo $rn['studentcode']?>">View</a>
                                                    </td>
                                                </tr>
                                                    <?php } ?>
                                            </tbody>
                                        </table>
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
<?php
include 'foot.php';
/*
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="assets/plugins/jquery-validation/jquery.validate.js"></script> <!-- Jquery Validation Plugin Css -->
<script src="assets/plugins/jquery-steps/jquery.steps.js"></script> <!-- JQuery Steps Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="assets/js/pages/forms/form-wizard.js"></script>

<script src="assets/js/pages/forms/basic-form-elements.js"></script>
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
*/
?>