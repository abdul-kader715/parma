<!--==============================
Team Area  
==============================-->
<section class="<?php echo $klass;?> team-area-5">
    <div class="team-bg-img-5 gsap-parallax" data-overlay="title" data-opacity="7">
        <img src="assets/img/bg/team-bg-5.png" alt="img">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-5 col-xl-9 col-lg-8 col-md-10">
                <div class="title-area text-center">
                    <span class="sub-title text-white fadeinup wow" data-wow-duration="1.2s" data-wow-delay="0.1s">EXPERT TEAM</span>
                    <h2 class="sec-title text-white fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">Excellent collaborate facilitator</h2>
                </div>
            </div>
        </div>
        <div class="slider-area slider-drag-wrap team-slider5 fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <div class="swiper th-slider" id="teamSlider5" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    <?php get_section('team-v1', 'swiper-slide');?>
                </div>
                <div class="slider-pagination style4"></div>
            </div>
        </div>
    </div>
</section>