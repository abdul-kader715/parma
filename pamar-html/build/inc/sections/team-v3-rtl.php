<?php 
    $title = array(
        'ميشيل كونور
',
        'جيسيكا لورين
',
        'دانيال توماس
',
        'ميشيل فيتوري
',
        'ميشيل كونور
',
        'جيسيكا لورين
',
        'دانيال توماس
',
        'ميشيل فيتوري
',
    );
    $img = array(
        'assets/img/team/team_3_1.png',
        'assets/img/team/team_3_2.png',
        'assets/img/team/team_3_3.png',
        'assets/img/team/team_3_4.png',
        'assets/img/team/team_3_1.png',
        'assets/img/team/team_3_2.png',
        'assets/img/team/team_3_3.png',
        'assets/img/team/team_3_4.png',
    );
    $desig = array(
        'متطوع',
        'متطوع',
        'متطوع',
        'متطوع',
        'متطوع',
        'متطوع',
        'متطوع',
        'متطوع',
    );
    $arrlength = count($title);
    for($x = 0; $x < $arrlength; $x++) { ?>
        <!-- Single Item -->
        <div class="<?php echo $klass;?>">
            <div class="th-team team-card3">
                <div class="team-img">
                    <img src="<?php echo $img[$x];?>" alt="Team">
                </div>
                <div class="team-card-content">
                    <h3 class="box-title"><a href="team-details.html"><?php echo $title[$x];?></a></h3>
                    <span class="team-desig"><?php echo $desig[$x];?></span>
                    <div class="th-social style2">
                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" href="https://behance.com/"><i class="fab fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
    <?php if($x == $y) {
        break;
    } }; 
?>