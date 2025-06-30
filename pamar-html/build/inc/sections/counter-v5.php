
<!--==============================
Counter Area  
==============================-->
<div class="<?php echo $klass;?> counter-area-5 position-relative z-index-2" data-bg-src="assets/img/bg/wave-bg1.png">
    <div class="container grid_lines d-none d-md-flex justify-content-between">
        <div class="grid_line"></div>
        <div class="grid_line"></div>
        <div class="grid_line"></div>
        <div class="grid_line"></div>
        <div class="grid_line"></div>
    </div>
    <div class="container">
        <div class="row gy-40">
            <?php
                $title = array(
                    'Business advice given over 20 years',
                    'Business excellence awards achieved',
                    'Business guided over thirty year',
                    'Business Clients Happy',
                );
                $num = array(
                    '120',
                    '79',
                    '180',
                    '559',
                );
                $numAdd = array(
                    '+',
                    '+',
                    '+',
                    '+',
                );
                $arrlength = count($title);

                for($x = 0; $x < $arrlength; $x++) {
                ?>  
                    <div class="col-lg-3 col-sm-6 fadeinup wow">
                        <div class="counter-card pt-0 pb-0 fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.5s">
                            <div class="media-body">
                                <h2 class="box-number text-white"><span class="counter-number"><?php echo $num[$x];?></span><?php echo $numAdd[$x];?></h2>
                                <p class="box-text text-white"><?php echo $title[$x];?></p>
                            </div>
                        </div>
                    </div>
                <?php }; 
            ?>
        </div>
    </div>
</div>