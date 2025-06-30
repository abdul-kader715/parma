
<!--==============================
Product Area
==============================-->
<section class="<?php echo $klass;?>">
    <div class="container">
		<div class="row gx-40">
			<div class="col-xl-8 col-lg-7">
				<?php get_section('sort-bar-v1');?>
				<div class="row gy-40">
					<?php get_section('product-grid', 'col-sm-6', '7'); ?>
				</div>
				<?php get_section('pagination-v1', 'text-center'); ?>
			</div>
			<div class="col-xl-4 col-lg-5">
                <aside class="sidebar-area sidebar-sticky" data-cue="slideInUp">
                    <?php 
						get_widget('search');
						get_widget('categories');
						get_widget('price-filter');
						get_widget('tagcloud');
						get_widget('banner');
					?>
                </aside>
            </div>
		</div>
		
    </div>
</section>