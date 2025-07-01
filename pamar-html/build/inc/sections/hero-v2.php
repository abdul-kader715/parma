
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
                  <button data-slider-prev="#heroSlider2" class="slider-arrow style3 default">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path d="M12 2.12158C12 3.16588 10.965 4.72858 9.91885 6.04098C8.57165 7.73068 6.96385 9.20678 5.11895 10.3338C3.73685 11.1777 2.05855 11.9878 0.71035 11.9878M12 21.8784C12 20.8341 10.965 19.2714 9.91885 17.959C8.57165 16.2694 6.96385 14.7932 5.11895 13.6662C3.73685 12.8223 2.05855 12.0122 0.71035 12.0122M0.71035 12H23.2896"></path>
                        </svg>
                  </button>
                  <button data-slider-next="#heroSlider2" class="slider-arrow style3 default">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path d="M12 2.12158C12 3.16588 13.035 4.72858 14.0812 6.04098C15.4284 7.73068 17.0362 9.20678 18.8811 10.3338C20.2632 11.1777 21.9414 11.9878 23.2896 11.9878M12 21.8784C12 20.8341 13.035 19.2714 14.0812 17.959C15.4284 16.2694 17.0362 14.7932 18.8811 13.6662C20.2632 12.8223 21.9414 12.0122 23.2896 12.0122M23.2896 12H0.710449"></path>
                     </svg>
                  </button>
               </div>
        </div> 
    <div class="scroll-down">
        <a href="#service-sec" class="scroll-wrap">Scroll Down<span><img src="assets/img/icon/down-arrow.svg" alt=""></span></a>
    </div> 
</div>
<!--======== / Hero Section ========-->