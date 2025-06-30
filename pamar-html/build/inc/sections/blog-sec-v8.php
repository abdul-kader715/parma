
<!--==============================
Blog Area  
==============================-->
<section class="overflow-hidden <?php echo $klass;?>" id="blog-sec" data-bg-src="assets/img/bg/schedule_bg_1_1.png">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-8">
                <div class="title-area text-md-start text-center">
                    <span class="sub-title style4"><img class="logo" src="assets/img/logo-icon.svg" alt="img"> NEWS & BLOG</span>
                    <h2 class="sec-title">Our Latest News</h2>
                </div>
            </div>
            <div class="col-md-auto">
                <div class="sec-btn">
                    <a href="blog.html" class="th-btn style4">All News & Blog<div class="icon"><i class="fa-solid fa-arrow-up-right ms-3"></i></div></a>
                </div>
            </div>
        </div>
        
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="blogSlider8" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <?php get_section('blog-v8', 'swiper-slide', '5');?>
                </div>
            </div>
            <button data-slider-prev="#blogSlider8" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#blogSlider8" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section>