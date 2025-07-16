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
            <li><button class="th-btn isActive active" data-filter="*">All</button></li>
            <li><button class="th-btn" data-filter=".blog">Blog</button></li>
            <li><button class="th-btn" data-filter=".service">Service</button></li>
            <li><button class="th-btn" data-filter=".shop">Shop</button></li>
            <li><button class="th-btn" data-filter=".others">Others</button></li>
        </ul>
    </div>
    <div class="container">
        <div class="row justify-content-center filter-active">
            <?php 
                $title = array(
                    'About Us',
                    'Blog',
                    'Blog Details',
                    'Service',
                    'Service Details',
                    'Project',
                    'Project Details',
                    'Team',
                    'Team Details',
                    'Pricing Page',
                    'Shop Page',
                    'Shop Details',
                    'Cart Page',
                    'Checkout',
                    'Wishlist',
                    'Contact',
                    'Error Page',
                );
                $url = array(
                    'about',
                    'blog',
                    'blog-details',
                    'service',
                    'service-details',
                    'project',
                    'project-details',
                    'team',
                    'team-details',
                    'pricing',
                    'shop',
                    'shop-details',
                    'cart',
                    'checkout',
                    'wishlist',
                    'contact',
                    'error',
                );
                $link = array(
                  'https://themehour.com/wordpress/robor/about-us/',
                  'https://themehour.com/wordpress/robor/blog/',
                  'https://themehour.com/wordpress/robor/discover-unparalleled-expertise-in-market/',
                  'https://themehour.com/wordpress/robor/services/',
                  'https://themehour.com/wordpress/robor/service-details/',
                  'https://themehour.com/wordpress/robor/project/',
                  'https://themehour.com/wordpress/robor/project-details/',
                  'https://themehour.com/wordpress/robor/team/',
                  'https://themehour.com/wordpress/robor/team-details/',
                  'https://themehour.com/wordpress/robor/pricing/',
                  'https://themehour.com/wordpress/robor/shop/',
                  'https://themehour.com/wordpress/robor/product/school-bag/',
                  'https://themehour.com/wordpress/robor/cart/',
                  'https://themehour.com/wordpress/robor/checkout/',
                  'https://themehour.com/wordpress/robor/wishlist/',
                  'https://themehour.com/wordpress/robor/contact-us/',
                  'https://themehour.com/wordpress/robor/404',
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
                            $klass = 'filter-item others';
                        } elseif ($x == 8) {
                            $klass = 'filter-item others';
                        } elseif ($x == 9) {
                            $klass = 'filter-item others';
                        } elseif ($x == 10) {
                            $klass = 'filter-item others';
                        } elseif ($x == 11) {
                            $klass = 'filter-item shop';
                        } elseif ($x == 12) {
                            $klass = 'filter-item shop';
                        } elseif ($x == 13) {
                            $klass = 'filter-item shop';
                        } elseif ($x == 14) {
                            $klass = 'filter-item shop';
                        } elseif ($x == 15) {
                            $klass = 'filter-item shop';
                        } elseif ($x == 16) {
                            $klass = 'filter-item others';
                        } elseif ($x == 17) {
                            $klass = 'filter-item others';
                        } elseif ($x == 18) {
                            $klass = 'filter-item others';
                        } elseif ($x == 19) {
                            $klass = 'filter-item others';
                        }
                    ?>

                    <div class="col-sm-6 col-lg-4 col-xl-3 <?php echo $klass;?>">
                        <div class="thumb-box">
                            <div class="thumb-img">
                                <img src="assets/img/pages/<?php echo $url[$x];?>.jpg" alt="<?php echo $title[$x];?>">
                                <a target="_blank" href="<?php echo $link[$x];?>" class="th-btn">View Demo</a>
                            </div>
                            <h3 class="thumb-title"><a target="_blank" href="<?php echo $link[$x];?>"><?php echo $title[$x];?></a></h3>
                        </div>
                    </div>

                <?php }
            ?>
        </div>
    </div>
</div>