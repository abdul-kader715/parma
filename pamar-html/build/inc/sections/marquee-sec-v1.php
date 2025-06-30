
<!--==============================
Marquee Area  
==============================-->
<div class="<?php echo $klass;?>" data-cue="slideInUp">
        <div class="container-fluid p-0">
            <div class="swiper th-slider marquee-slider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":"auto"}},"autoplay":{"delay":0,"disableOnInteraction":false},"noSwiping":"true","speed":10000,"spaceBetween":30}'>
                <div class="swiper-wrapper">
                    <?php
                        $text = array(
                            'Cleaning Services',
                            'Plumbing Services',
                            'Electrical Services',
                            'Cleaning Services',
                            'Plumbing Services',
                            'Electrical Services',
                            'Cleaning Services',
                            'Plumbing Services',
                        );
                   
                        $arrlength = count($text);
                        for($x = 0; $x < $arrlength; $x++) {
                        ?>
                            <div class="swiper-slide">
                                <div class="marquee-card">
                                    <div class="marquee-icon color-masking">
                                        <div class="masking-src" data-mask-src="assets/img/shape/star-shape1.png"></div>
                                        <img src="assets/img/shape/star-shape1.png" alt="img">
                                    </div>
                                    <a target="_blank" href="#">
                                        <?php echo $text[$x];?>
                                    </a>                            
                                </div>
                            </div>
                        <?php }; 
                    ?>
                    
                </div>
            </div>
    
        </div>
</div>
