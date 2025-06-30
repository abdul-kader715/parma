<!--==============================
Gallery Area  
==============================-->
<div class="overflow-hidden <?php echo $klass;?> z-index-common" data-sec-pos="bottom-half" data-pos-for=".event-area-1">
    <div class="shape-mockup gallery-bg-shape1-1 d-xxl-block d-none jump" data-right="4%" data-top="20%">
        <img src="assets/img/shape/bg-shape15.png" alt="img">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-6 col-xl-8">
                <div class="title-area text-center">
                    <span class="sub-title fadeinup wow" data-wow-duration="1.2s" data-wow-delay="0.1s">OUR GALLERY</span>
                    <h2 class="sec-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">Everything your need for productivity and comfort</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="swiper gallery-slider1">
                    <div class="swiper-wrapper">
                        <?php get_section('gallery-v1', 'swiper-slide single');?>                                                                  
                    </div>
                    <div class="slider-pagination style4"></div>
                </div>
            </div>
        </div>        
    </div>
</div>