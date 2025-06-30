<!--==============================
Service Area  
==============================-->
<section class="<?php echo $klass;?>" id="service-sec">
    <div class="container">
        <div class="row justify-content-center align-items-end">
            <div class="col-lg-12">
                <div class="title-area text-center">
                    <span class="sub-title style3">OUR SERVICES <span class="sub-title-triangle1"></span><span class="sub-title-triangle2"></span><span class="sub-title-triangle3"></span> </span>
                    <h2 class="sec-title">Tailored Consulting Services</h2>
                </div>
            </div>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="serviceSlider6" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <?php get_section('service-v6', 'swiper-slide', '5');?>
                </div>
            </div>
            <button data-slider-prev="#serviceSlider6" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#serviceSlider6" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section>