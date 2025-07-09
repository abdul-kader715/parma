<?php
	$title = array(
		'10 Common Plumbing Problems Every Homeowner Should Know',
		"The Ultimate Guide to Water Heater Maintenance Save Money",
		'How to Spot Hidden Leaks in Your Home Before They Cause',
		'10 Common Plumbing Problems Every Homeowner Should Know',
		"The Ultimate Guide to Water Heater Maintenance Save Money",
		'How to Spot Hidden Leaks in Your Home Before They Cause',
	);
	$img = array(
		'assets/img/blog/blog_3_1.jpg',
		'assets/img/blog/blog_3_2.jpg',
		'assets/img/blog/blog_3_3.jpg',
		'assets/img/blog/blog_3_1.jpg',
		'assets/img/blog/blog_3_2.jpg',
		'assets/img/blog/blog_3_3.jpg',
	);
	$date = array(
		'March 15',
		'March 18',
		'March 22',
		'March 15',
		'March 18',
		'March 22',
	);
	$arrlength = count($title);

	for($x = 0; $x < $arrlength; $x++) {
	?>
		<div class="<?php echo $klass;?>">
			<div class="blog-card3">
				<div class="blog-img">
					<a href="blog-details.html">
						<img src="<?php echo $img[$x];?>" alt="blog image">
					</a>
				</div>
				<div class="blog-content">
					<div class="blog-meta">
						<a href="blog.html"><i class="fa-solid fa-calendar-days"></i><?php echo $date[$x];?>, <?php echo date("Y"); ?></a>
						<a href="blog.html"><i class="fa-solid fa-tags"></i>Oil Change</a>
					</div>
					<h3 class="box-title"><a href="blog-details.html"><?php echo $title[$x];?></a></h3>
					<a href="blog-details.html" class="th-btn style15">Read More<i class="fa-solid fa-arrow-right ms-2"></i></a>
				</div>
			</div>
		</div>
		
	<?php if($x == $y) {
        break;
    } }; 
?>