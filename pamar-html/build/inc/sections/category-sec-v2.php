
<!--==============================
Category Area  
==============================-->
<section class="<?php echo $klass;?>" id="category-sec">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="Icon">Product Category</span>
            <h2 class="sec-title">Shop By Category</h2>
        </div>
        <div class="swiper th-slider" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"3"},"768":{"slidesPerView":"4"},"992":{"slidesPerView":"5"},"1200":{"slidesPerView":"6"}}}'>
            <div class="swiper-wrapper">
                <?php get_section('category-v2', 'swiper-slide', '5');?>
            </div> 
        </div>
    </div>
</section>