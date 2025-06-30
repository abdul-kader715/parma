
<!--==============================
Counter Area  
==============================-->
<div class="counter-area-2 <?php echo $klass;?>" data-bg-src="assets/img/normal/funfact-img.jpg">
    <div class="container">
        <div class="counter-wrap2">
            <?php
                $title = array(
                    'Happy Customers',
                    'Complete Projects',
                    'Professional Team',
                    'Global Stores',
                );
                $num = array(
                    '98',
                    '52',
                    '2',
                    '1',
                );
                $numAdd = array(
                    '%',
                    'k',
                    'K',
                    'k',
                );
                $arrlength = count($title);

                for($x = 0; $x < $arrlength; $x++) {
                ?>
                    <div class="counter-card2" data-cue="slideInUp">
                        <div class="media-body">
                            <h2 class="box-number"><span class="counter-number"><?php echo $num[$x];?></span><?php echo $numAdd[$x];?></h2>
                            <p class="box-text"><?php echo $title[$x];?></p>
                        </div>
                    </div>
                <?php }; 
            ?>
        </div>
    </div>
</div>