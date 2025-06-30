<!--==============================
Project Area  
==============================-->
<section class="<?php echo $klass;?>" id="project-sec">
    <div class="container">
        <div class="title-area text-xl-start text-center">
            <div class="row justify-content-between ">
                <div class="col-xl-auto">
                    <h2 class="sub-title style2 text-anim after-none before-none  justify-content-xl-start justify-content-center" data-cue="slideInLeft">Case Studies</h2>
                </div>
                <div class="col-md d-none">
                    <hr class="mb-0">
                </div>
                <div class="col-xl-5">
                    <h2 class="sec-title style2 text-anim2 mb-0" data-cue="slideInLeft">Projects</h2>
                </div>
                <div class="col-xxl-3 col-xl-4">
                    <div class="mt-30 xxl-text-end xl-text-end" data-cue="slideInLeft">
                      <a href="about.html" class="th-btn style7 style10">
                           <span>View All Projects</span>
                           <div class="icon">
                              <img src="assets/img/icon/arrow-right-white.svg" alt="">
                           </div>
                     </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <div class="slider-area">
      <div class="swiper th-slider marquee-slider2 mb-2"  data-slider-options='{"breakpoints":{"0":{"slidesPerView":"auto"}},"autoplay":{"delay":0,"disableOnInteraction":false},"noSwiping":"false","speed":10000,"spaceBetween":12}'>
            <div class="swiper-wrapper">
               <?php get_section('project-v1', 'swiper-slide'); ?>
            </div>
            
      </div>
      <div class="swiper th-slider marquee-slider2"  dir="rtl" data-slider-options='{"breakpoints":{"0":{"slidesPerView":"auto"}},"autoplay":{"delay":0,"disableOnInteraction":false,"reverseDirection": false},"noSwiping":"false","speed":10000,"spaceBetween":12}'>
            <div class="swiper-wrapper">
               <?php get_section('project-v1.1', 'swiper-slide'); ?>
            </div>
            
      </div>
   </div>
</section>