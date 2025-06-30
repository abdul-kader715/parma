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
<header class="th-header header-layout9">
    <div class="header-top">
        <div class="container th-container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links">
                        <ul>
                            <li>
                                <div class="dropdown-link">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="true"><i class="far fa-globe"></i>Language</a>
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
                            <li><i class="far fa-location-dot"></i>26/4 Emirates - United States</li>
                            <li><i class="far fa-messages"></i><a href="mailto:info@pamar.com">info@pamar.com</a></li>
                            <li><i class="far fa-phone"></i><a href="tel:+16369729901">+(163) 6972 9901</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="social-links">
                        <span class="social-title">Follow Us:</span>
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="logo-bg">
                <div class="bg-shape"></div>
            </div>
            <div class="container th-container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="<?php echo indexURL;?>"><img src="assets/img/logo-footer.svg" alt="<?php echo themeName;?>"></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <?php get_header('menu'); ?>
                        </nav>
                        <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                    </div>
                    <div class="col-auto ms-auto d-none d-xl-block">
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