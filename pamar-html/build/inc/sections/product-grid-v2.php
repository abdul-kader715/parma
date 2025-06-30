<?php 
    $title = array(
        'Strawberry juice', 
        'Yellow papaya',
        'Apple Seeder Vinger',
    );
    $img = array(
        'assets/img/product/product_1_15.jpg',
        'assets/img/product/product_1_13.jpg',
        'assets/img/product/product_1_14.jpg',
    );
    $cat = array(
        'Fresh Fruits',
        'Fresh Fruits',
        'Fresh Fruits',
    );
    $tag = array(
        '<span class="product-tag">Hot</span>',
        '<span class="product-tag">Hot</span>',
        '<span class="product-tag">Sale</span>',
    );
    $price = array(
        '$08.85<del>$06.99</del>',
        '$08.85<del>$06.99</del>',
        '$08.85<del>$06.99</del>',
    );
    $arrlength = count($title);
    for($x = 0; $x < $arrlength; $x++) { ?>

        <div class="<?php echo $klass;?>">
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
