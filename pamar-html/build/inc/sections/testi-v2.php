<?php
    $title = array(
        'Michael Lacefield',
        'Sophia Jennifer',
        'Michael Lacefield',
        'Sophia Jennifer',
    );
    $desig = array(
        'Co-founder, XYZ',
        'Business Analyst',
        'Co-founder, XYZ',
        'Business Analyst',
    );
    $img = array(
        'assets/img/testimonial/testi2-1.jpg',
        'assets/img/testimonial/testi2-2.jpg',
        'assets/img/testimonial/testi2-1.jpg',
        'assets/img/testimonial/testi2-2.jpg',
    );
    $text = array(        
        "“AI is transforming industries by enabling machines to perform tasks that previously required human intervention, such as recognizing speech, analyzing images, making predictions, and even understanding emotions.”",

        "“Stay informed about our upcoming events and campaigns. AI is transforming industries by enabling machines to perform tasks that previously required human intervention, there are plenty of ways to get involved and support.”",

        "“AI is transforming industries by enabling machines to perform tasks that previously required human intervention, such as recognizing speech, analyzing images, making predictions, and even understanding emotions.”",

        "“Stay informed about our upcoming events and campaigns. AI is transforming industries by enabling machines to perform tasks that previously required human intervention, there are plenty of ways to get involved and support.”",
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="testi-card2">
                <div class="box-thumb">
                    <img src="<?php echo $img[$x];?>" alt="img">
                </div>
                <div class="box-content">
                    <p class="box-text"><?php echo $text[$x];?></p>
                    <h3 class="box-title"><?php echo $title[$x];?></h3>
                    <p class="box-desig"><?php echo $desig[$x];?></p>
                </div>
            </div>
        </div>
    <?php }; 
?>