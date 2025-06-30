<!--==============================
About Area  
==============================-->
<div class="overflow-hidden <?php echo $klass;?>" id="about-sec">
    <div class="container">
        <div class="video-thumb4-1 video-box-center gsap-parallax overflow-hidden" data-overlay="title" data-opacity="2">
            <img src="assets/img/normal/about-page-thumb1-1.png" alt="img">
        </div>
    </div>
    <div class="about-counter-area">
        <div class="container">
            <div class="counter-wrap2 bg-smoke">
                <?php
                    $title = array(
                        'Success Rate',
                        'Awards Won',
                        'Funds Raised by Clients',
                        'Completed Projects',
                    );
                    $numAdd2 = array(
                        '',
                        '',
                        '$',
                        '',
                    );
                    $num = array(
                        '98',
                        '785',
                        '25',
                        '35',
                    );
                    $numAdd = array(
                        '%',
                        '+',
                        'M+',
                        'k+',
                    );
                    $color = array(
                        '',
                        '',
                        '',
                        '',
                    );
                    $arrlength = count($title);

                    for($x = 0; $x < $arrlength; $x++) {
                    ?>
                        <div class="counter-card2 fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">
                            <div class="media-body">
                                <h2 class="box-number <?php echo $color[$x];?>"><?php echo $numAdd2[$x];?><span class="counter-number"><?php echo $num[$x];?></span><?php echo $numAdd[$x];?></h2>
                                <p class="box-text"><?php echo $title[$x];?></p>
                            </div>
                        </div>
                        <div class="divider"></div>
                    <?php }; 
                ?>
                <div class="client-group-wrap style2 fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <img src="assets/img/normal/client-group3.png" alt="img">
                    <div class="client-group-details">
                        <h4 class="box_number text-title"><span class="counter-number">4.9</span></h4>
                        <div class="details">
                            <div class="star-rating"></div>
                            <p class="box_text text-body">Happy Clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

