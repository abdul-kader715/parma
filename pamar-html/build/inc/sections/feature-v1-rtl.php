<?php
    $title = array(
        'صندوق جمع التبرعات
',
        'التبرع الخيري
',
        'مساعدة العلاج
',
    );
    $icon = array(
        'assets/img/icon/feature-icon1-1.svg',
        'assets/img/icon/feature-icon1-2.svg',
        'assets/img/icon/feature-icon1-1.svg',
    );
    $text = array(
        'ابق على اطلاع بأحدث الأخبار والأحداث وقصص التأثير من منظمتنا. اشترك في النشرة الإخبارية لدينا.',
        'ابق على اطلاع بأحدث الأخبار والأحداث وقصص التأثير من منظمتنا. اشترك في النشرة الإخبارية لدينا.',
        'ابق على اطلاع بأحدث الأخبار والأحداث وقصص التأثير من منظمتنا. اشترك في النشرة الإخبارية لدينا.',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="feature-card">
                <div class="feature-card-bg-shape">
                    <img src="assets/img/shape/feature-card-bg-shape1-1.png" alt="img">
                </div>
                <div class="box-icon">
                    <img src="<?php echo $icon[$x];?>" alt="icon">
                </div>
                <h3 class="box-title"><?php echo $title[$x];?></h3>
                <p class="box-text"><?php echo $text[$x];?></p>
                <a class="link-btn style2" href="about.html">عرض التفاصيل
                <i class="fa-solid fa-arrow-up-right ms-2"></i></a>
            </div>
        </div>
    <?php }; 
?>