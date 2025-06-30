
<!--==============================
Product Area  
==============================-->
<section class="<?php echo $klass;?>">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-xl-3 col-lg-4 col-md-6 mb-40 mb-lg-0">
                <div class="offer-grid mega-hover" data-bg-src="assets/img/bg/cta_bg_4_2.jpg">
                    <span class="h6 box-subtitle fs-16 text-white"><span class="text-theme2">100% </span>Organic & Fresh</span>
                    <h3 class="box-title text-white">Go Greener And <br> Healthy Foods</h3>
                    <a href="shop-details.html" class="th-btn btn-sm style4">Shop Now<i class="fas fa-chevrons-right ms-2"></i></a>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-6">
                <div class="row justify-content-lg-between justify-content-center align-items-center">
                    <div class="col-md text-center text-md-start">
                        <h2 class="sec-title mb-30">Trending Products</h2>
                    </div>
                    <div class="col-md-auto d-none d-lg-inline-block">
                        <div class="sec-btn mb-35">
                            <div class="icon-box">
                                <button data-slider-prev="#productSlider7" class="slider-arrow default"><i class="far fa-arrow-left"></i></button>
                                <button data-slider-next="#productSlider7" class="slider-arrow default"><i class="far fa-arrow-right"></i></button> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper th-slider has-shadow" id="productSlider7" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <?php get_section('product-grid', 'swiper-slide', '7'); ?>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>