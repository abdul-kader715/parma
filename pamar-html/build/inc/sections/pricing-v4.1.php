<?php 
    $title = array(
        'Startup',
        'Small Business Plan',
        'Professional Plan',
        'Enterprise Plan',
    );
    $subtitle = array(
        'Essential Features Included',
        'Premium Features Included',
        'Advanced Features Included',
        'Premium Features Included',
    );
    $price = array(
        'Free',
        '$529',
        '$769',
        '$999',
    );
    $duration = array(
        'Free forever',
        '/Per Year',
        '/Per Year',
        '/Per Year',
    );
    $active = array(
        '',
        '',
        'active',
        '',
    );
    $bgimg = array(
        '',
        '',
        '<div class="card-bg-img" data-mask-src="assets/img/bg/pricing-card-bg.png"></div>',
        '',
    );
    $text = array(
        'Each package is designed to address specific business needs, providing clients with tailored solutions for success.',
        'Each package is designed to address specific business needs, providing clients with tailored solutions for success.',
        'Each package is designed to address specific business needs, providing clients with tailored solutions for success.',
        'Each package is designed to address specific business needs, providing clients with tailored solutions for success.',
    );
    $list = array(
        '<li><i class="fas fa-circle-check"></i> Digital transformation roadmap</li>
        <li><i class="fas fa-circle-check"></i> Innovation advisory sessions</li>
        <li><i class="fas fa-circle-check"></i> Technology integration strategy</li>
        <li class="unavailable"><i class="fas fa-circle-check"></i> Monthly progress meetings</li>
        <li class="unavailable"><i class="fas fa-circle-check"></i> Priority email and phone support</li>',

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

        '<li><i class="fas fa-circle-check"></i> Digital transformation roadmap</li>
        <li><i class="fas fa-circle-check"></i> Innovation advisory sessions</li>
        <li><i class="fas fa-circle-check"></i> Technology integration strategy</li>
        <li><i class="fas fa-circle-check"></i> Monthly progress meetings</li>
        <li><i class="fas fa-circle-check"></i> Priority email and phone support</li>',
    );
    
    $arrlength = count($title);
    for($x = 0; $x < $arrlength; $x++) { ?>

        <div class="<?php echo $klass;?>">
            <div class="price-card style4 <?php echo $active[$x];?>">
                <?php echo $bgimg[$x];?>
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
                    <a href="contact.html" class="th-btn btn-sm style-border5 btn-radius-8 w-100">Choose Plan</a>
                </div>
            </div>
        </div>
    <?php }
?>
