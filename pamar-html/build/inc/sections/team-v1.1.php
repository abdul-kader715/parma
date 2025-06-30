<?php 
    $title = array(
        'Jenny William',
        'Alex Joseph',
        'Jessica Lauren',
        'Dheraz Zaman',
        'Daniel Thomas',
        'Jenny William',
        'Alex Joseph',
        'Jessica Lauren',
    );
    $img = array(
        'assets/img/team/team_1_1.png',
        'assets/img/team/team_1_3.png',
        'assets/img/team/team_1_4.png',
        'assets/img/team/team_1_2.png',
        'assets/img/team/team_1_8.png',
        'assets/img/team/team_1_7.png',
        'assets/img/team/team_1_6.png',
        'assets/img/team/team_1_9.png',
    );
    $desig = array(
        'Chief Advisor of Pamar',
        'Senior Advisor of Pamar',
        'Junior Advisor of Pamar',
        'Senior Executive of Pamar',
        'Senior Executive of Pamar',
        'Chief Advisor of Pamar',
        'Senior Advisor of Pamar',
        'Junior Advisor of Pamar',
    );
    $arrlength = count($title);
    for($x = 0; $x < $arrlength; $x++) { ?>
        <div class="<?php echo $klass;?>">
            <div class="th-team team-card style4">
                <div class="team-img">
                    <img src="<?php echo $img[$x];?>" alt="Team">
                </div>
                <div class="team-card-content">
                    <div class="media-body">
                        <h3 class="box-title"><a href="team-details.html"><?php echo $title[$x];?></a></h3>
                        <span class="team-desig"><?php echo $desig[$x];?></span>
                    </div>
                    <div class="th-social">
                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <div class="line"></div>
                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <div class="line"></div>
                        <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
    <?php if($x == $y) {
        break;
    } }; 
?>