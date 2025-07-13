<?php
    $title = array(
        'Michael Lacefield',
        'Harry Callum',
        'Mason Robert',
        'Amelia Margaret',
        'Sophia Jennifer',
        'Daniel Thomas',
        'James Charles',
        'Alexander Joseph',
        'Jessica Madison',
    );
    $desig = array(
        'Co-founder, XYZ',
        'Co-founder',
        'Co-founder, XYZ',
        'Co-founder',
        'Co-founder, XYZ',
        'Co-founder',
        'Co-founder, XYZ',
        'Co-founder',
        'Co-founder, XYZ',
    );
    $img = array(
        'assets/img/testimonial/testi1-1.jpg',
        'assets/img/testimonial/testi1-2.jpg',
        'assets/img/testimonial/testi1-3.jpg',
        'assets/img/testimonial/testi1-4.jpg',
        'assets/img/testimonial/testi1-5.jpg',
        'assets/img/testimonial/testi1-6.jpg',
        'assets/img/testimonial/testi1-7.jpg',
        'assets/img/testimonial/testi1-8.jpg',
        'assets/img/testimonial/testi1-9.jpg',
    );
    $text = array(
        "“With transparent pricing, fast response times, and 24/7 emergency availability, we’re always here when you need us. Our customer-first approach means we treat every job with care, cleanliness, and professionalism.”",
        "“With transparent pricing, fast response times, and 24/7 emergency availability, we’re always here when you need us. Our customer-first approach means we treat every job with care, cleanliness, and professionalism.”",
        "“With transparent pricing, fast response times, and 24/7 emergency availability, we’re always here when you need us. Our customer-first approach means we treat every job with care, cleanliness, and professionalism.”",
        "“With transparent pricing, fast response times, and 24/7 emergency availability, we’re always here when you need us. Our customer-first approach means we treat every job with care, cleanliness, and professionalism.”",
        "“With transparent pricing, fast response times, and 24/7 emergency availability, we’re always here when you need us. Our customer-first approach means we treat every job with care, cleanliness, and professionalism.”",
        "“With transparent pricing, fast response times, and 24/7 emergency availability, we’re always here when you need us. Our customer-first approach means we treat every job with care, cleanliness, and professionalism.”",
        "“With transparent pricing, fast response times, and 24/7 emergency availability, we’re always here when you need us. Our customer-first approach means we treat every job with care, cleanliness, and professionalism.”",
        "“With transparent pricing, fast response times, and 24/7 emergency availability, we’re always here when you need us. Our customer-first approach means we treat every job with care, cleanliness, and professionalism.”",
        "“With transparent pricing, fast response times, and 24/7 emergency availability, we’re always here when you need us. Our customer-first approach means we treat every job with care, cleanliness, and professionalism.”",
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="testi-card style4">
                <div class="testi-card_review">
                    <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                </div>
                <p class="box-text"><?php echo $text[$x];?></p>
                <div class="testi-card-profile">
                   
                    <div class="testi-card-profile-detaile">
                        <h3 class="box-title"><?php echo $title[$x];?></h3>
                        <p class="box-desig"><?php echo $desig[$x];?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php }; 
?>