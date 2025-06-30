
<!--==============================
Blog Area  
==============================-->
<section class="overflow-hidden <?php echo $klass;?>" id="blog-sec">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xxl-4 col-lg-6">
                <div class="title-area">
                    <span class="sub-title fadeinup wow" data-wow-duration="1.2s" data-wow-delay="0.1s">BLOG & NEWS</span>
                    <h2 class="sec-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">Read our latest news & articles</h2>
                </div>
            </div>
            <div class="col-auto align-self-end">
                <div class="sec-btn fadeinright wow" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <a href="blog.html" class="th-btn style-border">View All Articles <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
        <div class="slider-area fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <div class="swiper th-slider has-shadow" id="blogSlider5" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <?php get_section('blog-v5', 'swiper-slide', '5');?>
                </div>
            </div>
        </div>
    </div>
</section>