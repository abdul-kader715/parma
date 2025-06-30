
<!--==============================
Product Area  
==============================-->
<section class="<?php echo $klass;?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-md-8 mb-40 mb-xl-0">
                <div class="offer-grid text-center mega-hover px-3" data-bg-src="assets/img/bg/cta_bg_4_3.jpg">
                    <span class="h6 box-subtitle fs-16"><span class="text-theme2">Get 100% Organic Food</span></span>
                    <h3 class="box-title text-white">Everyday Fresh & <br> Clean With Our <br> Products</h3>
                    <a href="shop-details.html" class="th-btn btn-sm style4">Shop Now<i class="fas fa-chevrons-right ms-2"></i></a>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6">
                        <h3 class="box-title mb-20 text-center text-md-start">Featured Products</h3>
                        <div class="product-list-area">
                            <?php get_section('product-list', 'mb-4', '3'); ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h3 class="box-title mb-20 text-center text-md-start">Special Offer</h3>
                        <div class="product-list-area">
                            <?php get_section('product-list-v2', 'mb-4', '3'); ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h3 class="box-title mb-20 text-center text-md-start">Best Seller Products</h3>
                        <div class="product-list-area">
                            <?php get_section('product-list-v3', 'mb-4', '3'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>