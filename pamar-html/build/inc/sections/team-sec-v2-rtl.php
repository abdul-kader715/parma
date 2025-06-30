<!--==============================
Team Area  
==============================-->
<section class="<?php echo $klass;?> team-area-2">
    <div class="shape-mockup team-bg-shape2-1 spin d-xxl-block d-none" data-top="20%" data-right="3%"><img src="assets/img/shape/hand-group-shape1.png" alt="img"></div>
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title after-none before-none">متطوعنا</span>
            <h2 class="sec-title">تعرف على المتطوع المتفائل
            </h2>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow team-slider2" id="teamSlider2" data-slider-options='{"spaceBetween": "30","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <?php get_section('team-v2-rtl', 'swiper-slide');?>
                </div>
            </div>
            <button data-slider-prev="#teamSlider2" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
            <button data-slider-next="#teamSlider2" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
        </div>
    </div>
</section>