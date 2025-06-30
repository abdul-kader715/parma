<?php 
    $title = array(
        'Sweet Dragon Fruit',
        'Papaya Vegetable Fruit',
        'Six Ripe Bananas',
        'Sour Red Cherry',
    );
    $img = array(
        'assets/img/product/deal_card_1.jpg',
        'assets/img/product/deal_card_2.jpg',
        'assets/img/product/deal_card_3.jpg',
        'assets/img/product/deal_card_4.jpg',
    );
    $cat = array(
        'Fresh Fruits',
        'Vegetables',
        'Vegetables',
        'Fresh Fruits',
    );
    $price = array(
        '$08.85<del>$07.99</del>',
        '$18.85<del>$14.99</del>',
        '$28.85<del>$20.99</del>',
        '$10.85<del>$08.99</del>',
    );
    $arrlength = count($title);
    for($x = 0; $x < $arrlength; $x++) { ?>

        <div class="<?php echo $klass;?>">
            <div class="th-product product-deal">
                <div class="product-img">
                    <img src="<?php echo $img[$x];?>" alt="Product Image">
                    <div class="actions">
                        <a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                        <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>                 
                    </div>
                </div>
                <div class="product-content">
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                    </div>
					<h3 class="product-title"><a href="shop-details.html"><?php echo $title[$x];?></a></h3>
					<span class="price"><?php echo $price[$x];?></span>
                    <ul class="counter-list deal-counter" data-offer-date="01/05/2025">
                        <li>
                            <div>
                                <div class="day count-number">00</div>
                                <span class="count-name">Day</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="hour count-number">00</div>
                                <span class="count-name">Hour</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="minute count-number">00</div>
                                <span class="count-name">Mins</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="seconds count-number">00</div>
                                <span class="count-name">Sec</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    <?php if($x == $y) {
        break;
    } }; 
?>
