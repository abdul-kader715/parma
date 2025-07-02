<?php 
    $title = array(
        'James Carter',
        'Michael Bennett',
        'William Turner',
        'Daniel Brooks',
        'James Carter',
        'Michael Bennett',
        'William Turner',
        'Daniel Brooks',
    );
    $img = array(
        'assets/img/team/team_3_1.jpg',
        'assets/img/team/team_3_2.jpg',
        'assets/img/team/team_3_3.jpg',
        'assets/img/team/team_3_4.jpg',
        'assets/img/team/team_3_1.jpg',
        'assets/img/team/team_3_2.jpg',
        'assets/img/team/team_3_3.jpg',
        'assets/img/team/team_3_4.jpg',
    );

    $arrlength = count($title);
    for($x = 0; $x < $arrlength; $x++) { ?>
        <div class="<?php echo $klass;?>">
            <div class="th-team team-card style3" data-cue="slideInUp">
                <div class="team-img bg-mask" data-mask-src="assets/img/shape/testi-card3-shape.png">
                    <img src="<?php echo $img[$x];?>" alt="Team">
                </div>

                <div class="team-social">
                    <button class="play-btn" tabindex="0">
                        <i class="fa-regular fa-share-nodes"></i>
                    </button>
                    <div class="th-social style12">
                        <a href="http://facebook.com" tabindex="0"><i class="fab fa-facebook-f"></i></a>
                        <a href="http://twitter.com" tabindex="0"><i class="fab fa-twitter"></i></a>
                        <a href="http://instagram.com" tabindex="0"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="team-card-content">
                    <h3 class="box-title"><a href="team-details.html"><?php echo $title[$x];?></a></h3> 
                    <span class="box-text">Solar Specialist</span>                   
                </div>
                
            </div>
        </div>
        
    <?php if($x == $y) {
        break;
    } }; 
?>