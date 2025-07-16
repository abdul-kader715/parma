<section class="category-area z-index-common position-relative" data-sec-pos="top-half" data-pos-for="#responsive">
    <div class="container">
        <div class="category-wrap position-relative text-center text-xl-start justify-content-between align-items-center">
            <div class="title-area">
                <h2 class="sec-title">Themehour Latest Products</h2>
                <p class="sec-text">Get a stunning set of inner ready-made pages Choose from pre-made layouts for real business.</p>
            </div>
            <div class="slider-area category-slider overflow-hidden">
                <div class="swiper th-slider has-shadow text-end" id="categorySlider1" data-slider-options='{"spaceBetween": 20,"breakpoints":{"0":{"slidesPerView":"3"},"576":{"slidesPerView":"5"},"768":{"slidesPerView":"6"},"992":{"slidesPerView":"6"},"1200":{"slidesPerView":"5"},"1400":{"slidesPerView":"6"}}}'>
                    <div class="swiper-wrapper">
                        <?php 
                            $img = array(
                                'assets/img/category/cate1.png',
                                'assets/img/category/cate2.png',
                                'assets/img/category/cate3.png',
                                'assets/img/category/cate4.png',
                                'assets/img/category/cate5.png',
                                'assets/img/category/cate6.png',
                                'assets/img/category/cate1.png',
                                'assets/img/category/cate2.png',
                                'assets/img/category/cate3.png',
                                'assets/img/category/cate4.png',
                                'assets/img/category/cate5.png',
                                'assets/img/category/cate6.png',
                            );
                            $url = array(
                                'https://themeforest.net/item/cigma-multipurpose-business-consulting-html-template/56550644?s_rank=6',
                                'https://themeforest.net/item/atek-it-solution-technology-figma-template/56737794?s_rank=6',
                                'https://themeforest.net/item/rotal-hotel-resort-booking-html-template/56740194?s_rank=5',
                                'https://themeforest.net/item/piller-real-estate-html-template/57912370?s_rank=1',
                                'https://themeforest.net/item/robor-ai-and-automation-integration-figma-template/56978233?s_rank=3',
                                'https://themeforest.net/item/atek-it-solution-and-technology-html-template/57448535?s_rank=2',
                                'https://themeforest.net/item/cigma-multipurpose-business-consulting-html-template/56550644?s_rank=6',
                                'https://themeforest.net/item/atek-it-solution-technology-figma-template/56737794?s_rank=6',
                                'https://themeforest.net/item/rotal-hotel-resort-booking-html-template/56740194?s_rank=5',
                                'https://themeforest.net/item/piller-real-estate-html-template/57912370?s_rank=1',
                                'https://themeforest.net/item/robor-ai-and-automation-integration-figma-template/56978233?s_rank=3',
                                'https://themeforest.net/item/atek-it-solution-and-technology-html-template/57448535?s_rank=2',
                            );
                            $arrlength = count($img);
                            for($x = 0; $x < $arrlength; $x++) { ?>

                                <div class="swiper-slide">
                                    <div class="category-item">
                                        <a href="<?php echo $url[$x];?>" target="_blank">
                                            <img src="<?php echo $img[$x];?>" alt="img">
                                        </a>
                                    </div>
                                </div>
                            <?php }
                        ?>
                    </div>
                </div>
            </div>
            <div class="category-shape">
                <div class="color-masking">
                    <div class="masking-src" style="mask-image: url('assets/img/category/cate-shape.png')"></div>
                    <img class="category-line d-none d-xl-block" src="assets/img/category/cate-shape.png" alt="">
                </div>
                <button data-slider-next="#categorySlider1" class="icon-btn d-none d-xl-block">
                    <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.7871 5.96053L10.6961 0.710534C10.5589 0.573916 10.3752 0.49832 10.1845 0.500028C9.99384 0.501737 9.81143 0.580614 9.67659 0.71967C9.54175 0.858726 9.46526 1.04684 9.4636 1.24348C9.46194 1.44013 9.53525 1.62958 9.66773 1.77103L13.5172 5.74078H0.72728C0.534393 5.74078 0.349407 5.8198 0.213015 5.96045C0.0766239 6.10111 0 6.29187 0 6.49078C0 6.6897 0.0766239 6.88046 0.213015 7.02111C0.349407 7.16177 0.534393 7.24078 0.72728 7.24078H13.5172L9.66773 11.2105C9.59827 11.2797 9.54286 11.3625 9.50475 11.454C9.46663 11.5455 9.44657 11.6439 9.44573 11.7435C9.44489 11.8431 9.46329 11.9418 9.49986 12.034C9.53643 12.1262 9.59043 12.2099 9.65872 12.2803C9.727 12.3507 9.8082 12.4064 9.89758 12.4442C9.98696 12.4819 10.0827 12.5008 10.1793 12.5C10.2759 12.4991 10.3713 12.4784 10.46 12.4391C10.5488 12.3998 10.629 12.3427 10.6961 12.271L15.7871 7.02103C15.9234 6.88039 16 6.68966 16 6.49078C16 6.29191 15.9234 6.10118 15.7871 5.96053Z" fill="currentColor"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>