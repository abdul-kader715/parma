
<!--==============================
	Footer Area
==============================-->
<footer class="footer-wrapper footer-layout1">
	<div class="shape-mockup footer-bg-shape1-1 jump" data-left="0" data-top="0">
		<img src="assets/img/shape/footer-bg-shape1-1.png" alt="img">
	</div>
	<div class="shape-mockup footer-bg-shape1-2 jump-reverse" data-right="0" data-top="15%">
		<img src="assets/img/shape/hand-bg-shape2-1.png" alt="img">
	</div>
	<div class="shape-mockup footer-bg-shape1-3 jump" data-right="0" data-bottom="0">
		<div class="color-masking2">
			<div class="masking-src" data-mask-src="assets/img/shape/footer-bg-shape1-2.png"></div>
			<img src="assets/img/shape/footer-bg-shape1-2.png" alt="img">
		</div>
	</div>
	<div class="widget-area space-top">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-6 col-xl-auto">
					<?php get_widget('about-v2-rtl', 'footer-widget'); ?>
				</div>
				<div class="col-sm-6 col-xl-auto">
					<?php get_widget('nav-menu-rtl', 'footer-widget'); ?>
				</div>
				<div class="col-sm-6 col-xl-auto">
					<?php get_widget('nav-menu-v2-rtl', 'footer-widget'); ?>
				</div>
				<div class="col-md-6 col-xl-auto">	
					<?php get_widget('newsletter-rtl', 'footer-widget'); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright-wrap bg-theme text-center">
		<div class="container">
			<p class="copyright-text">حقوق الطبع والنشر
			<?php echo date("Y"); ?> <a href="<?php echo indexURL;?>"><?php echo Author;?>.</a> جميع الحقوق محفوظة.
			</p>
		</div>
	</div>
</footer>


<!--********************************
			Code End  Here 
	******************************** -->

	<!-- Scroll To Top -->
	<div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

	
<?php get_footer('script'); ?>


</body>

</html>