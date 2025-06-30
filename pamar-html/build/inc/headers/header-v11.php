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
<header class="th-header header-layout11">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-md-between align-items-center gy-2">
                <div class="col-auto d-none d-md-block">
                    <div class="header-links">
                        <ul>
                            <li><i class="far fa-phone"></i><a href="tel:+1044123456789">+1 (044) 123 456 789</a></li>
                            <li class="d-none d-xl-inline-block"><i class="far fa-location-dot"></i>27 Division St, New York, USA</li>
                            <li><i class="far fa-envelope"></i><a href="mailto:info@pamar.com">info@pamar.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links">
                        <ul>
                            <li class="d-none d-lg-inline-block">
                                <div class="dropdown-link">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false">Language</a>
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
                                <div class="social-links">
                                    <span class="social-title">Follow Us:</span>
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
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
        <div class="menu-area" data-bg-src="assets/img/bg/pattern_bg_2.png">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="index.html"><img src="assets/img/logo.svg" alt="<?php echo themeName; ?>"></a>
                        </div>
                    </div>
                    <div class="col-auto col-lg">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <nav class="main-menu d-none d-lg-inline-block">
                                    <?php get_header('menu'); ?>
                                </nav>
                                <button type="button" class="th-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
                            </div>
                            <div class="col-auto d-none d-xl-block">
                                <div class="header-button">
                                    <button type="button" class="icon-btn style3 me-3 searchBoxToggler"><i class="far fa-search"></i></button>
                                    <a href="contact.html" class="th-btn style3">Apply Now<i class="fas fa-arrow-right ms-2"></i></a>
                                    <a href="#" class="simple-icon style2 ms-3 sideMenuToggler"><i class="fa-sharp fa-solid fa-grid"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-shape"></div>
        </div>
    </div>
</header>


