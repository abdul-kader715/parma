<?php 
    $title = array(
        'Michel Manthan',
        'Jenny William',
        'Daniel Thomas',
        'Daniel Thomas',
        'Michel Manthan',
        'Jenny William',
        'Daniel Thomas',
        'Daniel Thomas',
    );
    $subtitle = array(
        'Expert Plumber',
        'Expert Plumber',
        'Expert Plumber',
        'Expert Plumber',
        'Expert Plumber',
        'Expert Plumber',
        'Expert Plumber',
        'Expert Plumber',
    );
    $img = array(
        'assets/img/team/team_1_1.jpg',
        'assets/img/team/team_1_2.jpg',
        'assets/img/team/team_1_3.jpg',
        'assets/img/team/team_1_4.jpg',
        'assets/img/team/team_1_1.jpg',
        'assets/img/team/team_1_2.jpg',
        'assets/img/team/team_1_3.jpg',
        'assets/img/team/team_1_4.jpg',
    );
 
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) { ?>
       
            <div class="<?php echo $klass;?>">
               <div class="th-team team-card" data-cue="slideInUp">
                  <div class="team-img">
                     <img src="<?php echo $img[$x];?>" alt="Team">
                  </div>
                  <div class="team-card-content">
                     <h3 class="box-title"><a href="team-details.html"><?php echo $title[$x];?></a></h3> 
                     <span class="team-desig"><?php echo $subtitle[$x];?></span>                    
                  </div>
                  <div class="th-social">
                     <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                     <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                     <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                     <a target="_blank" href="https://whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                  </div>
               </div>
            </div>
        
    <?php if($x == $y) {
        break;
    } }; 
?>