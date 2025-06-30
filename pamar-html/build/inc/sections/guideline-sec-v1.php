<!--==============================
Course Area  
==============================-->
<section class="overflow-hidden <?php echo $klass;?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="title-area text-center">
                    <span class="sub-title"><img src="assets/img/theme-img/title_shape_1.svg" alt="shape">Driving Guidelines</span>
                    <h2 class="sec-title">Our Advantage is Experience Guidelines</h2>
                </div>
            </div>
        </div>
        <div class="guideline-area">
            <div class="guide-map">
                <img src="assets/img/normal/guideline_map.png" alt="Guide">
            </div>
            <div class="guide-map-phone">
                <img src="assets/img/normal/guideline_map_phone.png" alt="Guide">
            </div>
            <?php
                $title = array(
                    'Keep a safe distance',
                    'Speed Limit',
                    'Turning Signal Light On',
                    'Seat Belt',
                    'Avoid Distractions',
                    'Drive Sober',
                    'Practice defensive driving',
                    'Know traffic laws',
                );
                $img = array(
                    'assets/img/icon/guide_1.svg',
                    'assets/img/icon/guide_2.svg',
                    'assets/img/icon/guide_3.svg',
                    'assets/img/icon/guide_4.svg',
                    'assets/img/icon/guide_5.svg',
                    'assets/img/icon/guide_6.svg',
                    'assets/img/icon/guide_7.svg',
                    'assets/img/icon/guide_8.svg',
                );
                $text = array(
                    'Keep a safe distance from the vehicle in front of you and avoid tailgating',
                    'Follow the speed limit and adjust your speed according the road conditions.',
                    'Use your turn signal before changing lane or turning and check your blind spots.',
                    'Wear your seat belt and make sure your passengers do the same',
                    'Avoid distractions such as using your phone, eating, drinking the while driving',
                    'Drive sober and drug-free and avoid driving when you are tired or drowsy',
                    'Practice defensive driving by being alert, cautiou and courteous',
                    'Know the local traffic laws and signs and follow them accordingly',
                ); 
                $extra_class = array(
                    'right-align one',
                    'right-align two',
                    'right-align three',
                    'right-align four',
                    'left-align five',
                    'left-align six',
                    'left-align seven',
                    'left-align eight',
                );
                $arrlength = count($title);

                for($x = 0; $x < $arrlength; $x++) {
                ?>
                    <div class="guide-feature <?php echo $extra_class[$x];?>">
                        <div class="guide-feature_icon">
                            <img src="<?php echo $img[$x];?>" alt="Icon">
                        </div>
                        <div class="media-body">
                            <h3 class="box-title2"><?php echo $title[$x];?></h3>
                            <p class="guide-feature_text"><?php echo $text[$x];?></p>
                        </div>
                    </div>
                    
                <?php if($x == $y) {
                    break;
                } }; 
            ?>
        </div>
    </div>
</section>