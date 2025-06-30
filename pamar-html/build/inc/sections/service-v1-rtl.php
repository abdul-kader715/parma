<?php
    $title = array(
        'الأطعمة الصحية
',
        'التعليم',
        'مساعدة طبية
',
    );
    $icon = array(
        'assets/img/icon/service-icon/service-card-icon1-1.svg',
        'assets/img/icon/service-icon/service-card-icon1-2.svg',
        'assets/img/icon/service-icon/service-card-icon1-3.svg',
    );
    $text = array(
        'انضم إلينا في إحداث فرق! يوصلك موقعنا الخيري بالمتطوعين وخيارات التبرع والقصص الملهمة.
',
        'استكشف هذا الموقع لاكتشاف المشاريع والفرص وطرق التبرع المؤثرة لمساعدة المحتاجين على النجاح.
',
        'انضم إلينا في إحداث فرق! يوصلك موقعنا الخيري بالمتطوعين وخيارات التبرع والقصص الملهمة.
',       
    ); 
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="service-card">
                <div class="box-icon">
                    <img src="<?php echo $icon[$x];?>" alt="Icon">
                </div>
                <div class="box-content">
                    <h3 class="box-title"><a href="about.html"><?php echo $title[$x];?></a></h3>
                    <p class="box-text"><?php echo $text[$x];?></p>
                    <a href="about.html" class="th-btn">يتعلم أكثر
                    <i class="fas fa-arrow-up-right ms-2"></i></a>
                </div>
            </div>
        </div>
    <?php if($x == $y) {
        break;
    } }; 
?>