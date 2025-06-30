<?php
    $title = array(
        'Plumbing Diagnosis',
        'Plumbing Diagnosis',
        'Plumbing Diagnosis',
        'Plumbing Diagnosis',
        'Plumbing Diagnosis',
        'Plumbing Diagnosis',
        'Plumbing Diagnosis',
        'Plumbing Diagnosis',
        'Plumbing Diagnosis',
    );
    $img = array(
        'assets/img/project/project1-5.jpg',
        'assets/img/project/project1-6.jpg',
        'assets/img/project/project1-7.jpg',
        'assets/img/project/project1-8.jpg',
        'assets/img/project/project1-9.jpg',
        'assets/img/project/project1-1.jpg',
        'assets/img/project/project1-2.jpg',
        'assets/img/project/project1-3.jpg',
        'assets/img/project/project1-4.jpg',
        
    );
    $sub = array(
        'Kitchen',
        'Kitchen',
        'Kitchen',
        'Kitchen',
        'Kitchen',
        'Kitchen',
        'Kitchen',
        'Kitchen',
        'Kitchen',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="project-card">
                <div class="box-img">
                    <img src="<?php echo $img[$x];?>" alt="project image">
                </div>
                <div class="box-content text-start style2">
                   <a href="project-details.htm" class="icon-btn style2">
                     <img src="assets/img/icon/arrow-right-white.svg" alt="">
                  </a>
                  <div>
                     <p class="box-subtitle"><?php echo $sub[$x];?></p>
                    <h3 class="box-title"><a href="project-details.html"><?php echo $title[$x];?></a></h3>
                  </div>
                </div> 
                            
            </div>
        </div>

    <?php if($x == $y) {
        break;
    } }; 
?>