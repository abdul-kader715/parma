
<!--==============================
Testimonial Area  
==============================-->
<section class="testi-area-2 <?php echo $klass;?>" id="testi-sec"> 
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title after-none before-none">الشهادات</span>
            <h2 class="sec-title">ماذا يقول عملاؤنا؟
            </h2>
        </div>
        <div class="row gx-0 justify-content-center">
            <div class="col-lg-12">
                <div class="slider-area testi-thumb-slider-wrap2">
                    <div class="swiper th-slider testi-thumb-slider2" data-slider-options='{"loop": false,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"4"},"992":{"slidesPerView":"4","spaceBetween": "70"},"1200":{"slidesPerView":"5","spaceBetween": "100"},"1600":{"slidesPerView":"5","spaceBetween": "178"}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-box-img">
                                    <img class="testi-img" src="assets/img/testimonial/testi_2_1.png" alt="img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-box-img">
                                    <img class="testi-img" src="assets/img/testimonial/testi_2_2.png" alt="img">
                                </div>
                            </div> 
                            <div class="swiper-slide">
                                <div class="testi-box-img">
                                    <img class="testi-img" src="assets/img/testimonial/testi_2_3.png" alt="img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-box-img">
                                    <img class="testi-img" src="assets/img/testimonial/testi_2_4.png" alt="img">
                                </div>
                            </div>   
                            <div class="swiper-slide">
                                <div class="testi-box-img">
                                    <img class="testi-img" src="assets/img/testimonial/testi_2_5.png" alt="img">
                                </div>
                            </div>                                                                     
                        </div>
                    </div>
                    <div class="testimonial-bg-shape2-1">
                        <img src="assets/img/testimonial/testimonial-bg-shape2-1.png" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-lg-11">                        
                <div class="testi-slider2 slider-area">
                    <div class="swiper th-slider" id="testiSlide2" data-slider-options='{"loop":false,"autoHeight": "true", "thumbs":{"swiper":".testi-thumb-slider2"}}'>
                        <div class="swiper-wrapper">  
                            <?php get_section('testi-v2-rtl', 'swiper-slide');?>
                        </div>
                    </div>
                    <button data-slider-prev="#testiSlide2" class="slider-arrow style-border slider-prev"><i class="far fa-arrow-left"></i></button>
                    <button data-slider-next="#testiSlide2" class="slider-arrow style-border slider-next"><i class="far fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>
