<?php
	$title = array(
		'Pamar Chronicles: Exploring Insights and Trends',
		"Beyond Consultation: Pamar's Blogging Corner",
		"Insights Unveiled: Pamar's Blog for the Inquisitive Mind",
		'Pamar Chronicles: Exploring Insights and Trends',
		"Beyond Consultation: Pamar's Blogging Corner",
		"Insights Unveiled: Pamar's Blog for the Inquisitive Mind",
	);
	$img = array(
		'assets/img/blog/blog_6_1.jpg',
		'assets/img/blog/blog_6_2.jpg',
		'assets/img/blog/blog_6_3.jpg',
		'assets/img/blog/blog_6_1.jpg',
		'assets/img/blog/blog_6_2.jpg',
		'assets/img/blog/blog_6_3.jpg',
	);
	$date = array(
		'04 Apr',
		'12 June',
		'17 June',
		'04 Apr',
		'12 June',
		'17 June',
	);
	$comment = array(
		'02 Comments',
		'03 Comments',
		'02 Comments',
		'04 Comments',
		'02 Comments',
		'03 Comments',
	);
	$arrlength = count($title);

	for($x = 0; $x < $arrlength; $x++) {
	?>
		<div class="<?php echo $klass;?>">
			<div class="blog-card style6">
				<div class="blog-img">
					<a href="blog-details.html">
						<img src="<?php echo $img[$x];?>" alt="blog image">
					</a>
					<div class="blog-meta">
						<a href="blog.html"><i class="fa-light fa-calendar-days"></i><?php echo $date[$x];?> <?php echo date("Y");?></a>
						<a href="blog-details.html"><i class="far fa-comments"></i><?php echo $comment[$x];?></a>
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