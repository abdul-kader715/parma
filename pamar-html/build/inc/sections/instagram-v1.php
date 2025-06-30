<div class="bg-smoke" data-pos-for=".footer-wrapper" data-sec-pos="bottom-half">
    <div class="container th-container3 z-index-common">
        <div class="row gx-10 th-carousel" data-slide-show="6" data-lg-slide-show="5" data-md-slide-show="4" data-sm-slide-show="3" data-xs-slide-show="2">
            <?php
                $img = array(
                    'assets/img/insta/insta_1_1.jpg',
                    'assets/img/insta/insta_1_2.jpg',
                    'assets/img/insta/insta_1_3.jpg',
                    'assets/img/insta/insta_1_4.jpg',
                    'assets/img/insta/insta_1_5.jpg',
                    'assets/img/insta/insta_1_6.jpg',
                );
                $arrlength = count($img);

                for($x = 0; $x < $arrlength; $x++) {
                ?>
                    <div class="col-auto">
                        <div class="insta-box">
                            <img src="<?php echo $img[$x];?>" alt="Instagram">
                            <a target="_blank" href="https://instagram.com/" class="icon-btn"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                <?php }; 
            ?>
        </div>
    </div>
</div>