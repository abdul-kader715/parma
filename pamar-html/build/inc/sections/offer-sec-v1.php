<!--==============================
offer Area  
==============================-->
<section class="<?php echo $klass;?>">
    <div class="offer-wrap1 overflow-hidden" >
        <div class="container">
            <div class="row gx-70 gy-40 align-items-center">
                <div class="col-xxl-4 order-xxl-1 order-2">
                   <div class="offer-img">
                        <img class="img1" src="assets/img/normal/offer-thumb3-1.jpg" alt="offer">
                        <img class="img2" src="assets/img/normal/offer-1.png" alt="offer">
                   </div>
                </div>
                <div class="col-xxl-8 order-xxl-2 order-1">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-6">
                            <div class="title-area text-left">
                                <span class="sub-title2 style2 border-black-color8" data-cue="slideInUp">What We Offer</span>
                                <h2 class="sec-title style5 text-anim2 " data-cue="slideInUp">
                                    Here’s What We Can Do for You
                                </h2>
                            </div>
                        </div>
                        <div class="col-xl-auto">
                            <a href="contact.html" class="th-btn style12">Visit Us</a>
                        </div>
                    </div>
                    <div class="row gy-30">
                         <?php
                            $title = array(
                                'Quality Work, Every Time',
                                'Upfront Pricing',
                            );
                            $img = array(
                                'assets/img/offer/offer-1-1.jpg',
                                'assets/img/offer/offer-1-2.jpg',
                            );
                            $text = array(
                                'Customized online solutions that strategically
                                 position your practice ahead of the competition, ensuring long-term success.',
                                 'Customized online solutions that strategically
                                 position your practice ahead of the competition, ensuring long-term success.',
                            );
                        
                            $arrlength = count($title);

                            for($x = 0; $x < $arrlength; $x++) {
                            ?>
                            <div class="col-lg-6">
                                <div class="offer-card" data-cue="slideInUp">
                                        <div class="box-thumb">
                                            <img src="<?php echo $img[$x];?>" alt="img">
                                        </div>
                                        <div class="box-content">
                                            <h3 class="box-title"><?php echo $title[$x];?></h3>
                                            <p class="box-text"><?php echo $text[$x];?></p>
                                        </div>
                                </div>
                            </div>
                         <?php }; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup d-none d-xxl-block " style="bottom: 0%; right:0%">
        <img src="assets/img/normal/offer-thumb1-1.png" alt="shape">
    </div>
</section>