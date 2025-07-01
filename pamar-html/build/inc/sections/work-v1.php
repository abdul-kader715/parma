<?php
    $title = array(
        'Skilled & Certified Plumbers',
        'Certified Plumbing Done ',
    );
    $img = array(
        'assets/img/normal/why-thumb2-1.png',
        'assets/img/normal/why-thumb2-2.png',
    );
    $text = array(
        'Our team consists of certified, licensed plumbers with extensive experience.',
        'Our team consists of certified, licensed plumbers with extensive experience.',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="why-card2 bg-mask" data-mask-src="assets/img/shape/why-thumb-shape2-1.png">
                <div class="why-bg">
                    <img src="<?php echo $img[$x];?>" alt="img">
                </div>
                <div class="box-content">
                    <h3 class="box-title"><?php echo $title[$x];?></h3>
                    <p class="box-text"><?php echo $text[$x];?></p>
                </div>
            </div>
        </div>
    <?php }; 
?>