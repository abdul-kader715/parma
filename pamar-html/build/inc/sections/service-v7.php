<?php
    $title = array(
        'Investment Planning',
        'Retirement Planning',
        'Tax Planning',
        'Estate Planning',
        'Education Planning',
        'Debt Management',
        'Risk Management',
        'Financial Modeling',
    );
    $icon = array(
        'assets/img/icon/service_card_7-1.svg',
        'assets/img/icon/service_card_7-2.svg',
        'assets/img/icon/service_card_7-3.svg',
        'assets/img/icon/service_card_7-4.svg',
        'assets/img/icon/service_card_7-5.svg',
        'assets/img/icon/service_card_7-6.svg',
        'assets/img/icon/service_card_7-7.svg',
        'assets/img/icon/service_card_7-8.svg',
    );
    $text = array(
        'Financial consultants can help you develop an investment strategy that aligns.',
        'A financial consultant can help you create a plan to save for retirement and ensure.',
        'Financial consultants can help you develop an investment strategy that aligns.',
        'A financial consultant can help you create a plan to save for retirement and ensure.',
        'Financial consultants can help you develop an investment strategy that aligns.',
        'A financial consultant can help you create a plan to save for retirement and ensure.',
        'Financial consultants can help you develop an investment strategy that aligns.',
        'A financial consultant can help you create a plan to save for retirement and ensure.',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>  
        <div class="<?php echo $klass;?>">
            <div class="service-card7">
                <div class="service-card-icon">
                    <img src="<?php echo $icon[$x];?>" alt="icon">
                </div>
                <div class="box-content">
                    <h3 class="box-title"><a href="about.html"><?php echo $title[$x];?></a></h3>
                    <p class="box-text"><?php echo $text[$x];?></p>
                </div>
            </div>
        </div>
    <?php }; 
?>
