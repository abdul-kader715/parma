
<!--==============================
Counter Area  
==============================-->
<div class="counter-sec11" data-bg-src="assets/img/bg/counter_bg_1_1.jpg">
    <div class="container">
        <div class="counter-card-wrap">
            <?php
                $title = array(
                    'Our Total Products',
                    'Team Members',
                    'Satisfied Customers',
                    'Awards Winning',
                );
                $icon = array(
                    'assets/img/icon/counter_card_1.svg',
                    'assets/img/icon/counter_card_2.svg',
                    'assets/img/icon/counter_card_3.svg',
                    'assets/img/icon/counter_card_4.svg',
                );
                $num = array(
                    '15663',
                    '356',
                    '2365',
                    '156',
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
                    <div class="counter-card">
                        <div class="box-icon">
                            <img src="<?php echo $icon[$x];?>" alt="Icon">
                        </div>
                        <div class="media-body">
                            <h2 class="box-number"><span class="counter-number"><?php echo $num[$x];?></span><?php echo $numAdd[$x];?></h2>
                            <p class="box-text"><?php echo $title[$x];?></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                <?php }; 
            ?>
        </div>
    </div>
</div>