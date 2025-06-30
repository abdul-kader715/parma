<?php 
    $title = array(
        'AI Virtual reality VR', 
        'AI Technology Smart Watch',
        'AI-Enabled Autonomous Drones',
        'AI Time machine',
        'Wifi AI extender',
        'AI Technological airpods',
        'Pen Pot',
        'Shopping Cart',
        'File ',
        'Blue Pen',
        'Group File ',
        'Official Bag',
    );
    $img = array(
        'assets/img/product/product_1_1.png',
        'assets/img/product/product_1_2.png',
        'assets/img/product/product_1_3.png',
        'assets/img/product/product_1_4.png',
        'assets/img/product/product_1_5.png',
        'assets/img/product/product_1_6.png',
        'assets/img/product/product_1_7.png',
        'assets/img/product/product_1_8.png',
        'assets/img/product/product_1_9.png',
        'assets/img/product/product_1_10.png',
        'assets/img/product/product_1_11.png',
        'assets/img/product/product_1_12.png',
    );
    // $cat = array(
    //     'Fresh Fruits',
    //     'Vegetables',
    //     'Vegetables',
    //     'Fresh Fruits',
    //     'Fresh Fruits',
    //     'Fresh Fruits',
    //     'Fresh Fruits',
    //     'Fresh Meat',
    //     'Vegetables',
    //     'Fresh Fruits',
    //     'Fresh Fruits',
    //     'Vegetables',
    // );
    // $tag = array(
    //     '<span class="product-tag">Hot</span>',
    //     '<span class="product-tag">New</span>',
    //     '<span class="product-tag">Hot</span>',
    //     '<span class="product-tag">Sale</span>',
    //     '<span class="product-tag">New</span>',
    //     '<span class="product-tag">Hot</span>',
    //     '<span class="product-tag">New</span>',
    //     '<span class="product-tag">Hot</span>',
    //     '<span class="product-tag">New</span>',
    //     '<span class="product-tag">Hot</span>',
    //     '<span class="product-tag">New</span>',
    //     '<span class="product-tag">Hot</span>',
    // );
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
        '$30.85',
        '$232.85',
        '$30.85',
        '$32.85',
    );
    $arrlength = count($title);
    for($x = 0; $x < $arrlength; $x++) { ?>

        <div class="<?php echo $klass;?>">
            <div class="th-product product-grid">
                <div class="product-img">
                    <img src="<?php echo $img[$x];?>" alt="Product Image">
                    <div class="actions">
                        <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                        <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>                 
                    </div>
                </div>
                <div class="product-content">
					<h3 class="product-title"><a href="shop-details.html"><?php echo $title[$x];?></a></h3>
					<span class="price"><?php echo $price[$x];?></span>
                </div>
            </div>
        </div>

    <?php if($x == $y) {
        break;
    } }; 
?>
