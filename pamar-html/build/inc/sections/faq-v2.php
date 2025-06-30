<!--==============================
Faq Area
==============================-->
<div class="<?php echo $klass;?> faq-area-2">
    <div class="container">
        <div class="row gy-60 gx-60">
            <div class="col-xl-6">
                <div class="faq-wrap2">
                    <div class="title-area">
                        <span class="sub-title style4 fadeinup wow" data-wow-duration="1.2s" data-wow-delay="0.1s">FAQ</span>
                        <h2 class="sec-title fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">Most asked questions</h2>
                        <p class="sec-text fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.5s">Discover quick answers to common inquiries about our services, processes, and expertise.</p>
                    </div>
                    <div class="faq-img-box2 fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <div class="img1 gsap-parallax">
                            <img src="assets/img/normal/faq-thumb2-1.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="accordion" id="faqAccordion">
                    <?php 
                        $title = array( 
                            '01. What is Business consulting?',
                            '02. Why should i hire a business consultant?',
                            '03. What services do yo offer?',
                            '04. How can consultant benefits in my business?',
                            '05. How do you ensure data security?',
                            '06. How do tailor your approch?',
                            '07. How do you ensure confidentiality?',
                            '08. What are your fees and payment terms',
                        );
                        $arrlength = count($title);
                        for($x = 0; $x < $arrlength ; $x++) { ?>

                            <?php 
                                $active_class = '';
                                $collapse_class = 'collapsed';
                                $show_class = '';
                                $arealabel       = 'false';

                                if ($x == 0) {
                                    $collapse_class = '';
                                    $show_class = 'show';
                                    $arealabel       = 'true';
                                }
                            ?>

                            <div class="accordion-card style2">
                                <div class="accordion-header" id="collapse-item-<?php echo $x + 1;?>">
                                    <button class="accordion-button <?php echo $collapse_class;?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $x + 1;?>" aria-expanded="<?php echo $arealabel;?>" aria-controls="collapse-<?php echo $x + 1;?>"><?php echo $title[$x];?></button>
                                </div>
                                <div id="collapse-<?php echo $x + 1;?>" class="accordion-collapse collapse <?php echo $show_class;?>" aria-labelledby="collapse-item-<?php echo $x + 1;?>" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">At Pamar consultant, we redefine consultancy through a dynamic fusion of innovation, expertise, and strategic vision. Our dedicated team is committed to delivering tailored solutions that transcend traditional consulting boundaries.</p>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

