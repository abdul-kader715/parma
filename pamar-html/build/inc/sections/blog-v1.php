<?php
	$title = array(
		'Achieving calm minds from plumbing issues ',
		"Expert Tips & Stories from the Plumbing World",
		'Solving Everyday Plumbing Challenges with Ease',
		'The Role of AI in Shaping the Future of Work',
		'How Small Businesses Can Benefit from AI Solutions',
		'Top AI Tools and Platforms for Businesses in 2025',
		'AI and Creativity: Can Machines Be Truly Creative',
		'Ethical AI: Building Responsible and Fair AI Systems',
		'AI-Powered Innovations: What’s Next for the Future?',
	);
	$img = array(
		'assets/img/blog/blog_1_1.jpg',
		'assets/img/blog/blog_1_2.jpg',
		'assets/img/blog/blog_1_3.jpg',
		'assets/img/blog/blog_1_4.jpg',
		'assets/img/blog/blog_1_5.jpg',
		'assets/img/blog/blog_1_6.jpg',
		'assets/img/blog/blog_1_7.jpg',
		'assets/img/blog/blog_1_8.jpg',
		'assets/img/blog/blog_1_9.jpg',
	);
	$date = array(
		'24 ',
		'16 ',
		'30 ',
		'16 ',
		'24 ',
		'16 ',
		'30 ',
		'16 ',
		'24 ',
	);
   $month = array(
   'Jan',
   'Jan',
   'Jan',
   'Jan',
   'Jan',
   'Jan',
   'Jan',
   'Jan',
   'Jan',
   );
   $tag = array(
		'Kitchen Plumbing',
		'Bathroom Plumbing',
		'Kitchen Plumbing',
		'Kitchen Plumbing',
		'Kitchen Plumbing',
		'Kitchen Plumbing',
		'Kitchen Plumbing',
		'Kitchen Plumbing',
		'Kitchen Plumbing',
	);
	$arrlength = count($title);

	for($x = 0; $x < $arrlength; $x++) {
	?>
		<div class="<?php echo $klass;?>" data-cue="slideInUp">
			<div class="blog-card position-relative">
				<div class="blog-img">
					<a href="blog-details.html">
						<img src="<?php echo $img[$x];?>" alt="blog image">
					</a>
               <div class="blog-date">
                  <h3><?php echo $date[$x];?></h3>
                  <span><?php echo $month[$x];?></span>
               </div>
				</div>
				<div class="blog-content">
					<span class="box-tag"><?php echo $tag[$x];?></span>
					<h3 class="box-title"><a href="blog-details.html"><?php echo $title[$x];?></a></h3>
					<a href="blog-details.html" class="link-btn">
                  <span>Read More</span>
                  <div class="icon"><img src="assets/img/icon/arrow-right-white.svg" alt="">
                  </div>
               </a>
				</div>
			</div>
		</div>
		
	<?php if($x == $y) {
        break;
    } }; 
?>