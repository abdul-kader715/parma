<?php 
    $title = array(
        'Basic',
        'Standard',
        'Premium',
    );
    $subtitle = array(
        'Up to 10 Members per month',
        'Up to 10 Members per month',
        'Up to 10 Members per month',
    );
    $price = array(
        '$25.95',
        '$85.95',
        '$165.95',
    );
    $duration = array(
        '/Per month',
        '/Per month',
        '/Per month',
    );
    $text = array(
        'This is an excellent option for people & small businesses who are starting out.',
        'This is an excellent option for people & small businesses who are starting out.',
        'This is an excellent option for people & small businesses who are starting out.',
    );
    $color = array(
        'text-white',
        '',
        'text-white',
    );
    $list = array(
        '<li><i class="fas fa-circle-check"></i> Cultivation plans and field boundaries</li>
        <li class="unavailable"><i class="fas fa-circle-check"></i> Scouting app/module</li>
        <li class="unavailable"><i class="fas fa-circle-check"></i> Satellite relative crop moisture</li>',

        '<li><i class="fas fa-circle-check"></i> Cultivation plans and field boundaries</li>
        <li><i class="fas fa-circle-check"></i> Scouting app/module</li>
        <li class="unavailable"><i class="fas fa-circle-check"></i> Satellite relative crop moisture</li>',

        '<li><i class="fas fa-circle-check"></i> Cultivation plans and field boundaries</li>
        <li><i class="fas fa-circle-check"></i> Scouting app/module</li>
        <li><i class="fas fa-circle-check"></i> Satellite relative crop moisture</li>',
    );
    
    $arrlength = count($title);
    for($x = 0; $x < $arrlength; $x++) { ?>

        <div class="<?php echo $klass;?>" data-cue="slideInUp">
            <div class="price-card bg-gray">
                <h3 class="box-title text-white"><?php echo $title[$x];?></h3>
                <p class="box-text text-gray3"><?php echo $text[$x];?></p>
                <div class="price_card-wrap bg-black">
                    <h4 class="price-card_price <?php echo $color[$x];?>"><?php echo $price[$x];?><span class="duration text-gray3"><?php echo $duration[$x];?></span>
                    </h4>
                    <p class="box-subtitle text-gray3"><?php echo $subtitle[$x];?></p>
                </div>                

                <div class="checklist text-gray3">
                    <ul>
                        <?php echo $list[$x];?>
                    </ul>
                </div>
                <div class="btn-wrap">
                    <a href="contact.html" class="th-btn style4 w-100">Choose Your plan</a>
                </div>
            </div>
        </div>
    <?php }
?>
