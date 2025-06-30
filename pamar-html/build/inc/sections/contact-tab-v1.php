<!--==============================
Service Area  
==============================-->
<section class="space">
    <div class="container">
        <div class="nav tab-menu3" id="tab-menu3" role="tablist">
            <button class="th-btn active" id="nav-one-tab" data-bs-toggle="tab" data-bs-target="#nav-one" type="button" role="tab" aria-controls="nav-one" aria-selected="true">Sidney Branch</button>
            <button class="th-btn" id="nav-two-tab" data-bs-toggle="tab" data-bs-target="#nav-two" type="button" role="tab" aria-controls="nav-two" aria-selected="false">Berlin Branch</button>
            <button class="th-btn" id="nav-three-tab" data-bs-toggle="tab" data-bs-target="#nav-three" type="button" role="tab" aria-controls="nav-three" aria-selected="false">Georgia Branch</button>
        </div>
        <div class="tab-content">
            <!-- Single item -->
            <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                <div class="row gy-30 justify-content-center">
                    <?php
                        $title = array(
                            '<a href="tel:+5842521453">+584 (25) 21453</a>',
                            '<a href="mailto:info@pamar.com">info@pamar.com</a>',
                            '25 Hilton Street, Aus.',
                        );
                        $text = array(
                            'Call Us 24/7',
                            'MAke A Quote',
                            'Service Station',
                        );
                        $icon = array(
                            '<i class="far fa-headset"></i>',
                            '<i class="far fa-envelope-open-text"></i>',
                            '<i class="far fa-map-location-dot"></i>',
                        );
                        $img = array(
                            'assets/img/normal/contact_1_1.jpg',
                            'assets/img/normal/contact_1_2.jpg',
                            'assets/img/normal/contact_1_3.jpg',
                        );
                        $arrlength = count($title);

                        for($x = 0; $x < $arrlength; $x++) {
                        ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="contact-box">
                                    <div class="contact-box_img">
                                        <img src="<?php echo $img[$x];?>" alt="service image">
                                    </div>
                                    <div class="contact-box_content">
                                        <div class="contact-box_icon"><?php echo $icon[$x];?></div>
                                        <div class="contact-box_info">
                                            <p class="contact-box_text"><?php echo $text[$x];?></p>
                                            <h5 class="contact-box_link"><?php echo $title[$x];?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }; 
                    ?>
                </div>
            </div>
            <!-- Single item -->
            <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">
                <div class="row gy-30 justify-content-center">
                    <?php
                        $title = array(
                            '<a href="tel:+5842521453">+584 (25) 21453</a>',
                            '<a href="mailto:info@pamar.com">info@pamar.com</a>',
                            '25 Hilton Street, Aus.',
                        );
                        $text = array(
                            'Call Us 24/7',
                            'MAke A Quote',
                            'Service Station',
                        );
                        $icon = array(
                            '<i class="far fa-headset"></i>',
                            '<i class="far fa-envelope-open-text"></i>',
                            '<i class="far fa-map-location-dot"></i>',
                        );
                        $img = array(
                            'assets/img/normal/contact_1_4.jpg',
                            'assets/img/normal/contact_1_5.jpg',
                            'assets/img/normal/contact_1_6.jpg',
                        );
                        $arrlength = count($title);

                        for($x = 0; $x < $arrlength; $x++) {
                        ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="contact-box">
                                    <div class="contact-box_img">
                                        <img src="<?php echo $img[$x];?>" alt="service image">
                                    </div>
                                    <div class="contact-box_content">
                                        <div class="contact-box_icon"><?php echo $icon[$x];?></div>
                                        <div class="contact-box_info">
                                            <p class="contact-box_text"><?php echo $text[$x];?></p>
                                            <h5 class="contact-box_link"><?php echo $title[$x];?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }; 
                    ?>
                </div>
            </div>
            <!-- Single item -->
            <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">
                <div class="row gy-30 justify-content-center">
                    <?php
                        $title = array(
                            '<a href="tel:+5842521453">+584 (25) 21453</a>',
                            '<a href="mailto:info@pamar.com">info@pamar.com</a>',
                            '25 Hilton Street, Aus.',
                        );
                        $text = array(
                            'Call Us 24/7',
                            'MAke A Quote',
                            'Service Station',
                        );
                        $icon = array(
                            '<i class="far fa-headset"></i>',
                            '<i class="far fa-envelope-open-text"></i>',
                            '<i class="far fa-map-location-dot"></i>',
                        );
                        $img = array(
                            'assets/img/normal/contact_1_7.jpg',
                            'assets/img/normal/contact_1_8.jpg',
                            'assets/img/normal/contact_1_9.jpg',
                        );
                        $arrlength = count($title);

                        for($x = 0; $x < $arrlength; $x++) {
                        ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="contact-box">
                                    <div class="contact-box_img">
                                        <img src="<?php echo $img[$x];?>" alt="service image">
                                    </div>
                                    <div class="contact-box_content">
                                        <div class="contact-box_icon"><?php echo $icon[$x];?></div>
                                        <div class="contact-box_info">
                                            <p class="contact-box_text"><?php echo $text[$x];?></p>
                                            <h5 class="contact-box_link"><?php echo $title[$x];?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }; 
                    ?>
                </div>
            </div>
        </div>
        
    </div>
</section>