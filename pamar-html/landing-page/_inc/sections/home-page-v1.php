<!--==============================
  Home Pages Area
  ==============================-->
  <section class="home-pages-area space" id='homePage'>
    <div class="container">
        <div class="title-area text-center">
            <h2 class="sec-title"><span class="text-theme">03</span> Magnificent Demos</h2>
            <p class="sec-text">Home pages with real and ready content as your need. <br> Updated techonlogy and smooth animation.</p>
        </div>
        <div class="row justify-content-center">
            <?php 
                $url = array(
                    'index',
                    'home-2',
                    'home-3',
                );
                $url2 = array(
                    'https://themehour.com/wordpress/robor/home-business-consult/',
                    'https://themehour.com/wordpress/robor/home-corporate/',
                    'https://themehour.com/wordpress/robor/',
                );
                $label = array(
                    '',
                    '',
                    '',
                );
                $title = array(
                  'Home One',
                  'Home Two',
                  'Home Three',
                );
                $btnstyle = array(
                    '',
                    '',
                    '',
                );
                $text = array(
                  'Home Business Consult',
                  'Home Corporate',
                  'Home Finance',
                );
                $arrlength = count($title);
                for($x = 0; $x < $arrlength; $x++) { ?>

                    <div class="col-md-6 col-lg-4 <?php echo $klass;?>">
                        <div class="thumb-box style2">
                            <?php echo $label[$x];?>
                            <div class="thumb-img">
                                <img src="assets/img/pages/<?php echo $url[$x];?>.jpg" alt="<?php echo $title[$x];?>">
                            </div>
                            <div class="thumb-box-content">
                              <h3 class="thumb-title"><a target="_blank" href="<?php echo $url2[$x];?>"><?php echo $title[$x];?></a></h3>
                              <p class="thumb-text"><?php echo $text[$x];?></p>

                              <div class="btn-wrap">
                                <a target="_blank" href="<?php echo $url2[$x];?>" class="th-btn <?php echo $btnstyle[$x];?>">View Demo<span class="icon ms-3"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.66667 0.833333C1.66667 0.373096 2.03976 0 2.5 0L9.16667 4.47035e-07C9.6269 4.47035e-07 10 0.373097 10 0.833333V7.5C10 7.96024 9.6269 8.33333 9.16667 8.33333C8.70643 8.33333 8.33333 7.96024 8.33333 7.5V2.84518L1.42259 9.75592C1.09715 10.0814 0.569515 10.0814 0.244078 9.75592C-0.0813592 9.43049 -0.0813592 8.90285 0.244078 8.57741L7.15482 1.66667L2.5 1.66667C2.03976 1.66667 1.66667 1.29357 1.66667 0.833333Z" fill="white"/></svg></span></a>
                              </div>
                            </div>
                        </div>
                    </div>
                <?php }
            ?>
            <div class="col-md-6 col-lg-4">
                <div class="thumb-box upcomming style2">
                    <div class="thumb-img">
                        <img src="assets/img/pages/comming.jpg" alt="Comming">
                    </div>
                    <div class="thumb-box-content">
                      <h3 class="thumb-title">New Home </h3>
                      <p class="thumb-text">Upcoming Home </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="https://themehour.com/wordpress/robor/" target="_blank" class="th-btn">Explore Pages <span class="icon ms-3"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.66667 0.833333C1.66667 0.373096 2.03976 0 2.5 0L9.16667 4.47035e-07C9.6269 4.47035e-07 10 0.373097 10 0.833333V7.5C10 7.96024 9.6269 8.33333 9.16667 8.33333C8.70643 8.33333 8.33333 7.96024 8.33333 7.5V2.84518L1.42259 9.75592C1.09715 10.0814 0.569515 10.0814 0.244078 9.75592C-0.0813592 9.43049 -0.0813592 8.90285 0.244078 8.57741L7.15482 1.66667L2.5 1.66667C2.03976 1.66667 1.66667 1.29357 1.66667 0.833333Z" fill="white"/></svg></span></a>
        </div>
    </div>
</section>