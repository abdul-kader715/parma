<!--==============================
Project Area  
==============================-->
<section class="<?php echo $klass;?> position-relative" id="project-sec">
    <div class="container-fluid p-0" data-cue="slideInUp">
        <div class="project-wrap3" >
            <div class="slider-area project-slider3">
                <div class="swiper th-slider" id="projectSlider3" data-slider-options='{"effect":"fade", "autoHeight": "true"}'>
                    <div class="swiper-wrapper">
                        <?php get_section('project-v3', 'swiper-slide')?>
                    </div>
                    
                </div>
            </div>
            <button data-slider-prev="#projectSlider3" class="slider-arrow style-border4 slider-prev"><i class="fa-solid fa-angle-left"></i></button>
            <button data-slider-next="#projectSlider3" class="slider-arrow style-border4 slider-next"><i class="fa-solid fa-angle-right"></i></button>
            <div class="project-bg-shape3 bg-mask" data-mask-src="assets/img/shape/project-bg-thumb3-1.png">
                <img src="assets/img/project/project-thumb3-1.jpg" alt="">
            </div>
            
        </div>
    </div>  
</section>