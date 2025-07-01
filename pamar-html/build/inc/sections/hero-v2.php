
<!--==============================
Hero Area
==============================-->
<div class="th-hero-wrapper hero-2" id="hero"  >
    <div class="swiper th-slider" id="heroSlider2" data-slider-options='{"effect":"fade", "autoHeight": "true"}'>
        <div class="swiper-wrapper">
            <?php
                $title = array(
                    'Emergency <span>Plumbing</span> fast solution ',
                    'Expert <span>Plumbing</span> Services available',
                );
             
                $sub = array(
                    'Expert Plumber Services available',
                    'Expert Plumber Services available',
                );
                
                $content = array(
                    'All our plumbers are licensed, insured, background-checked, and customer-rated. Competently repurpose go forward benefits without goal-oriented.',
                    'All our plumbers are licensed, insured, background-checked, and customer-rated. Competently repurpose go forward benefits without goal-oriented.',
                    
                );
            
                $img = array(
                    'assets/img/hero/hero_bg_1_1.jpg',
                    'assets/img/hero/hero_bg_1_2.jpg',
                );
                

                $arrlength = count($title);

                for($x = 0; $x < $arrlength; $x++) {
                ?>
                    <div class="swiper-slide" data-bg-src="<?php echo $img[$x];?>" >
                        <div class="hero-inner">
                            <div class="container">
                                <div class="hero-style1">
                                    <span class="sub-title style5" data-ani="slideinup" data-ani-delay="0.2s">
                                        <img src="assets/img/icon/title-icon3.svg" alt="">
                                         <?php echo $sub[$x];?>
                                    </span>
                                    <h1 class="hero-title text-white">
                                        <span class="title1" data-ani="slideinup" data-ani-delay="0.4s"><?php echo $title[$x];?></span>
                                    </h1>
                                    <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.6s"><?php echo $content[$x];?></p>
                                    <div class="btn-group" data-ani="slideinup" data-ani-delay="0.7s">
                                        <a href="about.html" class="th-btn style7">
                                          <span>Discover More</span>
                                          <div class="icon">
                                             <img src="assets/img/icon/arrow-right-white.svg" alt="">
                                          </div>
                                       </a>
                                        <a href="contact.html" class="th-btn style7 style8">
                                          <span>Contact Us</span>
                                          <div class="icon">
                                             <img src="assets/img/icon/arrow-right-white.svg" alt="">
                                          </div>
                                       </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }; 
            ?>
        </div>
               <div class="icon-box">
                  <button data-slider-prev="#heroSlider2" class="slider-arrow style3 default prev">
                     <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                        <path d="M2.65755 14.2854C2.05236 13.6788 1.7125 12.8569 1.7125 12C1.7125 11.1431 2.05236 10.3212 2.65755 9.71457L10.9174 1.45389C11.0736 1.29209 11.1601 1.07538 11.1582 0.850441C11.1562 0.625504 11.066 0.410333 10.9069 0.251272C10.7479 0.0922111 10.5327 0.00198708 10.3077 3.24307e-05C10.0828 -0.00192222 9.8661 0.0845488 9.7043 0.240821L1.44706 8.5015C0.520421 9.43001 0 10.6882 0 12C0 13.3118 0.520421 14.57 1.44706 15.4985L9.70773 23.7592C9.86954 23.9155 10.0862 24.0019 10.3112 24C10.5361 23.998 10.7513 23.9078 10.9103 23.7487C11.0694 23.5897 11.1596 23.3745 11.1616 23.1496C11.1635 22.9246 11.0771 22.7079 10.9208 22.5461L2.65755 14.2854Z" />
                        <path d="M23.1828 11.1421H4.30907C4.08154 11.1421 3.86333 11.2325 3.70244 11.3934C3.54156 11.5542 3.45117 11.7725 3.45117 12C3.45117 12.2275 3.54156 12.4457 3.70244 12.6066C3.86333 12.7675 4.08154 12.8579 4.30907 12.8579H23.1828C23.4103 12.8579 23.6285 12.7675 23.7894 12.6066C23.9503 12.4457 24.0407 12.2275 24.0407 12C24.0407 11.7725 23.9503 11.5542 23.7894 11.3934C23.6285 11.2325 23.4103 11.1421 23.1828 11.1421Z" />
                        </svg>
                  </button>
                  <button data-slider-next="#heroSlider2" class="slider-arrow style3 default next">
                     <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                        <path d="M22.3425 14.2854C22.9476 13.6788 23.2875 12.8569 23.2875 12C23.2875 11.1431 22.9476 10.3212 22.3425 9.71457L14.0826 1.45389C13.9264 1.29209 13.8399 1.07538 13.8418 0.850441C13.8438 0.625504 13.934 0.410333 14.0931 0.251272C14.2521 0.0922111 14.4673 0.00198708 14.6923 3.24307e-05C14.9172 -0.00192222 15.1339 0.0845488 15.2957 0.240821L23.5529 8.5015C24.4796 9.43001 25 10.6882 25 12C25 13.3118 24.4796 14.57 23.5529 15.4985L15.2923 23.7592C15.1305 23.9155 14.9138 24.0019 14.6888 24C14.4639 23.998 14.2487 23.9078 14.0897 23.7487C13.9306 23.5897 13.8404 23.3745 13.8384 23.1496C13.8365 22.9246 13.9229 22.7079 14.0792 22.5461L22.3425 14.2854Z"/>
                        <path d="M1.81722 11.1421H20.6909C20.9185 11.1421 21.1367 11.2325 21.2976 11.3934C21.4584 11.5542 21.5488 11.7725 21.5488 12C21.5488 12.2275 21.4584 12.4457 21.2976 12.6066C21.1367 12.7675 20.9185 12.8579 20.6909 12.8579H1.81722C1.58969 12.8579 1.37148 12.7675 1.2106 12.6066C1.04971 12.4457 0.959328 12.2275 0.959328 12C0.959328 11.7725 1.04971 11.5542 1.2106 11.3934C1.37148 11.2325 1.58969 11.1421 1.81722 11.1421Z" />
                    </svg>
                  </button>
               </div>
        </div> 
    <div class="scroll-down">
        <a href="#service-sec" class="scroll-wrap">Scroll Down<span><img src="assets/img/icon/down-arrow.svg" alt=""></span></a>
    </div> 
</div>
<!--======== / Hero Section ========-->