<!--==============================
Event Area  
==============================-->
<section class="event-area-1 <?php echo $klass;?>" id="event-sec">
    <div class="shape-mockup event-bg-shape1-1 d-xxl-block d-none spin" data-bottom="2%" data-right="10%">
        <div class="color-masking">
            <div class="masking-src" data-mask-src="assets/img/shape/star-shape1.png"></div>
            <img src="assets/img/shape/star-shape1.png" alt="img">
        </div>
    </div>
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title fadeinup wow" data-wow-duration="1.2s" data-wow-delay="0.1s">ALL EVENTS</span>
            <h2 class="sec-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">Upcoming more special events</h2>
        </div>
        <div class="event-card-wrap">
            <?php get_section('event-v1');?>
        </div>
    </div>
</section>