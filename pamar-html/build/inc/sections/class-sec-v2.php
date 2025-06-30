<!--==============================
Class Area  
==============================-->
<section class="<?php echo $klass;?> class-area-2 position-relative">
    <div class="class-bg-shape bg-smoke" data-mask-src="assets/img/bg/class-bg-shape2.png">
    </div>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6">
                <div class="title-area text-lg-start text-center">
                    <span class="sub-title after-lg-none">Fitness Training</span>
                    <h2 class="sec-title">Our Upcoming Classes</h2>
                </div>
            </div>
            <div class="col-lg-auto">
                <div class="sec-btn">
                    <div class="icon-box">
                        <button data-slider-prev="#classSlider2" class="slider-arrow default slider-prev style-border2"><i class="far fa-arrow-left"></i></button>
                        <button data-slider-next="#classSlider2" class="slider-arrow default slider-next style-border2"><i class="far fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>        
    </div>
    <div class="container-fluid p-0">
        <div class="slider-area">
            <div class="swiper th-slider class-slider2" id="classSlider2" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1500":{"slidesPerView":"4"}}, "autoHeight": "true", "centeredSlides": "true"}'>
                <div class="swiper-wrapper">
                    <?php get_section('class-v2', 'swiper-slide');?>
                </div>
            </div>
        </div>
    </div>
</section>