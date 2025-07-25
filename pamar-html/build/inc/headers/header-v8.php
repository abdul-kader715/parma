<?php 
get_section('sidemenu-v2');
?>
<?php 
get_header('popup-search');
?>
<?php 
get_header('mobile-menu');
?>
<!--==============================
	Header Area
==============================-->
<header class="th-header header-layout8">
    <div class="header-top">
        <div class="container th-container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <p class="header-notice">Get Your First Free Online Lesson Today… <a class="line-btn" href="course.html">Start Now</a></p>
                </div>
                <div class="col-auto">
                    <div class="header-links">
                        <ul>
                            <li><i class="fal fa-location-dot"></i>26/4 Emirates - United States</li>
                            <li><i class="fal fa-messages"></i><a href="mailto:info@pamar.com">info@pamar.com</a></li>
                            <li><i class="fal fa-phone"></i><a href="tel:+16369729901">+(163) 6972 9901</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="container th-container">
            <div class="menu-area">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="<?php echo indexURL;?>"><img src="assets/img/logo-white.svg" alt="<?php echo themeName;?>"></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <?php get_header('menu'); ?>
                        </nav>
                        <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            <button type="button" class="icon-btn searchBoxToggler"><i class="far fa-search"></i></button>
                            <button type="button" class="icon-btn sideMenuToggler"><i class="far fa-grid"></i></button>
                            <a href="contact.html" class="th-btn">Get Consulting<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>