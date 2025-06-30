<?php 
    $title = array(
        'Oliver Donovan',
        'Tristan Wolfe',
        'Helena Reed',
        'Dominic Vaughn',
        'Oliver Donovan',
        'Tristan Wolfe',
        'Helena Reed',
        'Dominic Vaughn',
    );
    $img = array(
        'assets/img/team/team_5_1.png',
        'assets/img/team/team_5_2.png',
        'assets/img/team/team_5_3.png',
        'assets/img/team/team_5_4.png',
        'assets/img/team/team_5_1.png',
        'assets/img/team/team_5_2.png',
        'assets/img/team/team_5_3.png',
        'assets/img/team/team_5_4.png',
    );
    $desig = array(
        'UI/UX Designer',
        'Founder & CEO',
        'UI/UX Designer',
        'UI/UX Designer',
        'UI/UX Designer',
        'Founder & CEO',
        'UI/UX Designer',
        'UI/UX Designer',
    );
    $arrlength = count($title);
    for($x = 0; $x < $arrlength; $x++) { ?>
        <!-- Single Item -->
        <div class="<?php echo $klass;?>">
            <div class="th-team team-card style5">
                <div class="img-wrap">
                    <div class="team-img">
                        <img src="<?php echo $img[$x];?>" alt="Team">
                    </div>
                    <div class="team-social-hover">
                        <a href="#" class="team-social-hover_btn">
                            <i class="far fa-plus"></i>
                        </a>
                        <div class="th-social">
                            <a target="_blank" href="https://vimeo.com/"><i class="fab fa-vimeo-v"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        </div>
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