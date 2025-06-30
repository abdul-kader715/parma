<?php 
    $title = array(
        'Personal',
        'Enterprise Plan',
    );
    $subtitle = array(
        'Basic Features Included',
        'Advanced Features Included',
    );
    $price = array(
        '$129',
        '$169',
    );
    $duration = array(
        '/Per month',
        '/Per month',
    );
    $active = array(
        '',
        'active',
    );
    $img = array(
        'assets/img/bg/pricing-card-bg.png',
        'assets/img/bg/pricing-card-bg.png',
    );
    $text = array(
        'Each package is designed to address specific business needs, providing clients with tailored solutions for success.',
        'Each package is designed to address specific business needs, providing clients with tailored solutions for success.',
    );
    $list = array(
        '<li><i class="fas fa-circle-check"></i> Digital transformation roadmap</li>
        <li><i class="fas fa-circle-check"></i> Innovation advisory sessions</li>
        <li><i class="fas fa-circle-check"></i> Technology integration strategy</li>
        <li><i class="fas fa-circle-check"></i> Monthly progress meetings</li>
        <li class="unavailable"><i class="fas fa-circle-check"></i> Priority email and phone support</li>',

        '<li><i class="fas fa-circle-check"></i> Digital transformation roadmap</li>
        <li><i class="fas fa-circle-check"></i> Innovation advisory sessions</li>
        <li><i class="fas fa-circle-check"></i> Technology integration strategy</li>
        <li><i class="fas fa-circle-check"></i> Monthly progress meetings</li>
        <li><i class="fas fa-circle-check"></i> Priority email and phone support</li>',
    );
    
    $arrlength = count($title);
    for($x = 0; $x < $arrlength; $x++) { ?>

        <div class="<?php echo $klass;?>">
            <div class="price-card style3 <?php echo $active[$x];?>">
                <div class="card-bg-img" data-mask-src="<?php echo $img[$x];?>"></div>
                <h3 class="box-title"><?php echo $title[$x];?></h3>
                <p class="box-subtitle"><?php echo $subtitle[$x];?></p>
                <h4 class="price-card_price"><?php echo $price[$x];?><span class="duration"><?php echo $duration[$x];?></span>
                </h4>
                <p class="box-text"><?php echo $text[$x];?></p>
                <div class="checklist">
                    <ul>
                        <?php echo $list[$x];?>
                    </ul>
                </div>
                <div class="btn-wrap">
                    <a href="contact.html" class="th-btn btn-sm btn-radius-0 style-border3 w-100">Choose Plan</a>
                </div>
            </div>
        </div>
    <?php }
?>
