<?php 
    $title = array(
        'حرر هذه الخطة
',
        'قسط هذه الخطة
',
    );
    $price = array(
        '50',
        '150',
    );
    $img = array(
        'assets/img/pricing/project-card1-1.png',
        'assets/img/pricing/project-card1-2.png',
    );
    $text = array(
        'تختلف سياسات استرداد الأموال بناءً على تاريخ الإلغاء.
',
        'تختلف سياسات استرداد الأموال بناءً على تاريخ الإلغاء.
',
    );
    $list = array(
        '<li><i class="fas fa-circle-check"></i> نحن محظوظون بالعمل.
</li>
        <li><i class="fas fa-circle-check"></i> مراقبة النظام 24/7
</li>
        <li><i class="fas fa-circle-check"></i> تشجيع عضو الفريق
</li>
        <li class="unavailable"><i class="fas fa-circle-check"></i> أفضل دعم عن بعد
</li>',

        '<li><i class="fas fa-circle-check"></i> نحن محظوظون بالعمل.
</li>
        <li><i class="fas fa-circle-check"></i> مراقبة النظام 24/7
</li>
        <li><i class="fas fa-circle-check"></i> تشجيع عضو الفريق
</li>
        <li><i class="fas fa-circle-check"></i> أفضل دعم عن بعد
</li>',
    );
    
    $arrlength = count($title);
    for($x = 0; $x < $arrlength; $x++) { ?>

        <div class="<?php echo $klass;?>">
            <div class="price-card">
                <div class="price-card-thumb">
                    <img src="<?php echo $img[$x];?>" alt="img">
                    <h4 class="price-card_price"><span class="currency">$</span><?php echo $price[$x];?></h4>
                </div>
                <div class="price-card_content">
                    <h3 class="box-title"><?php echo $title[$x];?></h3>
                    <p class="box-text"><?php echo $text[$x];?></p>
                    <div class="checklist">
                        <ul>
                            <?php echo $list[$x];?>
                        </ul>
                    </div>
                </div>
                <div class="btn-wrap">
                    <a href="pricing.html" class="th-btn w-100">اختر خطتك
                    </a>
                </div>
            </div>
        </div>
    <?php }
?>
