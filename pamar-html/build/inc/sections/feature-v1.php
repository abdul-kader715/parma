<?php
    $title = array(
        'Highly skilled team',
        'Fast and reliable',
        '24/7 availability',
        'Chatbots',
    );
    $icon = array(
        'assets/img/icon/feature-icon1-1.svg',
        'assets/img/icon/feature-icon1-2.svg',
        'assets/img/icon/feature-icon1-3.svg',
        'assets/img/icon/feature-icon1-4.svg',
    );
    $text = array(
        'Skilled, certified & continuously educated plumbers voluptuous selenite antique corrupted.',
        'Skilled, certified & continuously educated plumbers voluptuous selenite antique corrupted.',
        'Skilled, certified & continuously educated plumbers voluptuous selenite antique corrupted.',
        'Skilled, certified & continuously educated plumbers voluptuous selenite antique corrupted.',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="feature-card" data-cue="slideInUp">
                  <div class="box-icon">
                     <div>
                        <img src="<?php echo $icon[$x];?>" alt="icon">
                     </div>
                  </div>
                <div class="feature-card-details text-left">
                    <h3 class="box-title"><?php echo $title[$x];?></h3>
                    <p class="box-text"><?php echo $text[$x];?></p>
                    <a href="blog.html" class="link-btn2"> 
                     <span>Learn More</span>
                    <div class="icon">
                        
                     </div>
                    </a>
                </div>
            </div>
        </div>
    <?php if($x == $y) {
        break;
    } };
?>