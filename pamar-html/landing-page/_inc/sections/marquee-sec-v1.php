
<!--==============================
Marquee Area  
==============================-->
<div class="<?php echo $klass;?> overflow-hidden space-top">
    <div class="container-fluid p-0">
        <div class="marquee-slider1">
            <?php
                $text = array(
                    'ROBOR PROJECTS',
                    'BUSINESS',
                    'CORPORATE',
                    'PORTFOLIO',
                    'CASE STUDIES',
                    'FINANCE',
                    'ROBOR PROJECTS',
                    'BUSINESS',
                    'CORPORATE',
                    'PORTFOLIO',
                    'CASE STUDIES',
                    'FINANCE',
                    'ROBOR PROJECTS',
                    'BUSINESS',
                    'CORPORATE',
                    'PORTFOLIO',
                    'CASE STUDIES',
                    'FINANCE',
                );
                $arrlength = count($text);

                for($x = 0; $x < $arrlength; $x++) {
                ?>
                    <div class="item">
                        <div class="marquee-card">
                            <div class="color-masking">
                                <div class="masking-src" data-mask-src="assets/img/star-shape1.png"></div>
                                <img src="assets/img/star-shape1.png" alt="img">
                            </div>
                            <a target="_blank" href="project.html"><?php echo $text[$x];?></a>
                        </div>
                    </div>
                <?php }; 
            ?>
        </div>
    </div>
</div>
