
<!--==============================
Blog Area  
==============================-->
<section class="blog-area-3 overflow-hidden <?php echo $klass;?> position-relative z-index-2" id="blog-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="title-area text-center mb-60">
                    <span class="sub-title2 style2 border-black-color8" data-cue="slideInUp">Latest Posts</span>
                    <h2 class="sec-title style5 text-anim2" data-cue="slideInUp">
                        Our Latest News And Article
                    </h2>
                </div>
            </div>            
        </div>
        <div class="slider-area blog-slider3" data-cue="slideInUp">
            <div class="swiper th-slider" id="blogSlider3" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <?php get_section('blog-v3', 'swiper-slide');?>
                </div>
            </div>
            <button data-slider-prev="#blogSlider3" class="slider-arrow style-border4 slider-prev"><i class="fa-solid fa-angle-left"></i></button>
            <button data-slider-next="#blogSlider3" class="slider-arrow style-border4 slider-next"><i class="fa-solid fa-angle-right"></i></button>
        </div>
    </div>
</section>