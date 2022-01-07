<?php include 'header.php'; ?>
        <!-- HOME FULL WIDTH VIDEO-->
        <section class="home-full-video video js-fullscreen js-video-player">
            <div id="myid"></div>
            <div id="player"></div>
        </section>
        
       <!-- <section class="home-full-video video js-fullscreen js-video-player" style="background: url(../../assets/bgs/biostd.jpg) top center / cover no-repeat;">
            <div class="video__overlay">
                <i class="fa fa-play video__icon"></i>
            </div>
            <div class="video__content  embed-responsive embed-responsive-16by9">
                <iframe width="100%" height="437" src="https://www.youtube.com/embed/zts2hwvkrGU?autoplay=1&mute=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </section>-->
        <!-- END HOME FULL WIDTH VIDEO-->
        <!-- HOME SLIDER 1-->
        <section class="home-slide1">
            <div class="home-slide1-wrap">
                <div class="container">
                    <div class="slide-wrapper js-slick-wrapper" data-slick-autoplay="true" data-slick-fade="true">
                        <div class="slide__content js-slick-content">
                            <?php 
                            $us = dbConnect()->prepare("SELECT id FROM slidder");
                            $us->execute([1]);
                            while($sl = $us->fetch()){
                                $ux = dbConnect()->prepare("SELECT * FROM imgUpload ORDER BY rand() ");
                                $ux->execute();
                                $re = $ux->fetch();
                                
                                $ud = dbConnect()->prepare("SELECT * FROM imgUpload ORDER BY rand() ");
                                $ud->execute();
                                $ra = $ud->fetch();
                                
                                $ur = dbConnect()->prepare("SELECT * FROM imgUpload ORDER BY rand() ");
                                $ur->execute();
                                $rc = $ur->fetch();
                                
                            ?>
                            <div class="slide-item">
                                <div class="slide1-item-wrap">
                                    <a href="<?php echo $re['page'];?>"><div class="home-slide1__img img--hor">
                                        <div class="home-slide1__img-inner" style="background-image:url('../<?php echo $re['image'];?>');" data-animation="fadeInRight" data-animation-delay=".2s"></div>
                                        </div></a>
                                   <a href="<?php echo $ra['page'];?>"> <div class="home-slide1__img img--ver-big">
                                        <div class="home-slide1__img-inner" style="background-image:url('../<?php echo $ra['image'];?>');" data-animation="fadeIn" data-animation-delay=".2s"></div>
                                       </div></a>
                                   <a href="<?php echo $rc['page'];?>"> <div class="home-slide1__img img--ver-small">
                                        <div class="home-slide1__img-inner" style="background-image:url('../<?php echo $rc['image'];?>');" data-animation="fadeInRight" data-animation-delay=".3s"></div>
                                       </div></a>
                                    <div class="home-slide1__content-wrap">
                                        <div class="home-slide1__content" data-animation="fadeInRight" data-animation-delay=".3s">
                                            <div class="home-slide1__content-inner">
                                                <h2>Tricol</h2>
                                                <p><?php echo $rc['description'];?>.</p>
                                                <a class="au-btn au-btn--dark au-btn--p50" href="../../inquiry">Get in Touch</a>
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
        