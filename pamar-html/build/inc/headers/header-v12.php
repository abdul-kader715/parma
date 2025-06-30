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
<header class="th-header header-layout12">
    <div class="header-top">
        <div class="container">
            <div class="row gx-0 justify-content-center justify-content-md-between align-items-center">
                <div class="col-auto">
                    <div class="top-left">
                        <p class="header-notice">Welcome to Our Pamar Driving School</p>
                    </div>
                </div>
                <div class="col-auto d-none d-md-block">
                    <div class="top-right">
                        <div class="row gx-0 align-items-center justify-content-between">
                            <div class="col-auto">
                                <div class="header-links">
                                    <ul>
                                        <li class="d-none d-lg-inline-block"><i class="fal fa-phone"></i><a href="tel:+1044123456789">+1 (044) 123 456 789</a></li>
                                        <li class="d-none d-xxl-inline-block"><i class="fal fa-location-dot"></i>27 Division St, New York, USA</li>
                                        <li><i class="fal fa-envelope"></i><a href="mailto:info@acadu.com">info@acadu.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="social-links">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="sticky-wrapper">
        <div class="container">
            <div class="row gx-0 justify-content-between">
                <div class="col-auto">
                    <div class="header-logo">
                        <a href="index.html"><img src="assets/img/logo-white2.svg" alt="<?php echo themeName; ?>"></a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="menu-area">
                        <div class="row gx-0 align-items-center justify-content-between">
                            <div class="col-auto">
                                <nav class="main-menu d-none d-lg-inline-block">
                                    <?php get_header('menu'); ?>
                                </nav>
                                <button type="button" class="th-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
                            </div>
                            <div class="col-auto d-none d-xxl-block">
                                <div class="header-button">
                                    <button type="button" class="icon-btn style3 searchBoxToggler"><i class="far fa-search"></i></button>
                                    <a href="#" class="simple-icon style2 sideMenuToggler"><i class="fa-solid fa-grid"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>