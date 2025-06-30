<?php
    $title = array(
        'Fresh Vegetable',
        'Natural Fruits',
        'Dairy Products',
        'Tea & Coffee',
        'Meat and Fish',
    );
    $img = array(
        'assets/img/icon/category_card_1.svg',
        'assets/img/icon/category_card_2.svg',
        'assets/img/icon/category_card_3.svg',
        'assets/img/icon/category_card_4.svg',
        'assets/img/icon/category_card_5.svg',
    );
    $subtitle = array(
        'Product (08)',
        'Product (05)',
        'Product (04)',
        'Product (07)',
        'Product (10)',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="category-card">
                <div class="box-shape" data-bg-src="assets/img/bg/category_card_bg.png"></div>
                <div class="box-icon" data-mask-src="assets/img/bg/category_card_icon_bg.png">
                    <img src="<?php echo $img[$x];?>" alt="Image">
                </div>
                <p class="box-subtitle"><?php echo $subtitle[$x];?></p>
                <h3 class="box-title"><a href="shop.html"><?php echo $title[$x];?></a></h3>
            </div>
        </div>
        
    <?php if($x == $y) {
        break;
    } }; 
?>