<?php 
include 'header.php';

if(isset($_GET['code']))


$cd = $_GET['code'];
 
?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url(assets/img/art.jpg);">
        <div class="container">
            <h2> Congratulations </h2>
            <p>Your ward's registration is successful.</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index">Home</a> <span><i class="fa fa-angle-double-right"></i> Congratulations </span></li>
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
                            <div class="tax-wrapper">
                            <h2 align="center" class="cart-bottom-title section-bg-gray">Congratulations</h2>
                                <p align='center' style="color: #111 !important;">
                                    Your application is well received<br>
                                    <a href="" class="text-danger">(Download our College Prospectus Now)</a><br>
                                        Thank You
                                </p><br>
                                <div class="tax-select-wrapper">
                                    
                                    <div class="tax-select">
                                        <p align="center" class="text-primary">
                                            To further your child’s enrolment:
                                        </p>
                                    </div><hr>
                                    <a href="assets/registration.pdf" class="btn btn-warning btn-block"><b class="text-white">Download the Application Form</b></a>
                                    <h3 class="text-primary mt-2 mb-2" align="center">OR</h3>
                                    <a href="admission-continue?code=<?php echo $cd ?>" class="btn btn-primary btn-block">
                                        <b class="text-white">Click to Apply Complete Registration  </b>
                                    </a> 
                                   
                                </div>
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

 <!--MODAL -->
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

</body>

</html>