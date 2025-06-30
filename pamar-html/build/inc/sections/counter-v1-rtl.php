
<!--==============================
Counter Area  
==============================-->
<div class="<?php echo $klass;?>">
    <div class="container">
        <div class="counter-wrap">
            <?php
                $title = array(
                    'متطوعون لا يصدقون
',
                    'الحملات الناجحة
',
                    'الجهات المانحة الشهرية
',
                    'دعم الفريق
',
                );
                $num = array(
                    '15',
                    '1',
                    '400',
                    '35',
                );
                $numAdd = array(
                    'k<span class="fw-light">+</span>',
                    'k<span class="fw-light">+</span>',
                    '<span class="fw-light">+</span>',
                    'k<span class="fw-light">+</span>',
                );
                $color = array(
                    'text-theme',
                    'text-theme2',
                    'text-theme',
                    'text-theme2',
                );
                $arrlength = count($title);

                for($x = 0; $x < $arrlength; $x++) {
                ?>
                    <div class="counter-card">
                        <div class="media-body">
                            <h2 class="box-number <?php echo $color[$x];?>"><span class="counter-number"><?php echo $num[$x];?></span><?php echo $numAdd[$x];?></h2>
                            <p class="box-text"><?php echo $title[$x];?></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                <?php }; 
            ?>
        </div>
    </div>
</div>