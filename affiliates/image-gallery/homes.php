<?php include 'header.php'; ?>
        <!-- HOME FULL WIDTH VIDEO-->
        <section class="home-full-video video js-fullscreen js-video-player" style="background: url(../../assets/bgs/biostd.jpg) top center / cover no-repeat;">
            <div class="video__overlay">
                <i class="fa fa-play video__icon"></i>
            </div>
            <div class="video__content embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/6ILcIQY_bU4?ecver=1" allowfullscreen="allowfullscreen"></iframe>
            </div>
        </section>
        <!-- END HOME FULL WIDTH VIDEO-->
        <!-- HOME SLIDER 1-->
        <section class="home-slide1">
            <div class="home-slide1-wrap">
                <div class="container">
                    <div class="slide-wrapper js-slick-wrapper" data-slick-autoplay="true" data-slick-fade="true">
                        <div class="slide__content js-slick-content">
                            <?php 
                            $us = dbConnect()->prepare("SELECT * FROM slidder WHERE status=? ORDER BY rand() ");
                            $us->execute([1]);
                            while($sl = $us->fetch()){
                            ?>
                            <div class="slide-item">
                                <div class="slide1-item-wrap">
                                    <?php 
                                    $ux = dbConnect()->prepare("SELECT * FROM imgUpload ORDER BY rand() ");
                                    $ux->execute();
                                    while($re = $ux->fetch()){
                                    ?>
                                    <div class="home-slide1__img img--hor">
                                        <?php echo $re['image'];?>
                                        <div class="home-slide1__img-inner" style="background-image:url('../uploads/<?php echo $re['image'];?>');" data-animation="fadeInRight" data-animation-delay=".2s"></div>
                                    </div>
                                    <?php } ?>
                                    <?php 
                                    $ud = dbConnect()->prepare("SELECT * FROM imgUpload ORDER BY rand() ");
                                    $ud->execute();
                                    while($ra = $ud->fetch()){
                                    ?>
                                    <div class="home-slide1__img img--ver-big">
                                        <?php echo $ra['image'];?>
                                        <div class="home-slide1__img-inner" style="background-image:url('../uploads/<?php echo $ra['image'];?>');" data-animation="fadeIn" data-animation-delay=".2s"></div>
                                    </div>
                                    <?php } ?>
                                    <?php 
                                    $ur = dbConnect()->prepare("SELECT * FROM imgUpload ORDER BY rand() ");
                                    $ur->execute();
                                    while($rc = $ur->fetch()){
                                    ?>
                                    <div class="home-slide1__img img--ver-small">
                                        <div class="home-slide1__img-inner" style="background-image:url('../uploads/<?php echo $rc['image'];?>');" data-animation="fadeInRight" data-animation-delay=".3s"></div>
                                    </div>
                                    <?php } ?>
                                    <div class="home-slide1__content-wrap">
                                        <div class="home-slide1__content" data-animation="fadeInRight" data-animation-delay=".3s">
                                            <div class="home-slide1__content-inner">
                                                <h2>Tricol</h2>
                                                <p><?php echo $sl['description'];?>.</p>
                                                <a class="au-btn au-btn--dark au-btn--p50" href="index">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                        <div class="slide-arrows">
                            <i class="zmdi zmdi-arrow-left js-slick-arrow-left prev"></i>
                            <i class="zmdi zmdi-arrow-right js-slick-arrow-right next"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME SLIDER 1-->

     <?php include 'footer.php'; ?> 