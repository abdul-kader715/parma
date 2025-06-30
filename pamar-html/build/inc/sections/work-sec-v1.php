<!--==============================
Work Area  
==============================-->
<div class="work-area-1 <?php echo $klass;?> position-relative z-index-2">
    <div class="container grid_lines d-none d-md-flex justify-content-between">
        <div class="grid_line"></div>
        <div class="grid_line"></div>
        <div class="grid_line"></div>
        <div class="grid_line"></div>
        <div class="grid_line"></div>
    </div>
    <div class="container">
        <div class="row justify-content-xl-between justify-content-center align-items-center">
            <div class="col-xxl-5 col-xl-6">
                <div class="title-area text-xl-start text-center">
                    <span class="sub-title style3 text-white fadeinup wow" data-wow-duration="1.2s" data-wow-delay="0.1s">MY TOOLS</span>
                    <h2 class="sec-title text-white fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">Discover what tools I use for work</h2>
                </div>
            </div>
            <div class="col-auto align-self-end">
                <div class="sec-btn fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="icon-box">
                        <button data-slider-prev="#workSlider1" class="slider-arrow default"><i class="far fa-arrow-left"></i></button>
                        <button data-slider-next="#workSlider1" class="slider-arrow default"><i class="far fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper th-slider work-slider1 fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s" id="workSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"767":{"slidesPerView":"2"},"1200":{"slidesPerView":"2.5"},"1300":{"slidesPerView":"3"},"1400":{"slidesPerView":"3.3"},"1600":{"slidesPerView":"4.3"},"1930":{"slidesPerView":"4"}}}'>
            <div class="swiper-wrapper">
                <?php get_section('work-v1', 'swiper-slide'); ?>
            </div>
        </div>
    </div>
</div>