<?php 
    $title = array(
        'Basic
         Package',
        'Standard
         Package',
        'Premium
         Package',
    );
    $subtitle = array(
        '',
        'Popular',
        '',
    );
     $image = array(
        'assets/img/price/price_1_1.jpg',
        'assets/img/price/price_1_2.jpg',
        'assets/img/price/price_1_3.jpg',
        
    );
    $price = array(
        '$290',
        '$390',
        '$490',
    );
    $duration = array(
        '/month',
        '/month',
        '/month',
    );

    $list = array(
        '
        <li><img src="assets/img/icon/check-icon1-3.svg" alt="img"> 10% Off On All Services</li>
        <li><img src="assets/img/icon/check-icon1-3.svg" alt="img"> Priority Scheduling</li>
        <li><img src="assets/img/icon/check-icon1-3.svg" alt="img"> Maintained Equipment</li>
        <li><img src="assets/img/icon/check-icon1-3.svg" alt="img"> Trusted, certified technicians</li>
        <li><img src="assets/img/icon/check-icon1-3.svg" alt="img"> 1 Annual Plumbing Inspection</li>
        ',

        '
        <li><img src="assets/img/icon/check-icon1-3.svg" alt="img"> 10% Off On All Services</li>
        <li><img src="assets/img/icon/check-icon1-3.svg" alt="img"> Priority Scheduling</li>
        <li><img src="assets/img/icon/check-icon1-3.svg" alt="img"> Maintained Equipment</li>
        <li><img src="assets/img/icon/check-icon1-3.svg" alt="img"> Trusted, certified technicians</li>
        <li><img src="assets/img/icon/check-icon1-3.svg" alt="img"> 1 Annual Plumbing Inspection</li>
        ',
        '
        <li><img src="assets/img/icon/check-icon1-3.svg" alt="img"> 10% Off On All Services</li>
        <li><img src="assets/img/icon/check-icon1-3.svg" alt="img"> Priority Scheduling</li>
        <li><img src="assets/img/icon/check-icon1-3.svg" alt="img"> Maintained Equipment</li>
        <li><img src="assets/img/icon/check-icon1-3.svg" alt="img"> Trusted, certified technicians</li>
        <li><img src="assets/img/icon/check-icon1-3.svg" alt="img"> 1 Annual Plumbing Inspection</li>
        ',

     
    );
    
    $arrlength = count($title);
    for($x = 0; $x < $arrlength; $x++) { ?>

        <div class="<?php echo $klass;?>" data-cue="slideInUp">
            <div class="price-card">
               <div class="box-top">
                  <div class="box-content">
                     <h3 class="box-title"><?php echo $title[$x];?></h3>
                     <p class="box-subtitle"><?php echo $subtitle[$x];?></p>
                  </div>
                     <div class="box-image">
                        <img src="<?php echo $image[$x];?>" alt="price">
                     </div>
               </div>
                <div class="price_card-wrap">
                    <h4 class="price-card_price"><?php echo $price[$x];?><span class="duration"><?php echo $duration[$x];?></span>
                    </h4>
                     <div class="checklist">
                        <ul>
                              <?php echo $list[$x];?>
                        </ul>
                     </div>
                     <div class="btn-wrap">
                        <a href="contact.html" class="link-btn style5">
                           <span>Choose Package</span>
                           <div class="icon"><img src="assets/img/icon/arrow-right-white.svg" alt="">
                           </div>
                        </a>
                     </div>
               </div>    
            </div>
        </div>
    <?php }
?>
