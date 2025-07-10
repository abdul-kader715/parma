<!--==============================
Team Area  
==============================-->
<section class="<?php echo $klass;?> ">
    <div class="container">
       <div class="row justify-content-center align-items-center">
            <div class="col-xxl-12">
                <div class="title-area text-center pt-1">
                    <span class="sub-title style2 text-anim after-none before-none" data-cue="slideInLeft">Our Team</span>
                    <h2 class="sec-title style3 text-anim2" data-cue="slideInLeft">
                        Meet Our Professional <br> <span>Plumber Team.</span>
                    </h2>
                </div>
            </div>
        </div>

        <div class="slider-area ">
            <div class="swiper th-slider team-slider6" id="teamSlider6"  data-slider-options='{ "paginationType":"progressbar", "breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <?php get_section('team-v1.1', 'swiper-slide'); ?>
                </div>
                <div class="slider-pagination-wrap ">
                  <div class="slider-pagination2"></div>
                  <div class="slider-pagination"></div>
                </div>
            </div>
        </div>
        <div class="joinbtn">
            <div class="row justify-content-center text-center">
                <div class="col-xl-4 col-lg-4 col-md-6 ">
                    <a href="team.html" class="circle-btn th-btn  mt-xl-0" data-cue="slideInUp">
                        Join With Us
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup d-none d-xxl-block" data-top="12%" data-left="5%">
        <img src="assets/img/shape/bg-shape4-1.png" alt="">
    </div>
</section>