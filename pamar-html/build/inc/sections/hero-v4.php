<!--==============================
Hero Area
==============================-->
<div class="th-hero-wrapper hero-4" id="hero" data-bg-src="assets/img/bg/bg-pattern1.png">
    <div class="swiper th-slider hero-slider4" id="heroSlider4" data-slider-options='{"effect":"fade","autoHeight": "true"}'>
        <div class="swiper-wrapper">
            <?php
                $title = array(
                    'We are available to',
                    'We are available to',
                    'We are available to',
                );
                $title2 = array( 
                    'advice to build your ',
                    'advice to build your ',
                    'advice to build your ',
                );
                $title3 = array( 
                    'business ',
                    'business ',
                    'business ',
                );
                $content = array(
                    'We create exceptional digital work for web, mobile, and experiential platforms for both creative agencies.',
                    "We are a fully dedicated corporate service agency collaborating with brands all over the world.",
                    'Our business consulting services are rooted in a deep understanding of industry trends and the latest technologies.',
                );
                $img = array(
                    'assets/img/hero/hero_4_1.jpg',
                    'assets/img/hero/hero_4_2.jpg',
                    'assets/img/hero/hero_4_3.jpg',
                );
                

                $arrlength = count($title);

                for($x = 0; $x < $arrlength; $x++) {
                ?>
                    <div class="swiper-slide">
                        <div class="hero-inner">
                            <div class="hero-thumb4">
                                <div class="hero-img">
                                    <img src="<?php echo $img[$x];?>" alt="Image">
                                </div>
                                <div class="circle-tag">
                                    <div class="circle-anime-tag">
                                        <span class="circle-title-anime">LET'S GET STARTED. LET'S GET STARTED.</span>
                                    </div>
                                    <div class="thumb">
                                        <img src="assets/img/logo-icon2.svg" alt="img">
                                    </div>
                                </div>  
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-7">
                                        <div class="hero-style4">
                                            <div class="hero-bg-shape4-1 jump">
                                                <div class="color-masking">
                                                    <div class="masking-src" data-mask-src="assets/img/shape/bg-shape9.png"></div>
                                                    <img src="assets/img/shape/bg-shape9.png" alt="img">
                                                </div>
                                            </div>
                                            <h1 class="hero-title text-white">
                                                <span class="title1" data-ani="slideinup" data-ani-delay="0.3s"><?php echo $title[$x];?></span>
                                                <span class="title2" data-ani="slideinup" data-ani-delay="0.4s"><?php echo $title2[$x];?></span>
                                                <span class="title2" data-ani="slideinup" data-ani-delay="0.5s"><?php echo $title3[$x];?></span>
                                            </h1>
                                            <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.6s"><?php echo $content[$x];?></p>
                                            <div class="btn-wrap" data-ani="slideinup" data-ani-delay="0.7s">
                                                <a href="contact.html" class="th-btn style6 btn-radius-8">Get Started <i class="fa-solid fa-arrow-right ms-2"></i></a>
                                                <a href="service.html" class="th-btn style-border2 btn-radius-8">Our Services <i class="fa-solid fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }; 
            ?>
        </div>
        <div class="slider-pagination"></div>
    </div>
</div>
<!--======== / Hero Section ========-->