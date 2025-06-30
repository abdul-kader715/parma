
<!--==============================
	Footer Area
==============================-->
<div class="cta-area-3 bg-theme" data-bg-src="assets/img/bg/cta_bg_3.jpg">
	<div class="container">
		<div class="cta-wrap">
			<div class="cta-content">
				<div class="cta-subtitle">Need any help?</div>
				<h4 class="cta-title mt-n2">Feel free to request a complimentary consultation with us</h4>
			</div>
			<a href="contact.html" class="th-btn style4">Contact Us<div class="icon"><i class="fas fa-arrow-up-right ms-3"></i></div></a>
		</div>
	</div>
	<div class="cta-thumb shape-mockup d-xxl-block d-none" data-bottom="0" data-right="1%">
		<img src="assets/img/bg/cta_bg_3-2.jpg" alt="icon">
	</div>
</div>
<footer class="footer-wrapper footer-layout4" data-bg-src="assets/img/bg/footer_bg_4.jpg">
	<div class="widget-area space-top">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-6 col-xl-auto">
					<?php get_widget('about', 'footer-widget'); ?>
				</div>
				<div class="col-md-6 col-xl-auto">
					<?php get_widget('nav-menu', 'footer-widget'); ?>
				</div>
				<div class="col-md-6 col-xl-auto">	
					<?php get_widget('recent-post-v2', 'footer-widget'); ?>
				</div>
				<div class="col-md-6 col-xl-3">
					<?php get_widget('newsletter-v1', 'footer-widget'); ?>
				</div>
				
			</div>
		</div>
	</div>
	<div class="copyright-wrap bg-theme2">
		<div class="container">
			<div class="row gy-2 align-items-center">
				<div class="col-lg-6">
					<p class="copyright-text">
					<i class="fal fa-copyright"></i> <?php echo date("Y"); ?> All Rights Reserved By <a href="<?php echo indexURL;?>"><?php echo Author;?></a></p>
				</div>
				<div class="col-lg-6 text-center text-lg-end">
					<div class="footer-links">
						<ul>
							<li><a href="about.html">Privacy Policy</a></li>
							<li><a href="about.html">Terms & Condition</a></li>
							<li><a href="about.html">Support policy</a></li>
						</ul>
					</div>
				</div>
			</div>
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