
<!--==============================
Testimonial Area  
==============================-->
<section class="testi-area-1 <?php echo $klass;?>" id="testi-sec"> 
    <div class="shape-mockup testi-bg-shape1-1 jump-reverse d-xl-block d-none" data-top="5%" data-left="0">
        <img src="assets/img/shape/footer-bg-shape3.png" alt="img">
    </div>  
    <div class="shape-mockup testi-bg-shape1-2" data-top="24%" data-right="5%">
        <img src="assets/img/shape/testimonial_shape1_1.png" alt="img">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="title-area text-center">
                    <span class="sub-title">الشهادات</span>
                    <h2 class="sec-title">ماذا يقول الناس عن مؤسستنا الخيرية
                    </h2>
                </div>
            </div>
        </div>
        <div class="row gx-0 justify-content-end">
            <div class="col-lg-5">
                <div class="swiper th-slider testi-thumb-slider1" data-slider-options='{"effect":"fade","loop":false}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-box-img">
                                <img class="testi-img" src="assets/img/testimonial/testi_1_1.png" alt="img">
                                <div class="testi-card_review">
                                    <i class="fas fa-star"></i>
                                    5.0
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-box-img">
                                <img class="testi-img" src="assets/img/testimonial/testi_1_2.png" alt="img">
                                <div class="testi-card_review">
                                    <i class="fas fa-star"></i>
                                    5.0
                                </div>
                            </div>
                        </div> 
                        <div class="swiper-slide">
                            <div class="testi-box-img">
                                <img class="testi-img" src="assets/img/testimonial/testi_1_1.png" alt="img">
                                <div class="testi-card_review">
                                    <i class="fas fa-star"></i>
                                    5.0
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-box-img">
                                <img class="testi-img" src="assets/img/testimonial/testi_1_2.png" alt="img">
                                <div class="testi-card_review">
                                    <i class="fas fa-star"></i>
                                    5.0
                                </div>
                            </div>
                        </div>                                                                       
                    </div>
                </div>
            </div>
            <div class="col-lg-7">                        
                <div class="testi-slider1">
                    <div class="swiper th-slider testimonial-slider1" id="testiSlide1" data-slider-options='{"loop":false,"paginationType":"progressbar","effect":"fade", "autoHeight": "true", "thumbs":{"swiper":".testi-thumb-slider1"}}'>
                        <div class="swiper-wrapper">  
                            <?php get_section('testi-v1-rtl', 'swiper-slide', '5');?>
                        </div>
                        <div class="slider-pagination"></div>
                        <div class="slider-pagination2"></div>
                    </div>
                    <div class="icon-box">
                        <button data-slider-prev="#testiSlide1" class="slider-arrow default style-border slider-next"><i class="far fa-arrow-right"></i></button>
                        <button data-slider-next="#testiSlide1" class="slider-arrow default style-border slider-prev"><i class="far fa-arrow-left"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
