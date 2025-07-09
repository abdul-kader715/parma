<?php
	$title = array(
		'Green Plumbing Eco-Friendly Upgrades for Your Home',
		"Eco-Friendly Renovation Strategies for Your Workspace",
		'Maximizing Energy Efficiency in Industrial Operations',
	);
   $subtitle = array(
		'Michel Colin',
		'Laura Smith',
		'James Taylor',
	);
	$img = array(
		'assets/img/blog/blog_2_1.jpg',
		'assets/img/blog/blog_2_2.jpg',
		'assets/img/blog/blog_2_3.jpg',
	);
   $comment = array(
		'(0) Comments',
		'(0) Comments',
		'(0) Comments',
	);

	$date = array(
		'24',
		'16',
		'30',
	);
   $math = array(
		'Jan',
		'Jul',
		'Jun',
	);
	$arrlength = count($title);

	for($x = 0; $x < $arrlength; $x++) {
	?>
		<div class="<?php echo $klass;?>" data-cue="slideInUp">
			<div class="blog-card style2">
            <div class="blog-meta bg-black-color7">
               <a href="blog.html">
                  <span>
                     <?php echo $date[$x];?>
                  </span>
                  <br>
                  <?php echo $math[$x];?>
                  <?php echo date("Y"); ?>
               </a>
               <a href="blog.html"><i class="far fa-solid fa-tag"></i>Commercial</a>
               <a href="blog.html"><i class="far fa-solid fa-comments"></i><?php echo $comment[$x];?></a>
            </div>
				<div class="blog-img">
					<a href="blog-details.html">
						<img src="<?php echo $img[$x];?>" alt="blog image">
					</a>
				</div>
				<div class="blog-content">
               <a href="blog.html" class="blog-tag"><?php echo $subtitle[$x];?></a>
				<h3 class="box-title"><a href="blog-details.html"><?php echo $title[$x];?></a></h3>
				
				<a href="blog-details.html" class="th-btn style13">
						Read More
				  <span class="after-bg"></span>
				</a>
				</div>
			</div>
		</div>
		
	<?php if($x == $y) {
        break;
    } }; 
?>