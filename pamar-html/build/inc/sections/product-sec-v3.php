
<!--==============================
Product Area  
==============================-->
<section class="<?php echo $klass;?>">
    <div class="container">
        <div class="row justify-content-lg-between justify-content-center align-items-end">
            <div class="col-lg">
                <div class="title-area text-center text-lg-start">
                    <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="Icon">Organic Products</span>
                    <h2 class="sec-title">Our Popular Products</h2>
                </div>
            </div>
            <div class="col-auto mt-n2 mt-lg-0">
                <div class="sec-btn">
                    <div class="nav tab-menu1" role="tablist">
                        <button class="tab-btn active" id="nav-one-tab" data-bs-toggle="tab" data-bs-target="#nav-one" role="tab" aria-controls="nav-one" aria-selected="true">Fresh Fruits</button>
                        <button class="tab-btn" id="nav-two-tab" data-bs-toggle="tab" data-bs-target="#nav-two" role="tab" aria-controls="nav-two" aria-selected="false">Organic Vegetables</button>
                        <button class="tab-btn" id="nav-three-tab" data-bs-toggle="tab" data-bs-target="#nav-three" role="tab" aria-controls="nav-three" aria-selected="false">Fruit Juice</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <!-- Single item -->
            <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                <div class="slider-area">
                    <div class="swiper th-slider has-shadow productSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                        <div class="swiper-wrapper">
                            <?php get_section('product-grid', 'swiper-slide', '7'); ?>
                        </div>
                    </div>
                    <button data-slider-prev=".productSlider1" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                    <button data-slider-next=".productSlider1" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                </div>
            </div>
            <!-- Single item -->
            <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">
                <div class="slider-area">
                    <div class="swiper th-slider has-shadow productSlider2" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                        <div class="swiper-wrapper">
                            <?php get_section('product-grid', 'swiper-slide', '7'); ?>
                        </div>
                    </div>
                    <button data-slider-prev=".productSlider2" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                    <button data-slider-next=".productSlider2" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                </div>
            </div>
            <!-- Single item -->
            <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">
                <div class="slider-area">
                    <div class="swiper th-slider has-shadow productSlider3" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                        <div class="swiper-wrapper">
                            <?php get_section('product-grid', 'swiper-slide', '7'); ?>
                        </div>
                    </div>
                    <button data-slider-prev=".productSlider3" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                    <button data-slider-next=".productSlider3" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>