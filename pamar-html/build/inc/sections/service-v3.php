<?php
    $title = array(
        'Machine Learning Solutions',
        'Custom AI Software Development',
        'Data Analytics and Insights',
        'Machine Learning Solutions',
        'Custom AI Software Development',
        'Data Analytics and Insights',
    );
    $img = array(
        'assets/img/service/service_card_3_1.jpg',
        'assets/img/service/service_card_3_2.jpg',
        'assets/img/service/service_card_3_3.jpg',
        'assets/img/service/service_card_3_1.jpg',
        'assets/img/service/service_card_3_2.jpg',
        'assets/img/service/service_card_3_3.jpg',
    );
    $text = array(
        'AI technology services aim to provide intelligent solutions that help businesses improve efficiency, make better decisions.',
        'AI technology services aim to provide intelligent solutions that help businesses improve efficiency, make better decisions.',
        'AI technology services aim to provide intelligent solutions that help businesses improve efficiency, make better decisions.',
        'AI technology services aim to provide intelligent solutions that help businesses improve efficiency, make better decisions.',
        'AI technology services aim to provide intelligent solutions that help businesses improve efficiency, make better decisions.',
        'AI technology services aim to provide intelligent solutions that help businesses improve efficiency, make better decisions.',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="service-card3" data-mask-src="assets/img/shape/service-card3-shape.png">
                <div class="service-card-bg-shape">
                    <img src="assets/img/shape/service-card3-thumb-shape2.png" alt="img">
                </div>
                <div class="box-thumb" data-mask-src="assets/img/shape/service-card3-thumb-shape.png">
                    <img src="<?php echo $img[$x];?>" alt="Icon">
                </div>
                <div class="box-content">
                    <h3 class="box-title"><a href="service.html"><?php echo $title[$x];?></a></h3>
                    <p class="box-text"><?php echo $text[$x];?></p>
                    <a class="icon-btn style4" href="service-details.html"><i class="fal fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    <?php }; 
?>