<!--==============================
Feature Area  
==============================-->
<section class="space-top" data-bg-src="assets/img/bg/service_bg_1.jpg">
    <div class="container">
        <div class="quality-card" data-pos-space=".blog-sec" data-sec-space="margin-bottom" data-margin-bottom="155px">
            <div class="title-area mb-40 text-center text-lg-start">
                <span class="sub-title">Top News Updates</span>
                <h2 class="sec-title">We Provide Best Service And Repair</h2>
            </div>
            <div class="quality-feature-wrap">
                <?php
                    $title = array(
                        "Quality Services",
                        "Fast Delivery",
                    );
                    $icon = array(
                        "assets/img/icon/quality-feature_1.svg",
                        "assets/img/icon/quality-feature_2.svg",
                    );
                    $text = array(
                        "Purpose quality vectors with highly efficient incubate",
                        "Purpose quality vectors with highly efficient incubate",
                    );

                    $arrlength = count($title);

                    for($x = 0; $x < $arrlength; $x++) {
                    ?>
                        <div class="quality-feature">
                            <div class="quality-feature_icon">
                                <img src="<?php echo $icon[$x];?>" alt="icon">
                            </div>
                            <h3 class="quality-feature_title"><?php echo $title[$x];?></h3>
                            <p class="quality-feature_text"><?php echo $text[$x];?></p>
                        </div>
                    <?php }; 
                ?>
            </div>
            

            <?php
                $title = array(
                    "Product Design",
                    "Car Mechanic Service",
                );
                $num = array(
                    "70%",
                    "93%",
                );

                $arrlength = count($title);

                for($x = 0; $x < $arrlength; $x++) {
                ?>
                    <div class="skill-feature">
                        <h3 class="skill-feature_title"><?php echo $title[$x];?></h3>
                        <div class="progress">
                            <div class="progress-bar" style="width: <?php echo $num[$x];?>;">
                                <div class="progress-value"><?php echo $num[$x];?></div>
                            </div>
                        </div>
                    </div>
                <?php }; 
            ?>
        </div>
    </div>
</section>