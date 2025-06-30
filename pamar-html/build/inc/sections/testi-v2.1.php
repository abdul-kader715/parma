<?php
    $title = array(
        'Michel Smith',
        'David Ade Smith',
        'Michel Smith',
        'David Ade Smith',
    );
    $desig = array(
        'Business Analyst',
        'CEO, Founder',
        'Business Analyst',
        'CEO, Founder',
    );
    $text = array(        
        "“Excellent content and a real sense of community among the participants, all curated in a wonderful setting. It is clear effort goes into the organization and planning of the gatherings.”",

        "“Stay informed about our upcoming events and campaigns. Whether it's a fundraising, a charity run, or a community outreach program, there are plenty of ways to get involved and support.”",

        "“Excellent content and a real sense of community among the participants, all curated in a wonderful setting. It is clear effort goes into the organization and planning of the gatherings.”",

        "“Stay informed about our upcoming events and campaigns. Whether it's a fundraising, a charity run, or a community outreach program, there are plenty of ways to get involved and support.”",
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="testi-card2">
                <div class="quote-icon" data-mask-src="assets/img/icon/quote.svg"></div>
                <p class="box-text text-title"><?php echo $text[$x];?></p>
                <div class="testi-card_review text-title">
                    4.9
                    <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                </div>
                <h3 class="box-title text-title"><?php echo $title[$x];?></h3>
                <p class="box-desig text-body"><?php echo $desig[$x];?></p>
            </div>
        </div>
    <?php }; 
?>