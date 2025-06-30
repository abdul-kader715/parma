<?php
    $title = array(
        'Financial Advisory',
        'Global Market Navigation',
        'Supply Chain Optimization',
        'Financial Advisory',
        'Global Market Navigation',
        'Supply Chain Optimization',
    );
    $img = array(
        'assets/img/service/service_card_6_1.png',
        'assets/img/service/service_card_6_2.png',
        'assets/img/service/service_card_6_3.png',
        'assets/img/service/service_card_6_1.png',
        'assets/img/service/service_card_6_2.png',
        'assets/img/service/service_card_6_3.png',
    );
    $icon = array(
        'assets/img/icon/service_card_6-1.svg',
        'assets/img/icon/service_card_6-2.svg',
        'assets/img/icon/service_card_6-3.svg',
        'assets/img/icon/service_card_6-1.svg',
        'assets/img/icon/service_card_6-2.svg',
        'assets/img/icon/service_card_6-3.svg',
    );
    $text = array(
        'Expert financial planning to secure a stable and prosperous future.',
        'Navigate the complexities of the global market with confidence.',
        'Implement sustainable and resilient supply chain strategies.',
        'Expert financial planning to secure a stable and prosperous future.',
        'Navigate the complexities of the global market with confidence.',
        'Implement sustainable and resilient supply chain strategies.',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>  
        <div class="<?php echo $klass;?>">
            <div class="service-card6">
                <div class="service-card-thumb">
                    <img src="<?php echo $img[$x];?>" alt="thumb">
                    <div class="service-card-icon">
                        <img src="<?php echo $icon[$x];?>" alt="icon">
                    </div>
                </div>
                <div class="box-content">
                    <h3 class="box-title"><a href="about.html"><?php echo $title[$x];?></a></h3>
                    <div class="btn-wrap">
                        <p class="box-text"><?php echo $text[$x];?></p>
                        <a href="about.html" class="link-btn style2"><i class="fas fa-plus-circle me-1"></i>Read More</a>
                    </div>
                </div>
            </div>
        </div>
    <?php }; 
?>
