
<!--==============================
	Footer Area
==============================-->
<footer class="footer-wrapper footer-layout1">
    <div class="shape-mockup footer-bg-shape1-1 bg-mask " data-left="0%" data-top="0" data-mask-src="assets/img/shape/footer-bg-shape1.png">
      <img src="assets/img/shape/footer-bg-shape2.png" alt="img">
    </div>
	<div class="footer-bg-responcive1-1">
      <img src="assets/img/shape/footer-bg-shape2.png" alt="img">
    </div>
	<div class="footer-top text-center">
		<div class="container">
			<div class="shadow-text" data-cue="slideInUp">Get In Touch</div>
         <h4 class="box-text" data-cue="slideInUp">Get 100% satisfy work. Contact us today 
            <a href="tel:6624073460">(+084) 123 – 456 89</a></h4>
		</div>
	</div>
   <div class="widget-area">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-6 col-xl-4" data-cue="slideInUp">
					<?php get_widget('about-v1', 'footer-widget style2'); ?>
				</div>
				<div class="col-sm-6 col-xl-auto" data-cue="slideInUp">
					<?php get_widget('nav-menu', 'footer-widget style2'); ?>
				</div>
				<div class="col-md-6 col-xl-auto" data-cue="slideInUp">	
					<?php get_widget('nav-menu-v3', 'footer-widget style2'); ?>
				</div>
				<div class="col-md-6 col-xl-3" data-cue="slideInUp">	
					<?php get_widget('newsletter-v1.1', 'footer-widget style2'); ?>
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