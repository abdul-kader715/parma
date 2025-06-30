<?php
	$title = array(
		'Clutch Award - 2024 ',
		"Google Award - 2023",
		'ThreeBest Award - 2022',
	);
	$img = array(
		'assets/img/award/2-1.png',
		'assets/img/award/1-2.png',
		'assets/img/award/1-3.png',
	);
	$num = array(
		'01.',
		'02.',
		'03.',
	);
	$arrlength = count($title);

	for($x = 0; $x < $arrlength; $x++) {
	?>
        <div class="award-list-card style2 <?php echo $klass;?>">
            <div class="box-number">
                <?php echo $num[$x];?>       
            </div>
            <div class="box-img">
                <img src="<?php echo $img[$x];?>" alt="img">
            </div>
            <div class="box-content">
                <h3 class="box-title"><a href="blog-details.html"><?php echo $title[$x];?></a></h3>
                <p class="box-text">We offer a wide range of services to help businesses with organizational challenges.</p>
                <a href="contact.html" class="th-btn style8 btn-sm btn-radius-0">Contact Us <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </div>
        
		
	<?php if($x == $y) {
        break;
    } }; 
?>