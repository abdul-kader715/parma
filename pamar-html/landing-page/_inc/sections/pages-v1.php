<!--==============================
  Home Pages Area
  ==============================-->
  <section class="home-pages-area space-top space-extra-bottom" id='homePage'>
    <div class="th-container container-fluid">
        <div class="row justify-content-center justify-content-xl-start">
            <div class="col-lg-6 col-xl-4 pt-3 text-center text-xl-start mb-5 mb-xl-0">
                <h2 class="sec-title">Modern & Creative Home Pages</h2>
                <div class="row justify-content-center justify-content-xl-start">
                    <div class="col-md-10 col-xl-10">
                        <p class="sec-text">Choose a any page to start navigating Mechon. Build strong & impressive websites using demo Pre-Designed templates.</p>
                    </div>
                </div>
                <div class="btn-arrows d-flex justify-content-center align-items-center justify-content-xl-start">
                    <a href="demo/index.html" target="_blank" class="th-btn">Explore Pages</a>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="row gx-30" id="homeSlide">
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
                        '#',
                    );
                    $label = array(
                        '',
                        '',
                        '',
                    );
                    $extra_class = array(
                        '',
                        '',
                        'upcomming',
                    );
                    $upcoming_btn = array(
                        '',
                        '',
                        '<span class="thumb-link th-btn upcomming-btn">upcomming</span>',
                    );
                    $arrlength = count($title);
                    for($x = 0; $x < $arrlength; $x++) { ?>

                        <div class="col-sm-6 col-lg-4 <?php echo $klass;?>">
                            <div class="thumb-box <?php echo $extra_class[$x];?>">
                                <?php echo $label[$x];?>
                                <div class="thumb-img">
                                    <img src="<?php echo $img[$x];?>" alt="<?php echo $title[$x];?>">
                                    <a href="<?php echo $url[$x];?>" target="_blank" class="thumb-link th-btn">View Page &rarr;</a>
                                    <?php echo $upcoming_btn[$x];?>
                                </div>
                                <h3 class="thumb-title"><?php echo $title[$x];?></h3>
                            </div>
                        </div>
                    <?php }
                ?>

                </div> <!-- / Carousel Row -->
            </div>
        </div>
    </div>
</section>