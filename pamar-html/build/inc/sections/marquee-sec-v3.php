
<!--==============================
Marquee Area  
==============================-->
<div class="<?php echo $klass;?>" data-cue="slideInUp">
    <div class="marquee-wrap2 bg-gradient pt-40 pb-40">
        <div class="container-fluid p-0">
            <div class="swiper th-slider marquee-slider2" data-slider-options='{"breakpoints":{"0":{"slidesPerView":"auto"}},"autoplay":{"delay":0,"disableOnInteraction":false},"noSwiping":"false","speed":10000,"spaceBetween":30}'>
                <div class="swiper-wrapper">
                    <?php
                        $text = array(
                            'Healthcare',
                            'AI Algorithms',
                            'Computer Vision',
                            'Deep Learning',
                            'Customer Service',
                            'Healthcare',
                            'AI Algorithms',
                            'Computer Vision',
                            'Deep Learning',
                            'Customer Service',
                        );
                        $arrlength = count($text);
    
                        for($x = 0; $x < $arrlength; $x++) {
                        ?>
                            <div class="swiper-slide">
                                <div class="marquee-card style2 text-white">
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
    <div class="marquee-wrap3 bg-gray pt-40 pb-40">
        <div class="container-fluid p-0">
            <div class="swiper th-slider marquee-slider2" data-slider-options='{"breakpoints":{"0":{"slidesPerView":"auto"}},"autoplay":{"delay":0,"disableOnInteraction":false},"noSwiping":"false","speed":10000,"spaceBetween":30}'>
                <div class="swiper-wrapper">
                    <?php
                        $text = array(
                            'Healthcare',
                            'AI Algorithms',
                            'Computer Vision',
                            'Deep Learning',
                            'Customer Service',
                            'Healthcare',
                            'AI Algorithms',
                            'Computer Vision',
                            'Deep Learning',
                            'Customer Service',
                        );
                        $arrlength = count($text);
    
                        for($x = 0; $x < $arrlength; $x++) {
                        ?>
                            <div class="swiper-slide">
                                <div class="marquee-card style2 text-white">
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
</div>
