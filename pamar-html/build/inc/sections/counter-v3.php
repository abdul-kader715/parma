
<!--==============================
Counter Area  
==============================-->
<?php
    $title = array(
        'Experience',
        'Satisfied Clients',
        'Successful Projects',
    );
    $num = array(
        '7',
        '1250',
        '1290',
    );
    $numAdd = array(
        '+ years',
        '+',
        '+',
        '+',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="counter-card3">
                <div class="media-body">
                    <h2 class="box-number text-white"><span class="counter-number"><?php echo $num[$x];?></span><?php echo $numAdd[$x];?></h2>
                    <p class="box-text text-light"><?php echo $title[$x];?></p>
                </div>
            </div>
        </div>
    <?php }; 
?>
