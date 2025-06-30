
<!--==============================
Category Area  
==============================-->
<section class="<?php echo $klass;?>">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="Icon">Food Category</span>
            <h2 class="sec-title">What We’re Offering</h2>
        </div>
        <div class="swiper th-slider" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"400":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"5"}}}'>
            <div class="swiper-wrapper">
                <?php get_section('category-v1', 'swiper-slide', '10');?>
            </div> 
        </div>
    </div>
</section>