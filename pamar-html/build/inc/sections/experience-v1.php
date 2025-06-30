<?php 
    $title = array( 
        'Product Designer C Level Degree',
        'User Experience Master',
        'Frontend Basic To Advance Course',
        'Web Development Degree',
    );
    $meta = array( 
        'STANFORM UNIVERSITY',
        'MIT UNIVERSITY',
        'GOOGLE COURSE',
        'NEW YORK UNIVERSITY',
    );
    $date = array( 
        'JAN 2023',
        'NOV 2020',
        'JAN 2023',
        'NOV 2020',
    );
    $arrlength = count($title);
    for($x = 0; $x < $arrlength ; $x++) { ?>

        <div class="<?php echo $klass;?>">
            <div class="experience-card">
                <div class="box-content">
                    <div class="experience-meta">
                        <a href="blog.html"><?php echo $meta[$x];?></a>
                        <a class="date" href="blog.html"><?php echo $date[$x];?></a>
                    </div>
                    <h3 class="box-title"><?php echo $title[$x];?></h3>
                    <p class="box-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cill dolore eu fugiat nulla pariatur sint occaecat dolor. Lorem ipsum dolor sit amet consectet adipiscing elit et et est eget tortor lacus aliquam pulvinar senectus ut sapien sed nun</p>
                </div>
            </div>
        </div>
    <?php }
?>