<?php
    $title = array(
        'اتصال الرحمة
',
        'تعليم الطفل
',
        'رعاية الصحة
',
    );
    $img = array(
        'assets/img/project/project_1_1.png',
        'assets/img/project/project_1_2.png',
        'assets/img/project/project_1_3.png',
    );
    $sub = array(
        'مجتمع أقوى
',
        'الأعمال الخيرية وجمع التبرعات
',
        'شفاء القلوب
',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="project-card">
                <div class="project-img">
                    <img src="<?php echo $img[$x];?>" alt="project image">
                </div>
                <div class="project-content">
                    <div class="project-card-bg-shape" data-mask-src="assets/img/shape/project-card-bg-shape1-1.png"></div>
                    <h3 class="project-title"><a href="project-details.html"><?php echo $title[$x];?></a></h3>
                    <p class="project-subtitle"><?php echo $sub[$x];?></p>
                </div>
            </div>
        </div>

    <?php if($x == $y) {
        break;
    } }; 
?>