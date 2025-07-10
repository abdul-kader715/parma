<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper bg-mask <?php echo $klass; ?>" 
     data-mask-src="assets/img/shape/breadcumb-shape.png" 
     data-bg-src="<?php echo !empty($breadcumb_image) ? $breadcumb_image : ''; ?>" 
     <?php echo $breadcumb_attr;?> 
     >

    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title text-anim" data-cue="slideInUp" data-delay="100">
                        <?php echo $breadcumb_title;?>
                    </h1>
                    <ul class="breadcumb-menu" data-cue="slideInUp" data-delay="300">
                        <li><a href="<?php echo indexURL;?>">Home</a></li>
                        <li><?php echo $breadcumb_subtitle;?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>