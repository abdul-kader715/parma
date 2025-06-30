<?php
    $title = array(
        'براندون ديكسون
',
        'بروكلين سيمونز
',
        'براندون ديكسون
',
        'بروكلين سيمونز
',
    );
    $img = array(
        'assets/img/testimonial/testi_3_1.png',
        'assets/img/testimonial/testi_3_2.png',
        'assets/img/testimonial/testi_3_1.png',
        'assets/img/testimonial/testi_3_2.png',
    );
    $desig = array(
        'الرئيس التنفيذي، المؤسس
        ',
        'الرئيس التنفيذي، المؤسس
        ',
        'الرئيس التنفيذي، المؤسس
        ',
        'الرئيس التنفيذي، المؤسس
        ',
    );
    $text = array(
        '"ابق على اطلاع بأحداثنا وحملاتنا القادمة. سواء كان ذلك حفلًا لجمع التبرعات، أو حملة خيرية، أو برنامج توعية مجتمعي، هناك الكثير من الطرق للمشاركة ودعم قضيتنا. تحقق من تقويم الأحداث لدينا للحصول على التفاصيل."',
        '"ابق على اطلاع بأحداثنا وحملاتنا القادمة. سواء كان ذلك حفلًا لجمع التبرعات، أو حملة خيرية، أو برنامج توعية مجتمعي، هناك الكثير من الطرق للمشاركة ودعم قضيتنا. تحقق من تقويم الأحداث لدينا للحصول على التفاصيل."',
        '"ابق على اطلاع بأحداثنا وحملاتنا القادمة. سواء كان ذلك حفلًا لجمع التبرعات، أو حملة خيرية، أو برنامج توعية مجتمعي، هناك الكثير من الطرق للمشاركة ودعم قضيتنا. تحقق من تقويم الأحداث لدينا للحصول على التفاصيل."',
        '"ابق على اطلاع بأحداثنا وحملاتنا القادمة. سواء كان ذلك حفلًا لجمع التبرعات، أو حملة خيرية، أو برنامج توعية مجتمعي، هناك الكثير من الطرق للمشاركة ودعم قضيتنا. تحقق من تقويم الأحداث لدينا للحصول على التفاصيل."',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="testi-card3">
                <div class="testi-card-shape" data-mask-src="assets/img/shape/testi-card-bg-shape3-1.png"></div>
                <div class="testi-card_review">
                    <i class="fas fa-star"></i>
                    5.0
                </div>
                <div class="testi-card_profile">
                    <div class="box-thumb">
                        <img src="<?php echo $img[$x];?>" alt="img">
                        <div class="quote-icon">
                            <i class="fal fa-quote-right"></i>
                        </div>
                    </div>
                    <div class="media-left">
                        <h3 class="testi-card_name"><?php echo $title[$x];?></h3>
                        <span class="testi-card_desig"><?php echo $desig[$x];?></span>                           
                    </div>
                </div> 
                <p class="testi-card_text"><?php echo $text[$x];?></p>        
            </div>
        </div>
    <?php }; 
?>