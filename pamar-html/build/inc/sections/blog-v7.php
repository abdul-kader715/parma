<?php
	$title = array(
		'Spotlight on Speakers: Voices that Resonated at Pamar',
		"Innovations Unveiled: Highlights from Pamar 2025",
		"Behind the Scenes: Organizing Pamar Conference",
		'Spotlight on Speakers: Voices that Resonated at Pamar',
		"Innovations Unveiled: Highlights from Pamar 2025",
		"Behind the Scenes: Organizing Pamar Conference",
	);
	$img = array(
		'assets/img/blog/blog_7_1.jpg',
		'assets/img/blog/blog_7_2.jpg',
		'assets/img/blog/blog_7_3.jpg',
		'assets/img/blog/blog_7_1.jpg',
		'assets/img/blog/blog_7_2.jpg',
		'assets/img/blog/blog_7_3.jpg',
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
			<div class="blog-card style7">
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