<?php
    $title = array(
        'Healthy Foods',
        'Educations',
        'Medical Help',
    );
    $icon = array(
        'assets/img/icon/service-icon/service-card-icon1-1.svg',
        'assets/img/icon/service-icon/service-card-icon1-2.svg',
        'assets/img/icon/service-icon/service-card-icon1-3.svg',
    );
    $img = array(
        'assets/img/service/service_card_1_1.png',
        'assets/img/service/service_card_1_2.png',
        'assets/img/service/service_card_1_3.png',
    );
    $text = array(
        'Share stories and experiences from current volunteers to inspire others to join. Allow user to sign up for volunteer opportunities.',
        'Explore our charity website to discover impactful projects, opportunities, and ways to pamare, helping those in need thrive.',
        'Join us in making a difference! Our charity website connects you with volunteer, pamarion options, and inspiring stories.',       
    ); 
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="service-card style2">
                <div class="box-thumb">
                    <img src="<?php echo $img[$x];?>" alt="img">
                </div>
                <div class="box-icon">
                    <img src="<?php echo $icon[$x];?>" alt="Icon">
                </div>
                <div class="box-content">
                    <h3 class="box-title"><a href="about.html"><?php echo $title[$x];?></a></h3>
                    <p class="box-text"><?php echo $text[$x];?></p>
                    <a href="about.html" class="th-btn">Learn More<i class="fas fa-arrow-up-right ms-2"></i></a>
                </div>
            </div>
        </div>
    <?php if($x == $y) {
        break;
    } }; 
?>