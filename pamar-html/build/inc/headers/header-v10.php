<?php 
get_header('mobile-menu');
?>
<?php 
get_header('popup-search');
?>
<?php 
get_section('sidemenu-v1');
?>

<!--==============================
	Header Area
==============================-->
<header class="th-header header-layout10">
    <div class="top-area" data-bg-src="assets/img/bg/header_bg_1.png">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center justify-content-md-between align-items-center">
                    <div class="col-auto">
                        <p class="header-notice">Get Your First Free Online Lesson Today… <a class="line-btn" href="course.html">Start Now</a></p>
                    </div>
                    <div class="col-auto d-none d-md-block">
                        <div class="header-links">
                            <ul>
                                <li><i class="far fa-user"></i><a href="contact.html">Customer Sign In</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-top">
            <div class="container">
                <div class="row align-items-center justify-content-center justify-content-sm-between">
                    <div class="col-auto d-none d-sm-block">
                        <a class="header-link" href="tel:+256214203215"><i class="icon-btn fas fa-phone"></i>256 214 203 215</a>
                        <a class="header-link d-none d-lg-inline-block" href="mailto:help24/7@gmail.com"><i class="icon-btn fas fa-envelope"></i>help24/7@gmail.com</a>
                        <span class="header-link d-none d-xl-inline-block"><i class="icon-btn fas fa-location-dot"></i>245 Frankfurt. Germany</span>
                    </div>
                    <div class="col-auto">
                        <div class="th-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="sticky-wrapper">
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="index.html"><img src="assets/img/logo.svg" alt="<?php echo themeName; ?>"></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <nav class="main-menu d-none d-lg-inline-block">
                                    <?php get_header('menu'); ?>
                                </nav>
                                <button type="button" class="th-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
                            </div>
                            <div class="col-auto d-none d-xl-block">
                                <div class="header-button">
                                    <button type="button" class="icon-btn style3 searchBoxToggler"><i class="far fa-search"></i></button>
                                    <a href="wishlist.html" class="icon-btn style3"><i class="far fa-heart"></i></a>
                                    <a href="contact.html" class="th-btn style6 d-none d-xxl-inline-block">Apply Now<i class="fas fa-arrow-right ms-2"></i></a>
                                    <a href="#" class="icon-btn style3 sideMenuToggler">
                                        <i class="far fa-cart-shopping"></i>
                                        <span class="badge bg-title">5</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-shape" data-bg-src="assets/img/bg/pattern_bg_1.png"></div>
        </div>
    </div>
</header>