<?php
    $title = array(
        'Alex Johansson',
        'Maria Gonzalez',
        'Tom Wu',
        'Jordan Lee',
    );
    $desig = array(
        'Client of USA.',
        'Client of Canada.',
        'Client of Australia.',
        'Client of Chaina',
    );

    $img = array(
        'assets/img/testimonial/testi-thumb1-1.jpg',
        'assets/img/testimonial/testi-thumb1-2.jpg',
        'assets/img/testimonial/testi-thumb1-3.jpg',
        'assets/img/testimonial/testi-thumb1-4.jpg',
    );
 
    $text = array(
        "With transparent pricing, fast response times, and 24/7 emergency availability, we’re always here when you need us. Our customer-first approach means we treat every job with care, cleanliness, and professionalism.",
        "Our commitment to quality ensures that we use only the best materials and techniques for every project. With a dedicated team of experts, we guarantee your satisfaction and a flawless finish every time.",
        "We pride ourselves on our innovative solutions that cater to the unique needs of each client. By staying ahead of industry trends, we provide services that not only meet but exceed expectations.",
        "We pride ourselves on our innovative solutions that cater to the unique needs of each client. By staying ahead of industry trends, we provide services that not only meet but exceed expectations.",
   
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
    <div class="<?php echo $klass;?>">
        <div class="row gy-50 flex-row-reverse">
            <div class="col-xl-6 col-lg-7">
                <div class="testi-thumb1-1">
                <div class="quote-icon" >
                    <img src="assets/img/icon/quote-icon2.svg" alt="">
                </div>
                <div class="img1 bg-mask" data-mask-src="assets/img/shape/testi-shape.png">
                    <img src="<?php echo $img[$x];?>" alt="img">
                </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5">
                <div class="testi-card style5">
                    <div class="testi-card_review">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
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
            
        </div>
    </div>

        
            
        
    <?php }; 
?>


