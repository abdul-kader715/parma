<?php
    $title = array(
        'High Conference rooms',
        'International AI summit',
        'Apple Introducing new iOS',
        'High Conference rooms',
    );
    
    $img = array(
        'assets/img/event/1-1.png',
        'assets/img/event/1-2.png',
        'assets/img/event/1-3.png',
        'assets/img/event/1-4.png',
    );
    $time = array(
        '8:30 AM',
        '9:30 AM',
        '10:30 AM',
        '11:30 AM',
    );
    $location = array(
        'New York City',
        'New York City',
        'New York City',
        'New York City',
    );
    $speaker = array(
        'Dheraz Zaman',
        'Christina Eva',
        'Dheraz Zaman',
        'Christina Eva',
    );
    $date = array(
        '15 Jan',
        '24 Mar',
        '05 May',
        '12 Jun',
    );

    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="event-card">
            <div class="event-card-img">
                <img src="<?php echo $img[$x];?>" alt="event">
            </div>
            <div class="event-title-wrap">
                <h3 class="event-card-title"><a href="blog-details.html"><?php echo $title[$x];?></a></h3>
                <div class="event-card-date"><?php echo $date[$x];?>, <?php echo date("Y"); ?></div>
            </div>
            <div class="event-speaker-wrap">
                <h4 class="event-card-speaker"><?php echo $speaker[$x];?></h4>
                <div class="event-card-time"><?php echo $time[$x];?></div>
            </div>
            <div class="event-location-wrap">
                <h4 class="event-card-location"><?php echo $location[$x];?></h4>
                <div class="event-card-location-tag">Location</div>
            </div>
            <div class="btn-wrap">
                <a class="th-btn style-border btn-sm px-30" href="blog-details.html">Explore More <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </div>

    <?php if($x == $y) {
        break;
    } }; 
?>