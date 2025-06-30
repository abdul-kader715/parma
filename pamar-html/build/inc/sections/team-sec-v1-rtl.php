<!--==============================
Team Area  
==============================-->
<section class="<?php echo $klass;?> team-area-1">
    <div class="shape-mockup team-bg-shape1-1 spin d-xxl-block d-none" data-top="0%" data-right="3%"><img src="assets/img/shape/hand-group-shape1.png" alt="img"></div>
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">متطوعنا
            </span>
            <h2 class="sec-title">تعرف على المتطوع المتفائل
            </h2>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow team-slider1" id="teamSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    <?php get_section('team-v1-rtl', 'swiper-slide');?>
                </div>
            </div>
            <button data-slider-next="#teamSlider1" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-prev="#teamSlider1" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section>