<?php 
    $title = array(
        'Leslie Alexander',
        'Jenny Wilson',
        'Kristin Watson',
        'Ralph Edwards',
        'Leslie Alexander',
        'Jenny Wilson',
        'Kristin Watson',
        'Ralph Edwards',
    );
    $img = array(
        'assets/img/team/team_4_1.png',
        'assets/img/team/team_4_2.png',
        'assets/img/team/team_4_3.png',
        'assets/img/team/team_4_4.png',
        'assets/img/team/team_4_1.png',
        'assets/img/team/team_4_2.png',
        'assets/img/team/team_4_3.png',
        'assets/img/team/team_4_4.png',
    );
    $desig = array(
        'Founder & CEO',
        'Senior Manager',
        'Junior Manager',
        'Senior Worker',
        'Founder & CEO',
        'Senior Manager',
        'Junior Manager',
        'Senior Worker',
    );
    $arrlength = count($title);
    for($x = 0; $x < $arrlength; $x++) { ?>
        <!-- Single Item -->
        <div class="<?php echo $klass;?>">
            <div class="th-team team-card style4">
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
                    <div class="team-card-bg" data-bg-src="assets/img/bg/team_card_bg_4.jpg"></div>
                    <h3 class="box-title"><a href="team-details.html"><?php echo $title[$x];?></a></h3>
                    <span class="team-desig"><?php echo $desig[$x];?></span>
                </div>
            </div>
        </div>
        
    <?php if($x == $y) {
        break;
    } }; 
?>