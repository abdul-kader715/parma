<?php
    $title = array(
        'Bathroom Remodeling',
        'Smart House Technology',
        'Bathroom Remodeling',
    );
    $subtitle = array(
        'Yes, we offer warranties on both parts and labor. Specific terms vary by service—ask for details during your estimate.',
        'Both parts and labor are backed by warranties. The terms can differ depending  to inquire when we give you your estimate',
        'Yes, we offer warranties on both parts and labor. Specific terms vary by service—ask for details during your estimate.',
    );
      $tag = array(
        'Plumbing',
        'Plumbing',
        'Plumbing',
    );

    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="project-card3">
                <div class="box-content">
                    <span class="box-tag"><?php echo $tag[$x];?></span>
                    <h3 class="box-title "><a href="project-details.html"><?php echo $title[$x];?></a></h3>
                    <p class="box-subtitle"><?php echo $subtitle[$x];?></p>
                    <a href="project-details.html" class="th-btn style14">View Project</a>
                </div>
            </div>
        </div>

    <?php if($x == $y) {
        break;
    } }; 
?>