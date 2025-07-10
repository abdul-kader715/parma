<!--==============================
Process Area  
==============================-->
<section class="position-relative <?php echo $klass;?>" data-bg-src="assets/img/shape/bg-shape5-1.png">
    <div class="container">
        <div class="row">
            <div class="col-xxl-4">
                <div class="title-area mb-60">
                    <span class="sub-title style2 text-anim after-none before-none"
                     data-cue="slideInLeft">Work Process</span>
                    <h2 class="sec-title style3 text-anim2" data-cue="slideInLeft">
                        How We Work!
                    </h2>
                </div>
            </div>
            <div class="col-xxl-8">
               <div class="process-card-wrap">
                  <div class="row gy-30">
                     <?php
                        $title = array(
                           'Online Booking',
                           'Inspect & Analyze',
                           'Solving Problem',
                        );
                        $img = array(
                           'assets/img/icon/process_1_1.svg',
                           'assets/img/icon/process_1_2.svg',
                           'assets/img/icon/process_1_3.svg',
                        );
                        $text = array(
                           'When booking, it helps customers when they are shown a calendar.',
                           'When booking, it helps customers when they are shown a calendar.',
                           'When booking, it helps customers when they are shown a calendar.',
                        );
                       
                        $arrlength = count($title);

                        for($x = 0; $x < $arrlength; $x++) {
                        ?>
                           <div class="col-xl-4 col-lg-4 col-md-4">
                              <div class="process-card" data-cue="slideInUp">
                                    <div class="box-content">
                                       <h3 class="box-title"><?php echo $title[$x];?></h3>
                                       <p class="box-text"><?php echo $text[$x];?></p>
                                    </div>
                                    <div class="box-thumb-wrap">
                                       <div class="box-thumb">
                                          <img src="<?php echo $img[$x];?>" alt="img">
                                       </div>
                                    </div>
                                    <div class="box-bg-shape">
                                       <img src="assets/img/icon/process-bg-shape.png" alt="">
                                    </div>
                              </div>
                           </div>
                        <?php }; 
                     ?>
                  </div>
               </div>
            </div>
        </div>
        
    </div>
</section>