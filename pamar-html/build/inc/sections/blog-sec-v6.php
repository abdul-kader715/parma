
<!--==============================
Blog Area  
==============================-->
<section class="overflow-hidden <?php echo $klass;?>" id="blog-sec">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-8">
                <div class="title-area">
                    <span class="sub-title style3"> NEWS & BLOG <span class="sub-title-triangle1"></span><span class="sub-title-triangle2"></span><span class="sub-title-triangle3"></span></span>
                    <h2 class="sec-title">Our Latest News</h2>
                </div>
            </div>
            <div class="col-md-auto">
                <div class="sec-btn">
                    <a href="blog.html" class="th-btn">All News & Blog<div class="icon"><i class="fa-solid fa-arrow-up-right ms-3"></i></div></a>
                </div>
            </div>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="blogSlider6" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <?php get_section('blog-v6', 'swiper-slide', '5');?>
                </div>
            </div>
        </div>
    </div>
</section>