<?php
    $title = array(
        'General Plumbing Repairs',
        'Drain Cleaning Services',
        'Bathroom & Kitchen Plumbing',
        'General Plumbing Repairs',
        'Drain Cleaning Services',
        'Bathroom & Kitchen Plumbing',
    );
    $icon = array(
        'assets/img/icon/service/service_icon_1_1.svg',
        'assets/img/icon/service/service_icon_1_2.svg',
        'assets/img/icon/service/service_icon_1_3.svg',
        'assets/img/icon/service/service_icon_1_4.svg',
        'assets/img/icon/service/service_icon_1_5.svg',
        'assets/img/icon/service/service_icon_1_6.svg',
    ); 
     $img = array(
       'assets/img/service/service_card_4_1.jpg',
        'assets/img/service/service_card_4_2.jpg',
        'assets/img/service/service_card_4_3.jpg',
        'assets/img/service/service_card_4_4.jpg',
        'assets/img/service/service_card_4_5.jpg',
        'assets/img/service/service_card_4_6.jpg',
    ); 
    $text = array(
        'From leaky faucets to running toilets, we handle all types of plumbing repairs to keep your home or business running smoothly.',
        'Clogged sinks, showers, or toilets? We provide fast and effective drain cleaning using the latest tools and techniques.',
        'Installation and repair of faucets, sinks, showers, bathtubs, dishwashers & garbage disposals for residential and commercial properties.',
        'From leaky faucets to running toilets, we handle all types of plumbing repairs to keep your home or business running smoothly.',
        'Clogged sinks, showers, or toilets? We provide fast and effective drain cleaning using the latest tools and techniques.',
        'Installation and repair of faucets, sinks, showers, bathtubs, dishwashers & garbage disposals for residential and commercial properties.',
       
    ); 
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>" >
            <div class="service-card">
               <div class="d-flex justify-content-between">
                  <div class="box-icon">
                    <div class="color-masking">
                        <img src="<?php echo $icon[$x];?>" alt="icon">
                    </div>
                </div>
                <a href="service.html" class="circle-tag">
                  <span class="circle-title-anime">READ MORE . READ MORE .</span>
                  <div class="icon">
                     <img src="assets/img/icon/right-arrow-theme1.svg" alt="">
                   </div>
               </a>
               </div>
                <h3 class="box-title"><a href="service.html"><?php echo $title[$x];?></a></h3>
                <p class="box-text"><?php echo $text[$x];?></p>
            </div>
            <div class="service-card style1">
               <div class="d-flex justify-content-between">
                  <div class="box-icon">
                    <div class="color-masking">
                        <img src="<?php echo $icon[$x];?>" alt="icon">
                    </div>
                </div>
                <a href="service.html" class="circle-tag">
                  <span class="circle-title-anime">READ MORE . READ MORE .</span>
                  <div class="icon">
                     <img src="assets/img/icon/right-arrow-theme1.svg" alt="">
                   </div>
               </a>
               </div>
                <h3 class="box-title"><a href="service.html"><?php echo $title[$x];?></a></h3>
                <p class="box-text"><?php echo $text[$x];?></p>
                <div class="box-img">
                  <img src="<?php echo $img[$x];?>" alt="image">
                </div>
            </div>
        </div>
    <?php if($x == $y) {
        break;
    } }; 
?>