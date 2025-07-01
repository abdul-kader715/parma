
<!--==============================
Brand Area  
==============================-->
<div class="<?php echo $klass;?> brand-area-1">
    <div class="container-fluid p-0">
        <div class="brand-wrap1 text-center">
            <div class="swiper th-slider" data-cue="slideInUp" id="brandSlider1"
             data-slider-options='{"breakpoints":{"0":{"slidesPerView":"auto"}},
             "autoplay":{"delay":0,"disableOnInteraction":false},"noSwiping":"true","speed":8000,"spaceBetween":126}'>
                <div class="swiper-wrapper">
                    <?php
                        $img = array(
                            'assets/img/brand/brand1-1.svg',
                            'assets/img/brand/brand1-2.svg',
                            'assets/img/brand/brand1-3.svg',
                            'assets/img/brand/brand1-4.svg',
                            'assets/img/brand/brand1-5.svg',
                            'assets/img/brand/brand1-6.svg',
                            'assets/img/brand/brand1-1.svg',
                            'assets/img/brand/brand1-2.svg',
                            'assets/img/brand/brand1-3.svg',
                            'assets/img/brand/brand1-4.svg',
                            'assets/img/brand/brand1-5.svg',
                            'assets/img/brand/brand1-6.svg',
                            'assets/img/brand/brand1-1.svg',
                            'assets/img/brand/brand1-2.svg',
                            'assets/img/brand/brand1-3.svg',
                            'assets/img/brand/brand1-4.svg',
                            'assets/img/brand/brand1-5.svg',
                            'assets/img/brand/brand1-6.svg',
                            'assets/img/brand/brand1-1.svg',
                            'assets/img/brand/brand1-2.svg',
                            'assets/img/brand/brand1-3.svg',
                            'assets/img/brand/brand1-4.svg',
                            'assets/img/brand/brand1-5.svg',
                            'assets/img/brand/brand1-6.svg',
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