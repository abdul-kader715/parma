<!--==============================
Gallery Area  
==============================-->
<div class="overflow-hidden <?php echo $klass;?>">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title"><img src="assets/img/shape/title_left.svg" alt="shape">Wedding Gallery<img src="assets/img/shape/title_right.svg" alt="shape"></span>
            <h2 class="sec-title">Lovely Captured Moments</h2>
            <div class="filter-menu indicator-active filter-menu-active">
                <button data-filter="*" class="tab-btn active" type="button">ALL PHOTOS</button>
                <button data-filter=".cat1" class="tab-btn" type="button">WEDDING CEREMONY</button>
                <button data-filter=".cat2" class="tab-btn" type="button">ENGAGEMENT</button>
                <button data-filter=".cat3" class="tab-btn" type="button">PRE-WEDDING</button>
                <button data-filter=".cat4" class="tab-btn" type="button">WITH FRIENDS</button>
                <button data-filter=".cat5" class="tab-btn" type="button">PARTY TIME</button>
            </div>
        </div>
        <div class="row gallery-row filter-active">
            <?php get_section('gallery-v1');?>
        </div>
    </div>
</div>