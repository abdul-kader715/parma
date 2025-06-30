<!--==============================
Price Area  
==============================-->
<section class="<?php echo $klass;?>">
    <div class="container"> 
        <div class="row justify-content-center">
            <div class="col-xxl-5 col-xl-6">
                <div class="title-area text-center">
                    <span class="sub-title style4 fadeinup wow" data-wow-duration="1.2s" data-wow-delay="0.1s">PRICING PLAN</span>
                    <h2 class="sec-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">Simple and affordable pricing packages</h2>
                    <div class="pricing-tabs style3 fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <div class="switch-area">
                            <label class="toggler toggler--is-active ms-0" id="filt-monthly">Bill Monthly</label>
                            <div class="toggle">
                                <input type="checkbox" id="switcher" class="check">
                                <b class="b switch"></b>
                            </div>
                            <label class="toggler" id="filt-yearly">Bill Yearly</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
        <div id="monthly" class="wrapper-full">
            <div class="row gy-30 justify-content-center">
                <?php get_section('pricing-v4', 'col-xl-3 col-md-6'); ?>
            </div>
        </div>
        <div id="yearly" class="wrapper-full hide">
            <div class="row gy-30 justify-content-center">
                <?php get_section('pricing-v4.1', 'col-xl-3 col-md-6'); ?>
            </div>
        </div>  
    </div>
</section>