<!--==============================
About Area  
==============================-->
<div class="overflow-hidden bg-smoke <?php echo $klass;?>">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="title-area mb-35 text-center text-xl-start">
                    <span class="sub-title"><img src="assets/img/theme-img/title_shape_2.svg" alt="shape">GREAT IT SKILLS</span>
                    <h2 class="sec-title">More Than 24+ Years Experience We Provide <span class="text-theme fw-normal">IT Services</span></h2>
                </div>
                <p class="mt-n2 mb-25 text-center text-xl-start">Collaboratively envisioneer user friendly supply chains and cross unit imperative. Authoritativel fabricate competitive resource and holistic. Holisticly restore real time resources whereas standardized networks.</p>
                <div class="pe-xxl-4">
                    <?php
                        $title = array(
                            "Business Strategy",
                            "Softwer Development",
                            "Cyber Security",
                            "Artificial Intelligence",
                        );
                        $num = array(
                            "85%",
                            "95%",
                            "90%",
                            "80%",
                        );
                        $arrlength = count($title);

                        for($x = 0; $x < $arrlength; $x++) {
                        ?>
                            <div class="skill-feature">
                                <h3 class="skill-feature_title"><?php echo $title[$x];?></h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width: <?php echo $num[$x];?>;">
                                        <div class="progress-value"><?php echo $num[$x];?></div>
                                    </div>
                                </div>
                            </div>
                        <?php }; 
                    ?>
                </div>
            </div>
            <div class="col-xl-6 mt-40 mt-xl-0">
                <div class="video-box1">
                    <img class="tilt-active" src="assets/img/normal/video_shape_1.png" alt="Video">
                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup" data-top="0%" data-left="0%"><img src="assets/img/shape/tech_shape_3.png" alt="shape"></div>
    <div class="shape-mockup" data-bottom="0%" data-right="0%"><img src="assets/img/shape/tech_shape_4.png" alt="shape"></div>
</div>