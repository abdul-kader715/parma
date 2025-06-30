
<!--==============================
Blog Area  
==============================-->
<section class="overflow-hidden <?php echo $klass;?>" id="blog-sec">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title style4 bg-theme"><img class="logo" src="assets/img/logo-icon.svg" alt="img"> NEWS & BLOG</span>
            <h2 class="sec-title">Our News And Blog</h2>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="blogSlider7" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <?php get_section('blog-v7', 'swiper-slide', '5');?>
                </div>
            </div>
            <button data-slider-prev="#blogSlider7" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#blogSlider7" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section>