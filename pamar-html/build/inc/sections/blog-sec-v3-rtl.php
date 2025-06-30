
<!--==============================
Blog Area  
==============================-->
<section class="blog-area-3 overflow-hidden <?php echo $klass;?>" id="blog-sec" data-bg-src="assets/img/bg/gray-bg2.png">
    <div class="shape-mockup blog-bg-shape3-1" data-top="0" data-left="0" data-right="0">
        <img src="assets/img/shape/testi_bg_shape3_1.png" alt="img">
    </div>
    <div class="container">
        <div class="row justify-content-lg-between justify-content-center align-items-center">
            <div class="col-lg-7">
                <div class="title-area text-lg-start text-center">
                    <span class="sub-title after-none before-none"><i class="far fa-heart text-theme"></i> أخبار ومقالات
                    </span>
                    <h2 class="sec-title">آخر الأخبار والمقالات لدينا
                    </h2>
                </div>
            </div>
            <div class="col-auto">
                <div class="sec-btn">
                    <a href="blog.html" class="th-btn style3">عرض جميع المشاركات
                    <i class="fas fa-arrow-up-right ms-2"></i></a>
                </div>
            </div>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="blogSlider3" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}}}'>
                <div class="swiper-wrapper">
                    <?php get_section('blog-v3-rtl', 'swiper-slide');?>
                </div>
            </div>
        </div>
    </div>
</section>