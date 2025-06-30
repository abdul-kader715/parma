<?php
    $title = array(
        'Emily Johnson',
        'Brandon Dixon',
        'Emily Johnson',
        'Brandon Dixon',
    );
    $desig = array(
        'UI/UX Designer',
        'UI/UX Designer',
        'UI/UX Designer',
        'UI/UX Designer',
    );
    $img = array(
        'assets/img/testimonial/testi_5_1.png',
        'assets/img/testimonial/testi_5_2.png',
        'assets/img/testimonial/testi_5_1.png',
        'assets/img/testimonial/testi_5_2.png',
    );
    $text = array(
        "Pamar Conference garners acclaim for its the seamless organization, diverse lineup of influential speakers, and more strategics networkings opportunities. Attendees consistently praise the events for its thoughts-provokings content, fostering impactful industry connections and providing.",
        'As a seasoned professional, Pamar never disappoints. The carefully curated content and top-tier speakers more consistently provided strategics insights. Networkings opportunities are unparalleled, makings its the must-attends for industry for the more of hard workersand  leaders."',
        "Pamar Conference garners acclaim for its the seamless organization, diverse lineup of influential speakers, and more strategics networkings opportunities. Attendees consistently praise the events for its thoughts-provokings content, fostering impactful industry connections and providing.",
        'As a seasoned professional, Pamar never disappoints. The carefully curated content and top-tier speakers more consistently provided strategics insights. Networkings opportunities are unparalleled, makings its the must-attends for industry for the more of hard workersand  leaders."',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="testi-card-5">
                <div class="testi-card-details">
                    <p class="testi-card_text"><?php echo $text[$x];?></p>
                    <div class="quote-icon">
                        <img src="assets/img/icon/quote.svg" alt="icon">
                    </div>                    
                </div>
                <div class="testi-card_profile">
                    <div class="testi-card-thumb">
                        <img class="avatar" src="<?php echo $img[$x];?>" alt="img">
                    </div>
                    <div class="testi-card_content">
                        <h3 class="testi-card_name"><?php echo $title[$x];?></h3>
                        <span class="testi-card_desig"><?php echo $desig[$x];?></span>
                    </div>
                    <div class="testi-card_review">
                        <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    <?php }; 
?>