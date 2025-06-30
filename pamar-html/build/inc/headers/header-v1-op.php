<?php 
get_header('mobile-menu');
?>
<?php 
get_header('color-scheme');
?>
<!--==============================
	Header Area
==============================-->
<header class="th-header header-layout1 onepage-nav">
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="<?php echo indexURL;?>">
                                <img src="assets/img/logo.svg" alt="<?php echo themeName;?>">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <?php get_header('menu-onepage'); ?>
                        </nav>
                        <div class="header-button d-flex d-lg-none">
                            <button type="button" class="th-menu-toggle icon-btn"><i class="far fa-bars"></i></button>
                        </div>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            <a href="contact.html" class="th-btn style2">Get Started Now <i class="far fa-long-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


