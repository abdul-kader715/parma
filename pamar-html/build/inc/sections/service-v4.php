<?php
    $title = array(
        'Strategic Growth Consulting Solutions',
        'Innovation and Transformation Consulting',
        'Leadership and Development Coaching',
        'Supply Chain Efficiency Solutions',
        'Strategic Growth Consulting Solutions',
        'Innovation and Transformation Consulting',
        'Leadership and Development Coaching',
        'Supply Chain Efficiency Solutions',
    );
    $num = array(
        '01',
        '02',
        '03',
        '04',
        '01',
        '02',
        '03',
        '04',
    );
    $img = array(
        'assets/img/service/service_card_2_1.png',
        'assets/img/service/service_card_2_2.png',
        'assets/img/service/service_card_2_3.png',
        'assets/img/service/service_card_2_4.png',
        'assets/img/service/service_card_2_5.png',
        'assets/img/service/service_card_2_6.png',
        'assets/img/service/service_card_2_7.png',
        'assets/img/service/service_card_2_8.png',
    );
    $icon = array(
        'assets/img/icon/service-icon/service-icon4-1.svg',
        'assets/img/icon/service-icon/service-icon4-2.svg',
        'assets/img/icon/service-icon/service-icon4-3.svg',
        'assets/img/icon/service-icon/service-icon4-4.svg',
        'assets/img/icon/service-icon/service-icon4-1.svg',
        'assets/img/icon/service-icon/service-icon4-2.svg',
        'assets/img/icon/service-icon/service-icon4-3.svg',
        'assets/img/icon/service-icon/service-icon4-4.svg',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="service-card4">
                <div class="box-img">
                    <img src="<?php echo $img[$x];?>" alt="img">
                </div>
                <div class="box-content">
                    <div class="box-icon">
                        <img src="<?php echo $icon[$x];?>" alt="Icon">
                    </div>
                    <div class="box-number"><?php echo $num[$x];?></div>
                    <h3 class="box-title"><a href="service.html"><?php echo $title[$x];?></a></h3>
                    <p class="box-text">Through a combination of strategic coaching, skill-building workshops, and personalized development plans, we empower leaders to navigate challenges, inspire their teams, and achieve organizational goals.</p>
                    <a href="service-details.html" class="th-btn style-border4 btn-sm btn-radius-8">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>

    <?php }; 
?>