<?php 
get_section('sidemenu-v2');
?>
<?php 
get_section('sidemenu-v1');
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
<header class="th-header header-layout7">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links">
                        <ul class="header-left-wrap">
                            <li><i class="fa-regular fa-phone"></i><a href="tel:11278956825">+112 (789) 568 25</a></li>
                            <li><i class="fa-regular fa-envelope-open"></i><a href="mailto:">help@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links">
                        <ul class="header-right-wrap">
                            <li>
                                <div class="dropdown-link">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-light fa-globe"></i> English</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                        <li>
                                            <a href="#">German</a>
                                            <a href="#">French</a>
                                            <a href="#">Italian</a>
                                            <a href="#">Latvian</a>
                                            <a href="#">Spanish</a>
                                            <a href="#">Greek</a>
                                        </li>
                                    </ul>
                                </div>
                            <li>
                                <div class="social-links">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.behance.com/"><i class="fab fa-behance"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="<?php echo indexURL;?>"><img src="assets/img/logo.svg" alt="<?php echo themeName;?>"></a>
                        </div>
                    </div>
                    <div class="col-auto me-xl-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <?php get_header('menu'); ?>
                        </nav>
                        <div class="header-button d-flex d-lg-none">
                            
                            <button type="button" class="simple-icon sideMenuToggler">
                                <span class="badge">5</span>
                                <i class="fa-regular fa-cart-shopping"></i>
                            </button>
                            <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                        </div>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            <button type="button" class="simple-icon searchBoxToggler"><i class="far fa-search"></i></button>
                            <button type="button" class="simple-icon sideMenuToggler">
                                <span class="badge">5</span>
                                <i class="fa-regular fa-cart-shopping"></i>
                            </button>
                            <button type="button" class="simple-icon sideMenuInfo">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                            <div class="d-xxl-block d-none">
                                <a href="contact.html" class="th-btn">Contact us <span class="icon"><i class="fa-solid fa-arrow-up-right ms-3"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>