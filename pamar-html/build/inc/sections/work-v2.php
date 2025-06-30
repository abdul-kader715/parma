<?php
    $title = array(
        'Analysis & Research',
        'Project Execution',
        'Monitor and Adjust',
        'Project Launch',
    );
    $icon = array(
        'assets/img/icon/work-icon/2-1.svg',
        'assets/img/icon/work-icon/2-2.svg',
        'assets/img/icon/work-icon/2-3.svg',
        'assets/img/icon/work-icon/2-4.svg',
    );
    $text = array(
        'We provide personalized coaching that empowers you to reach your full potential and lead your team to success.',
        'We provide personalized coaching that empowers you to reach your full potential and lead your team to success.',
        'We provide personalized coaching that empowers you to reach your full potential and lead your team to success.',
        'We provide personalized coaching that empowers you to reach your full potential and lead your team to success.',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="work-card2">
                <div class="box-content">
                    <div class="box-icon">
                        <img src="<?php echo $icon[$x];?>" alt="Icon">
                    </div>
                    <h3 class="box-title"><?php echo $title[$x];?></h3>
                </div>
                <p class="box-text"><?php echo $text[$x];?></p>
            </div>
        </div>
    <?php }; 
?>