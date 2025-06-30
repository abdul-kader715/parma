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
        'assets/img/project/project_6_1.png',
        'assets/img/project/project_6_2.png',
        'assets/img/project/project_6_3.png',
        'assets/img/project/project_6_5.png',
        'assets/img/project/project_6_4.png',
        'assets/img/project/project_6_6.png',
    );
    $sub = array(
        'Business',
        'Advisory',
        'Business',
        'Advisory',
        'Business',
        'Advisory',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>  
        <div class="col-xl-4 col-md-6 filter-item">
            <div class="project-card style6">
                <div class="project-img">
                    <img src="<?php echo $img[$x];?>" alt="project image">
                </div>
                <div class="project-content">
                    <div class="project-details">
                        <a href="project-details.html" class="icon-btn"><i class="far fa-arrow-up-right"></i></a>
                        <p class="project-subtitle"><?php echo $sub[$x];?></p>
                        <h3 class="project-title"><a href="project-details.html"><?php echo $title[$x];?></a></h3>
                    </div>
                </div>
            </div>      
        </div>

    <?php if($x == $y) {
        break;
    } }; 
?>