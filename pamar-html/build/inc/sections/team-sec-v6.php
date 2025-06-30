<!--==============================
Team Area  
==============================-->
<section class="<?php echo $klass;?> team-area-6" data-bg-src="assets/img/bg/team_bg_6_1.png">
    <div class="container z-index-common">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-6 col-md-7">
                <div class="title-area">
                    <span class="sub-title style3">OUR EXPERT TEAM <span class="sub-title-triangle1"></span><span class="sub-title-triangle2"></span><span class="sub-title-triangle3"></span></span>
                    <h2 class="sec-title text-white">Meet Our Team</h2>
                </div>
            </div>
            <div class="col-auto">
                <div class="sec-btn">
                    <a href="team.html" class="th-btn style3">View All Member<div class="icon"><i class="fa-solid fa-arrow-up-right ms-3"></i></div></a>
                </div>
            </div>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider" id="teamSlider6" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <?php get_section('team-v6', 'swiper-slide');?>
                </div>
            </div>
            <button data-slider-prev="#teamSlider6" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#teamSlider6" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section>