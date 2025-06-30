<!--==============================
Price Area  
==============================-->
<section class="<?php echo $klass;?> position-relative z-index-2">
    <div class="container grid_lines d-none d-md-flex justify-content-between">
        <div class="grid_line"></div>
        <div class="grid_line"></div>
        <div class="grid_line"></div>
        <div class="grid_line"></div>
        <div class="grid_line"></div>
    </div>
    <div class="shape-mockup price-bg-shape3-1 jump-reverse d-xl-block d-none" data-right="3%" data-top="5%">
        <div class="color-masking">
            <div class="masking-src bg-mask" style="mask-image: url(&quot;assets/img/shape/bg-shape2.png&quot;);"></div>
            <img src="assets/img/shape/bg-shape2.png" alt="img">
        </div>
    </div>
    <div class="container"> 
        <div class="row justify-content-xl-between justify-content-center">
            <div class="col-xxl-5 col-xl-6">
                <div class="title-area text-xl-start text-center">
                    <span class="sub-title style3 text-white fadeinup wow" data-wow-duration="1.2s" data-wow-delay="0.1s">PRICING PLAN</span>
                    <h2 class="sec-title text-white fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">Simple and affordable pricing packages</h2>
                </div>
            </div>
            <div class="col-auto align-self-end">
                <div class="sec-btn fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <a href="contact.html" class="th-btn style9 btn-radius-0 px-30">Let’s Talk <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>       
        <div class="row gy-40">
            <div class="col-xl-6">
                <div class="row gy-30 justify-content-center">
                    <?php get_section('pricing-v3', 'col-md-6'); ?>
                </div>       
            </div>
            <div class="col-xl-6">
                <?php get_section('faq-v1'); ?>
            </div>
        </div>
    </div>
</section>