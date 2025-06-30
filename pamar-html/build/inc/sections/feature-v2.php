<?php
    $title = array(
        'Trustworthiness',
        'Professionalism',
        'Customer Satisfaction',
    );
    $img = array(
        'assets/img/icon/feature/2-1.png',
        'assets/img/icon/feature/2-2.png',
        'assets/img/icon/feature/2-3.png',
    );
    $text = array(
        'Building lasting connections with our clients by prioritizing honesty, reliability, and openness in every engagement, while safeguarding their confidentiality at all times.',
        'Conducting all cleaning tasks with our clients by prioritizing honesty, reliability, and openness in every engagement, while safeguarding their confidentiality at all times.',
        'Building lasting connection of our clients by prioritizing honesty, reliability, and openness in every engagement, while safeguarding their confidentiality at all times.',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>" data-cue="slideInUp">
            <div class="feature-card style2">
                <div class="box-img">
                    <img src="<?php echo $img[$x];?>" alt="icon">
                </div>
                <h3 class="box-title"><?php echo $title[$x];?></h3>
                <p class="box-text"><?php echo $text[$x];?></p>
            </div>
        </div>
    <?php }; 
?>