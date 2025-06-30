
<!--==============================
Brand Area  
==============================-->
<div class="<?php echo $klass;?> brand-area-1" data-bg-src="assets/img/bg/dot-bg2.png">
    <div class="brand-bg-shape1 shape-mockup jump-reverse d-xxl-block d-none" data-left="5%" data-top="1%">
        <img src="assets/img/shape/bg-shape15.png" alt="img">
    </div>
    <div class="container">
        <div class="brand-wrap1 text-center">
            <h3 class="brand-wrap-title fadeinup wow" data-wow-duration="1.3s" data-wow-delay="0.1s">We Worked With Largest Brands Over <span class="text-theme">1390+</span> Projects</h3>
            <div class="swiper th-slider fadeinup wow" data-wow-duration="1.3s" data-wow-delay="0.2s" id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"3"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"5"},"1400":{"slidesPerView":"7", "spaceBetween": "80"}}}'>
                <div class="swiper-wrapper">
                    <?php
                        $img = array(
                            'assets/img/brand/brand1-1.svg',
                            'assets/img/brand/brand1-2.svg',
                            'assets/img/brand/brand1-3.svg',
                            'assets/img/brand/brand1-4.svg',
                            'assets/img/brand/brand1-5.svg',
                            'assets/img/brand/brand1-6.svg',
                            'assets/img/brand/brand1-7.svg',
                            'assets/img/brand/brand1-1.svg',
                            'assets/img/brand/brand1-2.svg',
                            'assets/img/brand/brand1-3.svg',
                            'assets/img/brand/brand1-4.svg',
                            'assets/img/brand/brand1-5.svg',
                            'assets/img/brand/brand1-6.svg',
                            'assets/img/brand/brand1-7.svg',
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