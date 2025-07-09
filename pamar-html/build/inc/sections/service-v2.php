<?php
    $title = array(
        'Emergency Services',
        'Pipe Repair',
        'Drain Cleaning',
    );
    $img = array(
        'assets/img/service/service_card_2_1.jpg',
        'assets/img/service/service_card_2_2.jpg',
        'assets/img/service/service_card_2_3.jpg',
    );
    $icon = array(
        'assets/img/icon/service/service_icon_2_1.svg',
        'assets/img/icon/service/service_icon_2_2.svg',
        'assets/img/icon/service/service_icon_2_3.svg',
    );
    $text = array(
        'All our plumbers are licensed, insured, background-checked, and customer-rated. .',
        'All our plumbers are licensed, insured, background-checked, and customer-rated. ',
        'All our plumbers are licensed, insured, background-checked, and customer-rated. ',
    );

 
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="service-card2 " data-cue="slideInUp">
            <div class="box-img">
                <img src="<?php echo $img[$x];?>" alt="img">
            </div>
            <div class="box-content">
                <div class="box-icon ">
                    <img src="<?php echo $icon[$x];?>" alt="img">
                </div>
                <h3 class="box-title"><a href="service.html"><?php echo $title[$x];?></a></h3>
                <p class="box-text"><?php echo $text[$x];?></p>
                <a href="service-details.html" class="link-btn style9">
                    View Details
                </a>
            </div>
            
        </div>
    <?php }; 
?>