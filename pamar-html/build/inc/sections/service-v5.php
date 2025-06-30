<?php
    $title = array(
        'Strategic Planning',
        'Financial Advisory',
        'Process Optimization',
        'Market Insights',
        'Change Management',
        'Risk Mitigation',
    );
    $img = array(
        'assets/img/service/service_card_5_1.png',
        'assets/img/service/service_card_5_2.png',
        'assets/img/service/service_card_5_3.png',
        'assets/img/service/service_card_5_4.png',
        'assets/img/service/service_card_5_5.png',
        'assets/img/service/service_card_5_6.png',
    );
    $text = array(
        'Crafting tailore business strategies to achieve long-term success.',
        'Providing expert financial advice and solutions. We help optimize.',
        'Streamlining your business operations for maximum efficiency.',
        'Comprehensive market research and analysis to uncover trends.',
        'Guiding your team through organizational changes smoothly.',
        'Identifying potential risks and developing strategies.',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="col-md-6 col-xl-4">
            <div class="service-card5">
                <div class="service-card-thumb">
                    <img src="<?php echo $img[$x];?>" alt="Icon">
                </div>
                <div class="box-content">
                    <h3 class="box-title"><a href="about.html"><?php echo $title[$x];?></a></h3>
                    <div class="btn-wrap">
                        <p class="box-text"><?php echo $text[$x];?></p>
                        <a href="about.html" class="icon-btn"><i class="fa-solid fa-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    <?php }; 
?>
