<!--========================
    Sticky Header
========================-->
<div class="sticky-header-wrap sticky-header py-1 py-sm-2 py-lg-1">
  <div class="container position-relative">
    <div class="row align-items-center">
      <div class="col-5 col-md-3">
        <div class="logo">
          <a href="<?php echo indexURL;?>"><img src="assets/img/logo.svg" alt="<?php echo themeName ?>"></a>
        </div>
      </div>
      <div class="col-7 col-md-9 text-right position-static">
        <nav class="main-menu menu-sticky1 d-none d-lg-block">
          <?php get_header('menu'); ?>
        </nav>
        <button class="th-menu-toggle text-theme border-theme d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
      </div>
    </div>
  </div>
</div>