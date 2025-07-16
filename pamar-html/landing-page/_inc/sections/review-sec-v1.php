<!--==============================
Testimonial Area  
==============================-->
<section class="space" id="testiSec">
    <div class="space-extra-top" style="background-image: url(assets/img/testi-bg.png)">
        <div class="container">
            <div class="title-area text-center">
                <h2 class="sec-title">Reviews About Us</h2>
                <p class="sec-text">Almost all the customers like our products, Most of them always buy from us. <br>Here are some reviews from our customers</p>
            </div>
            <div class="slider-area">
                <div class="swiper has-shadow th-slider" data-slider-options='{"speed": 1000,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <?php
                            $title = array(
                                'Victory03',
                                'Casola Roalex',
                                'Pravin Man',
                                'ICC5',
                                'Jet Medianc',
                                'Odel Eyano',
                                'GostSix',
                                'Sahil65',
                                'Cub Odieas',
                            );
                            $text = array(
                                'Customer Support was awesome, Shahin supported with the issue well and listened to the requirement patiencly, Yes theme requires some update for sure, and hope....',
                                'The theme is very strong, fast and customizable. I have found some little translaction mistake and the support give me an INSTANT help providing it via Google.....',
                                'Excellent job on the template, and good technical support. I appreciate your flexibility and ability to work with me to make sure my issues were resolved on a spot. Kudos!.....',
                                'The customer support is amazing! I emailed and within 5 minutes, support jumped straight in and 20 minutes later my site was working perfectly! Thank you so much',
                                'The authors of this theme have been so helpful and responsive. They were able to fix a couple issues I had within just a few minutes. I am very pleased.....',
                                'Excellent job on the template, and good technical support. I appreciate your flexibility and ability to work with me to make sure my issues were resolved on a spot. Kudos!',
                                'The customer support is amazing! I emailed and within 5 minutes, support jumped straight in and 20 minutes later my site was working perfectly! Thank you so much',
                                'Best Customer support ever, Got help within an hour after mailing the customer support. Loved the experience
                                Highly Recommended them for wordpress theme.',
                                'Great theme with great price. Good design and options for design a website. Quick answer of support.Good luck for your developers and designer of theme!!',
                            );
                            $arrlength = count($title);
        
                            for($x = 0; $x < $arrlength; $x++) {
                            ?>
                                <div class="swiper-slide">
                                    <div class="testi-box">
                                        <div class="testi-box_profile">
                                            <div class="testi-box_avater">
                                                <img src="assets/img/icons/envato.svg" alt="Avater">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="testi-box_name"><?php echo $title[$x];?></h3>
                                                <span class="testi-box_desig">themeforest.net</span>
                                            </div>
                                        </div>
                                        <div class="testi-box_quote">
                                        <svg width="35" height="26" viewBox="0 0 35 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M27.5 15.5C28.3854 15.5 29.2188 15.3438 30 15.0312V15.5C29.9479 16.9062 29.4531 18.0781 28.5156 19.0156C27.5781 19.9531 26.4062 20.4479 25 20.5C24.2708 20.5 23.6719 20.7344 23.2031 21.2031C22.7344 21.6719 22.5 22.2708 22.5 23C22.5 23.7292 22.7344 24.3281 23.2031 24.7969C23.6719 25.2656 24.2708 25.5 25 25.5C27.8125 25.4479 30.1562 24.4583 32.0312 22.5312C33.9583 20.6562 34.9479 18.3125 35 15.5V8C34.9479 5.86458 34.2188 4.09375 32.8125 2.6875C31.4062 1.28125 29.6354 0.552083 27.5 0.5C25.3646 0.552083 23.5938 1.28125 22.1875 2.6875C20.7812 4.09375 20.0521 5.86458 20 8C20.0521 10.1354 20.7812 11.9062 22.1875 13.3125C23.5938 14.7188 25.3646 15.4479 27.5 15.5ZM7.5 15.5C8.38542 15.5 9.21875 15.3438 10 15.0312V15.5C9.94792 16.9062 9.45312 18.0781 8.51562 19.0156C7.57812 19.9531 6.40625 20.4479 5 20.5C4.27083 20.5 3.67188 20.7344 3.20312 21.2031C2.73438 21.6719 2.5 22.2708 2.5 23C2.5 23.7292 2.73438 24.3281 3.20312 24.7969C3.67188 25.2656 4.27083 25.5 5 25.5C7.8125 25.4479 10.1562 24.4583 12.0312 22.5312C13.9583 20.6562 14.9479 18.3125 15 15.5V8C14.9479 5.86458 14.2188 4.09375 12.8125 2.6875C11.4062 1.28125 9.63542 0.552083 7.5 0.5C5.36458 0.552083 3.59375 1.28125 2.1875 2.6875C0.78125 4.09375 0.0520833 5.86458 0 8C0.0520833 10.1354 0.78125 11.9062 2.1875 13.3125C3.59375 14.7188 5.36458 15.4479 7.5 15.5Z" fill="#7CB342"/>
                                        </svg>
        
                                        </div>
                                        <p class="testi-box_text"><?php echo $text[$x];?></p>
                                    </div>
                                </div>
                            <?php } 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>