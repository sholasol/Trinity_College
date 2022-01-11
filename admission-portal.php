<?php 
include 'header.php';

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
                <li><a href="index">Home</a> <span><i class="fa fa-angle-double-right"></i> Register Here </span></li>
            </ul>
        </div>
    </div>
</div>






<form action="regx"  method="POST" style="width:100% !important;" enctype="multipart/form-data">

<div class="checkout-area pt-30 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="billing-info-wrap">
                    <img src="assets/bgs/biostd.jpg" alt="">
                </div>
            </div>
                
                
            <div class="col-lg-6">
                <div class="your-order-area">
                    <div class="row">
                        <label class="btn btn-primary col-md-12" for="">Child's Details</label>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label>First Name</label>
                                <input type="text" id="fname" name="fname">
                                <h5 id="usercheck" style="color: red;" > **First Name is required  </h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label>Last Name</label>
                                <input type="text" id="lname" name="lname" >
                                <h5 id="userchecks" style="color: red;" > **Last Name is required  </h5>
                            </div>
                        </div>
                        <label class="btn btn-primary col-md-12" for="">Parent's Details</label>
                        <div class="col-lg-12 col-md-12">
                            <div class="billing-info mb-20">
                                <label>Full Name</label>
                                <input type="text" id="parent" name="parent">
                                <h5 id="parentcheck" style="color: red;" > **Parent Name is required  </h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label>Phone</label>
                                <input type="text" id="phone" name="phone" >
                                <h5 id="phonechecks" style="color: red;" > **Phone is required  </h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label>Email</label>
                                <input type="email" id="email"  name="email" >
                                <h5 id="emailcheck" style="color: red;" > **Email is required  </h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label>Profession</label>
                                <input type="text" id="prof" name="profession" >
                                <h5 id="profcheck" style="color: red;" > **Profession  </h5>
                            </div>
                        </div>
                        
                       
                       
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label> Class Enroled For</label>
                                <input type="text" id="eclass" name="enrolclass" >
                                <h5 id="enrolcheck" style="color: red;" > **Class Enrol for is required  </h5>
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