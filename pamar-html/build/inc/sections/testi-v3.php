<?php
    $title = array(
        'Ethan Walker',
        'Samuel Brooks',
        'Ryan Mitchell',
        'Ethan Walker',
        'Samuel Brooks',
        'Ryan Mitchell',
    );
    $desig = array(
        'Customer',
        'Customer',
        'Customer',
        'Customer',
        'Customer',
        'Customer',
    );
    $text = array(        
        "“They diagnosed the problem quickly, explained everything clearly, and fixed it the same day. The plumber was professional, polite, and left everything clean.”",
        "“They diagnosed the problem quickly, explained everything clearly, and fixed it the same day. The plumber was professional, polite, and left everything clean.”",
        "“They diagnosed the problem quickly, explained everything clearly, and fixed it the same day. The plumber was professional, polite, and left everything clean.”",
        "“They diagnosed the problem quickly, explained everything clearly, and fixed it the same day. The plumber was professional, polite, and left everything clean.”",
        "“They diagnosed the problem quickly, explained everything clearly, and fixed it the same day. The plumber was professional, polite, and left everything clean.”",
        "“They diagnosed the problem quickly, explained everything clearly, and fixed it the same day. The plumber was professional, polite, and left everything clean.”",
    );
    $img = array(
        'assets/img/testimonial/testi3-1.jpg',
        'assets/img/testimonial/testi3-2.jpg',
        'assets/img/testimonial/testi3-3.jpg',
        'assets/img/testimonial/testi3-1.jpg',
        'assets/img/testimonial/testi3-2.jpg',
        'assets/img/testimonial/testi3-3.jpg',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="testi-card style3">
                <p class="box-text"><?php echo $text[$x];?></p>
                <div class="testi-card-profile">
                    <div class="testi-card-avater">
                        <img src="<?php echo $img[$x];?>" alt="img">
                    </div>
                    <div class="testi-card-profile-detaile">
                        <h3 class="box-title"><?php echo $title[$x];?></h3>
                        <p class="box-desig"><?php echo $desig[$x];?></p>
                    </div>
                    <div class="testi-card_review">
                         <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                    </div>
                </div>
                 <div class="shape-mockup " style="bottom: 0%; left:0%">
                    <img src="assets/img/shape/testi-thumb-shape3-1.png" alt="shape">
                </div>
                <div class="shape-mockup" style="bottom: 0%; left:0%">
                    <img src="assets/img/shape/testi-thumb-shape3-2.png" alt="shape">
                </div>
            </div>
        </div>
    <?php }; 
?>