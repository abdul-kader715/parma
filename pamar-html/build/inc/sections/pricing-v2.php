<?php 
    $titleMonth = array(
        'Starter Package',
        'Residential Package',
        'Business Package',
    ); 
    $subtitleMonth = array(
        'Starter Package',
        'Residential Package',
        'Business Package',
    );
    $priceMonth = array(
        '$245',
        '$375',
        '$535',
    );
    $durationMonth = array(
        '/Per Package',
        '/Per Package',
        '/Per Package',
    );
     $pricebgimg = array(
        'assets/img/price/price-thumb2-1.jpg',
        'assets/img/price/price-thumb2-2.jpg',
        'assets/img/price/price-thumb2-3.jpg',
    );
   //  $active = array(
   //      '',
   //      'active',
   //      '',
   //      '',
   //  );
    $textMonth = array(
        'PLUMBING FOR PERSONAL',
        'PLUMBING FOR PERSONAL',
        'PLUMBING FOR PERSONAL',
    );
    $listMonth = array(
        '<li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Free Consultation</li>
        <li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Basic Repair & Adjustments</li>
        <li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Standard Documention</li>
        <li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Minor Leaking in Pipe</li>
        <li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Quality Services on Completed Work</li>
        <li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Comprehensive Home Inspection</li>
        <li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Emergency Plumbing Services</li>
        <li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Systematic Preventive Maintenance</li>
        <li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Expert Installation of New Fixtures</li>
        ',

       '<li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Free Consultation</li>
        <li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Basic Repair & Adjustments</li>
        <li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Standard Documention</li>
        <li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Minor Leaking in Pipe</li>
        <li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Quality Services on Completed Work</li>
        <li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Comprehensive Home Inspection</li>
        <li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Emergency Plumbing Services</li>
        <li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Systematic Preventive Maintenance</li>
        <li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Expert Installation of New Fixtures</li>
        ',

        '<li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Free Consultation</li>
        <li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Basic Repair & Adjustments</li>
        <li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Standard Documention</li>
        <li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Minor Leaking in Pipe</li>
        <li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Quality Services on Completed Work</li>
        <li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Comprehensive Home Inspection</li>
        <li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Emergency Plumbing Services</li>
        <li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Systematic Preventive Maintenance</li>
        <li><img src="assets/img/icon/check-icon1-4.svg" alt="img"> Expert Installation of New Fixtures</li>
        ',

    );

    $arrlength = count($titleMonth);
    for($x = 0; $x < $arrlength; $x++) { ?>

        <div class="<?php echo $klass;?>" data-cue="slideInUp">
            <div class="price-card style2">
               <div class="box-top overflow-hidden position-relative z-index-2 background-image" 
               data-bg-src="<?php echo $pricebgimg[$x];?>">
                  <div class="box-content">
                     <h3 class="box-title text-white mb-0"><?php echo $titleMonth[$x];?></h3>
                     <p class="box-subtitle text-white"><?php echo $subtitleMonth[$x];?></p>
                  </div>
               </div>
               <h4 class="price-card_price"><?php echo $priceMonth[$x];?><span class="duration"><?php echo $durationMonth[$x];?></span>
                    </h4>
               <div class="price_card-wrap">
                  <div class="checklist">
                     <ul>
                           <?php echo $listMonth[$x];?>
                     </ul>
                  </div>
                  <div class="btn-wrap">
                    
                    <a href="contact.html" class="link-btn3">Choose Plan</a>
                </div>
               </div>
            </div>
        </div>
    <?php }
?>
