<!--==============================
Hero Area
==============================-->
<div class="th-hero-wrapper hero-1 bg-mask" id="hero" data-mask-src="assets/img/shape/hero-thumb1-1-shape.png" >
    <div class="swiper th-slider" id="heroSlider8" data-slider-options='{"effect":"fade", "autoHeight": "true"}'>
        <div class="swiper-wrapper">
            <?php
                $title = array(
                    'We Provide Effective Plumbing Solution',
                    'We Provide Effective Plumbing Solution',
                );
             
                $sub = array(
                    'Expert Plumber Services available',
                    'Expert Plumber Services available',
                );
                $content = array(
                    'Competently repurpose go forward benefits without goal-oriented ROI the conveniently target business opportunities whereas proactive',
                    'Competently repurpose go forward benefits without goal-oriented ROI the conveniently target business opportunities whereas proactive',
                    
                );
            
                $img = array(
                    'assets/img/hero/hero_bg_1_1.jpg',
                    'assets/img/hero/hero_bg_1_2.jpg',
                );
                

                $arrlength = count($title);

                for($x = 0; $x < $arrlength; $x++) {
                ?>
                    <div class="swiper-slide" data-bg-src="<?php echo $img[$x];?>" >
                        <div class="hero-inner">
                            <div class="container">
                                <div class="hero-style1">
                                    <span class="sub-title style5" data-ani="slideinup" data-ani-delay="0.2s"> <?php echo $sub[$x];?></span>
                                    <h1 class="hero-title text-white">
                                        <span class="title1" data-ani="slideinup" data-ani-delay="0.4s"><?php echo $title[$x];?></span>
                                    </h1>
                                    <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.6s"><?php echo $content[$x];?></p>
                                    <div class="btn-group" data-ani="slideinup" data-ani-delay="0.7s">
                                        <a href="about.html" class="th-btn">
                                            Discover More
                                            <span class="after-bg"></span>
                                        </a>
                                       <a href="contact.html" class="th-btn style2">
                                            Contact Us
                                            <span class="after-bg"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }; 
            ?>
        </div>
        <div class="icon-box">
            <button data-slider-prev="#heroSlider8" class="slider-arrow style2 default">
               <img src="assets/img/icon/left-arrow.svg" alt="">
            </button>
            <button data-slider-next="#heroSlider8" class="slider-arrow style2 default">
              <img src="assets/img/icon/right-arrow.svg" alt="">
            </button>
        </div>
    </div> 
    <div class="scroll-down">
        <a href="#about-sec" class="scroll-wrap">Scroll Down<span><img src="assets/img/icon/down-arrow.svg" alt=""></span></a>
    </div> 
</div>
<!--======== / Hero Section ========-->