<?php
	$title = array(
		'Holistic Enterprise Risk Management  for Mitigating ',
		"Innovative Product Development and Market Entry Strategy.",
		'Comprehensive Talent Acquisition and Retention',
		'Holistic Enterprise Risk Management  for Mitigating ',
		"Innovative Product Development and Market Entry Strategy.",
		'Comprehensive Talent Acquisition and Retention',
	);
	$img = array(
		'assets/img/blog/blog_5_1.jpg',
		'assets/img/blog/blog_5_2.jpg',
		'assets/img/blog/blog_5_3.jpg',
		'assets/img/blog/blog_5_1.jpg',
		'assets/img/blog/blog_5_2.jpg',
		'assets/img/blog/blog_5_3.jpg',
	);
	$date = array(
		'Jan 24',
		'Jul 16',
		'Jun 30',
		'Jul 16',
		'Jan 24',
		'Jul 16',
	);
	$arrlength = count($title);

	for($x = 0; $x < $arrlength; $x++) {
	?>
		<div class="<?php echo $klass;?>">
			<div class="blog-card style5">
				<div class="blog-img">
					<a href="blog-details.html">
						<img src="<?php echo $img[$x];?>" alt="blog image">
					</a>
				</div>
				<div class="blog-content">
					<div class="blog-meta">
						<a class="author" href="blog.html"><img src="assets/img/blog/author.png" alt="img">By themehour</a>
						<a href="blog.html">
							<i class="fal fa-calendar-days"></i>
							<?php echo $date[$x];?>, <?php echo date("Y"); ?>
						</a>
					</div>
					<h3 class="box-title"><a href="blog-details.html"><?php echo $title[$x];?></a></h3>
					<p class="box-text">Pamar offers full range of consultancy and training for data consultation strategic ways.</p>
					<a href="blog-details.html" class="th-btn style5 btn-sm">Read More <i class="fas fa-plus ms-2"></i></a>
				</div>
			</div>
		</div>
		
	<?php if($x == $y) {
        break;
    } }; 
?>