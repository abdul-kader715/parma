
<!--==============================
Blog Area  
==============================-->
<section class="overflow-hidden <?php echo $klass;?>" id="blog-sec">
    <div class="shape-mockup team-bg-shape3-1 jump d-xxl-block d-none" data-theme-color="#13182B" data-top="20%" data-left="5%">
        <div class="color-masking">
            <div class="masking-src" data-mask-src="assets/img/shape/bg-shape12.png"></div>
            <img src="assets/img/shape/bg-shape12.png" alt="img">
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-5 col-xl-6 col-lg-7">
                <div class="title-area text-center">
                    <span class="sub-title style4 fadeinup wow" data-wow-duration="1.2s" data-wow-delay="0.1s">BLOG & ARTICLES</span>
                    <h2 class="sec-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">Valuable insights that empower your Business</h2>
                </div>
            </div>
        </div>
        <div class="blog-grid-wrap">
            <?php get_section('blog-v4');?>
        </div>
    </div>
</section>