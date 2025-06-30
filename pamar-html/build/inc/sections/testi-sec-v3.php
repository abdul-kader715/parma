
<!--==============================
Testimonial Area  
==============================-->
<section class="overflow-hidden <?php echo $klass;?>" data-bg-src="assets/img/bg/testi-bg-3-1.png">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-5 col-lg-8">
                <div class="title-area text-lg-start text-center">
                    <span class="sub-title2 text-gradient text-uppercase mb-30" data-cue="slideInUp">Testimonials</span>
                    <h2 class="sec-title style2 fw-bold text-uppercase text-anim2" data-cue="slideInUp">What Our Clients Say About us?</h2>
                </div>
            </div>
            <div class="col-lg-auto">
                <div class="sec-btn">
                    <div class="icon-box">
                        <button data-slider-prev="#testiSlide3" class="icon-btn style4 slider-arrow default slider-prev"><i class="fal fa-arrow-left"></i></button>
                        <button data-slider-next="#testiSlide3" class="icon-btn style4 slider-arrow default slider-next"><i class="fal fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-area testi-slider3" data-cue="slideInUp">
            <div class="swiper th-slider has-shadow" id="testiSlide3" data-slider-options='{"autoHeight": "true","breakpoints":{"0":{"slidesPerView":1},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1600":{"slidesPerView":"3.5"},"1921":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">  
                    <?php get_section('testi-v3', 'swiper-slide');?>
                </div>
            </div>
        </div>
    </div>
</section>
