<?php 
    $title = array(
        'حرر هذه الخطة
',
        'معيار هذه الخطة
',
        'قسط هذه الخطة
',
    );
    $text = array(
        'سياسات استرداد الأموال بناءً على تاريخ الإلغاء. تختلف سياسات استرداد الأموال بناءً على تاريخ الإلغاء.',
        'سياسات استرداد الأموال بناءً على تاريخ الإلغاء. تختلف سياسات استرداد الأموال بناءً على تاريخ الإلغاء.',
        'سياسات استرداد الأموال بناءً على تاريخ الإلغاء. تختلف سياسات استرداد الأموال بناءً على تاريخ الإلغاء.',
    );
    $price = array(
        '00',
        '60',
        '120',
    );
    $list = array(
        '<li><i class="fas fa-circle-check"></i> نحن محظوظون بالعمل.
</li>
        <li><i class="fas fa-circle-check"></i> مراقبة النظام 24/7
</li>
        <li class="unavailable"><i class="fas fa-circle-check"></i> تشجيع عضو الفريق
</li>
        <li class="unavailable"><i class="fas fa-circle-check"></i> أفضل دعم عن بعد
</li>',

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
            <div class="price-card2">
                <div class="price-card-title-wrap">
                    <h3 class="price-card_title">
                        <?php echo $title[$x];?>
                    </h3>
                    <p class="price-card_text"><?php echo $text[$x];?></p>
                </div>
                <div class="price-card-price-wrap">
                    <h4 class="price-card_price">
                        <span class="currency">$</span>
                        <?php echo $price[$x];?>
                    </h4>
                </div>
                <div class="price-card_content">
                    <div class="checklist">
                        <ul>
                            <?php echo $list[$x];?>
                        </ul>
                    </div>
                    <a href="pricing.html" class="th-btn">Choose Your Plan</a>
                </div>
            </div>
        </div>
    <?php }
?>
