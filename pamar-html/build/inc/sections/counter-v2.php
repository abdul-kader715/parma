
<!--==============================
Counter Area  
==============================-->
<div class="counter-area-2 <?php echo $klass;?>" data-bg-src="assets/img/shape/count-bg-shape.png">
    <div class="container">
        <div class="counter-wrap2">
            <?php
                $title = array(
                    'Customer Satisfaction',
                    'Project Completed',
                    'Trained Staff',
                    'Awards Achieved',
                );
                $num = array(
                    '252',
                    '21',
                    '500',
                    '180',
                );
                $numAdd = array(
                    'K+',
                    'K+',
                    '+',
                    '+',
                );
             
                $arrlength = count($title);

                for($x = 0; $x < $arrlength; $x++) {
                ?>
                    <div class="counter-card2 style2" data-cue="slideInUp">
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