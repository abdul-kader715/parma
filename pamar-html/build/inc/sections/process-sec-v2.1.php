
<!--==============================
Process Area  
==============================-->
<section class="<?php echo $klass;?>" id="process-sec">
    <div class="shape-mockup" data-top="0" data-left="0"><img src="assets/img/shape/vector_shape_7.png" alt="shape"></div>
    <div class="shape-mockup" data-bottom="0" data-right="0"><img src="assets/img/shape/vector_shape_6.png" alt="shape"></div>
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="Icon">How We Make Quality Foods</span>
            <h2 class="sec-title">How We Work It?</h2>
        </div>
        <div class="row gy-4 justify-content-center">
            <?php
                $title = array(
                    'Work Planning',
                    'Farm Growing',
                    'Crop Harvesting',
                    'Food Processing',
                );
                $icon = array(
                    '<img src="assets/img/icon/process_box_1.svg" alt="icon">',
                    '<img src="assets/img/icon/process_box_2.svg" alt="icon">',
                    '<img src="assets/img/icon/process_box_3.svg" alt="icon">',
                    '<img src="assets/img/icon/process_box_4.svg" alt="icon">',
                );
                $img = array(
                    '<img src="assets/img/normal/process_box_1.jpg" alt="image">',
                    '<img src="assets/img/normal/process_box_2.jpg" alt="image">',
                    '<img src="assets/img/normal/process_box_3.jpg" alt="image">',
                    '<img src="assets/img/normal/process_box_4.jpg" alt="image">',
                );
                $text = array(
                    "Begin by conducting thorough soil tests to understand its composition, pH levels, and nutrient.",
                    "Begin by conducting thorough soil tests to understand its composition, pH levels, and nutrient.",
                    "Begin by conducting thorough soil tests to understand its composition, pH levels, and nutrient.",
                    "Begin by conducting thorough soil tests to understand its composition, pH levels, and nutrient.",
                );
                $number = array(
                    '01',
                    '02',
                    '03',
                    '04', 
                );
                $arrlength = count($title);

                for($x = 0; $x < $arrlength; $x++) {
                ?>
                    <div class="col-xl-3 col-md-6 process-box-wrap">
                        <div class="process-box">
                            <div class="box-icon bg-white">
                                <?php echo $icon[$x];?>
                            </div>
                            <div class="box-img" data-mask-src="assets/img/bg/process_bg_shape.png">
                                <?php echo $img[$x];?>
                            </div>
                            <p class="box-number">Step - <?php echo $number[$x];?></p>
                            <h3 class="box-title"><?php echo $title[$x];?></h3>
                            <p class="box-text"><?php echo $text[$x];?></p>
                        </div>
                    </div>
                <?php }; 
            ?>
        </div>
    </div>
</section>