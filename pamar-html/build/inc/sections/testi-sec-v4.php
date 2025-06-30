
<!--==============================
Testimonial Area  
==============================-->
<section class="position-relative z-index-2 <?php echo $klass;?>" data-bg-src="assets/img/bg/map-dot-bg2.png">
    <div class="testi-bg-shape4-1" data-bg-src="assets/img/bg/wave-bg2.png"></div>
    <div class="shape-mockup testi-bg-shape4-2 d-xxl-block d-none" data-top="13%" data-left="6%">
        <img src="assets/img/shape/bg-shape13.png" alt="img">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xxl-5 col-xl-7 offset-xxl-5">
                <div class="title-area">
                    <span class="sub-title style4 fadeinup wow" data-wow-duration="1.2s" data-wow-delay="0.1s">TESTIMONIALS</span>
                    <h2 class="sec-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">Thousands of satisfied customers said</h2>
                </div>
            </div>
        </div>
        <div class="slider-area slider-drag-wrap">
            <div class="swiper th-slider testi-slider4" id="testiSlide4" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"1200":{"slidesPerView":"1.2"}},"autoHeight": "true", "autoplay": false}'>
                <div class="swiper-wrapper">  
                    <?php get_section('testi-v4', 'swiper-slide');?>
                </div>
                <div class="slider-pagination style3"></div>
            </div>
        </div>
    </div>
</section>
