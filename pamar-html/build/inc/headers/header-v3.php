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
    <div class="container grid_lines d-none d-md-flex justify-content-between">
        <div class="grid_line"></div>
        <div class="grid_line"></div>
        <div class="grid_line"></div>
        <div class="grid_line"></div>
        <div class="grid_line"></div>
    </div>
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links">
                        <ul class="header-left-wrap">
                            <li><i class="fas fa-map-marker-alt"></i>45 New Eskaton Road, Austria</li>
                            <li><i class="fas fa-clock"></i>Sun to Friday: 8.00 am - 7.00 pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links">
                        <ul class="header-right-wrap">
                            <li>
                                <i class="fas fa-comments"></i><a href="#">FAQ</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-headset"></i><a href="#">Support</a>
                            </li>
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
            <div class="container-fluid p-0">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="<?php echo indexURL;?>">
                                <img src="assets/img/logo-white.svg" alt="<?php echo themeName;?>">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <?php get_header('menu'); ?>
                        </nav>
                        <div class="header-button d-flex d-lg-none">
                            <div class="sidebar-btn">
                                <button type="button" class="simple-icon th-menu-toggle">
                                    <span class="dots"></span>
                                    <span class="dots"></span>
                                    <span class="dots"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            <div class="d-xxl-block d-none">
                                <a href="contact.html" class="th-btn btn-radius-0 style-border3">Let's Talk <i class="fas fa-messages text-theme ms-2"></i></a>
                            </div>
                            <div class="sidebar-btn">
                                <button type="button" class="simple-icon sideMenuInfo">
                                    <span class="dots"></span>
                                    <span class="dots"></span>
                                    <span class="dots"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


