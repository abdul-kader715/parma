<!--==============================
Testimonial Area  
==============================-->
<section class=" <?php echo $klass;?>" data-sec-pos="bottom-half"> 
    <div class="container">
        <div class="testi-wrap2 overflow-hidden" data-cue="slideInUp">
            <div class="shape-mockup" data-top="0" data-right="0%">
                <img src="assets/img/shape/bg-shape9.png" alt="img">
            </div>
            <div class="slider-area">
                <div class="swiper th-slider testi-slider2 " id="testiSlide2" data-slider-options='{"autoHeight": "true","effect": "fade"}'>
                    <div class="swiper-wrapper">  
                        <?php get_section('testi-v2', 'swiper-slide');?>
                    </div>
                    <div class="slider-pagination-wrap">
                        <button data-slider-prev="#testiSlide2" class="slider-arrow style5 "><i class="far fa-arrow-left"></i></button>
                        <button data-slider-next="#testiSlide2" class="slider-arrow style5 "><i class="far fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
