<!--==============================
Project Area  
==============================-->
<section class="<?php echo $klass;?>">
    <div class="project-wrap1 space th-radius overflow-hidden" data-bg-src="assets/img/bg/gray-bg2.png" data-overlay="gray" data-opacity="5">
        <div class="shape-mockup project-bg-shape1-1" data-top="0" data-right="0">
            <img src="assets/img/shape/project-shape1-1.png" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-md-between align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="title-area">
                        <span class="sub-title before-none">مشاريع كاملة
                        </span>
                        <h2 class="sec-title">مشروعنا الأخير
                        </h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="contact.html" class="th-btn">عرض الكل المشروع
                        <i class="fas fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider" id="ProjectSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <!-- Single Item -->
                        <?php get_section('project-v1-rtl', 'swiper-slide')?>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</section>