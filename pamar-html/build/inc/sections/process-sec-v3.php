<!--==============================
Process Area  
==============================-->
<section class="<?php echo $klass;?> process-area-3 bg-smoke" data-bg-src="assets/img/bg/team_bg_1_1.png" data-overlay="smoke" data-opacity="8">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Work Process</span>
            <h2 class="sec-title">Easy Step to Achieve Your Goals.</h2>
        </div>
        <div class="process-card-wrap1 position-relative">
            <div class="process-line1-1 d-xl-block d-none">
                <img src="assets/img/process/process-line1-2.png" alt="img">
            </div>
            <div class="row gy-40 justify-content-center">
                <?php
                    $title = array(
                        'Gym Movement',
                        'Fitness Practice',
                        'Achievement',
                    );
                    $img = array(
                        'assets/img/process/process-card1-1.png',
                        'assets/img/process/process-card1-2.png',
                        'assets/img/process/process-card1-3.png',
                    );
                    $text = array(
                        "Many gyms offer tools and resources to track progress, such as fitness apps, workout logs, or integrated gym software. ",
                        "Gyms are adaptable to various fitness levels and preferences, catering to beginners and advanced individuals alike.",
                        "Group fitness classes led by instructors offer structured workouts in a motivating group setting the development.",
                    );
                    $number = array(
                        'STEP-01',
                        'STEP-02',
                        'STEP-03',
                    );
                    $arrlength = count($title);
    
                    for($x = 0; $x < $arrlength; $x++) {
                    ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="process-card">
                                <div class="process-card-thumb">
                                    <img src="<?php echo $img[$x];?>" alt="img">
                                    <p class="box-number">
                                        <span class="bg-shape">
                                            <svg width="88" height="34" viewBox="0 0 88 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M63.1937 3.77333C69.2789 6.26448 74.808 9.91582 79.4654 14.5189C82.8438 17.8578 85.7155 21.6501 88 25.7767C51.0219 40.1521 16.916 32.7165 0 25.7767C2.28451 21.6501 5.1562 17.8578 8.53458 14.5189C13.192 9.91582 18.7211 6.26448 24.8063 3.77333C30.8914 1.28218 37.4135 0 44 0C50.5865 0 57.1086 1.28218 63.1937 3.77333Z" fill="currentColor"/>
                                            </svg>
                                        </span>
                                        <?php echo $number[$x];?>
                                    </p>
                                </div>
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
</section>