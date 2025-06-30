<!--==============================
Service Area  
==============================-->
<section class="service-area-4 <?php echo $klass;?>" data-bg-src="assets/img/bg/wave-bg4.png" id="service-sec">
    <div class="container">
        <div class="row justify-content-xl-between justify-content-center align-items-center">
            <div class="col-xxl-5 col-xl-6">
                <div class="title-area text-xl-start text-center">
                    <span class="sub-title style4 fadeinup wow" data-wow-duration="1.2s" data-wow-delay="0.1s">SERVICES</span>
                    <h2 class="sec-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">The values that drive everything we do</h2>
                    <div class="shape-mockup service-bg-shape4-1 d-xxl-block d-none" data-right="0" data-top="0">
                        <img src="assets/img/shape/bg-shape11.png" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-5">
                <div class="title-area mb-xl-0 text-xl-start text-center">
                    <p class="sec-text mb-0 fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">Business Consulting 09 offers specialized consulting services designed to help your business thrive in today’s competitive landscape.</p>
                </div>
            </div>
            <div class="col-auto align-self-end">
                <div class="sec-btn fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <a href="service.html" class="th-btn style-border4 btn-radius-8 px-30">View All Services <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
        <div class="slider-area slider-drag-wrap">
            <div class="swiper th-slider service-slider4" id="serviceSlider4" data-slider-options='{"autoHeight": "true","breakpoints":{"0":{"slidesPerView":1},"767":{"slidesPerView":"1"}, "991":{"slidesPerView":"2"},"1200":{"slidesPerView":"2.5"},"1300":{"slidesPerView":"3"},"1400":{"slidesPerView":"3.3"},"1600":{"slidesPerView":"3.3"},"1930":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <?php get_section('service-v4', 'swiper-slide fadeinup wow'); ?>
                </div>
                <div class="slider-pagination style3"></div>
            </div>
        </div>
    </div>
</section> 