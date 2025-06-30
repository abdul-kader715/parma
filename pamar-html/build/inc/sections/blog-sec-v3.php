
<!--==============================
Blog Area  
==============================-->
<section class="blog-area-3 overflow-hidden <?php echo $klass;?> position-relative z-index-2" id="blog-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="title-area text-center">
                    <span class="sub-title2 text-gradient text-uppercase mb-30" data-cue="slideInUp">News & Blog</span>
                    <h2 class="sec-title style2 fw-bold text-uppercase text-anim2" data-cue="slideInUp">Our Latest News and Blog</h2>
                </div>
            </div>
        </div>
        <div class="slider-area blog-slider3" data-cue="slideInUp">
            <div class="swiper th-slider" id="blogSlider3" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}}}'>
                <div class="swiper-wrapper">
                    <?php get_section('blog-v3', 'swiper-slide');?>
                </div>
            </div>
            <button data-slider-prev="#blogSlider3" class="slider-arrow style-border4 slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#blogSlider3" class="slider-arrow style-border4 slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section>