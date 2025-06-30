<?php
	$title = array(
		'شاهد تأثيرك: تتبع التبرعات بشكل شفاف
',
		"كل مساهمة مهمة: اصنع فرقًا
",
		'شاهد تأثيرك: تتبع التبرعات بشكل شفاف
',
		"كل مساهمة مهمة: اصنع فرقًا
",
	);
	$img = array(
		'assets/img/blog/blog_1_1.jpg',
		'assets/img/blog/blog_1_2.jpg',
		'assets/img/blog/blog_1_1.jpg',
		'assets/img/blog/blog_1_2.jpg',
	);
	$date = array(
		'April 12',
		'June 17',
		'March 24',
		'July 05',
	);
	$tag = array(
		'تعليم',
		'تعليم',
		'تعليم',
		'تعليم',
	);
	$text = array(
		'استكشاف مجموعة متنوعة من الفرص التطوعية المتاحة. من تخطيط الأحداث وجمع التبرعات إلى العمل الميداني والدعم الإداري.',
		'استكشاف مجموعة متنوعة من الفرص التطوعية المتاحة. من تخطيط الأحداث وجمع التبرعات إلى العمل الميداني والدعم الإداري.',
		'استكشاف مجموعة متنوعة من الفرص التطوعية المتاحة. من تخطيط الأحداث وجمع التبرعات إلى العمل الميداني والدعم الإداري.',
		'استكشاف مجموعة متنوعة من الفرص التطوعية المتاحة. من تخطيط الأحداث وجمع التبرعات إلى العمل الميداني والدعم الإداري.',
	);
	$arrlength = count($title);

	for($x = 0; $x < $arrlength; $x++) {
	?>
		<div class="<?php echo $klass;?>">
			<div class="blog-card style2">
				<div class="blog-img">
					<a href="blog-details.html">
						<img src="<?php echo $img[$x];?>" alt="blog image">
					</a>
				</div>
				<div class="blog-content">
					<div class="blog-meta">
						<a href="blog.html"><i class="fas fa-calendar-days"></i><?php echo $date[$x];?> <?php echo date("Y"); ?></a>
						<a href="blog-details.html"><i class="fas fa-tags"></i><?php echo $tag[$x];?></a>
					</div> 
					
					<h3 class="box-title"><a href="blog-details.html"><?php echo $title[$x];?></a></h3>
					<p class="blog-text"><?php echo $text[$x];?></p>
					<a href="blog-details.html" class="th-btn">اقرأ المزيد
					<i class="fas fa-arrow-up-right ms-2"></i></a>
				</div>
			</div>
		</div>
		
	<?php if($x == $y) {
        break;
    } }; 
?>