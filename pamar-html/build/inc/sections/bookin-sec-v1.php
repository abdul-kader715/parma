<!--==============================
Booking Area  
==============================-->
<section class="bg-black-color7 <?php echo $klass;?>">
    <div class="container">
        <div class="booking-wrap" >
            <div class="nav tab-menu2 mb-40" id="tab-menu3" role="tablist">
                <button class="th-btn tab-btn active" id="nav-one-tab" data-bs-toggle="tab" data-bs-target="#nav-one" type="button" role="tab" aria-controls="nav-one" aria-selected="true">Residensital</button>
                <button class="th-btn tab-btn" id="nav-two-tab" data-bs-toggle="tab" data-bs-target="#nav-two" type="button" role="tab" aria-controls="nav-two" aria-selected="false">Commercial</button>
            </div>
            <div>
                <h2 class="box-title" data-cue="slideInUp">Quick Plumbing Service book in 60 seconds</h2>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                    <div class="row gy-30 justify-content-center">
                        <?php get_section('booking-form-v1'); ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">
                    <div class="row gy-30 justify-content-center">
                        <?php get_section('booking-form-v1'); ?>
                    </div>
                </div>
            </div>
            <div class="booking-bg-shape1-1">
                <img src="assets/img/shape/booking-bg-shape.png" alt="img">
            </div>
        </div>
        
    </div>
    <div class="price-bg-shape1-1 shape-mockup d-none d-xxl-inline" data-bottom="0" data-left="8%">
        <img src="assets/img/normal/booking-thumb2-1.png" alt="img">
    </div>
    <div class="shape-mockup" data-top="40%" data-right="10%">
        <div class="circle-tag d-none d-xxl-block">
            <span class="circle-title-anime">** Quality services ** Quick Result ** Safe plumbing services </span>
            <div class="icon">
                <img src="assets/img/icon/logo-icon.png" alt="">
            </div>
        </div>
    </div>
    
</section>