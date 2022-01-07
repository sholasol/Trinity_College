<?php
include 'head.php';

?>
<!-- SLIDE-->
<section class="slide-6">
    <div class="rev_slider_wrapper fullwidthbanner-container">
        <div class="rev_slider fullwidthabanner js-rev" data-version="5.4.5" style="display:none;" data-rev-layout="auto" data-rev-bullets="false" data-rev-height="900">
            <ul>
                <?php 
                    $us = dbConnect()->prepare("SELECT * FROM imgUpload WHERE page='admin' ORDER BY rand() ");
                    $us->execute();
                    while($sl = $us->fetch()){
                    ?>
                <li class="rev-item" data-transition="fadefromtop">
                    <img class="rev-slidebg" src="../<?php echo $sl['image'];?>" alt="Trinity International College">
                    <h2 class="tp-caption tp-resizeme rev-title-1" data-frames="[{&quot;delay&quot;:0,&quot;split&quot;:&quot;chars&quot;,&quot;splitdelay&quot;:0.1,&quot;speed&quot;:2000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                        data-x="['center']" data-y="['center']" data-voffset="[-85,-85,-60,-55,-30]" data-width="['auto']" data-height="[&quot;auto&quot;]"><span class="text-warning">Tricol</span></h2>
                    <h2 class="tp-caption tp-resizeme text-box" data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                    data-x="['center']" data-y="['center']" data-voffset="[0]" data-width="['auto']" data-height="[&quot;auto&quot;]" data-fontsize="[48, 48, 34, 26, 30]">
                        <span class="text-container js-text-trans" data-background="../<?php echo $sl['image'];?>">
                            <span>School Administration</span>
                        </span>
                    </h2>
                    <div class="tp-caption tp-resizeme" data-frames="[{&quot;delay&quot;:900,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                    data-x="['center']" data-y="['center']" data-voffset="[100,100,85,70,60]" data-width="['auto']" data-height="[&quot;auto&quot;]">
                        <a class="au-btn au-btn--border au-btn--white" href="../../inquiry"><span class="text-white">Get in Touch</span></a>
                    </div>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
</section>
<!-- END SLIDE-->
   
<!-- END SLIDER-->
<?php if(!isset($_GET['ref'])){?>
<!-- WHO AM I-->
    <section class="who-ami p-t-100 p-b-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="who-ami__greetings clearfix">
                        <div class="who-ami__greetings-left clearfix float-lg-left wow fadeInLeft" data-wow-delay="1s">
                            <h2 class="greetings">Our </h2>
                            <h2 class="name float-right">Uniqueness</h2>
                        </div>
                        <div class="who-ami__greetings-right wow fadeInRight" data-wow-delay="1.5s">
                            <p>
                                TRICOL is unique in many ways. As a College, we are judged by the quality of our teaching, results and the character of our students. TRICOL has a reputation for good results in both national and international examinations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-t-60">
                <div class="col-lg-10">
                    <div class="who-ami__img">
                        <iframe width="986" height="452" src="https://www.youtube.com/embed/13JP9HGpRBA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-2">
                        <div class="who-ami__title">
                            <div class="who-ami__title-text wow fadeInLeft" data-wow-delay=".4s">UPCOMING EVENTS</div>
                            <a href="../../inquiry" class="au-btn au-btn--dark">contact now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END WHO AM I-->

        <!-- LASTEST WORK-->
        <section class="lastest-work bg-f8 p-t-40">
            <div class="container-fluid">
                <div class="section__content section__content--w1760">
                    <div class="row row-special">
                        <div class="col-25">
                            <div class="lastest-work__intro">
                                <img src="images/bg-intro-01.jpg" alt="background">
                                <div class="lastest-work__intro-inner">
                                    <h2 class="lastest-work__title">
                                        <span class="d-block">School</span>
                                        <span class="dash">Overview</span>
                                    </h2>
                                    <p class="lastest-work__text">
                                        There is no magic to achievment. It's really hard work, choices and persistence.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php 

                            $user = dbConnect()->prepare("SELECT * FROM imgUpload WHERE page='admin' ORDER BY rand() LIMIT 11");
                            $user->execute();
                            while($nc = $user->fetch()){
                            ?>
                        <div class="col-25">
                            <div class="latest-work__item">
                                <a class="link" href=""></a>
                                <div class="image">
                                    <div class="bg-overlay"></div>
                                    <img src="../<?php echo $nc['image'] ;?>" alt="Trinity International College"  />
                                </div>
                                <div class="body">
                                    <h3><?php echo $nc['title'] ;?></h3>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    </div>
                </div>
            </div>
        </section>
        <!-- END LASTEST WORK-->

        <!-- RECENT BLOG-->
        <section class="recent-blog p-t-70">
            <div class="container">
                <div class="recent-blog__title-wrap clearfix m-b-90">
                    <h2 class="recent-blog__title float-right wow fadeInRight" data-wow-delay=".2s">recent blog</h2>
                </div>
                <div class="recent-blog__item clearfix">
                    <div class="image-wrap float-lg-left">
                        <div class="image">
                            <a href="">
                                <img src="../../assets/bgs/complab.jpg" alt="Trinity INternational College" />
                            </a>
                        </div>
                        <div class="bg-layer d-none d-lg-block bg-layer--right"></div>
                    </div>
                    <div class="content content--right">
                        <h2 class="title">
                            <a href="">EDUCATION BY INSPIRATION</a>
                        </h2>
                        <!--<p class="date">AYESHA HOQUE</p>-->
                        <a class="btn">Students of AMMT Department</a>
                        <p class="text">Sometimes you just need something really smart to say to inspire and motivate oneself and those around you. Trinity gave the opportunity to be motivated, inspired and learn.</p>
                        
                    </div>
                </div>
                <div class="recent-blog__item clearfix">
                    <div class="image-wrap float-lg-right">
                        <div class="image">
                            <a href="">
                                <img src="../../assets/bgs/hostel.jpg" alt="Trinity International College" />
                            </a>
                        </div>
                        <div class="bg-layer d-none d-lg-block bg-layer--left"></div>
                    </div>
                    <div class="content content--left">
                        <h2 class="title">
                            <a href="">Our Achievement</a>
                        </h2>
                        <!--<p class="date">March 24 2017</p>-->
                        <p class="text">There is no magic to achievment. It's really hard work, choices and persistence.</p>
                        <a class="au-btn au-btn--border au-btn--p40 au-btn--border-6" href="">read more</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END RECENT BLOG-->
    <?php }else{?>
        <!-- LASTEST WORK-->
        <section class="lastest-work bg-f8 p-t-40">
            <div class="container-fluid">
                <div class="section__content section__content--w1760">
                    <div class="row row-special">
                        <div class="col-25">
                            <div class="lastest-work__intro">
                                <img src="images/bg-intro-01.jpg" alt="background">
                                <div class="lastest-work__intro-inner">
                                    <h2 class="lastest-work__title">
                                        <span class="d-block">Recent from</span>
                                        <span class="dash"><?php echo $_GET['ref'];?></span>
                                    </h2>
                                    <p class="lastest-work__text">
                                        There is no magic to achievment. It's really hard work, choices and persistence.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php 
                        $tablename = $_GET['ref'];

                            $user = dbConnect()->prepare("SELECT * FROM $tablename WHERE s_category=?");
                            $user->execute([1]);
                            while($nc = $user->fetch()){
                            ?>
                        <div class="col-25">
                            <div class="latest-work__item">
                                <a class="link" href="album-v1.html"></a>
                                <div class="image">
                                    <div class="bg-overlay"></div>
                                    <img src="../uploads/<?php echo $nc['image'] ;?>" alt="Moutain Dew" />
                                </div>
                                <div class="body">
                                    <h3><?php echo $nc['title'] ;?></h3>
                                </div>
                            </div>
                        </div>
                    <?php }?>

                    </div>
                </div>
            </div>
        </section>
        <!-- END LASTEST WORK-->

        <section class="lastest-work bg-info p-t-40">
            <div class="container-fluid">
                <div class="section__content section__content--w1760">
                    <div class="row row-special">
                        <?php 
                        $tablename = $_GET['ref'];

                            $user = dbConnect()->prepare("SELECT * FROM $tablename WHERE s_category=?");
                            $user->execute([0]);
                            while($nc = $user->fetch()){
                            ?>
                        <div class="col-25">
                            <div class="latest-work__item">
                                <div class="image">
                                    <div class="bg-overlay"></div>
                                    <img src="../uploads/<?php echo $nc['image'] ;?>" alt="Moutain Dew" />
                                </div>
                            </div>
                        </div>
                    <?php }?>

                    </div>
                </div>
            </div>
        </section>
<!-- Uploads with title and description -->
       <section class="recent-blog p-t-70">
            <div class="container">
                <div class="recent-blog__title-wrap clearfix m-b-90">
                    <h2 class="recent-blog__title float-right wow fadeInRight" data-wow-delay=".2s">recent blog</h2>
                </div>
                <?php 
                    $tablename = $_GET['ref'];

                        $user = dbConnect()->prepare("SELECT * FROM $tablename WHERE s_category=? ORDER BY rand()");
                        $user->execute([2]);
                        $i =0;
                        while($nc = $user->fetch()){
                            $i++;
                        ?>
                        <?php if($i%2==0){?>
                <div class="recent-blog__item clearfix">
                    <div class="image-wrap float-lg-left">
                        <div class="image">
                            <a href="">
                                <img src="../uploads/<?php echo $nc['image'];?>" alt="Trinity" />
                            </a>
                        </div>
                        <div class="bg-layer d-none d-lg-block bg-layer--right"></div>
                    </div>
                    <div class="content content--right">
                        <h2 class="title">
                            <a href=""><?php echo $nc['title'];?></a>
                        </h2>
                        <p class="text"><?php echo $nc['description'];?></p>
                        
                    </div>
                </div> <?php }else{?>

                <!--  -->
                <div class="recent-blog__item clearfix">
                    <div class="image-wrap float-lg-right">
                        <div class="image">
                            <a href="">
                                <img src="../uploads/<?php echo $nc['image'];?>" alt="SHOOT WHAT YOU LOVE" />
                            </a>
                        </div>
                        <div class="bg-layer d-none d-lg-block bg-layer--left"></div>
                    </div>
                    <div class="content content--left">
                        <h2 class="title">
                            <a href=""><?php echo $nc['title'];?></a>
                        </h2>
                        <p class="text"><?php echo $nc['description'];?></p>
                    </div>
                </div>
            <?php }}?>
            </div>
        </section>

    <?php }?>

<?php include 'foot.php'; ?>

</body>

</html>
<!-- end document-->
                            