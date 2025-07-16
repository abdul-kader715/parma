<!--==============================
  Featuers area
==============================-->
<div class="features-area space-top" id="features">
    <div class="container">
        <div class="title-area text-center">
            <h2 class="sec-title">Awesome Features</h2>
            <p class="sec-text">The template is build with all modern and latest technology. <br> Developer can easily handle this.</p>
        </div>
        <div class="feature-grid-wrap">
            <?php
                $title = array(
                    'Made With Sass',
                    'Google Fonts',
                    'W3C Validated Code',
                    'Easy to Customize',
                    'Well Documented',
                    'Dedicated Support',
                    'Fully Responsive',
                    'Font Awesome 6 Pro',
                    'Bootstrap 5',
                    'Swiper Slider',
                    'Latest jQuery',
                    'SEO Optimized',
                );
                $img = array(
                    'assets/img/icons/sass.svg',
                    'assets/img/icons/google_font.svg',
                    'assets/img/icons/w3c.svg',
                    'assets/img/icons/code.svg',
                    'assets/img/icons/docs.svg',
                    'assets/img/icons/support.svg',
                    'assets/img/icons/responsive.svg',
                    'assets/img/icons/font_awesome.svg',
                    'assets/img/icons/bootstrap.svg',
                    'assets/img/icons/swiper.svg',
                    'assets/img/icons/jquery.svg',
                    'assets/img/icons/seo.svg',
                );
                $text = array(
                    'Sass is a preprocessor scripting language for compiling into CSS.',
                    'Google Fonts is a computer font and web font service owned by Google.',
                    'W3C Validation Service is a validator by the World Wide Web Consortium.',
                    'Our code is always very much customize friendly and standard.',
                    'Most of the customers love our detailed documentation you will also.',
                    'Our support team is always ready to help you for any kind of support.',
                    'This template is fully responsive for all kind of devices both big & small.',
                    'We have used the latest version of Font Awesome 6 pro in this template.',
                    'Bootstrap 5 is the latest version of the popular front-end development framework.',
                    'Swiper is a responsive carousel jQuery plugin that supports multiple breakpoints.',
                    'jQuery is a JS framework designed to simplify HTML DOM tree traversal.',
                    'Our code is SEO Optimized, It will help to index the page on search engine.',
                );
                $arrlength = count($title);

                for($x = 0; $x < $arrlength; $x++) {
                ?>
                    <div class="feature-grid">
                        <div class="feature-grid_icon">
                            <img src="<?php echo $img[$x];?>" alt="icon">
                        </div>
                        <h4 class="feature-grid_title"><?php echo $title[$x];?></h4>
                        <p class="feature-grid_text"><?php echo $text[$x];?></p>
                    </div>
                <?php }; 
            ?>
        </div>
    </div>
</div>

