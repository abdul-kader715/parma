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
<header class="th-header header-layout6">
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="<?php echo indexURL;?>"><img src="assets/img/logo-white3.svg" alt="<?php echo themeName;?>"></a>
                        </div>
                    </div>
                    <div class="col-auto">
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
                                <a href="contact.html" class="th-btn style8">Contact us <span class="icon"><i class="fa-solid fa-arrow-up-right ms-3"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>