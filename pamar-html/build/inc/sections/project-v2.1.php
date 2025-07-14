
<?php
    $subtitle = array(
        'Residential',
        'Residential',
        'Residential',
        'Industrial',
        'Commercial',
        'Residential',
    );
    $title = array(
        'Fixture installation and repair',
        'Garbage Disposals',
        'showers & Bathtubs repair',
        'Fixture installation and repair',
        'Pipe Repair in commercial area',
        'pipe leak in Residential',
    );
     $filter_class = array(
        'filter-item cat3',
        'filter-item cat5 cat2',
        'filter-item cat1 cat4',
        'filter-item cat2 cat5',
        'filter-item cat3 cat1',
        'filter-item cat5 cat4 cat1 cat2',
        'filter-item cat2 cat1 cat4 cat5',
        'filter-item cat3',
    );
    $img = array(
        'assets/img/project/project3-1.jpg',
        'assets/img/project/project3-2.jpg',
        'assets/img/project/project3-3.jpg',
        'assets/img/project/project3-4.jpg',
        'assets/img/project/project3-5.jpg',
        'assets/img/project/project3-6.jpg',

    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?> <?php echo $filter_class[$x];?>" >
            <div class="project-card style4">
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