<!--==============================
Hero Area
==============================-->
<div class="th-hero-wrapper hero-3 " id="hero" data-bg-src="assets/img/hero/hero_thumb_3_1.jpg" >
    <div class="swiper th-slider" id="heroSlider3" data-slider-options='{"effect":"fade", "autoHeight": "true"}'>
        <div class="swiper-wrapper">
            <?php
                $title = array(
                    'Professional Residential',
                    'Professional Residential',
                    'Professional Residential',
                );
             
                $sub = array(
                    'Plumbing',
                    'Plumbing',
                    'Plumbing',
                );
                $sub2 = array(
                    'Quality You Can Trust',
                    'Quality You Can Trust',
                    'Quality You Can Trust',
                );
                $list = array(
                   '<li> 24 -Hours Emergency Services</li>
                    <li> Uniformed, Licensed Plumbers</li>
                    <li> Free Estimates</li>
                    ',

                   '<li> 24 -Hours Emergency Services</li>
                    <li> Uniformed, Licensed Plumbers</li>
                    <li> Free Estimates</li>
                    ',

                   '<li> 24 -Hours Emergency Services</li>
                    <li> Uniformed, Licensed Plumbers</li>
                    <li> Free Estimates</li>
                    ',
                );
            
                $img = array(
                    'assets/img/hero/hero_bg_3_1.png',
                    'assets/img/hero/hero_bg_3_2.png',
                    'assets/img/hero/hero_bg_3_3.png',
                );
                

                $arrlength = count($title);

                for($x = 0; $x < $arrlength; $x++) {
                ?>
                    <div class="swiper-slide" >
                        <div class="hero-inner">
                            <div class="container">
                                <div class="hero-style3">
                                    <span class="sub-title style5" data-ani="slideinup" data-ani-delay="0.2s"> <?php echo $title[$x];?></span>
                                    <h1 class="hero-title text-white">
                                        <span class="title1" data-ani="slideinup" data-ani-delay="0.4s"><?php echo $sub[$x];?></span>
                                    </h1>
                                    <h3 class="hero-text" data-ani="slideinup" data-ani-delay="0.5s"><?php echo $sub2[$x];?></h3>
                                    <div class="checklist" data-ani="slideinup" data-ani-delay="0.6s">
                                        <ul>
                                            <?php echo $list[$x];?>
                                        </ul>
                                    </div>
                                    <div data-ani="slideinup" data-ani-delay="0.7s">
                                        <a href="contact.html" class="th-btn style14">
                                          Request an appointment
                                       </a>
                                    </div>
                                </div>
                            </div>
                            <div class="box-img">
                                <img src="<?php echo $img[$x];?>" alt="">
                            </div>
                        </div>
                    </div>
                <?php }; 
            ?>
        </div>
        <button data-slider-prev="#heroSlider3" class="slider-arrow style-border4 slider-prev"><i class="fa-solid fa-angle-left"></i></button>
        <button data-slider-next="#heroSlider3" class="slider-arrow style-border4 slider-next"><i class="fa-solid fa-angle-right"></i></button>
    </div> 
    <div class="hero-info ">
            <div class="box-icon">
                <img src="assets/img/icon/phone-icon-template.svg" alt="">
            </div>  
            <div class="box-content">
                <h3 class="box-title">Emergency <span>Plumbing</span></h3>
                <p class='box-text'>We’re Open 24/7/365 – Because Plumbing Emergencies Can’t Wait!</p>
            </div>     
            <div class="shape-mockup" data-top="0" data-right="0">
                <img src="assets/img/shape/bg-shape10.png" alt="">
            </div>   
            <div class="shape-mockup hero-info-bg" data-top="0" data-right="0">
                <img src="assets/img/shape/hero-thumb3-1-shape.png" alt="">
            </div>   
     </div> 
</div>
<!--======== / Hero Section ========-->

