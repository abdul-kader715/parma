<!--==============================
Project Area  
==============================-->
<section class="position-relative <?php echo $klass;?>" id="project-sec">
    <div class="container">
        <div class="title-area text-xl-start text-center z-index-n1">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-auto">
                    <div class="title-area text-left">
                        <span class="sub-title2" data-cue="slideInUp">Pamar services</span>
                        <h2 class="sec-title style4 text-anim2 " data-cue="slideInUp">Exclusive Recent
                             <span>Projects</span></h2>
                    </div>
                </div>
                
                <div class="col-xl-auto">
                   <div class="btn-group mt-30 mb-50" data-cue="slideInUp">
                        <a href="about.html" class="link-btn3">
                            Discover More
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabs -->
        <div class="nav tab-menu3 mb-40" id="tab-menu3" role="tablist">
            <button class="th-btn tab-btn active" id="nav-one-tab" data-bs-toggle="tab" data-bs-target="#nav-one" type="button" role="tab" aria-controls="nav-one" aria-selected="true">View All</button>
            <button class="th-btn tab-btn" id="nav-two-tab" data-bs-toggle="tab" data-bs-target="#nav-two" type="button" role="tab" aria-controls="nav-two" aria-selected="false">Drain Plumber</button>
            <button class="th-btn tab-btn" id="nav-three-tab" data-bs-toggle="tab" data-bs-target="#nav-three" type="button" role="tab" aria-controls="nav-three" aria-selected="false">Install & Repair</button>
            <button class="th-btn tab-btn" id="nav-four-tab" data-bs-toggle="tab" data-bs-target="#nav-four" type="button" role="tab" aria-controls="nav-four" aria-selected="false">Water Heater Fixes</button>
            <button class="th-btn tab-btn" id="nav-five-tab" data-bs-toggle="tab" data-bs-target="#nav-five" type="button" role="tab" aria-controls="nav-five" aria-selected="false">Leak Detection</button>
            <button class="th-btn tab-btn" id="nav-six-tab" data-bs-toggle="tab" data-bs-target="#nav-six" type="button" role="tab" aria-controls="nav-six" aria-selected="false">Burst Pipe Repair</button>
        </div>

        <!-- Tab Content -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                <div class="slider-area project-slider2">
                    <div class="swiper th-slider" id="projectSlider1" data-slider-options='{"autoHeight":true,"breakpoints":{"0":{"slidesPerView":1},"767":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"},"1600":{"slidesPerView":"4"}}}'>
                        <div class="swiper-wrapper">
                            <?php get_section('project-v2', 'swiper-slide'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">
                <div class="slider-area project-slider2">
                    <div class="swiper th-slider" id="projectSlider2" data-slider-options='{"autoHeight":true,"breakpoints":{"0":{"slidesPerView":1},"767":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"},"1600":{"slidesPerView":"4"}}}'>
                        <div class="swiper-wrapper">
                            <?php get_section('project-v2', 'swiper-slide'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">
                <div class="slider-area project-slider2">
                    <div class="swiper th-slider" id="projectSlider3" data-slider-options='{"autoHeight":true,"breakpoints":{"0":{"slidesPerView":1},"767":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"},"1600":{"slidesPerView":"4"}}}'>
                        <div class="swiper-wrapper">
                            <?php get_section('project-v2', 'swiper-slide'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="nav-four" role="tabpanel" aria-labelledby="nav-four-tab">
                <div class="slider-area project-slider2">
                    <div class="swiper th-slider" id="projectSlider4" data-slider-options='{"autoHeight":true,"breakpoints":{"0":{"slidesPerView":1},"767":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"},"1600":{"slidesPerView":"4"}}}'>
                        <div class="swiper-wrapper">
                            <?php get_section('project-v2', 'swiper-slide'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="nav-five" role="tabpanel" aria-labelledby="nav-five-tab">
                <div class="slider-area project-slider2">
                    <div class="swiper th-slider" id="projectSlider5" data-slider-options='{"autoHeight":true,"breakpoints":{"0":{"slidesPerView":1},"767":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"},"1600":{"slidesPerView":"4"}}}'>
                        <div class="swiper-wrapper">
                            <?php get_section('project-v2', 'swiper-slide'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="nav-six" role="tabpanel" aria-labelledby="nav-six-tab">
                <div class="slider-area project-slider2">
                    <div class="swiper th-slider" id="projectSlider6" data-slider-options='{"autoHeight":true,"breakpoints":{"0":{"slidesPerView":1},"767":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"},"1600":{"slidesPerView":"4"}}}'>
                        <div class="swiper-wrapper">
                            <?php get_section('project-v2', 'swiper-slide'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

