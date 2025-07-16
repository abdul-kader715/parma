<?php
    $title = array(
        'General Plumbing Repairs',
        'Drain Cleaning Services',
        'Bathroom & Kitchen Plumbing',
        'Water Heater Installation',
        'Pipe Repair & Replacement',
        'Gas Line Repair & Plumbing',
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
        'assets/img/service/service_card_1_01.jpg',
        'assets/img/service/service_card_1_2.jpg',
        'assets/img/service/service_card_1_3.jpg',
        'assets/img/service/service_card_1_4.jpg',
        'assets/img/service/service_card_1_5.jpg',
        'assets/img/service/service_card_1_6.jpg',
    ); 
    $text = array(
       'From leaky faucets to running toilets, we handle all types of plumbing repairs.',
       'From leaky faucets to running toilets, we handle all types of plumbing repairs.',
       'From leaky faucets to running toilets, we handle all types of plumbing repairs.',
       'From leaky faucets to running toilets, we handle all types of plumbing repairs.',
       'From leaky faucets to running toilets, we handle all types of plumbing repairs.',
       'From leaky faucets to running toilets, we handle all types of plumbing repairs.',
    ); 
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>" data-cue="slideInUp">
            <div class="service-card style2">
               <div class="d-flex justify-content-between">
                  <div class="box-icon">
                    <div class="color-masking">
                        <div class="masking-src" data-mask-src="<?php echo $img[$x];?>"></div>
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