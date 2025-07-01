
<!--==============================
Brand Area  
==============================-->
<div class="<?php echo $klass;?> brand-area-3">
    <div class="brand-wrap3">
            <div class="slider-area brand-slider3 fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">
                <div class="swiper th-slider" id="brandSlider3"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},
                    "576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},
                    "992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"},"1400":{"slidesPerView":"5"}}}'>
                    <div class="swiper-wrapper">
                        <?php
                            $img = array(
                                'assets/img/brand/brand4-1.svg',
                                'assets/img/brand/brand4-2.svg',
                                'assets/img/brand/brand4-3.svg',
                                'assets/img/brand/brand4-4.svg',
                                'assets/img/brand/brand4-5.svg',
                                'assets/img/brand/brand4-1.svg',
                                'assets/img/brand/brand4-2.svg',
                                'assets/img/brand/brand4-3.svg',
                                'assets/img/brand/brand4-4.svg',
                                'assets/img/brand/brand4-5.svg',
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