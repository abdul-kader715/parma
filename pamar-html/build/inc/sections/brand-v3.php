
<!--==============================
Brand Area  
==============================-->
<div class="<?php echo $klass;?>">
    <div class="container-fluid p-0">
        <div class="brand-wrap3 pt-40 pb-40 text-center">
            <div class="swiper th-slider" data-cue="slideInUp"
             id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":"auto"}},
             "autoplay":{"delay":0,"disableOnInteraction":false},"noSwiping":"false","speed":6000,"spaceBetween":160}'>
                <div class="swiper-wrapper">
                    <?php
                        $img = array(
                            'assets/img/brand/brand3-1.svg',
                            'assets/img/brand/brand3-2.svg',
                            'assets/img/brand/brand3-3.svg',
                            'assets/img/brand/brand3-4.svg',
                            'assets/img/brand/brand3-5.svg',
                            'assets/img/brand/brand3-6.svg',
                            'assets/img/brand/brand3-1.svg',
                            'assets/img/brand/brand3-2.svg',
                            'assets/img/brand/brand3-3.svg',
                            'assets/img/brand/brand3-4.svg',
                            'assets/img/brand/brand3-5.svg',
                            'assets/img/brand/brand3-6.svg',
                            'assets/img/brand/brand3-1.svg',
                            'assets/img/brand/brand3-2.svg',
                            'assets/img/brand/brand3-3.svg',
                            'assets/img/brand/brand3-4.svg',
                            'assets/img/brand/brand3-5.svg',
                            'assets/img/brand/brand3-6.svg',
                            'assets/img/brand/brand3-1.svg',
                            'assets/img/brand/brand3-2.svg',
                            'assets/img/brand/brand3-3.svg',
                            'assets/img/brand/brand3-4.svg',
                            'assets/img/brand/brand3-5.svg',
                            'assets/img/brand/brand3-6.svg',
                           
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