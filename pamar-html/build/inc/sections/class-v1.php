<?php
    $title = array(
        'Fitness & Gym Class',
        'Personal Training',
        'Boxing Class',
        'Fitness & Gym Class',
        'Personal Training',
        'Boxing Class',
    );
    $img = array(
        'assets/img/class/class_1_1.png',
        'assets/img/class/class_1_2.png',
        'assets/img/class/class_1_3.png',
        'assets/img/class/class_1_1.png',
        'assets/img/class/class_1_2.png',
        'assets/img/class/class_1_3.png',
    );
    $text = array(
        "Before starting a new fitness regimen, it's advisable to consult with healthcare.",
        "Before starting a new fitness regimen, it's advisable to consult with healthcare.",
        "Before starting a new fitness regimen, it's advisable to consult with healthcare.",
        "Before starting a new fitness regimen, it's advisable to consult with healthcare.",
        "Before starting a new fitness regimen, it's advisable to consult with healthcare.",
        "Before starting a new fitness regimen, it's advisable to consult with healthcare.",
    ); 
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="swiper-slide">
            <div class="class-card">
                <div class="class-card_img">
                    <img src="<?php echo $img[$x];?>" alt="Image">
                </div>
                <div class="class-card_content">
                    <h3 class="box-title"><a href="class-details.html"><?php echo $title[$x];?></a></h3>
                    <p class="class-card_text"><?php echo $text[$x];?></p>
                    <div class="btn-wrap">
                        <a href="class-details.html" class="icon-btn"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
    <?php if($x == $y) {
        break;
    } }; 
?>