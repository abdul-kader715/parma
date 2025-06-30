<?php
    $title = array(
        'Finance user engagement',
        'Diverse user engagement',
        'Finance user engagement',
        'Diverse user engagement',
        'Finance user engagement',
    );
    $img = array(
        'assets/img/project/project_7_1.png',
        'assets/img/project/project_7_2.png',
        'assets/img/project/project_7_3.png',
        'assets/img/project/project_7_4.png',
        'assets/img/project/project_7_5.png',
    );
    $sub = array(
        'Financial',
        'Business',
        'Advisory',
        'Financial',
        'Business',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>  
        <div class="col-lg-6 filter-item">
            <div class="project-card style7">
                <div class="project-img">
                    <img src="<?php echo $img[$x];?>" alt="project image">
                </div>
                <a href="project-details.html" class="icon-btn"><i class="far fa-arrow-up-right"></i></a>
                <div class="project-content">
                    <div class="project-details">
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