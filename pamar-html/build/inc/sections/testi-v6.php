<?php
    $text = array(
        "I had the pleasure of working with Pamar recently, and I must say their team of financial consultants exceeded my expectations. As someone who values a tailored approach and industry expertise, I found Pamar to be the perfect partner for my financial needs.",
        'I had the pleasure of working with Pamar recently, and I must say their team of financial consultants exceeded my expectations. As someone who values a tailored approach and industry expertise, I found Pamar to be the perfect partner for my financial needs.',
    );
    $arrlength = count($text);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="testi-card-6">
                <div class="testi-card-details">
                    <div class="quote-icon quote-left">
                        <img src="assets/img/icon/quote.svg" alt="icon">
                    </div> 
                    <p class="testi-card_text"><?php echo $text[$x];?></p>
                    <div class="quote-icon">
                        <img src="assets/img/icon/quote.svg" alt="icon">
                    </div>                    
                </div>
            </div>
        </div>
    <?php }; 
?>