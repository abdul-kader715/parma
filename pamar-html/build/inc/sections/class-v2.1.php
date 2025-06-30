<?php
    $title = array(
        'Yoga & Pilates',
        'Fitness & Gym',
        'Personal Training',
        'Boxing Class',
        'CrossFit Training',
        'Psycho Training',
        'Strength Training',
        'Advance GYM',
        'Self Defence',
    );
    $img = array(
        'assets/img/class/class_2_1.png',
        'assets/img/class/class_2_2.png',
        'assets/img/class/class_2_3.png',
        'assets/img/class/class_2_4.png',
        'assets/img/class/class_2_5.png',
        'assets/img/class/class_2_6.png',
        'assets/img/class/class_2_7.png',
        'assets/img/class/class_2_8.png',
        'assets/img/class/class_2_9.png',
    );
    $text = array(
        "Before starting a new fitness regimen, it's advisable to consult with healthcare.",
        "Before starting a new fitness regimen, it's advisable to consult with healthcare.",
        "Before starting a new fitness regimen, it's advisable to consult with healthcare.",
        "Before starting a new fitness regimen, it's advisable to consult with healthcare.",
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
        <div class="<?php echo $klass;?>">
            <div class="class-card2">
                <div class="class-card_img">
                    <img src="<?php echo $img[$x];?>" alt="Image">
                </div>
                <div class="class-card_hover-content">
                    <h3 class="box-title"><a href="class-details.html"><?php echo $title[$x];?></a></h3>
                    <p class="class-card_text"><?php echo $text[$x];?></p>
                    <div class="btn-wrap">
                        <a href="class-details.html" class="link-btn style3">Read More<i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="class-card_content">
                    <h3 class="box-title"><a href="class-details.html"><?php echo $title[$x];?></a></h3>
                    <p class="class-card_text"><?php echo $text[$x];?></p>
                </div>
            </div>
        </div>
        
    <?php if($x == $y) {
        break;
    } }; 
?>