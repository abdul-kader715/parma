
<!--==============================
	Footer Area
==============================-->
<footer class="footer-wrapper footer-default">
   <div class="container">
		<div class="footer-top">
			<div class="row align-items-center justify-content-between">
				<div class="col-xxl-9 col-xl-8">
					<div class="title-area mb-0">
                  <h2 class="text-white text-anim2" >
                           Contact us today for a free Consultation.</h2>
               </div>
				</div>
				<div class="col-xl-auto">
					<div class="fadeinright wow" data-wow-duration="1.5s" data-wow-delay="0.3s">
						<a href="contact.html" class="th-btn style5">
							Free Consultation
							<span class="after-bg"></span>
						</a>
					</div>
				</div>
			</div>	
		</div>
	</div>
	<div class="widget-area">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-6 col-xl-4" data-cue="slideInUp">
					<?php get_widget('about', 'footer-widget'); ?>
				</div>
				<div class="col-sm-6 col-xl-auto" data-cue="slideInUp">
					<?php get_widget('nav-menu', 'footer-widget '); ?>
				</div>
				<div class="col-md-6 col-xl-auto" data-cue="slideInUp">	
					<?php get_widget('nav-menu-v3', 'footer-widget'); ?>
				</div>
				<div class="col-md-6 col-xl-3" data-cue="slideInUp">	
					<?php get_widget('gallery', 'footer-widget'); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright-wrap">
		<div class="container">
			<div class="row justify-content-center gy-3 align-items-center">
				<div class="col-md-6" data-cue="slideInUp">
					<p class="copyright-text">
                  Copyright
					<i class="fal fa-copyright"></i> <?php echo date("Y"); ?>  <a href="<?php echo indexURL;?>"><?php echo Author;?></a>, All rights reserved. </p>
				</div>
				<div class="col-md-6 text-md-end text-center" data-cue="slideInUp">
					<div class="footer-links">
						<ul>
							<li><a href="about.html">Terms of service</a></li>
							<li><a href="about.html">Privacy policy</a></li>
							<li><a href="about.html">cookies</a></li>
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