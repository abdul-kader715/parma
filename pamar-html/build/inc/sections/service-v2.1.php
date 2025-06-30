<?php
    $title = array(
        'Project Management',
        'Process Development',
        'Human Resources',
        'Quality Assurance',
        'Compliance',
        'Business Planning',
        'Solicitory',
        'Startups Strategy',
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
        'assets/img/icon/service-icon/service-icon6-1.svg',
        'assets/img/icon/service-icon/service-icon6-2.svg',
        'assets/img/icon/service-icon/service-icon6-3.svg',
        'assets/img/icon/service-icon/service-icon6-4.svg',
        'assets/img/icon/service-icon/service-icon6-5.svg',
        'assets/img/icon/service-icon/service-icon6-6.svg',
        'assets/img/icon/service-icon/service-icon6-7.svg',
        'assets/img/icon/service-icon/service-icon6-8.svg',
    );
    $text = array(
        'Our digital transformation consulting services guide you through the process of leveraging technology to your business.',
        'Through a combination of strategic coaching, skill-building workshops, and personalized development plans.',
        'We invite effective members who can think strategies to our best clients. Discuss your retail business consultant.',
        'We work closely with your leadership team to identify inefficiencies, streamline process, and strategic initiatives.',        
        'Through a combination of strategic coaching, skill-building workshops, and personalized development plans.',
        'Our digital transformation consulting services guide you through the process of leveraging technology to your business.',    
        'We work closely with your leadership team to identify inefficiencies, streamline process, and strategic initiatives.',  
        'We invite effective members who can think strategies to our best clients. Discuss your retail business consultant.',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="service-card2 style2">
                <div class="box-img">
                    <img src="<?php echo $img[$x];?>" alt="img">
                </div>
                <div class="box-content">
                    <div class="box-icon">
                        <img src="<?php echo $icon[$x];?>" alt="Icon">
                    </div>
                    <h3 class="box-title"><a href="service.html"><?php echo $title[$x];?></a></h3>
                    <p class="box-text"><?php echo $text[$x];?></p>
                    <a href="service-details.html" class="th-btn style8 btn-sm btn-radius-0">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    <?php }; 
?>