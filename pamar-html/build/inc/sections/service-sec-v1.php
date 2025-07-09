
<!--==============================
Service Area  
==============================-->
<section class="<?php echo $klass;?>" id="service-sec">
    <div class="service-bg-shape1-1 shape-mockup" data-bottom="0" data-left="50%">
        <img src="assets/img/shape/bg-shape3.png" alt="img">
    </div>
    <div class="container">
         <div class="title-area style2 ">
             <div class="row justify-content-center align-items-center">
               <div class="col-xxl-6 col-xl-6 col-lg-6 ">
                  <div class="text-xxl-end text-xl-end text-lg-end text-start">
                     <span class="sub-title style2 after-none before-none" data-cue="slideInUp">OUR SERVICES</span>
                     <h2 class="sec-title style3 mb-0" data-cue="slideInUp">We Provide Best Plumbing <br> <span>Services for You</span></h2>
                  </div>
               </div>
               <div class="col-xxl-6 col-xl-6 col-lg-6">
                  <div class="title-area-right text-start" data-cue="slideInUp">
                     <p class="mb-0">Our plumbing services are designed to provide fast, reliable, and long-lasting solutions for both residential and commercial needs. Whether it’s a leaky faucet, clogged drain, burst pipe,</p>
                  </div>
               </div>
            </div>
         </div>
        
      </div>
      <div class="slider-area service-slider">
         <div class="swiper th-slider" id="serviceSlider" data-slider-options='{"paginationType":"progressbar","breakpoints":{"0":{"slidesPerView":1},"767":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"3"},"1600":{"slidesPerView":"3"}}}'>
            <div class="swiper-wrapper">
               <?php get_section('service-v1', 'swiper-slide'); ?>
            </div>
            <div class="slider-pagination-wrap ">
               <div class="slider-pagination2"></div>
               <div class="slider-pagination"></div>
               <div class="icon-box">
                  <button data-slider-prev="#serviceSlider" class="slider-arrow style3 default">
                   <img src="assets/img/icon/left-arrow.svg" alt="">
                  </button>
                  <button data-slider-next="#serviceSlider" class="slider-arrow style3 default">
                     <img src="assets/img/icon/right-arrow.svg" alt="">
                  </button>
               </div>
            </div>
      </div>
   </div>
</section>

