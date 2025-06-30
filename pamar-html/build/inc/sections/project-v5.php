<?php
    $title = array(
        'Diverse user engagement',
        'Diverse user engagement',
        'Diverse user engagement',
        'Diverse user engagement',
        'Diverse user engagement',
        'Diverse user engagement',
    );
    $img = array(
        'assets/img/project/project_5_1.png',
        'assets/img/project/project_5_2.png',
        'assets/img/project/project_5_3.png',
        'assets/img/project/project_5_1.png',
        'assets/img/project/project_5_2.png',
        'assets/img/project/project_5_3.png',
    );
    $sub = array(
        'Business',
        'Business',
        'Business',
        'Business',
        'Business',
        'Business',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>  
        <div class="swiper-slide">
            <div class="project-card style5">
                <div class="project-img">
                    <img src="<?php echo $img[$x];?>" alt="project image">
                </div>
                <div class="project-content">
                    <div class="project-details">
                        <p class="project-subtitle"><?php echo $sub[$x];?></p>
                        <h3 class="project-title"><a href="project-details.html"><?php echo $title[$x];?></a></h3>
                    </div>
                    <a href="project-details.html" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                </div>
            </div>      
        </div>

    <?php if($x == $y) {
        break;
    } }; 
?>