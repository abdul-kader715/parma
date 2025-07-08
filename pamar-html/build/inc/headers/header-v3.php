<?php 
get_section('sidemenu-v2');
?>
<?php 
get_header('popup-search');
?>
<?php 
get_header('mobile-menu');
?>
<?php 
get_header('color-scheme');
?>
<!--==============================
	Header Area
==============================-->
<header class="th-header header-layout3">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links style2">
                        <ul class="header-left-wrap">
                            <li>Hotline: +1 (800) 555-0123</li>
                            <li>info@pamarservices.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links">
                        <ul class="header-right-wrap">
                            <li>
                                <div class="dropdown-link">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false">English</a>
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
                            </li>
                            <li>
                                <a href="#">Follow:</a>
                            </li>
                             <li class="top-right">
                                <div class="social-links">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape bg-mask" data-mask-src="assets/img/shape/header-top-shape3-1.png">
        </div>
    </div>
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="container-fluid p-0">
                <div class="row g-0 align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="<?php echo indexURL;?>">
                                <img src="assets/img/logo5.svg" alt="<?php echo themeName;?>">
                            </a>
                            <div class="logo-shape bg-mask" data-mask-src="assets/img/shape/logo-shape3-1.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="main-menu-wrap3 align-items-center justify-content-between">
                            <nav class="main-menu d-none d-xl-inline-block">
                                    <?php get_header('menu'); ?>
                            </nav>
                            <div class="header-sidbtn d-flex d-xl-none">
                                <div class="sidebar-btn">
                                    <button type="button" class="simple-icon th-menu-toggle">
                                        <span class="dots"></span>
                                        <span class="dots"></span>
                                        <span class="dots"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="header-search d-none d-xl-inline-block">
                                <button type="button" class="icon-btn style6 searchBoxToggler"><span>Search Here....</span><i class="far fa-search"></i></button>
                            </div>
                            <div class="header-bg-shape bg-mask" data-mask-src="assets/img/shape/header-shape3-2.png">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            <div class="d-xxl-block d-none">
                                <a href="contact.html" class="th-btn">Request Service<i class="fa-solid fa-angle-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


