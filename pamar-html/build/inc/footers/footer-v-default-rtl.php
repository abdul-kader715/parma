
<!--==============================
	Footer Area
==============================-->
<footer class="footer-wrapper footer-default" data-bg-src="assets/img/bg/footer-default-bg-mask.png">
	<div class="footer-bg-shape2 shape-mockup jump" data-top="20%" data-right="0">
		<img src="assets/img/shape/footer-bg-shape3.png" alt="img">
	</div>
	<div class="footer-bg-shape3 shape-mockup d-none" data-bottom="0" data-right="0">
		<img src="assets/img/shape/footer-bg-shape2.png" alt="img">
	</div>
	<div class="footer-top">
		<div class="container">
			<div class="subscribe-box">
				<div class="row gy-40 align-items-center justify-content-center">
					<div class="col-xl-6">
						<h4 class="subscribe-box_title">اشترك في النشرة الإخبارية لدينا
						</h4>
						<p class="subscribe-box_text">عمليات التفتيش المنتظمة وآليات التغذية الراجعة
						</p>
					</div>
					<div class="col-xl-6 col-lg-8">
						<form class="newsletter-form">
							<div class="form-group">
								<input class="form-control" type="email" placeholder="Enter Email Address" required="">
							</div>
							<button type="submit" class="th-btn style3"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>				
			</div>
		</div>
	</div>
	<div class="widget-area">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-6 col-xl-auto">
					<?php get_widget('about-rtl', 'footer-widget'); ?>
				</div>
				<div class="col-sm-6 col-xl-auto">
					<?php get_widget('nav-menu-rtl', 'footer-widget'); ?>
				</div>
				<div class="col-sm-6 col-xl-auto">
					<?php get_widget('nav-menu-v2-rtl', 'footer-widget'); ?>
				</div>
				<div class="col-md-6 col-xl-auto">	
					<?php get_widget('contact-rtl', 'footer-widget'); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright-wrap">
		<div class="container">
			<div class="row justify-content-center gy-3 align-items-center">
				<div class="col-lg-12">
					<p class="copyright-text text-center">
					<i class="fal fa-copyright"></i> حقوق الطبع والنشر
					<?php echo date("Y"); ?> <a href="<?php echo indexURL;?>"><?php echo Author;?></a>. جميع الحقوق محفوظة.
					</p>
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