
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
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path d="M12 2.12158C12 3.16588 10.965 4.72858 9.91885 6.04098C8.57165 7.73068 6.96385 9.20678 5.11895 10.3338C3.73685 11.1777 2.05855 11.9878 0.71035 11.9878M12 21.8784C12 20.8341 10.965 19.2714 9.91885 17.959C8.57165 16.2694 6.96385 14.7932 5.11895 13.6662C3.73685 12.8223 2.05855 12.0122 0.71035 12.0122M0.71035 12H23.2896"></path>
                        </svg>
                  </button>
                  <button data-slider-next="#serviceSlider" class="slider-arrow style3 default">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path d="M12 2.12158C12 3.16588 13.035 4.72858 14.0812 6.04098C15.4284 7.73068 17.0362 9.20678 18.8811 10.3338C20.2632 11.1777 21.9414 11.9878 23.2896 11.9878M12 21.8784C12 20.8341 13.035 19.2714 14.0812 17.959C15.4284 16.2694 17.0362 14.7932 18.8811 13.6662C20.2632 12.8223 21.9414 12.0122 23.2896 12.0122M23.2896 12H0.710449"></path>
                     </svg>
                  </button>
               </div>
            </div>
      </div>
   </div>
</section>

