
<!--==============================
Testimonial Area  
==============================-->
<section class="overflow-hidden <?php echo $klass;?>" data-bg-src="assets/img/bg/testi-bg-3-2.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="title-area text-center mb-60">
                    <span class="sub-title2 style2 border-black-color8" data-cue="slideInUp">Our Feedbacks</span>
                    <h2 class="sec-title style5 text-anim2 " data-cue="slideInUp">
                        Trusted by 1k+ Clients!
                    </h2>
                    <p>They usually show impact through before-and-after comparisons or provide specific improvement statistics.</p>
                </div>
            </div>            
        </div>
        <div class="slider-area testi-slider3" data-cue="slideInUp">
            <div class="swiper th-slider has-shadow" id="testiSlide3" data-slider-options='{"autoHeight": "true","breakpoints":{"0":{"slidesPerView":1},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"3"},"1921":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">  
                    <?php get_section('testi-v3', 'swiper-slide');?>
                </div>
            </div>
            <button data-slider-prev="#testiSlide3" class="slider-arrow style-border4 slider-prev"><i class="fa-solid fa-angle-left"></i></button>
            <button data-slider-next="#testiSlide3" class="slider-arrow style-border4 slider-next"><i class="fa-solid fa-angle-right"></i></button>
        </div>
    </div>
</section>
