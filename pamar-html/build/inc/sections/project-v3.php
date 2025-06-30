<?php
    $title = array(
        'Artificial Intelligence',
        'Smart House Technology',
        'AI Machine Learning',
        'Speech recognizer',
        'Artificial Intelligence',
        'Smart House Technology',
        'AI Machine Learning',
        'Speech recognizer',
        'Artificial Intelligence',
        'Smart House Technology',
        'AI Machine Learning',
        'Speech recognizer',
    );
    $subtitle = array(
        'User Research',
        'Robotics, Program',
        'Technology, Program',
        'AI, Program',
        'User Research',
        'Robotics, Program',
        'Technology, Program',
        'AI, Program',
        'User Research',
        'Robotics, Program',
        'Technology, Program',
        'AI, Program',
    );
    $img = array(
        'assets/img/project/project3-1.jpg',
        'assets/img/project/project3-2.jpg',
        'assets/img/project/project3-3.jpg',
        'assets/img/project/project3-4.jpg',
        'assets/img/project/project3-5.jpg',
        'assets/img/project/project3-1.jpg',
        'assets/img/project/project3-2.jpg',
        'assets/img/project/project3-3.jpg',
        'assets/img/project/project3-4.jpg',
        'assets/img/project/project3-5.jpg',
        'assets/img/project/project3-1.jpg',
        'assets/img/project/project3-2.jpg',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="project-card3">
                <div class="box-img" data-mask-src="assets/img/shape/project-card3-shape.png">
                    <img src="<?php echo $img[$x];?>" alt="project image">
                    <a href="project-details.html" class="icon-btn style5"><i class="fal fa-arrow-right"></i></a>
                </div>
                <div class="box-content">
                    <p class="box-subtitle text-white"><?php echo $subtitle[$x];?></p>
                    <h3 class="box-title text-white"><a href="project-details.html"><?php echo $title[$x];?></a></h3>
                </div>
            </div>
        </div>

    <?php if($x == $y) {
        break;
    } }; 
?>