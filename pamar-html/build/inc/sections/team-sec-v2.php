<!--==============================
Team Area  
==============================-->
<section class="<?php echo $klass;?> team-area-2 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7">
                <div class="title-area text-center">
                    <span class="sub-title2 text-bg-color7 " data-cue="slideInUp">Team Members</span>
                    <h2 class="sec-title style4 text-anim2" data-cue="slideInUp">Meet with Our <span>Expert Team</span></h2>
                    <p class="sec-text2" data-cue="slideInUp">Our skilled team of experts is devoted to delivering outstanding home services customized to meet your specific requirements.</p>
                </div>
            </div>
        </div>

        <div class="slider-area  team-slider2 fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <div class="swiper th-slider teamSlider2" id="teamSlider5" data-slider-options='{ "paginationType":"progressbar", "breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <?php get_section('team-v2', 'swiper-slide');?>
                </div>
                <div class="slider-pagination-wrap ">
                  <div class="slider-pagination2"></div>
                  <div class="slider-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>