
<!--==============================
	Footer Area
==============================-->
<footer class="footer-wrapper footer-layout1" data-bg-src="assets/img/bg/wave-bg2.png">
	<div class="container">
		<div class="footer-top">
			<div class="row gy-30 align-items-center justify-content-between">
				<div class="col-xxl-5 col-xl-7">
					<div class="title-area mb-0">
                        <h2 class="sec-title text-white fadeinleft wow" data-wow-duration="1.5s" data-wow-delay="0.3s">We can help you to move. Get a quote today.</h2>
                    </div>
				</div>
				<div class="col-xl-auto">
					<div class="cta-group-wrap fadeinright wow" data-wow-duration="1.5s" data-wow-delay="0.3s">
						<img src="assets/img/icon/headphone2.svg" alt="img">
						<h4 class="title"><a href="contact.html">LET’S TALK</a></h4>
					</div>
				</div>
			</div>	
		</div>
		<div class="footer-bottom">
			<div class="widget-area">
				<div class="row justify-content-between">
					<div class="col-md-6 col-xl-auto">
						<?php get_widget('about-v2.1', 'footer-widget'); ?>
					</div>
					<div class="col-sm-6 col-xl-auto">
						<?php get_widget('nav-menu', 'footer-widget'); ?>
					</div>
					<div class="col-sm-6 col-xl-auto">
						<?php get_widget('nav-menu-v2', 'footer-widget'); ?>
					</div>
					<div class="col-md-6 col-xl-auto">	
						<?php get_widget('newsletter-v1.1', 'footer-widget'); ?>
					</div>
				</div>
			</div>
			<div class="copyright-wrap bg-black2">
				<div class="row gy-2">
					<div class="col-lg-6">
						<p class="copyright-text">Copyright <?php echo date("Y"); ?> <a href="<?php echo indexURL;?>"><?php echo Author;?>.</a> All Rights Reserved.</p>
					</div>
					<div class="col-lg-6 text-center text-lg-end">
						<div class="footer-links">
							<ul>
								<li>
									<a href="about.html">Privacy Policy</a>
								</li>
								<li>
									<a href="about.html">Terms of services</a>
								</li>
								<li>
									<a href="about.html">Disclaimer</a>
								</li>
							</ul>
						</div>
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
	<div class="scroll-top style2">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

	
<?php get_footer('script'); ?>


</body>

</html>