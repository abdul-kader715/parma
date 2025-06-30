<!--==============================
Process Area  
==============================-->
<section class="position-relative <?php echo $klass;?>" data-bg-src="assets/img/bg/about-bg-1-1.png">
    <div class="container">
        <div class="row gy-60 gx-80 align-items-center flex-row-reverse">
            <div class="col-xl-6">
                <div class="process-img-box2" data-cue="slideInRight">
                    <img src="assets/img/process/process_2_1.jpg" alt="img">
                </div>
            </div>
            <div class="col-xl-6">
                <div class="title-area mb-35">
                    <span class="sub-title style2 before-none text-anim" data-cue="slideInUp">Work Process</span>
                    <h2 class="sec-title mb-0 text-anim2" data-cue="slideInUp">How Dose it Work?</h2>
                    <p class="mt-15" data-cue="slideInUp">Choosing us means partnering with a forward-thinking team that’s as invested in your success as you are. Together, we’ll unlock the full potential of AI to transform your business.</p>
                </div>
                <div class="process-wrap2">
                    <?php
                        $title = array(
                            'Discovery and Strategy',
                            'Development & Implementation',
                            'Optimization and Support',
                        );
                        $num = array(
                            '1',
                            '2',
                            '3',
                        );
                        $arrow = array(
                            'assets/img/icon/process-arrow2-1.svg',
                            'assets/img/icon/process-arrow2-2.svg',
                            'assets/img/icon/process-arrow2-1.svg',
                        );
                        $text = array(
                            'We start with in-depth discussions to understand your challenges, goals, and business processes.',
                            'We collect, clean, and analyze data to develop AI models tailored to your use case.',
                            'We continuously monitor the AI solution to ensure it delivers consistent and accurate results.',
                        );
                        $arrlength = count($title);

                        for($x = 0; $x < $arrlength; $x++) {
                        ?>
                            <div class="process-card2"  data-cue="slideInUp">
                                <div class="process-arrow">
                                    <img src="<?php echo $arrow[$x];?>" alt="icon">
                                </div>
                                <span class="box-number"><?php echo $num[$x];?></span>                                
                                <div class="box-content">
                                    <h3 class="box-title"><?php echo $title[$x];?></h3>
                                    <p class="box-text"><?php echo $text[$x];?></p>
                                </div>
                            </div>
                        <?php }; 
                    ?>
                </div>
            </div>
            
        </div>
    </div>
</section>