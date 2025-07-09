
<!--==============================
	Footer Area
==============================-->
<footer class="footer-layout2   <?php echo $klass;?>">
	<div class=" footer-bg-shape3-1 bg-mask" data-mask-src="assets/img/shape/footer-bg-shape3.png">
		
	</div>
	<div class="container">
		<div class="footer-top">
			<div class="row gy-30 justify-content-lg-between ">
				<div class="col-lg-auto" data-cue="slideInUp">
					<h4 class="box-text">Subscribe to Our Newsletter</h4>
				</div>
				<div class="col-lg-auto" data-cue="slideInUp">
					<form class="newsletter-form">
						<div class="form-group">
							<input class="form-control" type="email" placeholder="Enter your email address" required="">
						</div>
						<button type="submit" class="th-btn style15">
								Subscribe Now
						</button>
					</form>
				</div>
				
			</div>	
		</div>
		<div class="footer-bottom">
			<div class="widget-area">
				<div class="row justify-content-between">
					<div class="col-md-6 col-xl-4" data-cue="slideInUp">
						<?php get_widget('about-v2', 'footer-widget'); ?>
					</div>
					<div class="col-sm-6 col-xl-auto" data-cue="slideInUp">
						<?php get_widget('nav-menu-v2', 'footer-widget style3'); ?>
					</div>
					<div class="col-md-6 col-xl-auto" data-cue="slideInUp">	
						<?php get_widget('nav-menu-v4', 'footer-widget style3'); ?>
					</div>
					<div class="col-md-6 col-xl-auto" data-cue="slideInUp">	
						<?php get_widget('gallery-v2', 'footer-widget style3'); ?>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<div class="container">
		<div class="foote-cta" data-cue="slideInUp">
			<div class="row gy-30 justify-content-lg-between align-items-center">
					<div class="col-lg-auto" >
						<h4 class="box-text text-white">Get Free Service Cost Estimation</h4>
					</div>
					<div class="col-lg-auto">
						<a href="contact.html" class="th-btn style15">Get Estimate Now<i class="fa-solid fa-arrow-right ms-2"></i></a>
					</div>
				</div>	
		</div>
	</div>
	<div class="copyright-wrap">
		<div class="container">
			<div class="row gy-2">
				<div class="col-lg-6" data-cue="slideInUp">
					<p class="copyright-text">Copyright <span>&copy;</span> <?php echo date("Y"); ?> <a href="<?php echo indexURL;?>"><?php echo Author;?>.</a> All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 text-center text-lg-end" data-cue="slideInUp">
					<div class="footer-links">
						<ul>
							<li>
								<a href="about.html">Privacy Policy</a>
							</li>
							<li>
								<a href="contact.html">Contact</a>
							</li>
							<li>
								<a href="about.html">Terms and Conditions.</a>
							</li>
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