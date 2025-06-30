
<!--==============================
Testimonial Area  
==============================-->
<section class="testi-area-2 <?php echo $klass;?>" id="testi-sec" data-bg-src="assets/img/bg/bg-pattern1.png"> 
    <div class="shape-mockup testi-bg-shape2-1 jump-reverse d-xl-block d-none" data-left="8%" data-top="15%">
        <div class="color-masking">
            <div class="masking-src" data-mask-src="assets/img/shape/bg-shape2.png"></div>
            <img src="assets/img/shape/bg-shape2.png" alt="img">
        </div>
    </div>
    <div class="shape-mockup testi-bg-shape2-2 jump d-xl-block d-none" data-right="8%" data-top="15%">
        <img src="assets/img/shape/bg-shape4.png" alt="img">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-5 col-xl-6">
                <div class="title-area text-center">
                    <span class="sub-title fadeinup wow" data-wow-duration="1.2s" data-wow-delay="0.1s">TESTIMONIALS</span>
                    <h2 class="sec-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">What our clients say about our work.</h2>
                </div>
            </div>
        </div>
        <div class="slider-area testi-thumb-slider-wrap2">
            <div class="swiper th-slider testi-thumb-slider2" data-slider-options='{"loop": false,"effect": "fade"}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testi-box-img">
                            <img class="testi-img" src="assets/img/testimonial/testi2-1.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-box-img">
                            <img class="testi-img" src="assets/img/testimonial/testi2-2.png" alt="img">
                        </div>
                    </div> 
                    <div class="swiper-slide">
                        <div class="testi-box-img">
                            <img class="testi-img" src="assets/img/testimonial/testi2-1.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-box-img">
                            <img class="testi-img" src="assets/img/testimonial/testi2-2.png" alt="img">
                        </div>
                    </div>                                                                      
                </div>
            </div>
        </div>
        <div class="slider-area fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <div class="swiper th-slider testi-slider2" id="testiSlide2" data-slider-options='{"loop":false,"autoHeight": "true","effect": "fade","thumbs":{"swiper":".testi-thumb-slider2"}}'>
                <div class="swiper-wrapper">  
                    <?php get_section('testi-v2.1', 'swiper-slide');?>
                </div>
                <div class="slider-pagination style2"></div>
            </div>
        </div>
    </div>
</section>
