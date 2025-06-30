<?php
    $img = array(
        'assets/img/gallery/gallery_1_1.png',
        'assets/img/gallery/gallery_1_2.png',
        'assets/img/gallery/gallery_1_3.png',
        'assets/img/gallery/gallery_1_4.png',
        'assets/img/gallery/gallery_1_5.png',
        'assets/img/gallery/gallery_1_1.png',
        'assets/img/gallery/gallery_1_2.png',
        'assets/img/gallery/gallery_1_3.png',
        'assets/img/gallery/gallery_1_4.png',
        'assets/img/gallery/gallery_1_5.png',
        'assets/img/gallery/gallery_1_1.png',
        'assets/img/gallery/gallery_1_2.png',
        'assets/img/gallery/gallery_1_3.png',
        'assets/img/gallery/gallery_1_4.png',
        'assets/img/gallery/gallery_1_5.png',
    );

    $arrlength = count($img);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="gallery-card">
                <div class="gallery-img">
                    <img src="<?php echo $img[$x];?>" alt="img">
                    <a href="<?php echo $img[$x];?>" class="icon-btn popup-image"><i class="far fa-plus"></i></a>
                </div>
            </div>
        </div>
    <?php }; 
?>