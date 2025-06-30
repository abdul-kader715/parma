<?php
    $title = array(
        'Framer',
        'Figma',
        'Photoshop',
        'Webflow',
        'Miro',
        'Framer',
        'Figma',
        'Photoshop',
        'Webflow',
        'Miro',
    );
    $icon = array(
        'assets/img/icon/work-icon/1-1.png',
        'assets/img/icon/work-icon/1-2.png',
        'assets/img/icon/work-icon/1-3.png',
        'assets/img/icon/work-icon/1-4.png',
        'assets/img/icon/work-icon/1-5.png',
        'assets/img/icon/work-icon/1-1.png',
        'assets/img/icon/work-icon/1-2.png',
        'assets/img/icon/work-icon/1-3.png',
        'assets/img/icon/work-icon/1-4.png',
        'assets/img/icon/work-icon/1-5.png',
    );
    $text = array(
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum senectus dis nunc fermentum tellus id. Eros tempor.',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum senectus dis nunc fermentum tellus id. Eros tempor.',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum senectus dis nunc fermentum tellus id. Eros tempor.',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum senectus dis nunc fermentum tellus id. Eros tempor.',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum senectus dis nunc fermentum tellus id. Eros tempor.',    
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum senectus dis nunc fermentum tellus id. Eros tempor.',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum senectus dis nunc fermentum tellus id. Eros tempor.',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum senectus dis nunc fermentum tellus id. Eros tempor.',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum senectus dis nunc fermentum tellus id. Eros tempor.',
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum senectus dis nunc fermentum tellus id. Eros tempor.',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="work-card">
                <div class="card-bg-shape">
                    <img src="assets/img/bg/work-card-bg.png" alt="img">
                </div>
                <div class="box-content">
                    <div class="box-icon">
                        <img src="<?php echo $icon[$x];?>" alt="Icon">
                    </div>
                    <h3 class="box-title"><?php echo $title[$x];?></h3>
                    <p class="box-text"><?php echo $text[$x];?></p>
                    <a href="contact.html" class="th-btn btn-sm style9 btn-radius-0 px-30">Download Now <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    <?php }; 
?>