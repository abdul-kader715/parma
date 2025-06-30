
<!--==============================
Counter Area  
==============================-->
<div class="<?php echo $klass;?> counter-area-4" data-bg-src="assets/img/bg/wave-bg2.png">
    <div class="shape-mockup counter-bg-shape4-1 jump d-xxl-block d-none" data-top="40%" data-right="5%">
        <img src="assets/img/shape/bg-dot-shape1.png">
    </div>
    <div class="container">
        <div class="row gy-4">
            <?php
                $title = array(
                    'Satisfied Customers',
                    'Projects Completed',
                    'Awards Won',
                    'Expert Members',
                );
                $icon = array(
                    'assets/img/icon/counter-icon4-1.svg',
                    'assets/img/icon/counter-icon4-2.svg',
                    'assets/img/icon/counter-icon4-3.svg',
                    'assets/img/icon/counter-icon4-4.svg',
                );
                $num = array(
                    '1250',
                    '1280',
                    '380',
                    '290',
                );
                $numAdd = array(
                    '+',
                    '+',
                    '+',
                    '+',
                );
                $arrlength = count($title);

                for($x = 0; $x < $arrlength; $x++) {
                ?>
                    <div class="col-xl-3 col-md-6 fadeinup wow">
                        <div class="counter-card4">
                            <div class="box-icon">
                                <img src="<?php echo $icon[$x];?>" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h2 class="box-number"><span class="counter-number"><?php echo $num[$x];?></span><?php echo $numAdd[$x];?></h2>
                                <p class="box-text"><?php echo $title[$x];?></p>
                            </div>
                        </div>
                    </div>
                <?php }; 
            ?>
        </div>
    </div>
</div>