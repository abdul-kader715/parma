
<!--==============================
Faq Area
==============================-->


<div class=" <?php echo $klass;?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="title-area text-center mb-60">
                    <span class="sub-title2 style2 text-bg-white" data-cue="slideInUp">Our FAQ</span>
                    <h2 class="sec-title style5 text-anim2 text-white" data-cue="slideInUp">
                        Frequently Asked Questions
                    </h2>
                </div>
            </div>            
        </div> 
        <div class="row gy-30"> 
            <div class="col-xl-6">
                <div class="accordion" id="faqAccordion1">
                    <?php 
                            $title = array( 
                                'Do you offer emergency plumbing services?',
                                'Do you offer warranties on your work?',
                                'How often should I get my drains cleaned?',
                                'Are your plumbers licensed and insured?',
                            );
                           
                              $anim = array(
                                'fadeInUp',
                                'fadeInUp',
                                'fadeInUp', 
                                'fadeInUp',
                                'fadeInUp',
                                'fadeInUp',
                                'fadeInUp',
                                );
                                $delay = array(
                                    '.1s',
                                    '.2s',  
                                    '.3s', 
                                    '.4s', 
                                    '.5s', 
                                    '.6s', 
                                    '.7s', 
                                );
                            $arrlength = count($title);
                            for($x = 0; $x < $arrlength ; $x++) { 
                                $collapse_class = 'collapsed';
                                $show_class = '';
                                $arealabel = 'false';
                                if ($x == 0) {
                                   $collapse_class = 'collapsed';
                                   $show_class = '';
                                   $arealabel = 'true';
                                }
                        ?>
                    <div class="accordion-card style2 wow <?php echo $anim[$x];?>"
                        data-wow-delay="<?php echo $delay[$x];?>">
                        <div class="accordion-header" id="collapse-item-<?php echo $x + 1; ?>">
                            <button class="accordion-button <?php echo $collapse_class; ?>" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $x + 1; ?>"
                                aria-expanded="<?php echo $arealabel; ?>"
                                aria-controls="collapse-<?php echo $x + 1; ?>">
                                <?php echo $title[$x]; ?>
                            </button>
                        </div>
                        <div id="collapse-<?php echo $x + 1; ?>"
                            class="accordion-collapse collapse <?php echo $show_class; ?>"
                            aria-labelledby="collapse-item-<?php echo $x + 1; ?>" data-bs-parent="#faqAccordion1">
                            <div class="accordion-body">
                                 <p class="faq-text text-white">We offer a full range of services, including leak detection, drain cleaning, water heater installation, sewer line repair, pipe replacement, and emergency plumbing services.</p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="accordion" id="faqAccordion2">
                    <?php 
                            $title = array( 
                                'How do I know if I have a hidden leak?',
                                'Can you install tankless water heaters?',
                                'What areas do you serve?',
                                'How much does a plumbing service cost?',
                            );
                            
                              $anim = array(
                                'fadeInUp',
                                'fadeInUp',
                                'fadeInUp', 
                                'fadeInUp',
                                'fadeInUp',
                                'fadeInUp', 
                                'fadeInUp', 
                                );
                                $delay = array(
                                    '.2s',
                                    '.3s',  
                                    '.4s', 
                                    '.5s', 
                                    '.6s', 
                                    '.7s', 
                                    '.8s', 
                                );
                            $arrlength = count($title);
                            for($x = 0; $x < $arrlength ; $x++) { 
                                $collapse_class = 'collapsed';
                                $show_class = '';
                                $arealabel = 'false';
                                if ($x == 0) {
                                    $collapse_class = 'collapsed';
                                    $show_class = '';
                                    $arealabel = 'true';
                                }
                        ?>
                    <div class="accordion-card style2 wow <?php echo $anim[$x];?>"
                        data-wow-delay="<?php echo $delay[$x];?>">
                        <div class="accordion-header" id="collapse-item-<?php echo $x + 8; ?>">
                            <button class="accordion-button <?php echo $collapse_class; ?>" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $x + 8; ?>"
                                aria-expanded="<?php echo $arealabel; ?>"
                                aria-controls="collapse-<?php echo $x + 8; ?>">
                                <?php echo $title[$x]; ?>
                            </button>
                        </div>
                        <div id="collapse-<?php echo $x + 8; ?>"
                            class="accordion-collapse collapse <?php echo $show_class; ?>"
                            aria-labelledby="collapse-item-<?php echo $x + 8; ?>" data-bs-parent="#faqAccordion2">
                            <div class="accordion-body">
                                 <p class="faq-text text-white">We offer a full range of services, including leak detection, drain cleaning, water heater installation, sewer line repair, pipe replacement, and emergency plumbing services.</p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
        <div class="faq-bg-shape3-1 bg-mask" data-mask-src="assets/img/shape/faq-bg-shape3-1.png">
        </div>
        <div class="faq-bg-shape3-2 bg-mask" data-mask-src="assets/img/shape/faq-bg-shape3-2.png">
            <img src="assets/img/bg/faq-bg-3-1.png" alt="img">
        </div>
        <div class="faq-img3-1 d-none d-xxl-inline" >
            <img src="assets/img/normal/faq-thumb3-1.png" alt="img">
        </div>
</div>