<!--==============================
Testimonial Area  
==============================-->
<section class=" <?php echo $klass;?>"> 
    <div class="container">
        <div class="testi-wrap2" data-cue="slideInUp">
            <div class="price-bg-shape1-1 shape-mockup d-none d-xxl-inline" data-top="0" data-right="0">
                <img src="assets/img/shape/bg-shape9.png" alt="img">
            </div>
            <div class="slider-area">
                <div class="swiper th-slider testi-slider2 " id="testiSlide2" data-slider-options='{"autoHeight": "true","effect": "fade"}'>
                    <div class="swiper-wrapper">  
                        <?php get_section('testi-v2', 'swiper-slide');?>
                    </div>
                    <div class="slider-pagination-wrap">
                        <div class="slider-pagination2"></div>
                        <div class="icon-box">
                            <button data-slider-prev="#testiSlide2" class="slider-arrow style-border3 default"><i class="far fa-arrow-left"></i></button>
                            <button data-slider-next="#testiSlide2" class="slider-arrow style-border3 default"><i class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
