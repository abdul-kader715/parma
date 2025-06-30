
<!--==============================
Product Area
==============================-->
<section class="<?php echo $klass;?>" id="shop-sec">
    <div class="shape-mockup" data-top="0" data-left="0"><img src="assets/img/shape/vector_shape_1.png" alt="shape"></div>
    <div class="shape-mockup" data-bottom="0" data-right="0"><img src="assets/img/shape/vector_shape_2.png" alt="shape"></div>
    <div class="container text-center">
        <div class="title-area text-center">
            <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="Icon">Organic Products</span>
            <h2 class="sec-title">Organic & Fresh Products Daily!</h2>
        </div>
        <div class="filter-menu indicator-active filter-menu-active">
            <button data-filter="*" class="th-btn tab-btn active" type="button">ALL</button>
            <button data-filter=".cat1" class="th-btn tab-btn" type="button">Fruits</button>
            <button data-filter=".cat2" class="th-btn tab-btn" type="button">Vegetable</button>
            <button data-filter=".cat3" class="th-btn tab-btn" type="button">Meat & Fish</button>
            <button data-filter=".cat4" class="th-btn tab-btn" type="button">Fruit Juice</button>
            <button data-filter=".cat5" class="th-btn tab-btn" type="button">Salads</button>
        </div>
        <div class="row gy-4 filter-active">
            <?php get_section('product-grid-filter', 'col-xl-3 col-lg-4 col-sm-6', '7'); ?>
        </div>
    </div>
</section> 