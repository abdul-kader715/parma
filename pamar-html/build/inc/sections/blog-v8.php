<?php
	$title = array(
		'Free Resources to Achieve Your Financial Goals',
		"Build a Brighter Financial Future with Pamar's Insights",
		"Make Smarter Financial Decisions with Our Expert Tips",
		'Free Resources to Achieve Your Financial Goals',
		"Build a Brighter Financial Future with Pamar's Insights",
		"Make Smarter Financial Decisions with Our Expert Tips",
	);
	$img = array(
		'assets/img/blog/blog_8_1.jpg',
		'assets/img/blog/blog_8_2.jpg',
		'assets/img/blog/blog_8_3.jpg',
		'assets/img/blog/blog_8_1.jpg',
		'assets/img/blog/blog_8_2.jpg',
		'assets/img/blog/blog_8_3.jpg',
	);
	$date = array(
		'12 <br> May',
		'15 <br> Jun',
		'05 <br> Jul',
		'12 <br> May',
		'15 <br> Jun',
		'05 <br> Jul',
	);
	$arrlength = count($title);

	for($x = 0; $x < $arrlength; $x++) {
	?>
		<div class="<?php echo $klass;?>">
			<div class="blog-card style8">
				<div class="blog-img">
					<a href="blog-details.html">
						<img src="<?php echo $img[$x];?>" alt="blog image">
					</a>
					<div class="blog-date">
						<?php echo $date[$x];?>
						<span class="blog-year"><?php echo date("Y");?></span>
					</div>
				</div>
				<div class="blog-content">
					<h3 class="box-title"><a href="blog-details.html"><?php echo $title[$x];?></a></h3>
					<a href="blog-details.html" class="link-btn style2"><i class="fas fa-plus-circle me-1"></i>Read More</a>
				</div>
			</div>
		</div>
		
	<?php if($x == $y) {
        break;
    } }; 
?>