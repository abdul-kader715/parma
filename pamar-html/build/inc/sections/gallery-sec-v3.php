<!--==============================
Gallery Area  
==============================-->
<div class="overflow-hidden <?php echo $klass;?> bg-smoke2 bg-repeat" data-bg-src="assets/img/bg/wedding_bg_1.png">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title"><img src="assets/img/shape/title_left.svg" alt="shape">Wedding Gallery<img src="assets/img/shape/title_right.svg" alt="shape"></span>
            <h2 class="sec-title">Captures of Lovely Moments</h2>
        </div>
        <div class="flip-gallery-area">
            <div class="flip-gallery">
                <ul class="flip-items">
                    <?php
                        $img = array(
                            'assets/img/gallery/gallery_3_3.jpg',
                            'assets/img/gallery/gallery_3_2.jpg',
                            'assets/img/gallery/gallery_3_1.jpg',
                            'assets/img/gallery/gallery_3_4.jpg',
                            'assets/img/gallery/gallery_3_5.jpg',
                        );
                        $overlay = array(
                            'assets/img/gallery/gallery_overlay_3_1.png',
                            'assets/img/gallery/gallery_overlay_3_1.png',
                            'assets/img/gallery/gallery_overlay_3_1.png',
                            'assets/img/gallery/gallery_overlay_3_1.png',
                            'assets/img/gallery/gallery_overlay_3_1.png',
                        );
                        $flipcat = array(
                            'WEDDING CEREMONY',
                            'ENGAGEMENT',
                            'PRE-WEDDING',
                            'With FRIENDS',
                            'PARTY TIME',
                        );

                        $arrlength = count($img);

                        for($x = 0; $x < $arrlength; $x++) {
                        ?>
                            <li data-flip-category="<?php echo $flipcat[$x];?>">
                                <div class="gallery-card gallery-flip">
                                    <div class="gallery-img">
                                        <div class="gallery-overlay" data-bg-src="<?php echo $overlay[$x];?>"></div>
                                        <img src="<?php echo $img[$x];?>" alt="gallery image">
                                        <a href="<?php echo $img[$x];?>" class="icon-btn popup-image"><i class="fal fa-magnifying-glass-plus"></i></a>
                                    </div>
                                </div>
                            </li>
                        <?php }; 
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="shape-mockup jump d-none d-xl-block" data-bottom="120px" data-left="0%"><img src="assets/img/shape/flower_6.png" alt="shape"></div>
</div>