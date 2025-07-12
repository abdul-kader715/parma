<?php 
     $title = array(
        'Alex Johon',
        'Maria Chen',
        'Jenny William',
        'Taylor Reed',
        'Liam Parker',
        'Jordan Smith',
    ); 
    $subtitle = array(
        'CEO & Founder',
        'Plumber Chief',
        'Engineer',
        'Plumber',
        'Plumber Chief',
        'Engineer',
    );
    $img = array(
        'assets/img/team/team_2_1.png',
        'assets/img/team/team_2_2.png',
        'assets/img/team/team_2_3.png',
        'assets/img/team/team_2_4.png',
        'assets/img/team/team_2_5.png',
        'assets/img/team/team_2_6.png',
    );
    $arrlength = count($title);
    for($x = 0; $x < $arrlength; $x++) { ?>
        <div class="<?php echo $klass;?>">
            <div class="th-team team-card style2 style4">
                <div class="team-img">
                    <img src="<?php echo $img[$x];?>" alt="Team">
                </div>
                <div class="team-card-content">
                  <div>
                     <h3 class="box-title"><a href="team-details.html"><?php echo $title[$x];?></a></h3>
                    <span class="box-subtitle"><?php echo $subtitle[$x];?></span>  
                  </div>
                  <div class="team-social">
                    <button class="icon-btn style2 style-border2" tabindex="0">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                    <div class="th-social style12">
                        <a href="http://facebook.com" tabindex="0"><i class="fab fa-facebook-f"></i></a>
                        <a href="http://twitter.com" tabindex="0"><i class="fab fa-twitter"></i></a>
                        <a href="http://instagram.com" tabindex="0"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" href="https://whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                     
                </div>
                
            </div>
        </div>
        
    <?php if($x == $y) {
        break;
    } }; 
?>