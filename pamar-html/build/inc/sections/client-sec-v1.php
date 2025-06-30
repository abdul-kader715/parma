
<!--==============================
Client Area  
==============================-->
<div class="client-area-1 <?php echo $klass;?>" data-bg-src="assets/img/bg/team_bg_3_1.png" data-overlay="black" data-opacity="9">
    <div class="container-fluid p-0">
        <div class="swiper th-slider client-slider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"400":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"6"}}, "spaceBetween": "0", "loop": "true"}'>
            <div class="swiper-wrapper">
                <?php
                    $img = array(
                        'assets/img/client/client1-1.svg',
                        'assets/img/client/client1-2.svg',
                        'assets/img/client/client1-3.svg',
                        'assets/img/client/client1-4.svg',
                        'assets/img/client/client1-5.svg',
                        'assets/img/client/client1-6.svg',
                        'assets/img/client/client1-1.svg',
                        'assets/img/client/client1-2.svg',
                        'assets/img/client/client1-3.svg',
                        'assets/img/client/client1-4.svg',
                        'assets/img/client/client1-5.svg',
                        'assets/img/client/client1-6.svg',
                    );
                    $arrlength = count($img);

                    for($x = 0; $x < $arrlength; $x++) {
                    ?>
                        <div class="swiper-slide">
                            <a href="#" class="client-card">
                                <img src="<?php echo $img[$x];?>" alt="Image">
                            </a>
                        </div>
                        
                    <?php if($x == $y) {
                        break;
                    } }; 
                ?>
            </div> 
        </div>
    </div>
</div>