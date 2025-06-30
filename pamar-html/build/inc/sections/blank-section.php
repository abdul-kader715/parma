<!--==============================
    
    ==============================-->
<section class=" <?php echo $klass; ?>">
  <div class="container">
    <?php sec_title2('Tips for Hair', 'Articles & News', 'assets/img/icon/sec-icon.png', 'text-center'); ?>
    <div class="row">
    <?php
      $title = array(
        "", 
      );
      $number = array(
        "",
      );
      $img = array(
        "",
      );
      $arrlength = count($title);
      for($x = 0; $x < $arrlength; $x++) {
    ?>
      <div class="col-xl-3">
        <div class="">
          <div class="">
            <img src="<?php echo $img[$x];?>" alt="Image">
          </div>
          <span class=""><?php echo $number[$x];?></span>
          <p class=""><?php echo $title[$x];?></p>
        </div>
      </div>
      <?php 
      };
      ?>
    </div>
  </div>
</section>