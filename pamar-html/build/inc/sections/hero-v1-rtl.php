
<!--==============================
Hero Area
==============================-->
<div class="th-hero-wrapper hero-1" id="hero">
    <div class="swiper th-slider hero-slider1" id="heroSlide1" data-slider-options='{"effect":"fade", "autoHeight": "true"}'>
        <div class="swiper-wrapper">
            <?php 
                $title = array(
                    'مساعدة بعضنا البعض يمكن
',
                    'مساعدة بعضنا البعض يمكن
',
                );
                $title2 = array( 
                    'جعل العالم أفضل
',
                    'جعل العالم أفضل
',
                );
                $sub = array(
                    'إعطاء الأمل للمشردين
',
                    'مرحبا بكم في دونات الخيرية
',
                );
                $img = array(
                    'assets/img/hero/hero_bg_1_1.jpg',
                    'assets/img/hero/hero_bg_1_2.jpg',
                );
                $arrlength = count($title);

                for($x = 0; $x < $arrlength; $x++) {
                ?>
                    <div class="swiper-slide">
                        <div class="hero-inner" data-bg-src="<?php echo $img[$x];?>" data-overlay="black4" data-opacity="5">
                            <div class="hero-bg-shape1-1">
                                <img src="assets/img/hero/hero-bg-shape1-1.png" alt="img">
                            </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-12">
                                        <div class="hero-style1 text-center">
                                            <span class="sub-title justify-content-center" data-ani="slideinup" data-ani-delay="0.2s"><?php echo $sub[$x];?></span>
                                            <h1 class="hero-title text-white">
                                                <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                                    <?php echo $title[$x];?>
                                                </span>
                                                <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                                    <?php echo $title2[$x];?>
                                                </span>
                                            </h1>
                                            <div class="btn-wrap justify-content-center" data-ani="slideinup" data-ani-delay="0.7s">
                                                <a href="contact.html" class="th-btn style4">اكتشف الآن
                                                <i class="fas fa-arrow-up-right ms-2"></i></a>
                                                <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="th-btn style5 popup-video"><i class="fas fa-play me-2"></i> شاهد الفيديو
                                                </a>
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
    </div>
</div>
<!--======== / Hero Section ========-->