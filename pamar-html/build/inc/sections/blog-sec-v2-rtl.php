
<!--==============================
Blog Area  
==============================-->
<section class="<?php echo $klass;?>" id="blog-sec">
    <div class="shape-mockup blog-bg-shape2-1 jump-reverse d-xl-block d-none" data-top="20%" data-left="0">
        <img src="assets/img/shape/footer-bg-shape3.png" alt="img">
    </div>
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title after-none before-none">أخبار ومقالات
            </span>
            <h2 class="sec-title">آخر الأخبار والمقالات لدينا
            </h2>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="blogSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}, "autoHeight": "true"}'>
                <div class="swiper-wrapper">
                    <?php get_section('blog-v1-rtl', 'swiper-slide', '5');?>
                </div>
            </div>
            <button data-slider-next="#blogSlider1" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-prev="#blogSlider1" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section>