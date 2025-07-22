<!--==============================
Process Area  
==============================-->
<section class="position-relative <?php echo $klass;?>" >
    <div class="container">
        <div class="row xxl-justify-content-center gx-50">
            <div class="col-xxl-6">
                    <div class="img1">
                        <img src="assets/img/process/process_thum2_1.jpg" alt="">
                    </div>
            </div> 
            <div class="col-lg-6">
                <div class="title-area">
                      <span class="sub-title2 bg-black-color7" data-cue="slideInUp">Our Work Process</span>
                    <h2 class="sec-title style4 text-anim2 " data-cue="slideInUp">Fixing Your Plumbing Issues in Just <span>5 Steps</span> </h2>
                        
                </div>
            </div>            
        </div>
       
    </div>
    <div class="container-fluid p-0">
        <div class="slider-area process-slider">
            <div class="swiper th-slider" id="processSlider" data-slider-options='{"paginationType":"progressbar", 
           
                "1200":{"slidesPerView":"2.5","centeredSlides":"true"},
                "breakpoints":{"0":{"slidesPerView":1},"767":{"slidesPerView":"1" ,"centeredSlides":"true"},
                "992":{"slidesPerView":"2","centeredSlides":"true"},
                "1200":{"slidesPerView":"2.5","centeredSlides":"true"},
                "1400":{"slidesPerView":"2.5","centeredSlides":"true"}}}'>
                <div class="swiper-wrapper">
                    <?php
                    $title = array(
                        'Contact Us',
                        'Inspection & Diagnosis',
                        'Services & Repairs',
                        'Final Inspection',
                        'Services & Repairs',
                    );
                    $num = array(
                        '01',
                        '02',
                        '03',
                        '04',
                        '05',
                    );
                    
                    $text = array(
                        'Starting your journey with Pamar is seamless and straightforward.
                            If you encounter a leak, a blocked drain, or any plumbing crisis, 
                        simply contact us to take the first step towards.',
                        'When you contact Pamar, our skilled plumbers will arrive swiftly to evaluate
                            your plumbing problem with expertise and attention. 
                            Equipped with state-of-the-art diagnostic equipment.',
                        'At Pamar, we focus on delivering swift and accurate plumbing solutions. After our
                            skilled plumbers evaluate the problem, we spring into action using top-notch tools and techniques.',
                        'At Pamar, we focus on delivering swift and accurate plumbing solutions. 
                        After our skilled plumbers evaluate the problem,
                            we spring into action using top-notch tools and techniques.',
                            'At Pamar, we focus on delivering swift and accurate plumbing solutions. 
                        After our skilled plumbers evaluate the problem,
                            we spring into action using top-notch tools and techniques.',
                    );
                    $arrlength = count($title);

                    for($x = 0; $x < $arrlength; $x++) {
                    ?>
                        <div class="swiper-slide">
                            <div class="process-card3">
                                <span class="box-number"><?php echo $num[$x];?></span>                                
                                <div class="box-content">
                                    <h3 class="box-title"><?php echo $title[$x];?></h3>
                                    <p class="box-text"><?php echo $text[$x];?></p>
                                </div>
                                <div class="shape-mockup" style="top: 0%; right:0%">
                                    <img src="assets/img/shape/bg-shape8.png" alt="shape">
                                </div>
                            </div>
                        </div>
                    <?php }; 
                ?>
                </div>
                    <div class="slider-pagination-wrap">
                        <div class="slider-pagination2"></div>
                        <div class="slider-pagination"></div>
                    </div>
                </div>
        </div>
    </div>
</section>

 










