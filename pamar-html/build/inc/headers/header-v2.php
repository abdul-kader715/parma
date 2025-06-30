<?php 
get_header('mobile-menu');
?>
<?php 
get_header('color-scheme');
?>
<!--==============================
	Header Area
==============================-->
<header class="th-header header-layout2">
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="container">
            <div class="menu-area">
                <div class="header-bg-shape" data-mask-src="assets/img/theme-img/header3-bg-shape.png"></div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="<?php echo indexURL;?>">
                                <img src="assets/img/logo2.svg" alt="<?php echo themeName;?>">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <?php get_header('menu'); ?>
                        </nav>
                        <div class="header-button d-flex d-lg-none">
                            <div class="sidebar-btn">
                                <button type="button" class="th-menu-toggle icon-btn"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            <a href="contact.html" class="th-btn style-gradient">Get Started Now <i class="far fa-long-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


