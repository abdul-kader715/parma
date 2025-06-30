<div class="widget th-widget-instagram <?php echo $klass; ?>">
    <h3 class="widget_title">Instagram</h3>
    <div class="instagram-feeds">
        <?php
            $img = array(
            'assets/img/widget/insta-feed-1-1.jpg',
            'assets/img/widget/insta-feed-1-2.jpg',
            'assets/img/widget/insta-feed-1-3.jpg',
            'assets/img/widget/insta-feed-1-4.jpg',
            'assets/img/widget/insta-feed-1-5.jpg',
            'assets/img/widget/insta-feed-1-6.jpg',
            );
            $arrlength = count($img);

            for($x = 0; $x < $arrlength; $x++) {
            ?>
            <div class="insta-thumb">
                <img src="<?php echo $img[$x];?>" alt="Image">
                <a target="_blank" href="https://www.instagram.com/" class="insta-btn "><i class="fab fa-instagram"></i></a>
            </div>
            <?php }; 
        ?>
    </div>
</div>