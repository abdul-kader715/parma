<?php
    $title = array(
        'Fresh Fruits',
        'Natural Fruits',
        'Dairy Products',
        'Tea & Coffee',
        'Meat and Fish',
        'Fresh Fish',
    );
    $img = array(
        'assets/img/product/category_2_1.png',
        'assets/img/product/category_2_2.png',
        'assets/img/product/category_2_3.png',
        'assets/img/product/category_2_4.png',
        'assets/img/product/category_2_5.png',
        'assets/img/product/category_2_6.png',
    );
    $subtitle = array(
        '08 Products',
        '05 Products',
        '04 Products',
        '07 Products',
        '10 Products',
        '07 Products',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="category-box">
                <div class="box-icon">
                    <img src="<?php echo $img[$x];?>" alt="Image">
                </div>
                <h3 class="box-title"><a href="shop.html"><?php echo $title[$x];?></a></h3>
                <p class="box-text"><?php echo $subtitle[$x];?></p>
            </div>
        </div>
        
    <?php if($x == $y) {
        break;
    } }; 
?>