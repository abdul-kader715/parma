<!--==============================
Testimonial Area  
==============================-->
<section class=" <?php echo $klass;?>" data-sec-pos="bottom-half"> 
    <div class="container">
        <div class="testi-wrap2">
            <div class="shape-mockup" data-top="0" data-right="0%">
                <img src="assets/img/shape/bg-shape9.png" alt="img">
            </div>
            <div class="testi-card2">
                <div class="box-thumb">
                    <img src="assets/img/testimonial/testi-thumb2-1.jpg" alt="img">
                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style5 popup-video">
                                <i class="fa-sharp-duotone fa-solid fa-play"></i>
                     </a>
                </div>
                <div class="slider-area">
                    <div class="swiper th-slider testi-slider2 " id="testiSlide2" data-slider-options='{"autoHeight": "true","breakpoints":{"0":{"slidesPerView":1},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"1"},"1600":{"slidesPerView":"1"}}}'>
                        <div class="swiper-wrapper">  
                            <?php get_section('testi-v2', 'swiper-slide');?>
                        </div>
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
