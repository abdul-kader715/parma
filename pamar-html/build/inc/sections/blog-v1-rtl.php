<?php
	$title = array(
		'شاهد تأثيرك: تتبع التبرعات بشكل شفاف
',
		"كل مساهمة مهمة: اصنع فرقًا
",
		'قصص حقيقية، تأثير حقيقي: تبرعاتك في 
',
		'شاهد تأثيرك: تتبع التبرعات بشكل شفاف
',
		"كل مساهمة مهمة: اصنع فرقًا
",
		'قصص حقيقية، تأثير حقيقي: تبرعاتك في 
',
	);
	$img = array(
		'assets/img/blog/blog_1_1.jpg',
		'assets/img/blog/blog_1_2.jpg',
		'assets/img/blog/blog_1_3.jpg',
		'assets/img/blog/blog_1_1.jpg',
		'assets/img/blog/blog_1_2.jpg',
		'assets/img/blog/blog_1_3.jpg',
	);
	$date = array(
		'July 16',
		'March 24',
		'June 30',
		'July 16',
		'March 24',
		'June 30',
	);
	$tag = array(
		'تعليم',
		'تعليم',
		'تعليم',
		'تعليم',
		'تعليم',
		'تعليم',
	);
	$arrlength = count($title);

	for($x = 0; $x < $arrlength; $x++) {
	?>
		<div class="<?php echo $klass;?>">
			<div class="blog-card">
				<div class="blog-img">
					<a href="blog-details.html">
						<div class="blog-img-shape1" data-mask-src="assets/img/blog/blog-card-bg-shape1-2.png"></div>
						<img src="<?php echo $img[$x];?>" alt="blog image">
					</a>
				</div>
				<div class="blog-content">
					<div class="blog-card-shape" data-mask-src="assets/img/blog/blog-card-bg-shape1-1.png"></div>
					<div class="blog-meta">
						<a href="blog.html"><i class="fas fa-calendar"></i><?php echo $date[$x];?>, <?php echo date("Y"); ?></a>
						<a href="blog.html"><i class="fas fa-tags"></i><?php echo $tag[$x];?></a>
					</div>
					<h3 class="box-title"><a href="blog-details.html"><?php echo $title[$x];?></a></h3>
					<a href="blog-details.html" class="th-btn">اقرأ المزيد
					<i class="fas fa-arrow-up-right ms-2"></i></a>
				</div>
			</div>
		</div>
		
	<?php if($x == $y) {
        break;
    } }; 
?>