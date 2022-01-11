<?php 
include 'header.php';

if(isset($_GET['code']))


$cd = $_GET['code'];

if(isset($_GET['code']))


$cd = $_GET['code'];
$amt = 10000;

$que = dbConnect()->prepare("SELECT * FROM student WHERE studentCode=?");
$que->execute([ $cd]);
$rw = $que->fetch();
 
?>
<style>
    .img-cart {
    display: block;
    max-width: 50px;
    height: auto;
    margin-left: auto;
    margin-right: auto;
}
table tr td{
    border:1px solid #FFFFFF;    
}

table tr th {
    background:#eee;    
}

.panel-shadow {
    box-shadow: rgba(0, 0, 0, 0.3) 7px 7px 7px;
}
</style>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url(assets/img/art.jpg);">
        <div class="container">
            <h2> Congratulations </h2>
            <p>Your ward's application is successful.</p>
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
            <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th width="20%">Registration</th>
                                <th style="text-align: center;">Details</th>
                            </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <th>First Name</th>
                                    <td style="text-align: center;">  <strong><?php echo $rw['fname'] ?></strong></td>
                                </tr>
                                <tr>
                                    <th>Last Name</th>
                                    <td style="text-align: center;"><strong><?php echo $rw['lname'] ?></strong></td>
                                </tr>
                                <tr>
                                    <th>Date of Birth</th>
                                    <td style="text-align: center;"><strong><?php echo $rw['dob'] ?></strong></td>
                                </tr>
                                <tr>
                                    <th>Class Enroled</th>
                                    <td style="text-align: center;"><strong><?php echo $rw['classenrol'] ?></strong></td>
                                </tr>
                                <tr>
                                    <th>Parent Name</th>
                                    <td style="text-align: center;"><strong><?php echo $rw['ffname'] ?></strong></td>
                                </tr>
                                <tr>
                                    <th>Parent Email</th>
                                    <td style="text-align: center;"><strong><?php echo $rw['email'] ?></strong></td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td style="text-align: center;"><strong><?php echo $rw['phone'] ?></strong></td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td style="text-align: center;"><strong><?php echo $rw['faddr'] ?></strong></td>
                                </tr>
                                <tr>
                                    <th>Occupation</th>
                                    <td style="text-align: center;"><strong><?php echo $rw['foccu'] ?></strong></td>
                                </tr>
                            </tbody>
                        </table>
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