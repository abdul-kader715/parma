<!--==============================
Testimonial Area  
==============================-->
<section class="testi-area-2 <?php echo $klass;?>"> 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-7 col-xl-8">
                <div class="title-area text-center mb-50">
                    <span class="sub-title2 justify-content-center mb-30 text-anim text-white" data-cue="slideInUp">Testimonials</span>
                    <h2 class="sec-title style2 text-anim2 text-white" data-cue="slideInUp">What Our Clients Say About Us?</h2>
                </div>
            </div>            
        </div>
        <div class="testi-wrap2" data-cue="slideInUp">
            <div class="testi-quote-icon">
                <img src="assets/img/icon/quote-icon.svg" alt="icon">
            </div>
            <div class="slider-area">
                <div class="swiper th-slider testi-slider2 " id="testiSlide2" data-slider-options='{"autoHeight": "true","effect": "fade"}'>
                    <div class="swiper-wrapper">  
                        <?php get_section('testi-v2', 'swiper-slide');?>
                    </div>
                    <div class="slider-pagination-wrap">
                        <div class="slider-pagination2"></div>
                        <div class="icon-box">
                            <button data-slider-prev="#testiSlide2" class="slider-arrow style-border3 default"><i class="far fa-arrow-left"></i></button>
                            <button data-slider-next="#testiSlide2" class="slider-arrow style-border3 default"><i class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
