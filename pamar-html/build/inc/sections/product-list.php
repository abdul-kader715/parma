<?php 
    $title = array(
        'Sour Red Cherry',
        'Strawberry Fruits',
        'Six Ripe Banana',
        'Sausage Ribs Beef',
        'Bosco Apple Fruit',
        'Green Cauliflower',
        'Mandarin orange',
        'Shallot Red onion',
        'Sour Red Cherry',
        'Strawberry Fruits',
        'Six Ripe Banana',
        'Sausage Ribs Beef',
        'Bicycling Helmets',
    );
    $img = array(
        'assets/img/product/product_list_1.jpg',
        'assets/img/product/product_list_2.jpg',
        'assets/img/product/product_list_3.jpg',
        'assets/img/product/product_list_4.jpg',
        'assets/img/product/product_list_5.jpg',
        'assets/img/product/product_list_6.jpg',
        'assets/img/product/product_list_7.jpg',
        'assets/img/product/product_list_8.jpg',
        'assets/img/product/product_list_9.jpg',
        'assets/img/product/product_list_10.jpg',
    );
    $cat = array(
        'Fresh Fruits',
        'Vegetables',
        'Vegetables',
        'Fresh Fruits',
        'Fresh Fruits',
        'Fresh Fruits',
        'Fresh Fruits',
        'Fresh Fruits',
    );
    $tag = array(
        '<span class="product-tag">Hot</span>',
        '<span class="product-tag">New</span>',
        '<span class="product-tag">Hot</span>',
        '<span class="product-tag">Sale</span>',
        '<span class="product-tag">New</span>',
        '<span class="product-tag">Hot</span>',
        '<span class="product-tag">New</span>',
        '<span class="product-tag">Hot</span>',
    );
    $price = array(
        '$177.85',
        '$39.85',
        '$96.85',
        '$08.85<del>$06.99</del>',
        '$32.85',
        '$30.85',
        '$232.85',
        '$30.85',
        '$32.85',
    );
    $arrlength = count($title);
    for($x = 0; $x < $arrlength; $x++) { ?>

        <div class="<?php echo $klass;?>">
            <div class="th-product list-view">
                <div class="product-img">
                    <img src="<?php echo $img[$x];?>" alt="Product Image">
                    <div class="actions">
                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>               
                    </div>
                </div>
                <div class="product-content">
                    <a href="shop-details.html" class="product-category"><?php echo $cat[$x];?></a>
					<h3 class="product-title"><a href="shop-details.html"><?php echo $title[$x];?></a></h3>
					<span class="price"><?php echo $price[$x];?></span>
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                    </div>
                </div>
            </div>
        </div>

    <?php if($x == $y) {
        break;
    } }; 
?>
