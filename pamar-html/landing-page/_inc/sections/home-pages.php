<!--==============================
  Home Pages Area
  ==============================-->
  <section class="home-pages-area space-bottom pt-5" id='homePage'>
    <div class="container">
        <div class="title-area text-center">
            <h2 class="sec-title"><span class="text-theme h1 d-block">03+</span> Modern and Magnificent Demos</h2>
            <p class="sec-text">Home pages with real and ready content as your need. <br> Updated techonlogy and smooth animation.</p>
        </div>
        <div class="row justify-content-center">
            <?php 
                $url = array(
                    'index',
                    'home-2',
                    'home-3',
                );
                $urlOp = array(
                    'home-1-op',
                    'home-2-op',
                    'home-3-op',
                );
                $urlRtl = array(
                    'home-1-rtl',
                    'home-2-rtl',
                    'home-3-rtl',
                );
                $label = array(
                    '',
                    '',
                    '',
                    '',
                    '',
                );
                $title = array(
                  'Home I',
                  'Home II',
                  'Home III',
                );
                $text = array(
                  'Home AI Startup',
                  'Home AI Technology',
                  'Home AI Agency',
                );
                $arrlength = count($title);
                for($x = 0; $x < $arrlength; $x++) { ?>

                    <div class="col-md-6 col-lg-4 <?php echo $klass;?>">
                        <div class="thumb-box style2">
                            <?php echo $label[$x];?>
                            <div class="thumb-img">
                                <img src="assets/img/pages/<?php echo $url[$x];?>.jpg" alt="<?php echo $title[$x];?>">
                                <div class="btn-wrap">
                                    <a target="_blank" href="demo/<?php echo $url[$x];?>.html" class="th-btn">Multipage Demo</a>
                                    <a target="_blank" href="demo/<?php echo $urlOp[$x];?>.html" class="th-btn">Onepage Demo</a>
                                </div>
                            </div>
                            <div class="thumb-box-content">
                              <h3 class="thumb-title"><a target="_blank" href="demo/<?php echo $url[$x];?>.html"><?php echo $title[$x];?></a></h3>
                              <p class="thumb-text"><?php echo $text[$x];?></p>
                            </div>
                        </div>
                    </div>
                <?php }
            ?>
        </div>
        <div class="text-center mt-4">
            <a href="demo/index.html" target="_blank" class="th-btn style3 style-radius">Explore Pages </a>
        </div>
    </div>
</section>