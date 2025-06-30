<!--==============================
Service Area  
==============================-->
<section class="service-area-3 <?php echo $klass;?>" id="service-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="title-area text-center mb-50">
                    <span class="sub-title2 text-gradient text-uppercase justify-content-center mb-30" data-cue="slideInUp">Our Services</span>
                    <h2 class="sec-title style2 text-uppercase fw-bold text-anim2" data-cue="slideInUp">AI technology services aim to provide intelligent solutions.</h2>
                </div>
            </div>            
        </div>
        <div class="slider-area service-slider3">
            <div class="swiper th-slider" id="serviceSlider3" data-slider-options='{"autoHeight":true,"breakpoints":{"0":{"slidesPerView":1},"767":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"3"},"1600":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <?php get_section('service-v3', 'swiper-slide'); ?>
                </div>
            </div>
            <button data-slider-prev="#serviceSlider3" class="slider-arrow style-border4 slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#serviceSlider3" class="slider-arrow style-border4 slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section>