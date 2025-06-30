
<!--==============================
Testimonial Area  
==============================-->
<section class="overflow-hidden <?php echo $klass;?>">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title after-none before-none"><i class="far fa-heart text-theme"></i>الشهادات</span>
            <h2 class="sec-title">ماذا يقول عملاؤنا؟
            </h2>
        </div>
        <div class="testi-slider3 slider-area">
            <div class="swiper th-slider" id="testiSlide3" data-slider-options='{"autoHeight": "true","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}}}'>
                <div class="swiper-wrapper">  
                    <?php get_section('testi-v3-rtl', 'swiper-slide');?>
                </div>
            </div>
            <button data-slider-prev="#testiSlide3" class="slider-arrow style-border slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#testiSlide3" class="slider-arrow style-border slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section>
