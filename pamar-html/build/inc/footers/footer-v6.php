
<!--==============================
	Footer Area
==============================-->
<footer class="footer-wrapper footer-layout6 bg-theme2" data-bg-src="assets/img/bg/footer_bg_6.jpg">
	<div class="footer-top">
		<div class="container">
			<div class="row gy-50 justify-content-between">
				<div class="col-auto">
					<div class="cta-link">
						<div class="cta-link-icon">
							<i class="fas fa-phone"></i>
						</div>
						<div>
							<p>Need Any Help?</p>
							<a class="cta-single-link" href="tel:+19524357106">Call Now - +112 (789) 568 25</a>
						</div>
					</div>
				</div>
				<div class="col-auto">
					<a href="contact.html" class="th-btn style3">Contact Us <div class="icon"><i class="fa-solid fa-arrow-up-right ms-3"></i></div></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="widget-area">
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
	<div class="copyright-wrap">
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