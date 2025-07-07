<!--==============================
Why Choose Us Area  
==============================-->
<div class="why-sec-2 <?php echo $klass;?>">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-6">
                <div class="why-wrap2">
                    <div class="title-area text-left ">
                        <span class="sub-title2 text-bg-white" data-cue="slideInUp">Why Choose Us</span>
                        <h2 class="sec-title style4 text-anim2 " data-cue="slideInUp"> Why Pamar is Trusted   <br>
                            <span>Plumbing</span> Partner</h2>
                        <p class="sec-text2" data-cue="slideInUp">Our skilled team of experts is devoted to
                                delivering outstanding home services customized to meet your specific requirements.</p>
                        
                    </div>
                    <div class="btn-group mt-30 mb-50" data-cue="slideInUp">
                            <a href="about.html" class="link-btn3">
                                Discover More
                            </a>
                    </div>
                    <?php get_section('brand-v4', );?>
                </div>  
            </div> 
            <div class="col-xxl-6">
                <div class="why-img-box2" data-cue="slideInUp">
                    <div class="slider-area">
                        <div class="swiper th-slider " id="whySlide1"
                                 data-slider-options='{"autoHeight": "true","effect": "fade"}'>
                            <div class="swiper-wrapper">  
                                <?php get_section('work-v1', 'swiper-slide');?>
                            </div>
                            <div class="box-icon">
                                <button data-slider-prev="#whySlide1" class="slider-arrow style5 defaul prev"><i class="far fa-arrow-left"></i></button>
                                <button data-slider-next="#whySlide1" class="slider-arrow style5 defaul next"><i class="far fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>                           
        </div>
    </div>
</div>