<!--==============================
History Area  
==============================-->
<div class="history-sec1" id="story-sec" data-bg-src="assets/img/bg/history_bg_1.jpg">
    <div class="pattern-bg bg-repeat" data-bg-src="assets/img/bg/wedding_bg_1.png"></div>
    <div class="container">
        <div class="countdown-area" data-bg-src="assets/img/bg/countdown_bg.png">
            <span class="countdown-subtitle">We Are Getting Married</span>
            <h2 class="countdown-title">October 24, 2023</h2>
            <ul class="counter-list wedding-counter" data-offer-date="10/24/2023">
                <li data-bg-src="assets/img/bg/countdown_item_bg.png">
                    <div class="day count-number">00</div>
                    <span class="count-name">Days</span>
                </li>
                <li data-bg-src="assets/img/bg/countdown_item_bg.png">
                    <div class="hour count-number">00</div>
                    <span class="count-name">Hours</span>
                </li>
                <li data-bg-src="assets/img/bg/countdown_item_bg.png">
                    <div class="minute count-number">00</div>
                    <span class="count-name">Minutes</span>
                </li>
                <li data-bg-src="assets/img/bg/countdown_item_bg.png">
                    <div class="seconds count-number">00</div>
                    <span class="count-name">Seconds</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="container space-extra-top space-bottom">
        <div class="title-area text-center">
            <span class="sub-title"><img src="assets/img/shape/title_left.svg" alt="shape">Short Story<img src="assets/img/shape/title_right.svg" alt="shape"></span>
            <h2 class="sec-title">Let’s See Our Story</h2>
        </div>
        <div class="row gy-4 justify-content-center">
            <?php
                $title = array(
                    'First Time We Meet',
                    'Our First Date',
                    'Marriage Proposal',
                );
                $date = array(
                    '13 November, 2021',
                    '16 December, 2021',
                    '22 February, 2023',
                );
                $text = array(
                    'Holisticly expedite distributed innovation for interactive total linkage. Appropriately reconceptualize 24/365 leadership skills before go. Appropriately aggregate cross-unit e-business.',
                    'Get start expedite distributed innovation for interactive total linkage. Appropriately reconceptualize 24/365 leadership skills before go. Appropriately aggregate cross-unit e-commerce.',
                    'Publicly expedite distributed innovation for interactive total linkage. Appropriately reconceptualize 24/365 leadership skills before go. Appropriately aggregate cross-unit on the way.',
                );
                $arrlength = count($title);

                for($x = 0; $x < $arrlength; $x++) {
                ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="story-box" data-bg-src="assets/img/bg/story_box_bg.png">
                            <h3 class="box-title story-box_title"><?php echo $title[$x];?></h3>
                            <span class="story-box_date"><?php echo $date[$x];?></span>
                            <p class="story-box_text"><?php echo $text[$x];?></p>
                        </div>
                    </div>
                    
                <?php }; 
            ?>
        </div>
    </div>
</div>
