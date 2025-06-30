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
<header class="th-header header-default onepage-nav">
    <div class="menu-top">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-logo">
                        <a href="<?php echo indexURL;?>"><img src="assets/img/logo.svg" alt="<?php echo themeName;?>"></a>
                    </div>
                </div>
                <div class="col-auto d-none d-md-block">
                    <div class="info-card-wrap">
                        <div class="info-card">
                            <div class="box-icon">
                                <i class="fal fa-map-marker-alt"></i>
                                <div class="bg-shape1" data-mask-src="assets/img/shape/info_card_icon_bg_shape_1_1.png"></div>
                                <div class="bg-shape2" data-mask-src="assets/img/shape/info_card_icon_bg_shape_1_1.png"></div>
                            </div>
                            <div class="box-content">
                                <p class="box-text">تحديد العنوان:
                                </p>
                                <h4 class="box-title"><a href="https://www.google.com/maps">نيويورك، الولايات الأمريكية
                                </a></h4>
                            </div>
                        </div>
                        <div class="info-card">
                            <div class="box-icon">
                                <i class="fal fa-phone"></i>
                                <div class="bg-shape1" data-mask-src="assets/img/shape/info_card_icon_bg_shape_1_1.png"></div>
                                <div class="bg-shape2" data-mask-src="assets/img/shape/info_card_icon_bg_shape_1_1.png"></div>
                            </div>
                            <div class="box-content">
                                <p class="box-text">اتصل بنا في أي وقت:
                                </p>
                                <h4 class="box-title"><a href="tel:16336547896">+163-3654-7896</a></h4>
                            </div>
                        </div>
                        <div class="info-card">
                            <div class="box-icon">
                                <i class="fal fa-envelope-open"></i>
                                <div class="bg-shape1" data-mask-src="assets/img/shape/info_card_icon_bg_shape_1_1.png"></div>
                                <div class="bg-shape2" data-mask-src="assets/img/shape/info_card_icon_bg_shape_1_1.png"></div>
                            </div>
                            <div class="box-content">
                                <p class="box-text">راسلنا عبر البريد الإلكتروني في أي وقت:
                                </p>
                                <h4 class="box-title"><a href="mailto:info@pamar.com">info@pamar.com</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto header-social-col">
                    <div class="th-social">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="container">
            <div class="menu-area">
                <div class="menu-area-wrap">
                    <div class="col-auto d-inline-block d-lg-none">
                        <div class="header-logo">
                            <a href="<?php echo indexURL;?>"><img src="assets/img/logo-white.svg" alt="Pamar"></a>
                        </div>
                    </div>
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
                    <a href="contact.html" class="th-btn style3 d-lg-block d-none"><i class="fas fa-heart me-2"></i> تبرع الآن
                    </a>
                    <button type="button" class="icon-btn th-menu-toggle d-lg-none"><i class="far fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
</header>


