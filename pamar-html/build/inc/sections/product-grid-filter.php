<?php 
    $title = array(
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
        'assets/img/product/product_1_1.png',
        'assets/img/product/product_1_2.png',
        'assets/img/product/product_1_3.png',
        'assets/img/product/product_1_4.png',
        'assets/img/product/product_1_5.png',
        'assets/img/product/product_1_6.png',
        'assets/img/product/product_1_7.png',
        'assets/img/product/product_1_8.png',
        'assets/img/product/product_1_9.png',
    );
    $cat = array(
        'Fresh Fruits',
        'Vegetables',
        'Fresh Fruits',
        'Vegetables',
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
    $filter_class = array(
        'filter-item cat3',
        'filter-item cat5 cat2',
        'filter-item cat1 cat4',
        'filter-item cat2 cat5',
        'filter-item cat3 cat1',
        'filter-item cat5 cat4 cat1 cat2',
        'filter-item cat2 cat1 cat4 cat5',
        'filter-item cat3',
    );
    $arrlength = count($title);
    for($x = 0; $x < $arrlength; $x++) { ?>
        <div class="<?php echo $klass;?> <?php echo $filter_class[$x];?>">
            <div class="th-product product-grid">
                <div class="product-img">
                    <img src="<?php echo $img[$x];?>" alt="Product Image">
                    <?php echo $tag[$x];?>
                    <div class="actions">
                        <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                        <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>                 
                    </div>
                </div>
                <div class="product-content">
                    <a href="shop-details.html" class="product-category"><?php echo $cat[$x];?></a>
					<h3 class="product-title"><a href="shop-details.html"><?php echo $title[$x];?></a></h3>
					<span class="price"><?php echo $price[$x];?></span>
                    <div class="woocommerce-product-rating">
                        <span class="count">(120 Reviews)</span>
                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                            <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php if($x == $y) {
        break;
    } }; 
?>
