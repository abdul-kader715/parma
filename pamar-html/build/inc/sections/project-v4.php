<?php
    $title = array(
        'Business Process',
        'Business Process',
        'Business Process',
        'Business Process',
    );
    $img = array(
        'assets/img/project/project4-1.png',
        'assets/img/project/project4-2.png',
        'assets/img/project/project4-1.png',
        'assets/img/project/project4-2.png',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="project-card4">
                <div class="box-img">
                    <img src="<?php echo $img[$x];?>" alt="project image">
                </div>
                <div class="box-content">
                    <h3 class="box-title"><a href="project-details.html"><?php echo $title[$x];?></a></h3>
                    <p class="box-text">Our business consulting services are rooted in a deep understanding of industry trends, best practices, and the latest technologies. Efficiently streamline workflows for heightened productivity and reduced waste.</p>
                    <div class="checklist style3">
                        <ul>
                            <li>Strategic planning</li>
                            <li>Strategic consulting</li>
                        </ul>
                    </div>
                    <a href="project-details.html" class="th-btn btn-sm style10 btn-radius-8">Read Case Study<i class="far fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>

    <?php if($x == $y) {
        break;
    } }; 
?>