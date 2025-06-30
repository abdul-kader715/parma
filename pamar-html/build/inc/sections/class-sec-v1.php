<!--==============================
Class Area  
==============================-->
<section class="<?php echo $klass;?>" data-bg-src="assets/img/bg/class_bg_1_1.png" data-overlay="black" data-opacity="8">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Gym & Fitness Training</span>
            <h2 class="sec-title text-white">Our Upcoming Classes</h2>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="classSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}, "autoHeight": "true"}'>
                <div class="swiper-wrapper">
                    <?php get_section('class-v1', 'swiper-slide', '5');?>
                </div>
            </div>
            <button data-slider-prev="#classSlider1" class="slider-arrow slider-prev style-border"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#classSlider1" class="slider-arrow slider-next style-border"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section>