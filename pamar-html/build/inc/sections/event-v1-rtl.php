<?php
    $title = array(
        'الجمعيات الخيرية العاملة في قضايا ذات تأثير كبير
        ',
        'الجمعيات الخيرية العاملة في قضايا ذات تأثير كبير
        ',
        'الجمعيات الخيرية العاملة في قضايا ذات تأثير كبير
        ',
        'الجمعيات الخيرية العاملة في قضايا ذات تأثير كبير
        ',
        'الجمعيات الخيرية العاملة في قضايا ذات تأثير كبير
        ',
    );
    
    $img = array(
        'assets/img/event/event1-1.png',
        'assets/img/event/event1-2.png',
        'assets/img/event/event1-3.png',
        'assets/img/event/event1-4.png',
        'assets/img/event/event1-5.png',
    );
    $img2 = array(
        'assets/img/event/event1-1-hover.png',
        'assets/img/event/event1-2-hover.png',
        'assets/img/event/event1-3-hover.png',
        'assets/img/event/event1-4-hover.png',
        'assets/img/event/event1-5-hover.png',
    );

    $time = array(
        '8:30  am',
        '9:30  am',
        '10:30  am',
        '11:00  am',
        '12:00  am',
    );
    $location = array(
        'المدينة الإفريقية الفقيرة
        ',
        'المدينة الإفريقية الفقيرة
        ',
        'المدينة الإفريقية الفقيرة
        ',
        'المدينة الإفريقية الفقيرة
        ',
        'المدينة الإفريقية الفقيرة
        ',
    );
    $date = array(
        '17 Aug',
        '24 Sep',
        '24 Oct',
        '15 Nov',
        '19 Dec',
    );

    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="event-card">
            <div class="event-card_img" data-mask-src="assets/img/event/event_card1_1-mask.png">
                <img src="<?php echo $img[$x];?>" alt="event">
            </div>
            <div class="event-card-hover-wrap">
                <div class="event-card-hover_img" data-mask-src="assets/img/event/event_card1_2-mask.png">
                    <img src="<?php echo $img2[$x];?>" alt="event">
                    <div class="event-card-date"><?php echo $date[$x];?> <?php echo date("Y"); ?></div>
                </div>
                <div class="event-card-content">
                    <div class="event-card-meta">
                        <span class="event-card_location"><i class="far fa-map-marker-alt"></i><?php echo $location[$x];?></span>
                        <span class="event-card_time"><i class="far fa-clock"></i><?php echo $time[$x];?></span>
                    </div>
                    <h3 class="event-card_title"><a href="event-details.html"><?php echo $title[$x];?></a></h3>
                    <a href="event-details.html" class="link-btn"><i class="fas fa-arrow-up-right ms-2"></i>تبرع الآن
                    </a>
                </div>
            </div>
        </div>

    <?php if($x == $y) {
        break;
    } }; 
?>