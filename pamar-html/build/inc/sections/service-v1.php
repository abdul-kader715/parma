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
        'assets/img/icon/service/service_icon_1_1.svg',
        'assets/img/icon/service/service_icon_1_2.svg',
        'assets/img/icon/service/service_icon_1_3.svg',
    ); 
     $img = array(
        'assets/img/service/service_card_1_1.jpg',
        'assets/img/service/service_card_1_1.jpg',
        'assets/img/service/service_card_1_1.jpg',
        'assets/img/service/service_card_1_1.jpg',
        'assets/img/service/service_card_1_1.jpg',
        'assets/img/service/service_card_1_1.jpg',
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
                        <div class="masking-src" data-mask-src="<?php echo $img[$x];?>"></div>
                        <img src="<?php echo $icon[$x];?>" alt="icon">
                    </div>
                </div>
                <a href="service.html" class="circle-tag">
                  <span class="circle-title-anime">READ MORE . READ MORE .</span>
                  <div class="icon">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
                        <path d="M15.8632 5.63564L11.0635 0.181091C10.9611 0.0654544 10.8182 0 10.6667 0H7.46689C7.25677 0 7.06584 0.126545 6.97945 0.322909C6.89412 0.520364 6.92932 0.750545 7.07011 0.909818L11.5488 6L7.07011 11.0891C6.92932 11.2495 6.89305 11.4796 6.97945 11.676C7.06584 11.8735 7.25677 12 7.46689 12H10.6667C10.8182 12 10.9611 11.9335 11.0635 11.82L15.8632 6.36545C16.0456 6.15818 16.0456 5.84182 15.8632 5.63564Z" fill="#0052DA"/>
                        <path d="M8.93023 5.63564L4.1305 0.181091C4.02811 0.0654544 3.88518 0 3.73372 0H0.533903C0.323782 0 0.132859 0.126545 0.0464638 0.322909C-0.0388647 0.520364 -0.0036667 0.750545 0.137125 0.909818L4.61581 6L0.137125 11.0891C-0.0036667 11.2495 -0.0399313 11.4796 0.0464638 11.676C0.132859 11.8735 0.323782 12 0.533903 12H3.73372C3.88518 12 4.02811 11.9335 4.1305 11.82L8.93023 6.36545C9.11262 6.15818 9.11262 5.84182 8.93023 5.63564Z" fill="#0052DA"/>
                        </svg>
                   </div>
               </a>
               </div>
                <h3 class="box-title"><a href="service.html"><?php echo $title[$x];?></a></h3>
                <p class="box-text"><?php echo $text[$x];?></p>
            </div>
            <div class="service-card style">
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
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
                        <path d="M15.8632 5.63564L11.0635 0.181091C10.9611 0.0654544 10.8182 0 10.6667 0H7.46689C7.25677 0 7.06584 0.126545 6.97945 0.322909C6.89412 0.520364 6.92932 0.750545 7.07011 0.909818L11.5488 6L7.07011 11.0891C6.92932 11.2495 6.89305 11.4796 6.97945 11.676C7.06584 11.8735 7.25677 12 7.46689 12H10.6667C10.8182 12 10.9611 11.9335 11.0635 11.82L15.8632 6.36545C16.0456 6.15818 16.0456 5.84182 15.8632 5.63564Z" fill="#0052DA"/>
                        <path d="M8.93023 5.63564L4.1305 0.181091C4.02811 0.0654544 3.88518 0 3.73372 0H0.533903C0.323782 0 0.132859 0.126545 0.0464638 0.322909C-0.0388647 0.520364 -0.0036667 0.750545 0.137125 0.909818L4.61581 6L0.137125 11.0891C-0.0036667 11.2495 -0.0399313 11.4796 0.0464638 11.676C0.132859 11.8735 0.323782 12 0.533903 12H3.73372C3.88518 12 4.02811 11.9335 4.1305 11.82L8.93023 6.36545C9.11262 6.15818 9.11262 5.84182 8.93023 5.63564Z" fill="#0052DA"/>
                        </svg>
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