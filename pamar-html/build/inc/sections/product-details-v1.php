<!--==============================
    Product Details
    ==============================-->
<section class="product-details <?php echo $klass; ?>">
    <div class="container">
        <div class="row gx-60">
            <div class="col-lg-6">
                <div class="product-big-img">
                    <div class="img"><img src="assets/img/product/product_details_1_1.png" alt="Product Image"></div>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="product-about">
                    <h2 class="product-title">Stanley Hand Tools Bag</h2>
                    <div class="product-rating">
                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></div>
                        <a href="shop-details.html" class="woocommerce-review-link">(<span class="count">4</span> customer reviews)</a>
                    </div>
					<p class="price">$120.85<del>$150.99</del></p>
                    <p class="text">Aliquam hendrerit a augue insuscipit. Etiam aliquam massa quis des mauris commodo venenatis ligula commodo leez sed blandit convallis dignissim onec vel pellentesque neque.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos debitis dignissimos, non perspiciatis explicabo exercitationem excepturi autem provident tempore, voluptatum eveniet, magnam illum repudiandae voluptates consectetur. Totam eaque non odio.</p>
                    <div class="mt-2 link-inherit">
                        <p>
                            <strong class="text-title me-3">Availability:</strong>
                            <span class="stock in-stock"><i class="far fa-check-square me-2 ms-1"></i>In Stock</span>
                        </p>
                    </div>
                    <div class="actions">
                        <div class="quantity">
                            <input type="number" class="qty-input" step="1" min="1" max="100" name="quantity" value="1" title="Qty">
                            <button class="quantity-plus qty-btn"><i class="far fa-chevron-up"></i></button>
							<button class="quantity-minus qty-btn"><i class="far fa-chevron-down"></i></button>
                        </div>
                        <button class="th-btn">Add to Cart <span class="after-bg"></span></button>
                        <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="product_meta">
                        <span class="sku_wrapper">SKU: <span class="sku">Stanley Hand</span></span>
                        <span class="posted_in">Category: <a href="shop.html">Plumber Gadget</a></span>
						<span>Tags: <a href="shop.html">Building,</a><a href="shop.html">Plumber</a></span>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav product-tab-style1" id="productTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link th-btn style3" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="false">Product Description <span class="after-bg"></span></a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link th-btn style3 active" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="true">Customer Reviews <span class="after-bg"></span></a>
            </li>
        </ul>
        <div class="tab-content" id="productTabContent">
            <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
                 <p class="text">Aliquam hendrerit a augue insuscipit. Etiam aliquam massa quis des mauris commodo venenatis ligula commodo leez sed blandit convallis dignissim onec vel pellentesque neque.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos debitis dignissimos, non perspiciatis explicabo exercitationem excepturi autem provident tempore, voluptatum eveniet, magnam illum repudiandae voluptates consectetur. Totam eaque non odio.</p>  
            </div>
            <div class="tab-pane fade show active" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                <div class="woocommerce-Reviews">
                    <?php get_section('product-review-v1'); ?>
                    <?php get_section('product-review-form-v1'); ?>
                </div>
            </div>
        </div>

		<!--==============================
		Related Product  
		==============================-->
		<div class="space-extra-top mb-30">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-auto">
                    <h2 class="sec-title text-center">Related Products</h2>
                </div>
                <div class="col-md d-none d-sm-block">
                    <hr class="title-line">
                </div>
                <div class="col-md-auto d-none d-md-block">
                    <div class="sec-btn">
                        <div class="icon-box">
                            <button data-slider-prev="#productSlider1" class="slider-arrow style-border4 default"><i class="far fa-arrow-left"></i></button>
                            <button data-slider-next="#productSlider1" class="slider-arrow style-border4 default"><i class="far fa-arrow-right"></i></button> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper th-slider has-shadow" id="productSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <?php get_section('product-grid', 'swiper-slide', '7'); ?>
                </div>
            </div>
            <div class="d-block d-md-none mt-40 text-center">
                <div class="icon-box">
                    <button data-slider-prev="#productSlider1" class="slider-arrow default"><i class="far fa-arrow-left"></i></button>
                    <button data-slider-next="#productSlider1" class="slider-arrow default"><i class="far fa-arrow-right"></i></button>
                </div>
            </div>
		</div>
    </div>
</section>