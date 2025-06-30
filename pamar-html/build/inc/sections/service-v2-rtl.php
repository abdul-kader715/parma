<?php
    $title = array(
        'الأطعمة الصحية
',
        'دعم التعليم
',
        'مساعدة طبية
',
    );
    $icon = array(
        'assets/img/icon/service-icon/service-card-icon1-1.svg',
        'assets/img/icon/service-icon/service-card-icon1-2.svg',
        'assets/img/icon/service-icon/service-card-icon1-3.svg',
    );
    $text = array(
        'شارك القصص والخبرات من المتطوعين الحاليين لإلهام الآخرين للانضمام. السماح للمستخدم بالتسجيل في فرص التطوع.',
        'شارك القصص والخبرات من المتطوعين الحاليين لإلهام الآخرين للانضمام. السماح للمستخدم بالتسجيل في فرص التطوع.',
        'شارك القصص والخبرات من المتطوعين الحاليين لإلهام الآخرين للانضمام. السماح للمستخدم بالتسجيل في فرص التطوع.',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="service-card2">
                <div class="service-card-icon">
                    <img src="<?php echo $icon[$x];?>" alt="Icon">
                </div>
                <div class="box-content">
                    <h3 class="box-title"><a href="about.html"><?php echo $title[$x];?></a></h3>
                    <p class="box-text"><?php echo $text[$x];?></p>
                    <a href="about.html" class="icon-btn"><i class="fas fa-arrow-up-right"></i></a>
                </div>
            </div>
        </div>
    <?php }; 
?>