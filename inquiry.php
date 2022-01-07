<?php include 'header.php';?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95" style="background-image:url(assets/img/art.jpg);">
        <div class="container">
            <h2>Admission Inquiry</h2>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index">Home</a> </li>
            </ul>
        </div>
    </div>
</div>




<div class="login-register-area pt-130 pb-130" style="background-image:url(assets/img/vv.jpg);"> 
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg1">
                            <h4> Admission Inquiry </h4>
                        </a>
<!--                        <a data-toggle="tab" href="#lg2">
                            <h4> register </h4>
                        </a>-->
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="" method="post">
                                        <input type="text" name="fname" placeholder="First Name">
                                        <input type="text" name="lname" placeholder="Last Name">
                                        <input type="email" name="email" placeholder="Email">
                                        <input type="text" name="phone" placeholder="Phone Number">
                                        <textarea name="message" rows="5"></textarea>
                                        <div class="button-box">
                                            <button class="default-btn" name="submit" type="submit"><span>Send</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








<?php include 'footer.php'; ?>