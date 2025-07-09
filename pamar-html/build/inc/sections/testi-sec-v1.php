
<!--==============================
Testimonial Area  
==============================-->
<section class="testi-area-1 <?php echo $klass;?>" id="testi-sec"> 
   <div class="price-bg-shape1-1 shape-mockup " data-top="3%" data-right="0">
      <img src="assets/img/shape/bg-shape7.png" alt="img">
   </div>
    <div class="container">
         <div class="row">
            <div class="title-area text-xl-start text-center">
               <div class="row ">
                  <div class="col-xl-3">
                     <h2 class="sub-title style2 text-anim after-none before-none  justify-content-xl-start justify-content-center" data-cue="slideInLeft">Testimonials</h2>
                  </div>
                  <div class="col-xl-6">
                     <h2 class="sec-title style2 text-anim2 mb-0" data-cue="slideInLeft">Clients Say</h2>
                     <p class="sec-text"  data-cue="slideInUp">Whether it’s a small repair or a major installation, our team of licensed and experienced plumber is committed to getting the job done right — the first time. We use modern tools</p>
                  </div>
               
               </div>
            </div>
         </div>
        <div class="row gy-50 flex-row-reverse">
            <div class="col-xl-6">
                <div class="testi-thumb1-1">
                  <div class="quote-icon" >
                     <img src="assets/img/icon/quote-icon2.svg" alt="">
                  </div>
                  <div class="img1 bg-mask"   data-mask-src="assets/img/shape/testi-shape.png">
                     <img src="assets/img/testimonial/testi-thumb1-1.jpg" alt="img">
                  </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="slider-area testi-slider1" >
                    <div class="swiper th-slider has-shadow" id="testiSlide1" data-slider-options='{"autoHeight": "true","breakpoints":{"0":{"slidesPerView":1},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"1"},"1600":{"slidesPerView":"1"}}}'>
                        <div class="swiper-wrapper">  
                            <?php get_section('testi-v1', 'swiper-slide', '2');?>
                        </div>
                        <div class="slider-pagination-wrap ">
                            <button data-slider-prev="#testiSlide1" class="slider-arrow style3 default">
                                 <img src="assets/img/icon/left-arrow.svg" alt="">
                           </button>
                            <button data-slider-next="#testiSlide1" class="slider-arrow style3 default">
                              <img src="assets/img/icon/right-arrow.svg" alt="">
                           </button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
