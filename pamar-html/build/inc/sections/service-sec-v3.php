<!--==============================
Service Area  
==============================-->
<section class="service-area-3 <?php echo $klass;?>" id="service-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7">
                <div class="title-area text-center mb-60">
                    <span class="sub-title2 style2 border-black-color8" data-cue="slideInUp">Our Services</span>
                    <h2 class="sec-title style5 text-anim2 " data-cue="slideInUp">
                        We provide solutions for renovating
                        homes repairing
                    </h2>
                </div>
            </div>            
        </div>
        <div class="slider-area service-slider3">
            <div class="swiper th-slider" id="serviceSlider3" data-slider-options='{"autoHeight":true,"breakpoints":{"0":{"slidesPerView":1},"767":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"},"1600":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    <?php get_section('service-v3', 'swiper-slide'); ?>
                </div>
            </div>
            <button data-slider-prev="#serviceSlider3" class="slider-arrow style-border4 slider-prev"><i class="fa-solid fa-angle-left"></i></button>
            <button data-slider-next="#serviceSlider3" class="slider-arrow style-border4 slider-next"><i class="fa-solid fa-angle-right"></i></button>
        </div>
    </div>
</section>