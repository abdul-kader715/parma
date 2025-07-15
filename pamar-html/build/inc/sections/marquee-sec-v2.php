
<!--==============================
Marquee Area  
==============================-->
<div class="<?php echo $klass;?>" data-cue="slideInUp">
    <div class="marquee-wrap2">
        <div class="container-fluid p-0">
           <div class="swiper th-slider marquee-slider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":"auto"}},"autoplay":{"delay":0,"disableOnInteraction":false},"noSwiping":"true","speed":10000,"spaceBetween":30}'>
                <div class="swiper-wrapper">
                    <?php
                        $text = array(
                            'Best Services',
                            '325K Reviews',
                            'Customer Reviews',
                            'Emergengy Call',
                            'Best Services',
                            '325K Reviews',
                            'Customer Reviews',
                            'Emergengy Call',
                        );
                         $icon = array(
                            'assets/img/icon/marquee2-1.svg',
                            'assets/img/icon/marquee2-2.svg',
                            'assets/img/icon/marquee2-3.svg',
                            'assets/img/icon/marquee2-1.svg',
                            'assets/img/icon/marquee2-2.svg',
                            'assets/img/icon/marquee2-3.svg',
                            'assets/img/icon/marquee2-1.svg',
                            'assets/img/icon/marquee2-3.svg',
                        );
                   
                   
                        $arrlength = count($text);
                        for($x = 0; $x < $arrlength; $x++) {
                        ?>
                            <div class="swiper-slide">
                                <div class="marquee-card style2">
                                    <div class="marquee-icon">
                                        <img src="<?php echo $icon[$x];?>" alt="img">
                                    </div>
                                    <a target="_blank" href="#" data-hover="<?php echo $text[$x];?>">
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
    
</div>
