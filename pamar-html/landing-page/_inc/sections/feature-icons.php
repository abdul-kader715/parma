<!--==============================
  Featuers area
==============================-->
<div class="features-area space">
    <div class="container">
        <div class="title-area text-center">
            <h2 class="sec-title">Awesome Features</h2>
            <p class="sec-text">The template is build with all modern and latest technology. <br> Developer can easily handle this.</p>
        </div>
        <div class="feature-grid-wrap">
            <?php
                $title = array(
                    'Elementor Page Builder',
                    'Redux Framework',
                    'Latest WordPress',
                    'One Click Installation',
                    'Contact Form 7',
                    'Yoast SEO Plugin',
                    'WooCommerce',
                    'WPML Compatible',
                    'Powerful Theme Options',
                    'Made With Sass',
                    'Google Fonts',
                    'W3C Validated Code',
                    'Easy to Customize',
                    'Well Documented',
                    'Dedicated Support',
                    'Font Awesome 6 Pro',
                    'Bootstrap 5',
                    'Swiper Slider',
                    'Latest jQuery',
                    'SEO Optimized',
                );
                $img = array(
                    'assets/img/icons/elementor.svg',
                    'assets/img/icons/redux.svg',
                    'assets/img/icons/wordpress.svg',
                    'assets/img/icons/one_click.svg',
                    'assets/img/icons/cf7.svg',
                    'assets/img/icons/yoast.svg',
                    'assets/img/icons/woocommerce.svg',
                    'assets/img/icons/wpml.svg',
                    'assets/img/icons/settings.svg',
                    'assets/img/icons/sass.svg',
                    'assets/img/icons/google_font.svg',
                    'assets/img/icons/w3c.svg',
                    'assets/img/icons/code.svg',
                    'assets/img/icons/docs.svg',
                    'assets/img/icons/support.svg',
                    'assets/img/icons/font_awesome.svg',
                    'assets/img/icons/bootstrap.svg',
                    'assets/img/icons/swiper.svg',
                    'assets/img/icons/jquery.svg',
                    'assets/img/icons/seo.svg',
                );
                $text = array(
                    'It provides a drag-and-drop interface, It easy to build and customize websites.',
                    'It helps in managing the state of an site in a predictable & centralized manner',
                    'WordPress is highly extensible, It provides a user-friendly interface',
                    'Robor Theme Provide with the amazing feature of the one-click installer tool',
                    'Contact Form 7 offers more advanced features and extensions for customize',
                    'Yoast SEO plugin helps optimize your website for search engines',
                    'WooCommerce plugin allows to set up and manage an online store',
                    'WordPress website WPML (WordPress Multilingual Plugin) compatible',
                    'General term used to describe advanced customize settings available.',
                    'Sass is a preprocessor scripting language for compiling into CSS.',
                    'Google Fonts is a computer font and web font service owned by Google.',
                    'W3C Validation Service is a validator by the World Wide Web Consortium.',
                    'Our code is always very much customize friendly and standard.',
                    'Most of the customers love our detailed documentation you will also.',
                    'Our support team is always ready to help you for any kind of support.',
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

