<?php 
    $title = array(
        'Alex Johon',
        'Maria Chen',
        'Jenny William',
        'Daniel Thomas',
        'David Lee',
    ); 
    $subtitle = array(
        'CEO & Founder',
        'Plumber Chief',
        'Engineer',
        'Engineer',
        'Engineer',
    );
    $img = array(
        'assets/img/team/team_2_1.png',
        'assets/img/team/team_2_2.png',
        'assets/img/team/team_2_3.png',
        'assets/img/team/team_2_1.png',
        'assets/img/team/team_2_2.png',
    );
    $arrlength = count($title);
    for($x = 0; $x < $arrlength; $x++) { ?>
        <div class="<?php echo $klass;?>">
            <div class="th-team team-card style2">
                <div class="team-img">
                    <img src="<?php echo $img[$x];?>" alt="Team">
                </div>
                <div class="team-card-content">
                  <div>
                     <h3 class="box-title"><a href="team-details.html"><?php echo $title[$x];?></a></h3>
                    <span class="box-subtitle"><?php echo $subtitle[$x];?></span>  
                  </div>
                     <a class="icon-btn style2 style-border2" href="team-details.html"><i class="fa-solid fa-plus"></i></a>            
                </div>
                <!-- <div class="th-social">
                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                    <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                    <a target="_blank" href="https://whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                </div> -->
            </div>
        </div>
        
    <?php if($x == $y) {
        break;
    } }; 
?>