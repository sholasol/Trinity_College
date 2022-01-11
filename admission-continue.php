<?php 
include 'header.php';

if(isset($_GET['code']))


$cd = $_GET['code'];

$que = dbConnect()->prepare("SELECT * FROM student WHERE studentCode=?");
$que->execute([ $cd]);
$rw = $que->fetch();

?>
<style>
    .subBtn {
    background-color: #001489;
    color: #fff;
    display: block;
    font-weight: 500;
    letter-spacing: 1px;
    line-height: 1;
    padding: 18px 20px;
    text-align: center;
    text-transform: uppercase;
    border-radius: 50px;
    z-index: 9;
}
</style> 
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url(assets/img/art.jpg);">
        <div class="container">
            <h2>Student Registration Portal </h2>
            <p>Our school offers a unique educational experience for all students by providing a curriculum which is unique to the Trinity International Schools.</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index">Home</a> <span><i class="fa fa-angle-double-right"></i> Admission portal </span></li>
            </ul>
        </div>
    </div>
</div>






<form action="reg-continue"  method="POST" style="width:100% !important;" enctype="multipart/form-data">

<div class="checkout-area pt-30 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="billing-info-wrap">
                    <h3>Student Details</h3>
                    <div class="row">
                        <input type="hidden" name="code" value="<?php echo $rw['studentCode'] ?>">
                        <div class="col-lg-4 col-md-4">
                            <div class="billing-info mb-20">
                                <label>First Name</label>
                                <input type="text" id="fname" name="fname" value="<?php echo $rw['fname'] ?>">
                                <h5 id="usercheck" style="color: red;" > **First Name is required  </h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="billing-info mb-20">
                                <label>Last Name</label>
                                <input type="text" id="lname" name="lname" value="<?php echo $rw['lname'] ?>">
                                <h5 id="userchecks" style="color: red;" > **Last Name is required  </h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="billing-info mb-20">
                                <label>Middle Name</label>
                                <input type="text"  name="oname">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label>Phone</label>
                                <input type="text" id="phone" name="phone" value="<?php echo $rw['phone'] ?>">
                                <h5 id="phonechecks" style="color: red;" > **Phone is required  </h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label>Email</label>
                                <input type="email" id="email"  name="email" value="<?php echo $rw['email'] ?>">
                                <h5 id="emailcheck" style="color: red;" > **Email is required  </h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label>DOB</label>
                                <input type="date" id="dob" name="dob" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label>Gender (<small>Male/Female</small>)</label>
                                <input type="text" id="gender" name="gender" >
                                <!-- <h5 id="gendercheck" style="color: red;" > **Gender is required  </h5> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label>State of Origin</label>
                                <input type="text" name="state">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label>Nationality</label>
                                <input type="text" name="natl">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label>LGA</label>
                                <input type="text" name="lga">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label>Present School</label>
                                <input type="text" id="sch" name="sch" >
                                <!-- <h5 id="schcheck" style="color: red;" > **Present school is required  </h5> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label>Present Class</label>
                                <input type="text" id="pclass" name="preclass" >
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label> Class Enroled For</label>
                                <input type="text" id="eclass" name="enrolclass" value="<?php echo $rw['classenrol'] ?>">
                                <h5 id="enrolcheck" style="color: red;" > **Class Enrol for is required  </h5>
                                
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="billing-info mb-20">
                                <label> Upload Payment Evidence</label>
                                <input type="file" name="payment">
                            </div>
                        </div>
                    </div>  
                    
                </div>
            </div>
                
                
            <div class="col-lg-6">
                <div class="your-order-area">
                    <h3>Parent/Guardian Details</h3>
                    <div class="your-order-wrap gray-bg-4">
                        <div class="your-order-product-info">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6">
                                           <div class="billing-info mb-20">
                                                <label>Full Name</label>
                                                <input type="text" id="ffname"  name="ffname" value="<?php echo $rw['ffname'] ?>">
                                           </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6">
                                           <div class="billing-info mb-20">
                                                <label>Telephone</label>
                                                <input type="text" id="fphone"  name="fphone" value="<?php echo $rw['phone'] ?>">
                                           </div>
                                             
                                        </div> 
                                        <div class="col-lg-12 col-md-6">
                                           <div class="billing-info mb-20">
                                            <label>Email</label>
                                            <input type="email" name="femail" value="<?php echo $rw['email'] ?>">
                                           </div>
                                       </div>
                                    
                                        <div class="col-lg-12 col-md-6">
                                           <div class="billing-info mb-20">
                                                <label>Father's Home Address</label>
                                                <input type="text" name="faddress">
                                           </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6">
                                           <div class="billing-info mb-20">
                                                <label>Office Address</label>
                                                <input type="text"  name="foaddress" >
                                           </div>
                                        </div> 
                                        <div class="col-lg-12 col-md-6">
                                           <div class="billing-info mb-20">
                                            <label>Occupation</label>
                                            <input type="text" name="foccu" value="<?php echo $rw['foccu'] ?>">
                                           </div>
                                       </div>
                                    </div>
                            
                        </div>
                        
                    </div>
                    <div class="Place-order mt-25">
                        <button id='submitbtn' type="submit" name="submit" class="subBtn btn-block">Submit Form</button>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    
</div>

</form>












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


</body>

</html>