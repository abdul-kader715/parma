<!--==============================
Project Area  
==============================-->
<section class="<?php echo $klass;?> position-relative" id="project-sec">
    <div class="container">
        <div class="title-area text-xl-start text-center">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-auto">
                    <h2 class="sub-title2 text-gradient text-uppercase justify-content-xl-start justify-content-center" data-cue="slideInLeft">Case Studies</h2>
                </div>
                <div class="col-md d-none d-xl-block">
                    <hr class="title-line mb-0">
                </div>
                <div class="col-xl-5">
                    <h2 class="sec-title text-anim2 mb-0" data-cue="slideInLeft">Work</h2>
                </div>
                <div class="col-xxl-3 col-xl-4">
                    <p class="mt-xl-0 mt-4" data-cue="slideInLeft">Our AI agency is a cutting-edge technology partner that specializes in delivering artificial intelligence solutions to help businesses streamline operations,</p>
                </div>
            </div>
        </div>
    </div>  
    <div class="container-fluid p-0" data-cue="slideInUp">
        <div class="slider-area project-slider3">
            <div class="swiper th-slider" id="projectSlider3" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"601":{"slidesPerView":"2"},"991":{"slidesPerView":"2.5"},"1200":{"slidesPerView":"3.5"},"1600":{"slidesPerView":"5"}},"centeredSlides":"true"}'>
                <div class="swiper-wrapper">
                    <?php get_section('project-v3', 'swiper-slide')?>
                </div>
                
            </div>
        </div>
    </div>  
</section>