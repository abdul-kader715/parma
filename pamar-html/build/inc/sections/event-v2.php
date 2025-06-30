<?php
    $title = array(
        'Receptions',
        'Ceremony',
        'Events',
        'Engagement',
    );
    
    $img = array(
        'assets/img/event/event_2_1.jpg',
        'assets/img/event/event_2_2.jpg',
        'assets/img/event/event_2_3.jpg',
        'assets/img/event/event_2_4.jpg',
    );
    $meta1 = array(
        'Wednesday, 10 August, 2023',
        'Thursday, 11 August, 2023',
        'Friday, 12 August, 2023',
        'Tuesday, 22 July, 2023',
    );
    $meta2 = array(
        '1:00 PM – 4:30 PM',
        '2:00 PM – 4:30 PM',
        '3:00 PM – 11:30 PM',
        '1:00 PM – 4:30 PM',
    );

    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="col-lg-4 col-md-6">
            <div class="event-box">
                <div class="event-box_img">
                    <img src="<?php echo $img[$x];?>" alt="event">
                </div>
                <span class="event-box_subtitle">PACKAGES</span>
                <h3 class="event-box_title box-title"><a href="event-details.html"><?php echo $title[$x];?></a></h3>
                <a href="event-details.html" class="icon-btn"><i class="far fa-long-arrow-right"></i></a>
            </div>
        </div>

    <?php if($x == $y) {
        break;
    } }; 
?>