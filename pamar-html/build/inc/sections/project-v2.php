<?php
    $subtitle = array(
        'User Research',
        'Robotics, Program',
        'Technology, Program',
        'AI, Program',
    );
    $title = array(
        'Speech recognizer using deep learning',
        'AI Machine Learning',
        'Smart House Technology',
        'Artificial Intelligence Dev ',
    );
    $img = array(
        'assets/img/project/project2-1.jpg',
        'assets/img/project/project2-2.jpg',
        'assets/img/project/project2-3.jpg',
        'assets/img/project/project2-4.jpg',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>" data-cue="slideInUp">
            <div class="project-card2">
                <div class="box-img">
                    <img src="<?php echo $img[$x];?>" alt="img">
                    <a href="project-details.html" class="icon-btn"><i class="fal fa-arrow-up-right"></i></a>
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