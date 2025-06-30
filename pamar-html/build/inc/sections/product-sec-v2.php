
<!--==============================
Product Area  
==============================-->
<section class="<?php echo $klass;?>">
    <div class="container">
        <div class="row justify-content-lg-between justify-content-center align-items-end">
            <div class="col-lg">
                <div class="title-area text-center text-lg-start">
                    <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="Icon">Organic Products</span>
                    <h2 class="sec-title">Organic & Fresh Products Daily!</h2>
                </div>
            </div>
            <div class="col-lg-auto d-none d-lg-block">
                <div class="sec-btn">
                    <div class="icon-box">
                        <button data-slider-prev="#productSlider1" class="slider-arrow default"><i class="far fa-arrow-left"></i></button>
                        <button data-slider-next="#productSlider1" class="slider-arrow default"><i class="far fa-arrow-right"></i></button> 
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper th-slider has-shadow" id="productSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
            <div class="swiper-wrapper">
                <?php get_section('product-grid', 'swiper-slide', '7'); ?>
            </div>
        </div>
        <div class="d-block d-lg-none mt-40 text-center">
            <div class="icon-box">
                <button data-slider-prev="#productSlider1" class="slider-arrow default"><i class="far fa-arrow-left"></i></button>
                <button data-slider-next="#productSlider1" class="slider-arrow default"><i class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
</section>