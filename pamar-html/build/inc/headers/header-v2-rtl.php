<?php 
get_section('sidemenu-v1');
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
<header class="th-header header-layout2 onepage-nav">
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="container">
            <div class="menu-area">
                <div class="header-logo">
                    <a href="<?php echo indexURL;?>"><img src="assets/img/logo.svg" alt="Pamar"></a>
                </div>
                <div class="menu-area-wrap">
                    <nav class="main-menu d-none d-lg-block">
                        <?php get_header('menu-onepage-rtl'); ?>
                    </nav>
                    <p class="header-notice"><img class="me-1" src="assets/img/icon/heart-icon.svg" alt="img">هل أنت مستعد لمساعدتهم؟ لنصبح متطوعين...
                    </p>
                </div>
                <div class="header-button">
                    <button type="button" class="icon-btn style2 searchBoxToggler d-lg-block d-none"><i class="far fa-search"></i></button>
                    <button type="button" class="icon-btn sideMenuToggler">
                        <span class="badge">5</span>
                        <i class="fa-regular fa-cart-shopping"></i>
                    </button>                            
                    <a href="contact.html" class="th-btn style3 d-xl-block d-none"><i class="fas fa-heart me-2"></i> تبرع الآن
                    </a>
                    <button type="button" class="icon-btn th-menu-toggle d-lg-none"><i class="far fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
</header>


