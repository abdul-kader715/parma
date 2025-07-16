<!--==============================
  Inner Pages Area
  ==============================-->
<!-- Section Title -->
<div id="innerPage" class="space-top space-extra-bottom">
    <div class="container">
        <div class="title-area text-center mb-4">
            <h2 class="sec-title">Inner pages</h2>
            <p class="sec-text">Choose one of styles or cutomize easily your site following your ideas. <br> More demos are coming soon.</p>
        </div>
        <ul class="filter-menu">
            <li><button class="th-btn isActive active" data-filter="*">All </button></li>
            <li><button class="th-btn" data-filter=".blog">Blog </button></li>
            <li><button class="th-btn" data-filter=".service">Service </button></li>
            <li><button class="th-btn" data-filter=".shop">Shop </button></li>
            <li><button class="th-btn" data-filter=".others">Others </button></li>
        </ul>
    </div>
    <div class="container">
        <div class="row justify-content-center filter-active">
            <?php 
                $title = array(
                    'About Us',
                    'Blog Standard',
                    'Blog Details',
                    'Service',
                    'Service Details',
                    'Team',
                    'Team Details',
                    'Project',
                    'Project Details',
                    'Shop Page',
                    'Shop Details',
                    'Cart Page',
                    'Checkout',
                    'Wishlist',
                    'Work',
                    'Cost Calculation',
                    'Testimonial',
                    'Contact',
                    'Faq',
                    'Pricing',
                    'Error Page',
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
                    'shop',
                    'shop-details',
                    'cart',
                    'checkout',
                    'wishlist',
                    'work',
                    'cost-calculation',
                    'testimonial',
                    'contact',
                    'faq',
                    'pricing',
                    'error',
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
                        } elseif ($x == 5) {
                            $klass = 'filter-item service';
                        } elseif ($x == 5) {
                            $klass = 'filter-item others';
                        } elseif ($x == 6) {
                            $klass = 'filter-item others';
                        } elseif ($x == 7) {
                            $klass = 'filter-item others';
                        } elseif ($x == 8) {
                            $klass = 'filter-item others';
                        } elseif ($x == 9) {
                            $klass = 'filter-item shop';
                        } elseif ($x == 10) {
                            $klass = 'filter-item shop';
                        } elseif ($x == 11) {
                            $klass = 'filter-item shop';
                        } elseif ($x == 12) {
                            $klass = 'filter-item shop';
                        } elseif ($x == 13) {
                            $klass = 'filter-item shop';
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
                        } elseif ($x == 19) {
                            $klass = 'filter-item others';
                        } elseif ($x == 20) {
                            $klass = 'filter-item others';
                        } elseif ($x == 21) {
                            $klass = 'filter-item others';
                        } elseif ($x == 22) {
                            $klass = 'filter-item others';
                        }
                    ?>

                    <div class="col-sm-6 col-lg-4 col-xl-4 <?php echo $klass;?>">
                        <div class="thumb-box style3">
                            <div class="thumb-img">
                                <img src="assets/img/pages/<?php echo $url[$x];?>.jpg" alt="<?php echo $title[$x];?>">                                
                            </div>
                            <div class="thumb-box-content">
                                <h3 class="thumb-title"><a target="_blank" href="demo/<?php echo $url[$x];?>.html"><?php echo $title[$x];?></a></h3>
                                <a target="_blank" href="demo/<?php echo $url[$x];?>.html" class="th-btn style3">View Demo <span class="after-bg"></span></a>
                            </div>
                        </div>
                    </div>

                <?php }
            ?>
        </div>
    </div>
</div>