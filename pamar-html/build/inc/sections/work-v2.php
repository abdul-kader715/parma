<?php
    $num = array(
        '01',
        '02',
        '03',
        '04',
    );
    $title = array(
        'Analysis & Research',
        'Project Execution',
        'Monitor and Adjust',
        'Project Launch',
    );
    $img = array(
        'assets/img/normal/why-thumb3-1.jpg',
        'assets/img/normal/why-thumb3-2.jpg',
        'assets/img/normal/why-thumb3-3.jpg',
        'assets/img/normal/why-thumb3-4.jpg',
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
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="box-image">
                            <img src="<?php echo $img[$x];?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="box-number">
                            <span><?php echo $num[$x];?></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box-content">
                            <h3 class="box-title"><?php echo $title[$x];?></h3>
                            <p class="box-text"><?php echo $text[$x];?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }; 
?>