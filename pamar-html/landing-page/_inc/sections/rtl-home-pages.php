<!--==============================
  Home Pages Area
  ==============================-->
  <section class="home-pages-area space-bottom" id='homePage'>
    <div class="container">
        <div class="title-area text-center">
            <h2 class="sec-title"><span class="text-theme">04</span> Magnificent RTL Demos</h2>
            <p class="sec-text">Home pages with real and ready content as your need. <br> Updated techonlogy and smooth animation.</p>
        </div>
        <div class="row justify-content-center">
            <?php 
                $url = array(
                    'index',
                    'home-2',
                    'home-3',
                    'home-4',
                );
                $opurl = array(
                    'home1-onepage',
                    'home2-onepage',
                    'home3-onepage',
                    'home4-onepage',
                );
                $rtlurl = array(
                    'home1-rtl',
                    'home2-rtl',
                    'home3-rtl',
                    'home4-rtl',
                );
                $label = array(
                    '',
                    '',
                    '',
                    '',
                    '',
                );
                $title = array(
                  'Home One RTL',
                  'Home Two RTL',
                  'Home Three RTL',
                  'Home Four RTL',
                );
                $text = array(
                  'Home University',
                  'Home Online Education',
                  'Home University Admission',
                  'Home Digital Education',
                );
                $arrlength = count($title);
                for($x = 0; $x < $arrlength; $x++) { ?>

                    <div class="col-md-6 col-lg-4 <?php echo $klass;?>">
                        <div class="thumb-box style2 home-pages">
                            <?php echo $label[$x];?>
                            <div class="thumb-img">
                                <img src="assets/img/pages/<?php echo $rtlurl[$x];?>.jpg" alt="<?php echo $title[$x];?>">
                                <div class="rtl-tag">
                                    <span>RTL Support</span>
                                </div>
                            </div>
                            <div class="thumb-box-content">
                              <h3 class="thumb-title"><a target="_blank" href="demo/<?php echo $rtlurl[$x];?>.html"><?php echo $title[$x];?></a></h3>
                              <p class="thumb-text"><?php echo $text[$x];?></p>

                              <div class="btn-wrap">
                                <a target="_blank" href="demo/<?php echo $rtlurl[$x];?>.html" class="th-btn">RTL Demo</a>
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
                      <h3 class="thumb-title">Home Five RTL</h3>
                      <p class="thumb-text">Upcoming Home </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="demo/index.html" target="_blank" class="th-btn">Explore Pages</a>
        </div>
    </div>
</section>