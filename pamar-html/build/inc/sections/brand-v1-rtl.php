
<!--==============================
Brand Area  
==============================-->
<div class="<?php echo $klass;?> brand-area-1">
    <div class="container">
        <div class="brand-wrap1 bg-gray text-center" data-mask-src="assets/img/shape/brand-bg-shape1.png">
            <h3 class="brand-wrap-title">موثوق به من قبل
            <span class="text-theme2"><span class="counter-number">90</span>K+</span> الشركات في جميع أنحاء العالم
            </h3>
            <div class="swiper th-slider" id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"},"1400":{"slidesPerView":"5", "spaceBetween": "90"}}}'>
                <div class="swiper-wrapper">
                    <?php
                        $img = array(
                            'assets/img/brand/brand1-1.svg',
                            'assets/img/brand/brand1-2.svg',
                            'assets/img/brand/brand1-3.svg',
                            'assets/img/brand/brand1-4.svg',
                            'assets/img/brand/brand1-5.svg',
                            'assets/img/brand/brand1-1.svg',
                            'assets/img/brand/brand1-2.svg',
                            'assets/img/brand/brand1-3.svg',
                            'assets/img/brand/brand1-4.svg',
                            'assets/img/brand/brand1-5.svg',
                        );
                        $arrlength = count($img);
    
                        for($x = 0; $x < $arrlength; $x++) {
                        ?>
                            <div class="swiper-slide">
                                <a href="blog.html" class="brand-box">
                                    <img src="<?php echo $img[$x];?>" alt="Brand Logo">
                                </a>
                            </div>
                        <?php }; 
                    ?>
                </div>
                
            </div>
        </div>
    </div>
</div>