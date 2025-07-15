
<?php 
get_header('mobile-menu');
?>
<?php 
get_header('popup-search');
?>
<?php 
get_header('color-scheme');
?>
<!--==============================
	Header Area
==============================-->
<header class="th-header header-layout1 onepage-nav">
    <div class="header-top">
      <div class="row justify-content-center justify-content-lg-between  align-items-center gy-2">
            <div class="col-auto">
               <div class="header-links">
                     <ul>
                        <li class=" d-xxl-inline-block"><i class="fa-regular fa-clock"></i>Working Hours: Mon to Fri - 8:00am - 16:00pm</li>
                        <li><i class="fal fa-envelope"></i><a href="mailto:info@pamar.com">info@pamar.com</a></li>
                        <li class=" d-xxl-inline-block"><i class="fal fa-location-dot"></i>156 Main Street, 2nd Floor. USA</li>
                     </ul>
               </div>
            </div>
            <div class="col-auto">
               <div class="top-right">
                 <div class="header-links">
                     <ul>
                        <li class=" d-xxl-inline-block">
                        <i class="fa-sharp fa-regular fa-award"></i>(5.0 Star) 350k+  Reviews</li>
                     </ul>
               </div>
               </div>
            </div>
      </div>
    </div>
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="container-fulid">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="<?php echo indexURL;?>">
                                <img src="assets/img/logo2.svg" alt="<?php echo themeName;?>">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <?php get_header('menu-onepage'); ?>
                        </nav>
                        <div class="header-button d-flex d-lg-none">
                            <button type="button" class="th-menu-toggle icon-btn"><i class="far fa-bars"></i></button>
                        </div>
                    </div>
                    <div class="col-auto d-none d-xxl-block">
                        <div class="header-button">
                            <button type="button" class="icon-btn style6 searchBoxToggler"><i class="far fa-search"></i></button>
                            <a href="tel:+16369729901" class="link-btn3">
                              Request a Free Call
                           </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-bg bg-mask" style="mask-image: url(assets/img/shape/menu_bg_mask.png);"></div>
</header>


