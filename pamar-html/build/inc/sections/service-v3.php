<?php
    $title = array(
        'Leak Detection & Repair',
        'Pipe Installation',
        'Water Heater Services',
        'Water Line Repair',
        'Leak Detection & Repair',
        'Pipe Installation',
        'Water Heater Services',
        'Water Line Repair',
    );
    $img = array(
        'assets/img/service/service_card_3_1.jpg',
        'assets/img/service/service_card_3_2.jpg',
        'assets/img/service/service_card_3_3.jpg',
        'assets/img/service/service_card_3_4.jpg',
        'assets/img/service/service_card_3_1.jpg',
        'assets/img/service/service_card_3_2.jpg',
        'assets/img/service/service_card_3_3.jpg',
        'assets/img/service/service_card_3_4.jpg',
    );
    $icon = array(
        'assets/img/icon/service/service_icon_3_1.svg',
        'assets/img/icon/service/service_icon_3_2.svg',
        'assets/img/icon/service/service_icon_3_3.svg',
        'assets/img/icon/service/service_icon_3_4.svg',
        'assets/img/icon/service/service_icon_3_1.svg',
        'assets/img/icon/service/service_icon_3_2.svg',
        'assets/img/icon/service/service_icon_3_3.svg',
        'assets/img/icon/service/service_icon_3_4.svg',
    );
    $text = array(
        'Water leaks can silently damage your walls, floors, and foundation leading to costly.',
        'Water leaks can silently damage your walls, floors, and foundation leading to costly.',
        'Water leaks can silently damage your walls, floors, and foundation leading to costly.',
        'Water leaks can silently damage your walls, floors, and foundation leading to costly.',
        'Water leaks can silently damage your walls, floors, and foundation leading to costly.',
        'Water leaks can silently damage your walls, floors, and foundation leading to costly.',
        'Water leaks can silently damage your walls, floors, and foundation leading to costly.',
        'Water leaks can silently damage your walls, floors, and foundation leading to costly.',

    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="service-card3">
                <div class="box-thumb" >
                    <img src="<?php echo $img[$x];?>" alt="img">
                    <div class="box-icon">
                        <img src="<?php echo $icon[$x];?>" alt="Icon">
                    </div>
                </div>
                <div class="box-content">
                    <h3 class="box-title"><a href="service.html"><?php echo $title[$x];?></a></h3>
                    <p class="box-text"><?php echo $text[$x];?></p>
                    <a class="th-btn style12" href="service-details.html">get a Quote</a>
                </div>
            </div>
        </div>
    <?php }; 
?>