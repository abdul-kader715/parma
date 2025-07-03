<!--==============================
Process Area  
==============================-->
<section class="position-relative <?php echo $klass;?>" data-bg-src="assets/img/bg/poss-bg-3-1.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7">
                <div class="title-area text-center mb-100">
                    <span class="sub-title2 style2 border-black-color8" data-cue="slideInUp">4 Step Process</span>
                    <h2 class="sec-title style5 text-anim2 " data-cue="slideInUp">
                        Easier than You Can Think!
                    </h2>
                </div>
            </div>            
        </div>
    </div>
    <div class="container-fluid">
        <div class="process-wrap2">
            <div class="row gx-90 gy-80">
                    <?php
                        $title = array(
                            'Schedule Appointment',
                            'Diagnosis & Estimate',
                            'Repair or Installation',
                            'Final Inspection',
                        );
                        $num = array(
                            'Step 01',
                            'Step 02',
                            'Step 03',
                            'Step 04',
                        );
                        $icon = array(
                            'assets/img/icon/process-icon2-1.svg',
                            'assets/img/icon/process-icon2-2.svg',
                            'assets/img/icon/process-icon2-3.svg',
                            'assets/img/icon/process-icon2-4.svg',
                        );
                        $text = array(
                            'Call us, email us, or book online choose a convenient',
                            'Our licensed plumber arrives on time, inspects the issue',
                            'We complete the job using high-quality tools and parts',
                            'We test the repair, walk you through the results',
                        );
                        $arrlength = count($title);

                        for($x = 0; $x < $arrlength; $x++) {
                        ?>
                           <div class="col col-xl-3 col-md-6 col-12">
                            <div class="process-card2 text-center"  data-cue="slideInUp">
                                <div class="process-icon">
                                    <img src="<?php echo $icon[$x];?>" alt="icon">
                                </div>
                                <span class="box-number"><?php echo $num[$x];?></span>                                
                                <div class="box-content">
                                    <h3 class="box-title"><?php echo $title[$x];?></h3>
                                    <p class="box-text"><?php echo $text[$x];?></p>
                                </div>
                            </div>
                           </div> 
                        <?php }; 
                    ?>
            </div>
        </div>
    </div>
    <div class="shape-mockup d-none d-xxl-block " style="top: 0%; left:0%">
            <img src="assets/img/shape/process-shape3-1.png" alt="shape">
    </div>
    <div class="shape-mockup d-none d-xxl-block " style="top: 0%; right:0%">
           <img src="assets/img/shape/process-shape3-2.png" alt="shape">
    </div>
</section>












