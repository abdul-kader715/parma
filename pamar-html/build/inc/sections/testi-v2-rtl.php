<?php
    $title = array(
        'أليكس فورنانديز
',
        'مصطفى كمال
',
        'ديفيد ادي سميث
',
        'أوليفيا باتريشيا
',
        'دراز زمان
',
    );
    $desig = array(
        'الرئيس التنفيذي، المؤسس
',
        'الرئيس التنفيذي، المؤسس
',
        'طالب أعمال
',
        'الرئيس التنفيذي، المؤسس
',
        'الرئيس التنفيذي، المؤسس
',
    );
    $text = array(        
        '"ابق على اطلاع بأحداثنا وحملاتنا القادمة. سواء كان ذلك حفلًا لجمع التبرعات، أو حملة خيرية، أو برنامج توعية مجتمعي، هناك الكثير من الطرق للمشاركة ودعم قضيتنا. تحقق من تقويم الحدث لدينا للحصول على التفاصيل. نحن نعطي الأولوية لأمنك. تستخدم عملية التبرع لدينا أحدث تقنيات التشفير لحماية معلوماتك الشخصية والمالية. تبرع بثقة مع العلم"',

        '"تستخدم عملية التبرع لدينا أحدث تقنيات التشفير لحماية معلوماتك الشخصية والمالية. تبرع بثقة مع العلم ابق على اطلاع بأحداثنا وحملاتنا القادمة. سواء كان ذلك حفلًا لجمع التبرعات، أو حملة خيرية، أو برنامج توعية مجتمعي، هناك الكثير من الطرق للمشاركة ودعم قضيتنا. تحقق من تقويم الحدث لدينا للحصول على التفاصيل. نحن نعطي الأولوية لأمنك."',

        '"ابق على اطلاع بأحداثنا وحملاتنا القادمة. سواء كان ذلك حفلًا لجمع التبرعات، أو حملة خيرية، أو برنامج توعية مجتمعي، هناك الكثير من الطرق للمشاركة ودعم قضيتنا. تحقق من تقويم الحدث لدينا للحصول على التفاصيل. نحن نعطي الأولوية لأمنك. تستخدم عملية التبرع لدينا أحدث تقنيات التشفير لحماية معلوماتك الشخصية والمالية. تبرع بثقة مع العلم"',

        '"تستخدم عملية التبرع لدينا أحدث تقنيات التشفير لحماية معلوماتك الشخصية والمالية. تبرع بثقة مع العلم ابق على اطلاع بأحداثنا وحملاتنا القادمة. سواء كان ذلك حفلًا لجمع التبرعات، أو حملة خيرية، أو برنامج توعية مجتمعي، هناك الكثير من الطرق للمشاركة ودعم قضيتنا. تحقق من تقويم الحدث لدينا للحصول على التفاصيل. نحن نعطي الأولوية لأمنك."',

        '"ابق على اطلاع بأحداثنا وحملاتنا القادمة. سواء كان ذلك حفلًا لجمع التبرعات، أو حملة خيرية، أو برنامج توعية مجتمعي، هناك الكثير من الطرق للمشاركة ودعم قضيتنا. تحقق من تقويم الحدث لدينا للحصول على التفاصيل. نحن نعطي الأولوية لأمنك. تستخدم عملية التبرع لدينا أحدث تقنيات التشفير لحماية معلوماتك الشخصية والمالية. تبرع بثقة مع العلم"',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="testi-card2">
                <p class="box-text"><?php echo $text[$x];?></p>
                <span class="testi-card_review">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </span>
                <h3 class="box-title"><?php echo $title[$x];?></h3>
                <p class="box-desig"><?php echo $desig[$x];?></p>
            </div>
        </div>
    <?php }; 
?>