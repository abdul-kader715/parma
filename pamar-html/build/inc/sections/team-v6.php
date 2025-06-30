<?php 
    $title = array(
        'Liam Harrison',
        'Ava Reynolds',
        'Dominic Vaughn',
        'Liam Harrison',
        'Ava Reynolds',
        'Dominic Vaughn',
    );
    $img = array(
        'assets/img/team/team_6_1.png',
        'assets/img/team/team_6_2.png',
        'assets/img/team/team_6_3.png',
        'assets/img/team/team_6_1.png',
        'assets/img/team/team_6_2.png',
        'assets/img/team/team_6_3.png',
    );
    $desig = array(
        'Founder & CEO',
        'Senior Advisor',
        'Senior Manager',
        'Founder & CEO',
        'Senior Advisor',
        'Senior Manager',
    );
    $arrlength = count($title);
    for($x = 0; $x < $arrlength; $x++) { ?>
        <!-- Single Item -->
        <div class="<?php echo $klass;?>">
            <div class="th-team team-card style6">
                <div class="img-wrap">
                    <div class="team-img">
                        <img src="<?php echo $img[$x];?>" alt="Team">
                    </div>
                </div>
                <div class="team-card-content">
                    <h3 class="box-title"><a href="team-details.html"><?php echo $title[$x];?></a></h3>
                    <span class="team-desig"><?php echo $desig[$x];?></span>
                    <div class="th-social">
                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a target="_blank" href="https://vimeo.com/"><i class="fab fa-vimeo-v"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
    <?php if($x == $y) {
        break;
    } }; 
?>