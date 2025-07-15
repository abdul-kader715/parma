
<!--==============================
Feature Area  
==============================-->
<section class="why-sec3 <?php echo $klass;?>" data-bg-src="assets/img/bg/why-bg-3-1.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="title-area text-center mb-60">
                    <span class="sub-title2 style2 text-bg-white" data-cue="slideInUp">Why Choose Us</span>
                    <h2 class="sec-title style5 text-anim2 text-white" data-cue="slideInUp">
                        Here’s What We Can Do for You
                    </h2>
                </div>
            </div>            
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="brand-wrap1">
            <div class="swiper th-slider" data-cue="slideInUp" id="brandSlider"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":"auto"}},
                "autoplay":{"delay":0,"disableOnInteraction":false},"noSwiping":"true","speed":8000,"spaceBetween":24}'>
                    <div class="swiper-wrapper">
                        <?php
                            $img = array(
                                'assets/img/icon/feature/why-3-1.svg',
                                'assets/img/icon/feature/why-3-2.svg',
                                'assets/img/icon/feature/why-3-3.svg',
                                'assets/img/icon/feature/why-3-4.svg',
                                'assets/img/icon/feature/why-3-1.svg',
                                'assets/img/icon/feature/why-3-2.svg',
                                'assets/img/icon/feature/why-3-3.svg',
                                'assets/img/icon/feature/why-3-4.svg',
                                'assets/img/icon/feature/why-3-1.svg',
                                'assets/img/icon/feature/why-3-2.svg',
                                'assets/img/icon/feature/why-3-3.svg',
                                'assets/img/icon/feature/why-3-4.svg',
                                'assets/img/icon/feature/why-3-1.svg',
                                'assets/img/icon/feature/why-3-2.svg',
                                'assets/img/icon/feature/why-3-3.svg',
                                'assets/img/icon/feature/why-3-4.svg',
                                'assets/img/icon/feature/why-3-1.svg',
                                'assets/img/icon/feature/why-3-2.svg',
                                'assets/img/icon/feature/why-3-3.svg',
                                'assets/img/icon/feature/why-3-4.svg',
                                'assets/img/icon/feature/why-3-1.svg',
                                'assets/img/icon/feature/why-3-2.svg',
                                'assets/img/icon/feature/why-3-3.svg',
                                'assets/img/icon/feature/why-3-4.svg',
                            );
                            $title = array(
                                'Licensed & Insured Professionals',
                                '24/7 Emergency Services',
                                'Upfront & Transparent Pricing',
                                'Same-Day Service Available',
                                'Licensed & Insured Professionals',
                                '24/7 Emergency Services',
                                'Upfront & Transparent Pricing',
                                'Same-Day Service Available',
                                'Licensed & Insured Professionals',
                                '24/7 Emergency Services',
                                'Upfront & Transparent Pricing',
                                'Same-Day Service Available',
                                'Licensed & Insured Professionals',
                                '24/7 Emergency Services',
                                'Upfront & Transparent Pricing',
                                'Same-Day Service Available',
                                'Licensed & Insured Professionals',
                                '24/7 Emergency Services',
                                'Upfront & Transparent Pricing',
                                'Same-Day Service Available',
                                'Licensed & Insured Professionals',
                                '24/7 Emergency Services',
                                'Upfront & Transparent Pricing',
                                'Same-Day Service Available',
                            );
                            $arrlength = count($img);
        
                            for($x = 0; $x < $arrlength; $x++) {
                            ?>
                                <div class="swiper-slide">
                                    <div class="why-feature-card2" >
                                        <div class="box-icon">
                                            <img src="<?php echo $img[$x];?>" alt="">
                                        </div>
                                        <div>
                                            <h4 class="box-title"><?php echo $title[$x];?></h4>
                                        </div>
                                    </div>
                                </div>
                            <?php }; 
                        ?>
                    </div>
            </div>
        </div>
    </div>
</section>