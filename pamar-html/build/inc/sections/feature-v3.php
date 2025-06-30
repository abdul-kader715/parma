<?php
    $title = array(
        'Tech support',
        'Robo Genius',
        'Image Generation',
        'Chatbots',
    );
    $icon = array(
        'assets/img/icon/feature-icon4-1.svg',
        'assets/img/icon/feature-icon4-2.svg',
        'assets/img/icon/feature-icon4-3.svg',
        'assets/img/icon/feature-icon4-4.svg',
    );
    $text = array(
        'To empower businesses with intelligent, scalable, and impactful solutions that drive progress',
        'To empower businesses with intelligent, scalable, and impactful solutions that drive progress',
        'To empower businesses with intelligent, scalable, and impactful solutions that drive progress',
        'To empower businesses with intelligent, scalable, and impactful solutions that drive progress',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>" data-cue="slideInUp">
            <div class="feature-card style3">
                <div class="box-icon">
                    <img src="<?php echo $icon[$x];?>" alt="icon">
                </div>
                <h3 class="box-title"><?php echo $title[$x];?></h3>
                <p class="box-text"><?php echo $text[$x];?></p>
            </div>
        </div>
    <?php }; 
?>