
<!--==============================
Testimonial Area  
==============================-->
<section class="overflow-hidden bg-theme2 <?php echo $klass;?>">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title style4 bg-theme"><img class="logo" src="assets/img/logo-icon.svg" alt="img">TESTIMONIALS</span>
            <h2 class="sec-title text-white">Pamar Testimonials</h2>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider testi-slider5" id="testiSlide5" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"2"}}}'>
                <div class="swiper-wrapper">  
                    <?php get_section('testi-v5', 'swiper-slide', '5');?>
                </div>
            </div>
        </div>
        
    </div>
</section>
