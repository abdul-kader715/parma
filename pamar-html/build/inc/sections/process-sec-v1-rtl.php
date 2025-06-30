<!--==============================
Process Area  
==============================-->
<section class="<?php echo $klass;?>">
    <div class="shape-mockup process-shape1-1 jump-reverse d-xxl-block d-none" data-top="20%" data-right="0"><img src="assets/img/shape/hand-bg-shape2-1.png" alt="img"></div>
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title after-none before-none">عملية العمل
            </span>
            <h2 class="sec-title">عملية عمل التبرع لدينا
            </h2>
        </div>
        <div class="row gy-40 justify-content-center">
            <?php
                $title = array(
                    'الوعي والمشاركة
',
                    'جمع التبرعات
',
                    'التأثير والمساءلة
',
                );
                $icon = array(
                    'assets/img/icon/process-icon1-1.svg',
                    'assets/img/icon/process-icon1-2.svg',
                    'assets/img/icon/process-icon1-3.svg',
                );
                $text = array(
                    "لإعلام وإشراك المانحين والداعمين المحتملين حول مهمة المؤسسة الخيرية والقضية التي تدعمها. وسائل التواصل الاجتماعي.
",
                    "قم بإعداد منصة تبرع عبر الإنترنت آمنة وسهلة الاستخدام تقبل طرق دفع متعددة وتسمح بالتبرعات لمرة واحدة والمتكررة.
",
                    "تخصيص الأموال لمشاريع ومبادرات محددة تتماشى مع مهمة المؤسسة الخيرية، مما يضمن استخدام الموارد بكفاءة وفعالية.
",
                );
                $arrlength = count($title);

                for($x = 0; $x < $arrlength; $x++) {
                ?>
                    <div class="col-lg-4 col-md-6 process-card-wrap">
                        <div class="process-card">
                            <div class="process-card-thumb-wrap">
                                <div class="process-card-thumb" data-mask-src="assets/img/process/process-card-shape.png">
                                    <img src="assets/img/process/process-card-1-1.png" alt="img">
                                </div>
                                <div class="process-card-icon">
                                    <img src="<?php echo $icon[$x];?>" alt="img">
                                </div>
                                <div class="process-card-shape">
                                    <img src="assets/img/process/process-card-shape2.png" alt="img">
                                </div>
                            </div>
                            <div class="box-content">
                                <h3 class="box-title"><?php echo $title[$x];?></h3>
                                <p class="box-text"><?php echo $text[$x];?></p>
                            </div>
                        </div>
                    </div>
                <?php }; 
            ?>
        </div>
    </div>
</section>