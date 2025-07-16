<!--==============================
  Inner Pages Area
  ==============================-->
<!-- Section Title -->
<div id="innerPage" class="space-top space-extra-bottom">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-7">
                <h2 class="sec-title"><span class="text-theme">17</span> Inner pages</h2>
            </div>
            <div class="col-12">
                <ul class="filter-menu">
                    <li><button class="th-btn isActive active" data-filter="*">All</button></li>
                    <li><button class="th-btn" data-filter=".blog">Blog</button></li>
                    <li><button class="th-btn" data-filter=".service">Service</button></li>
                    <li><button class="th-btn" data-filter=".project">Project</button></li>
                    <li><button class="th-btn" data-filter=".others">Others</button></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-11">
                <div class="row justify-content-center filter-active">

                    <?php 
                        $title = array(
                            'About Us',
                            'Blog',
                            'Blog Details',
                            'Service',
                            'Service Details',
                            'Team',
                            'Team Details',
                            'Project',
                            'Project Details',
                            'Faq Page',
                            'Pricing',
                            'Process',
                            'Brand',
                            'Contact',
                            'History',
                            'Error Page',
                            'Coming Soon',
                        );
                        $url = array(
                            'about',
                            'blog',
                            'blog-details',
                            'service',
                            'service-details',
                            'team',
                            'team-details',
                            'project',
                            'project-details',
                            'faq',
                            'pricing',
                            'process',
                            'brand',
                            'contact',
                            'history',
                            'error',
                            'coming',
                        );
                        $arrlength = count($title);
                        for($x = 0; $x < $arrlength; $x++) {
                                if ($x == 0) {
                                    $klass = 'filter-item others';
                                } elseif ($x == 1) {
                                    $klass = 'filter-item blog';
                                } elseif ($x == 2) {
                                    $klass = 'filter-item blog';
                                } elseif ($x == 3) {
                                    $klass = 'filter-item service';
                                } elseif ($x == 4) {
                                    $klass = 'filter-item service';
                                } elseif ($x == 5) {
                                    $klass = 'filter-item others';
                                } elseif ($x == 6) {
                                    $klass = 'filter-item others';
                                } elseif ($x == 7) {
                                    $klass = 'filter-item project';
                                } elseif ($x == 8) {
                                    $klass = 'filter-item project';
                                } elseif ($x == 9) {
                                    $klass = 'filter-item others';
                                } elseif ($x == 10) {
                                    $klass = 'filter-item others';
                                } elseif ($x == 11) {
                                    $klass = 'filter-item others';
                                } elseif ($x == 12) {
                                    $klass = 'filter-item others';
                                } elseif ($x == 13) {
                                    $klass = 'filter-item others';
                                } elseif ($x == 14) {
                                    $klass = 'filter-item others';
                                } elseif ($x == 15) {
                                    $klass = 'filter-item others';
                                } elseif ($x == 16) {
                                    $klass = 'filter-item others';
                                } elseif ($x == 17) {
                                    $klass = 'filter-item others';
                                } elseif ($x == 18) {
                                    $klass = 'filter-item others';
                                }
                            ?>

                            <div class="col-sm-6 col-lg-4 col-xl-3 <?php echo $klass;?>">
                                <div class="thumb-box">
                                    <div class="thumb-img">
                                        <img src="assets/img/pages/<?php echo $url[$x];?>.jpg" alt="<?php echo $title[$x];?>">
                                        <a target="_blank" href="demo/<?php echo $url[$x];?>.html" class="thumb-link th-btn">View Page &rarr;</a>
                                    </div>
                                    <h3 class="thumb-title"><a target="_blank" href="demo/<?php echo $url[$x];?>.html"><?php echo $title[$x];?></a></h3>
                                </div>
                            </div>

                        <?php }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>