<!--==============================
Circle Area  
==============================-->
<section class="" data-pos-space=".circle-bg" data-sec-space="margin-bottom" data-margin-bottom="225px">
    <div class="container">
        <div class="row gy-4">
            <?php
                $title = array(
                    "Quality Service",
                    "Skilled Members",
                    "Happy Customers",
                    "Project Fails",
                );
                $num = array(
                    "85",
                    "90",
                    "95",
                    "15",
                );
                $arrlength = count($title);

                for($x = 0; $x < $arrlength; $x++) {
                ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="feature-circle" data-bg-src="assets/img/bg/pattern_bg_6.png">
                            <div class="progressbar">
                                <div class="circle" data-percent="<?php echo $num[$x];?>">
                                    <div class="circle-num"></div>
                                </div>
                                <h3 class="feature-circle_title"><?php echo $title[$x];?></h3>
                            </div>
                        </div>
                    </div>
                <?php }; 
            ?>
        </div>
    </div>
</section>


