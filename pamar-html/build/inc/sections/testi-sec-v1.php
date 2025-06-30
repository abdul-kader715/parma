
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
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M12 2.12158C12 3.16588 10.965 4.72858 9.91885 6.04098C8.57165 7.73068 6.96385 9.20678 5.11895 10.3338C3.73685 11.1777 2.05855 11.9878 0.71035 11.9878M12 21.8784C12 20.8341 10.965 19.2714 9.91885 17.959C8.57165 16.2694 6.96385 14.7932 5.11895 13.6662C3.73685 12.8223 2.05855 12.0122 0.71035 12.0122M0.71035 12H23.2896"></path>
                              </svg>
                           </button>
                            <button data-slider-next="#testiSlide1" class="slider-arrow style3 default">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                       <path d="M12 2.12158C12 3.16588 13.035 4.72858 14.0812 6.04098C15.4284 7.73068 17.0362 9.20678 18.8811 10.3338C20.2632 11.1777 21.9414 11.9878 23.2896 11.9878M12 21.8784C12 20.8341 13.035 19.2714 14.0812 17.959C15.4284 16.2694 17.0362 14.7932 18.8811 13.6662C20.2632 12.8223 21.9414 12.0122 23.2896 12.0122M23.2896 12H0.710449"></path>
                              </svg>
                           </button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
