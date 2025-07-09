<!--==============================
Testimonial Area  
==============================-->
<section class=" <?php echo $klass;?>" data-sec-pos="bottom-half"> 
    <div class="container">
        <div class="testi-wrap2">
            <div class="shape-mockup" data-top="0" data-right="0%">
                <img src="assets/img/shape/bg-shape9.png" alt="img">
            </div>
            <div class="slider-area">
                <div class="swiper th-slider testi-slider2 " id="testiSlide2" data-slider-options='{"autoHeight": "true","effect": "fade"}'>
                    <div class="swiper-wrapper">  
                        <?php get_section('testi-v2', 'swiper-slide');?>
                    </div>
                    
                </div>
            </div>
            <div class="icon-box d-none d-xxl-inline-block">
                <button data-slider-prev="#testiSlide2" class="slider-arrow style3 style3-1  style5 ">
                    <img src="assets/img/icon/arrow-left3.svg" alt="">
                </button>
                <button data-slider-next="#testiSlide2" class="slider-arrow style3 style3-1  style5 ">
                    <img src="assets/img/icon/arrow-right3.svg" alt="">
                </button>
        </div>
        </div>
        
    </div>
</section>
