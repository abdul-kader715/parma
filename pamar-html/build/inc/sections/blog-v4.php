<?php
	$title = array(
		'Avenue money and make you very successful creative work',
		"Essential Strategies for Business Expansion",
		'Tips for Organizational and Transformation',
		'Sustaining Business Through Uncertainty',
	);
	$img = array(
		'assets/img/blog/blog_4_1.jpg',
		'assets/img/blog/blog_4_2.jpg',
		'assets/img/blog/blog_4_3.jpg',
		'assets/img/blog/blog_4_4.jpg',
	);
	$date = array(
		'Dec 12',
		'Jan 24',
		'Jun 12',
		'Jul 05',
	);
	$arrlength = count($title);

	for($x = 0; $x < $arrlength; $x++) {
	?>
		<div class="blog-grid fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.4s">
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
				<a href="blog-details.html" class="th-btn style-border4 btn-sm btn-radius-8">Read More <i class="fas fa-arrow-right ms-2"></i></a>
			</div>
			
		</div>
		
	<?php if($x == $y) {
        break;
    } }; 
?>