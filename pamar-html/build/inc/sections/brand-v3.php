
<!--==============================
Brand Area  
==============================-->
<div class="<?php echo $klass;?> brand-area-3">
    <div class="brand-wrap3">
        <div class="container">
            <div class="row align-items-center gy-40">
                <div class="col-lg-7">
                    <div class="slider-area brand-slider3 fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="swiper th-slider" id="brandSlider3" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"},"1400":{"slidesPerView":"4"}}}'>
                            <div class="swiper-wrapper">
                                <?php
                                    $img = array(
                                        'assets/img/brand/brand3-1.svg',
                                        'assets/img/brand/brand3-2.svg',
                                        'assets/img/brand/brand3-3.svg',
                                        'assets/img/brand/brand3-4.svg',
                                        'assets/img/brand/brand3-1.svg',
                                        'assets/img/brand/brand3-2.svg',
                                        'assets/img/brand/brand3-3.svg',
                                        'assets/img/brand/brand3-4.svg',
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
                <div class="col-lg-5">
                    <div class="counter-wrap3 fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <h4 class="counter-number">4.9</h4>
                        <div class="media-body">
                            <div class="counter-rating">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <p class="counter-text">15k+ Reviews shapes our solutions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>