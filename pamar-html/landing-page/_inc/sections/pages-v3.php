<!--==============================
  Home Pages Area
  ==============================-->
  <section class="home-pages-area space-top space-extra-bottom" id='homePage'>
    <div class="th-container container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 text-center mb-3">
                <h2 class="sec-title mb-10">Modern & Creative Home Pages</h2>
                <p class="sec-text">Choose a any page to start navigating <?php echo THEME ?>. Build strong & impressive websites using demo Pre-Designed templates.</p>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <?php 
                $title = array(
                    'Home One',
                    'Home Two',
                    'Home Three',
                );
                $img = array(
                    'assets/img/pages/index.jpg',
                    'assets/img/pages/index-2.jpg',
                    'assets/img/pages/index-3.jpg',
                );
                $url = array(
                    'demo/index.html',
                    'demo/index-2.html',
                    'demo/index-3.html',
                );
                $label = array(
                    '',
                    '',
                    '',
                    '',
                );
                $arrlength = count($title);
                for($x = 0; $x < $arrlength; $x++) { ?>

                    <div class="col-sm-6 col-xl-3 col-lg-4 <?php echo $klass;?>">
                        <div class="thumb-box">
                            <?php echo $label[$x];?>
                            <div class="thumb-img">
                                <img src="<?php echo $img[$x];?>" alt="<?php echo $title[$x];?>">
                                <a href="<?php echo $url[$x];?>" target="_blank" class="thumb-link th-btn">View Page &rarr;</a>
                            </div>
                            <h3 class="thumb-title"><a target="_blank" href="<?php echo $url[$x];?>"><?php echo $title[$x];?></a></h3>
                        </div>
                    </div>
                <?php }
            ?>
        </div>
        <div class="text-center mt-4">
            <a href="demo/index.html" target="_blank" class="th-btn">Explore Pages</a>
        </div>
    </div>
</section>