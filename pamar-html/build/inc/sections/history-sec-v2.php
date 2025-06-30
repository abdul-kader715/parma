<!--==============================
History Area  
==============================-->
<div class="bg-smoke2 overflow-hidden <?php echo $klass;?>" id="story-sec" data-bg-src="assets/img/bg/story_bg_1.png">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title"><img src="assets/img/shape/title_left.svg" alt="shape">Short Story<img src="assets/img/shape/title_right.svg" alt="shape"></span>
            <h2 class="sec-title">Let’s See Our Love Story</h2>
            <div class="filter-menu tab-menu1" data-asnavfor=".story-card-slide, #storyDate, #storyImg">
                <button class="tab-btn active">FRIST MEET</button>
                <button class="tab-btn">FRIST DATE</button>
                <button class="tab-btn">MARRIAGE PROPOSAL</button>
                <button class="tab-btn">OUR ENGAGEMENT</button>
            </div>
        </div>
        <div class="story-card-area">
            <div class="story-card-corner">
                <img src="assets/img/shape/story_corner.png" alt="flower">
            </div>
            <div class="story-card-date" data-bg-src="assets/img/shape/heart.svg">
                <div class="th-carousel" id="storyDate" data-fade="true" data-slide-show="1" data-md-slide-show="1">
                    <div>
                        <span>13 November, 2021</span>
                    </div>
                    <div>
                        <span>16 December, 2021</span>
                    </div>
                    <div>
                        <span>22 February, 2023</span>
                    </div>
                    <div>
                        <span>13 November, 2023</span>
                    </div>
                </div>
            </div>
            <div class="story-card-slide th-carousel" data-fade="true" data-slide-show="1" data-md-slide-show="1">
                <?php
                    $title = array(
                        'First Time We Meet',
                        'First Time We Date',
                        'Our Marriage Proposal',
                        'Our Engagement Event',
                    );
                    $img = array(
                        'assets/img/event/story_1_1.png',
                        'assets/img/event/story_1_2.png',
                        'assets/img/event/story_1_3.png',
                        'assets/img/event/story_1_4.png',
                    );
                    $date = array(
                        '13 November, 2021',
                        '16 December, 2021',
                        '22 February, 2023',
                        '13 November, 2023',
                    );
                    $meta1 = array(
                        'Uhan, Suncity, USA',
                        'Gotar, Newyork, USA',
                        'Todas, Florida, USA',
                        'Riman, Colorado, USA',
                    );
                    $text = array(
                        'Holisticly expedite distributed innovation for interactive total linkage. Appropriately reconceptualize 24/365 leadership skills before go. Appropriately aggregate crossunit business. Dynamically harness collaborative data for end-to-end systems. Credibly engage interoperable.',
                        'Crossunit expedite distributed innovation for interactive total linkage. Appropriately reconceptualize 24/365 leadership skills before go. Appropriately aggregate crossunit business. Dynamically harness collaborative data for end-to-end systems. Credibly engage appropriately.',
                        'Aggregate expedite distributed innovation for interactive total linkage. Appropriately reconceptualize 24/365 leadership skills before go. Appropriately aggregate crossunit business. Dynamically harness collaborative data for end-to-end systems. Credibly engage dynamically.',
                        'Groponsit expedite distributed innovation for interactive total linkage. Appropriately reconceptualize 24/365 leadership skills before go. Appropriately aggregate crossunit business. Dynamically harness collaborative data for end-to-end systems. Credibly engage appropriately.',
                    );
                    $arrlength = count($title);

                    for($x = 0; $x < $arrlength; $x++) {
                    ?>
                        <div>
                            <div class="story-card">
                                <div class="story-card_content">
                                    <h3 class="h4 story-card_title"><?php echo $title[$x];?></h3>
                                    <span class="story-card_location"><?php echo $meta1[$x];?></span>
                                    <p class="story-card_text"><?php echo $text[$x];?></p>
                                </div>
                            </div>
                        </div>
                        
                    <?php }; 
                ?>
            </div>
            <div class="story-card-img">
                <div class="img-slide th-carousel" id="storyImg" data-fade="true" data-slide-show="1" data-md-slide-show="1">
                    <?php
                        $img = array(
                            'assets/img/event/story_1_1.png',
                            'assets/img/event/story_1_2.png',
                            'assets/img/event/story_1_3.png',
                            'assets/img/event/story_1_4.png',
                        );
                        $arrlength = count($img);

                        for($x = 0; $x < $arrlength; $x++) {
                        ?>
                            <div>
                                <div class="img-box">
                                    <img src="<?php echo $img[$x];?>" alt="story img">
                                    <div class="story-card_shape">
                                        <img src="assets/img/shape/story_bg_shape.png" alt="shape">
                                    </div>
                                </div>
                            </div>
                        <?php }; 
                    ?>
                </div>
            </div>
            
        </div>
    </div>
</div>
