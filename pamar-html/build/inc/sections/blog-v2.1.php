<?php
	$title = array(
		'We Launch Corporate business this Week!',
		"Tips for Organizational and Transformation",
		'Build A Top Business Plan In 5 Steps ',
		'Share real-life examples of how your consultancy',
		'Essential Strategies for Business Expansion',
		"Tips for Organizational and Transformation",
		'Sustaining Business Through Uncertainty',
		'Share real-life examples of how your consultancy',
		'Essential Strategies for Business Expansion',
		'How To Find Great Consulting Experts',
		'Sustaining Business Through Uncertainty',
		'Share real-life examples of how your consultancy',
	);
	$img = array(
		'assets/img/blog/blog_6_1.jpg',
		'assets/img/blog/blog_6_2.jpg',
		'assets/img/blog/blog_6_3.jpg',
		'assets/img/blog/blog_6_4.jpg',
		'assets/img/blog/blog_6_5.jpg',
		'assets/img/blog/blog_6_6.jpg',
		'assets/img/blog/blog_6_7.jpg',
		'assets/img/blog/blog_6_8.jpg',
		'assets/img/blog/blog_6_9.jpg',
		'assets/img/blog/blog_6_10.jpg',
		'assets/img/blog/blog_6_11.jpg',
		'assets/img/blog/blog_6_12.jpg',
	);
	$date = array(
		'Dec 12',
		'Jan 24',
		'Jun 12',
		'Jul 05',
		'Dec 12',
		'Jan 24',
		'Jun 12',
		'Jul 05',
		'Dec 12',
		'Jan 24',
		'Jun 12',
		'Jul 05',
	);
	$arrlength = count($title);

	for($x = 0; $x < $arrlength; $x++) {
	?>
		<div class="<?php echo $klass;?>">
			<div class="blog-card6">
				<div class="blog-img">
					<a href="blog-details.html">
						<img src="<?php echo $img[$x];?>" alt="blog image">
					</a>
				</div>
				<div class="blog-content">
					<div class="blog-meta">
						<a class="author" href="blog.html"><img src="assets/img/blog/author.png" alt="img">By themehour</a>
						<a href="blog.html">
							<i class="fal fa-calendar-days"></i><?php echo $date[$x];?>, <?php echo date("Y"); ?>
						</a>
					</div>
					<h3 class="box-title"><a href="blog-details.html"><?php echo $title[$x];?></a></h3>
					<a href="blog-details.html" class="th-btn style8 btn-sm btn-radius-0">Read More <i class="fas fa-arrow-right ms-2"></i></a>
				</div>
				
			</div>
		</div>
		
	<?php if($x == $y) {
        break;
    } }; 
?>