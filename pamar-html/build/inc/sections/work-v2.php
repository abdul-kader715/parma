<?php
    $num = array(
        '01',
        '02',
        '03',
        '04',
    );
    $title = array(
        'Inspection',
        'Work Planning',
        'Fix And install',
        'Finale works and cleaning',
    );
    $img = array(
        'assets/img/normal/why-thumb3-1.jpg',
        'assets/img/normal/why-thumb3-2.jpg',
        'assets/img/normal/why-thumb3-3.jpg',
        'assets/img/normal/why-thumb3-4.jpg',
    );
    $text = array(
        'When it comes to plumbing, you need more than just a quick fix — you need a team you can trust. At [Your Company Name], we bring years of experience, professional expertise, and a commitment to quality craftsmanship to every job.',
        'When it comes to plumbing, you need more than just a quick fix — you need a team you can trust. At [Your Company Name], we bring years of experience, professional expertise, and a commitment to quality craftsmanship to every job.',
        'When it comes to plumbing, you need more than just a quick fix — you need a team you can trust. At [Your Company Name], we bring years of experience, professional expertise, and a commitment to quality craftsmanship to every job.',
        'When it comes to plumbing, you need more than just a quick fix — you need a team you can trust. At [Your Company Name], we bring years of experience, professional expertise, and a commitment to quality craftsmanship to every job.',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="work-card2" data-cue="slideInUp">
                <div class="row gy-40 gx-50 align-items-center">
                    <div class="col-xl-5 col-lg-5">
                        <div class="box-image">
                            <img src="<?php echo $img[$x];?>" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="box-content">
                            <div class="box-number">
                                <span><?php echo $num[$x];?></span>
                            </div>
                            <div>
                                <h3 class="box-title"><?php echo $title[$x];?></h3>
                                <p class="box-text mb-45"><?php echo $text[$x];?></p>
                                <a href="about.html" class="th-btn style3">
                                    Discover More
                                    <span class="after-bg"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }; 
?>