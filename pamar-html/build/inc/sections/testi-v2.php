<?php
    $title = array(
        'Michael Lacefield',
        'Sophia Jennifer',
    );
    $desig = array(
        'Co-founder, XYZ',
        'Business Analyst',
    );
    $thumbimg = array(
        'assets/img/testimonial/testi-thumb2-1.jpg',
        'assets/img/testimonial/testi-thumb2-2.jpg',
    );
    $img = array(
        'assets/img/testimonial/testi2-1.jpg',
        'assets/img/testimonial/testi2-2.jpg',
    );
    $text = array(        
        "Mike and Chris were excellent! Communication before and during the repair was helpful, since we were unsure how extensive it might be once the area was dug out. We would highly recommend both Mike and Chris.",
        "They kept us informed throughout the process,which gave us peace which gave us peace of mind. We would highly recommend both Mike and Chris for their professionalism, skill, and customer service.skill, and customer service.",
        
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="testi-card2">
                <div class="box-thumb">
                    <img src="<?php echo $thumbimg[$x];?>" alt="img">
                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style5 popup-video">
                                <i class="fa-sharp-duotone fa-solid fa-play"></i>
                     </a>
                </div>
                <div class="box-content">
                    <div class="d-flex justify-content-between">
                        <div class="box-icon">
                            <img src="assets/img/icon/quote-icon3.svg" alt="">
                        </div>
                        <div class="testi-card_review">
                            <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                    </div>
                    
                    <p class="box-text"><?php echo $text[$x];?></p>
                    <div class="testi-card-profile">
                        <div class="testi-card-avater">
                            <img src="<?php echo $img[$x];?>" alt="img">
                        </div>
                        <div class="testi-card-profile-detaile">
                            <h3 class="box-title"><?php echo $title[$x];?></h3>
                            <p class="box-desig"><?php echo $desig[$x];?></p>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    <?php }; 
?>