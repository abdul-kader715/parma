<?php 
    $title = array(
        'Benjamin Turner',
        'Sophia Hayes',
        'Dominic Harris',
        'Sarah Michel',
        'James Camiron',
        'Herry Michel',
    );
    $img = array(
        'assets/img/team/team_7_1.png',
        'assets/img/team/team_7_2.png',
        'assets/img/team/team_7_3.png',
        'assets/img/team/team_7_4.png',
        'assets/img/team/team_7_5.png',
        'assets/img/team/team_7_6.png',
    );
    $desig = array(
        'UI/UX Designer',
        'Founder & CEO',
        'UI/UX Designer',
        'UI/UX Designer',
        'Founder & CEO',
        'UI/UX Designer',
    );
    $arrlength = count($title);
    for($x = 0; $x < $arrlength; $x++) { ?>
        <!-- Single Item -->
        <div class="<?php echo $klass;?>">
            <div class="th-team team-card style7">
                <div class="img-wrap">
                    <div class="team-img">
                        <img src="<?php echo $img[$x];?>" alt="Team">
                    </div>
                    <div class="th-social">
                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a target="_blank" href="https://vimeo.com/"><i class="fab fa-vimeo-v"></i></a>
                    </div>
                </div>
                <div class="team-card-content">
                    <h3 class="box-title"><a href="team-details.html"><?php echo $title[$x];?></a></h3>
                    <span class="team-desig"><?php echo $desig[$x];?></span>
                </div>
            </div>
        </div>
        
    <?php if($x == $y) {
        break;
    } }; 
?>