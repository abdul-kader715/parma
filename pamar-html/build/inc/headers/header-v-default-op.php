
<?php 
get_header('mobile-menu');
?>
<?php 
get_header('color-scheme');
?>
<?php 
get_header('popup-search');
?>

<?php 
get_section('sidemenu-v2');
?>

<!--==============================
	Header Area
==============================-->
<header class="th-header header-default onepage-nav">
    <div class="header-top">
      <div class="row justify-content-center justify-content-lg-between  align-items-center gy-2">
            <div class="col-auto">
               <div class="header-links d-none d-xxl-inline-block d-lg-inline-block">
                     <ul>
                        <li class=" d-xxl-inline-block"><i class="fa-regular fa-clock"></i>Working Hours: Mon to Fri - 8:00am - 16:00pm</li>
                        <li><i class="fal fa-envelope"></i><a href="mailto:info@pamar.com">info@pamar.com</a></li>
                        <li class=" d-xxl-inline-block"><i class="fal fa-location-dot"></i>156 Main Street, 2nd Floor. USA</li>
                     </ul>
               </div>
            </div>
            <div class="col-auto">
               <div class="top-right">
                  <div class="social-links">
                     <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                     <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                     <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                     <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                     <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
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
                                <img src="assets/img/logo.svg" alt="<?php echo themeName;?>">
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
                    <div class="col-auto d-xl-block d-none">
                        <div class="header-button">
                           <button type="button" class="icon-btn style6 searchBoxToggler"><i class="far fa-search"></i></button>
                            <a class="th-btn style6"
                             href="tel:+16369729901"><img src="assets/img/icon/phone.svg" alt="">Call Us: +163-6547-9874</a>
                          <button type="button" class="icon-btn style6 sideMenuInfo"><i class="fa-solid fa-bars"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>






