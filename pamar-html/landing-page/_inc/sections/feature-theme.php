<!--==============================
  Featuers area
==============================-->
<div class="features-theme-area space" id="features">
    <div class="container">
        <div class="title-area text-center">
            <span class="text-theme subtitle">Core Feature</span>
            <h2 class="sec-title">Robor Theme Features</h2>
        </div>
        <div class="row gy-5">
            <?php
                $title = array(
                    'Permanent Updates',
                    'Multi Translation Support',
                    'Permanent Assistance',
                    'Personalize and Expand',
                    'Optimize for SEO',
                    'No coding knowledge',
                );
                $img = array(
                    'assets/img/theme-feature/1.svg',
                    'assets/img/theme-feature/2.svg',
                    'assets/img/theme-feature/3.svg',
                    'assets/img/theme-feature/4.svg',
                    'assets/img/theme-feature/5.svg',
                    'assets/img/theme-feature/6.svg',
                );
                $text = array(
                    'Overall, Lifetime Updates provide customers with ongoing support and improvements, allowing them to enjoy an',
                    'RTL Multilingual & Translation Support is a valuable feature for websites or platforms targeting multilingual audiences',
                    'Permanent assistance ensures ongoing support and guidance, ensuring that we are always there for you when you need us.',
                    'Personalize and expand your experience by customizing and broadening the range of options to suit individual preferences.',
                    'Optimize for SEO to improve websites visibility & rankings on search engines, driving organic traffic.',
                    'Create your website effortlessly without any coding knowledge, making it accessible to users of all skill levels.',
                );
                $arrlength = count($title);

                for($x = 0; $x < $arrlength; $x++) {
                ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="theme-feature-wrap text-center">
                            <div class="thumb">
                                <img src="<?php echo $img[$x];?>" alt="icon">
                            </div>
                            <div class="wrap-content">
                                <h4 class="theme-feature_title"><?php echo $title[$x];?></h4>
                                <p class="theme-feature_text"><?php echo $text[$x];?></p>
                            </div>
                        </div>
                    </div>
                <?php }; 
            ?>
        </div>
    </div>
</div>

