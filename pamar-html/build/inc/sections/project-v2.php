<?php
    $subtitle = array(
        'Residential',
        'Residential',
        'Residential',
        'Residential',
        'Residential',
        'Residential',
        'Residential',
        'Residential',
        'Residential',
        'Residential',
        'Residential',
    );
    $title = array(
        'Fixture installation and repair',
        'Fixture installation and repair',
        'Fixture installation and repair',
        'Fixture installation and repair',
        'Fixture installation and repair',
        'Fixture installation and repair',
        'Fixture installation and repair',
        'Fixture installation and repair',
        'Fixture installation and repair',
        'Fixture installation and repair',
        'Fixture installation and repair',
    );
    $img = array(
        'assets/img/project/project2-1.jpg',
        'assets/img/project/project2-2.jpg',
        'assets/img/project/project2-3.jpg',
        'assets/img/project/project2-4.jpg',
        'assets/img/project/project2-2.jpg',
        'assets/img/project/project2-1.jpg',
        'assets/img/project/project2-2.jpg',
        'assets/img/project/project2-3.jpg',
        'assets/img/project/project2-4.jpg',
        'assets/img/project/project2-2.jpg',
        'assets/img/project/project2-2.jpg',

    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>" >
            <div class="project-card style2">
                <div class="box-img">
                    <img src="<?php echo $img[$x];?>" alt="img">
                    <a href="<?php echo $img[$x];?>" class="popup-image">
                    <img src="assets/img/icon/popup-icon.svg" alt="">
                    </a>
                </div>
                 <div class="box-content ">
                    <div>
                        <p class="box-subtitle"><?php echo $subtitle[$x];?></p>
                        <h3 class="box-title"><a href="project-details.html"><?php echo $title[$x];?></a></h3>
                    </div>
                    <a href="project-details.htm" class="icon-btn style2">
                        <img src="assets/img/icon/arrow-right2.svg" alt="">
                    </a>  
                </div> 
            </div>
        </div>
    <?php if($x == $y) {
        break;
    } }; 
?>