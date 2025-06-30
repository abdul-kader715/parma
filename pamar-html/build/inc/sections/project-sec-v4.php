<!--==============================
Project Area  
==============================-->
<section class="<?php echo $klass;?>" id="project-sec">
    <div class="container">
        <div class="row justify-content-xl-between justify-content-center">
            <div class="col-xxl-6 col-xl-7">
                <div class="title-area text-xl-start text-center">
                    <span class="sub-title style4 fadeinup wow" data-wow-duration="1.2s" data-wow-delay="0.1s">SUCCESS PROJECTS</span>
                    <h2 class="sec-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">We specialize in the
                    following case studies</h2>
                </div>
            </div>
            <div class="col-auto align-self-end">
                <div class="sec-btn fadeinup wow" data-wow-duration="1.2s" data-wow-delay="0.1s">
                    <a href="project.html" class="th-btn style-border4 btn-radius-8 px-30">All Case Studies <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
        <div class="slider-area slider-drag-wrap">
            <div class="swiper th-slider project-slider4" id="projectSlider4" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"1200":{"slidesPerView":"1.2"}}, "autoplay": false}'>
                <div class="swiper-wrapper">
                    <?php get_section('project-v4', 'swiper-slide'); ?>
                </div>
            </div>
        </div>
    </div>    
</section>