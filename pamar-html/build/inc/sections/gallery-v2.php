<?php
    $title = array(
        'Fresh Vegetables',
        'Organic Vegetables',
        'Organic Fruits',
        'Organic Farming',
        'Fresh Vegetables',
        'Organic Vegetables',
        'Organic Fruits',
        'Organic Farming',
        'Organic Farming',
    );
    $img = array(
        'assets/img/gallery/gallery_2_1.jpg',
        'assets/img/gallery/gallery_2_2.jpg',
        'assets/img/gallery/gallery_2_3.jpg',
        'assets/img/gallery/gallery_2_4.jpg',
        'assets/img/gallery/gallery_2_5.jpg',
        'assets/img/gallery/gallery_2_6.jpg',
        'assets/img/gallery/gallery_2_7.jpg',
        'assets/img/gallery/gallery_2_8.jpg',
        'assets/img/gallery/gallery_2_9.jpg',
    );

    $arrlength = count($img);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="gallery-card style-hover">
                <div class="box-img">
                    <img src="<?php echo $img[$x];?>" alt="gallery image">
                    <a href="<?php echo $img[$x];?>" class="icon-btn style2 popup-image"><i class="far fa-plus"></i></a>
                </div>
                <div class="box-content">
                    <p class="box-subtitle">Fresh Food & Vegetables</p>
                    <h3 class="box-title"><a href="project-details.html"><?php echo $title[$x];?></a></h3>
                </div>
            </div>
        </div>
    <?php }; 
?>