<!--==============================
Gallery Area  
==============================-->
<div class="overflow-hidden <?php echo $klass;?>">
    <div class="container">
        <div class="row gy-30 gx-30">
            <?php
                $img = array(
                    'assets/img/gallery/gallery_1_1.png',
                    'assets/img/gallery/gallery_1_2.png',
                    'assets/img/gallery/gallery_1_3.png',
                    'assets/img/gallery/gallery_1_4.png',
                    'assets/img/gallery/gallery_1_5.png',
                    'assets/img/gallery/gallery_1_6.png',
                    'assets/img/gallery/gallery_1_7.png',
                    'assets/img/gallery/gallery_1_8.png',
                    'assets/img/gallery/gallery_1_9.png',
                );
                $col_class = array(
                    'col-md-6 col-xl-6',
                    'col-md-6 col-xl-3',
                    'col-md-6 col-xl-3',
                    'col-md-6 col-xl-4',
                    'col-md-6 col-xl-4',
                    'col-md-6 col-xl-4',
                    'col-md-6 col-xl-3',
                    'col-md-6 col-xl-3',
                    'col-md-6 col-xl-6',
                );

                $arrlength = count($img);

                for($x = 0; $x < $arrlength; $x++) {
                ?>
                    <div class="<?php echo $col_class[$x];?>">
                        <div class="gallery-card2">
                            <div class="gallery-img">
                                <img src="<?php echo $img[$x];?>" alt="gallery image">
                                <a href="<?php echo $img[$x];?>" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                <?php }; 
            ?>
        </div>
        <?php get_section('pagination-v1', 'text-center mt-50'); ?>
    </div>
</div>