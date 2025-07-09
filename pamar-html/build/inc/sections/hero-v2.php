
<!--==============================
Hero Area
==============================-->
<div class="th-hero-wrapper hero-2" id="hero"  >
    <div class="swiper th-slider" id="heroSlider2" data-slider-options='{"effect":"fade", "autoHeight": "true"}'>
        <div class="swiper-wrapper">
            <?php
                $title = array(
                    'Emergency <span>Plumbing</span> fast solution ',
                    'Expert <span>Plumbing</span> Services available',
                );
             
                $sub = array(
                    'Expert Plumber Services available',
                    'Expert Plumber Services available',
                );
                
                $content = array(
                    'All our plumbers are licensed, insured, background-checked, and customer-rated. Competently repurpose go forward benefits without goal-oriented.',
                    'All our plumbers are licensed, insured, background-checked, and customer-rated. Competently repurpose go forward benefits without goal-oriented.',
                    
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
                                    <span class="sub-title style5" data-ani="slideinup" data-ani-delay="0.2s">
                                        <img src="assets/img/icon/title-icon3.svg" alt="">
                                         <?php echo $sub[$x];?>
                                    </span>
                                    <h1 class="hero-title text-white">
                                        <span class="title1" data-ani="slideinup" data-ani-delay="0.4s"><?php echo $title[$x];?></span>
                                    </h1>
                                    <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.6s"><?php echo $content[$x];?></p>
                                    <div class="btn-group" data-ani="slideinup" data-ani-delay="0.7s">
                                       <a href="about.html" class="th-btn style7">
                                            Request a Quote
                                            <span class="after-bg"></span>
                                        </a>
                                        <a href="contact.html" class="th-btn style8">
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
                  <button data-slider-prev="#heroSlider2" class="slider-arrow style3 style3-1 default prev">
                     <img src="assets/img/icon/arrow-left3.svg" alt="">
                  </button>
                  <button data-slider-next="#heroSlider2" class="slider-arrow style3 style3-1 default next">
                     <img src="assets/img/icon/arrow-right3.svg" alt="">
                  </button>
               </div>
        </div> 
    <div class="scroll-down">
        <a href="#about-sec" class="scroll-wrap">Scroll Down<span><img src="assets/img/icon/down-arrow.svg" alt=""></span></a>
    </div> 
</div>
<!--======== / Hero Section ========-->