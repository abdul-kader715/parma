<!--==============================
Faq Area
==============================-->
<section class="<?php echo $klass; ?>" data-bg-src="assets/img/bg/wave-bg6.png">
    <div class="shape-mockup faq-bg-shape4-1 jump-reverse d-xl-block d-none" data-right="5%" data-top="8%">
        <div class="color-masking">
            <div class="masking-src bg-mask" style="mask-image: url(&quot;assets/img/shape/bg-shape2.png&quot;);"></div>
            <img src="assets/img/shape/bg-shape2.png" alt="img">
        </div>
    </div>
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">FREQUENTLY ASK QUESTION</span>
            <h2 class="sec-title">Have some questions?</h2>
        </div>
        <div class="row gy-4">
            <div class="col-xxl-6">
                <div class="accordion" id="faqAccordion">
                    <?php 
                        $title = array( 
                            '01. What is Pamar?',
                            '02. Why should i hire a business consultant?',
                            '03. What services does pamar offer?',
                            '04. How can consultant benefits in my business?',
                            '05. How do you ensure data security?',
                            '06. What are your fees and payment terms?',
                        );
                        $arrlength = count($title);
                        for($x = 0; $x < $arrlength ; $x++) { ?>

                            <?php 
                                $active_class = '';
                                $collapse_class = 'collapsed';
                                $show_class = '';
                                $arealabel       = 'false';

                                if ($x == 0) {
                                    $active_class = 'active';
                                    $collapse_class = '';
                                    $show_class = 'show';
                                    $arealabel       = 'true';
                                }
                            ?>

                            <div class="accordion-card style3 <?php echo $active_class;?>">
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
            <div class="col-xxl-6">
                <div class="accordion" id="faqAccordion2">
                    <?php 
                        $title = array( 
                            '07. Why should i hire a business consultant?',
                            '08. Why should i hire a business consultant?',
                            '09. What services does pamar offer?',
                            '10. How can consultant benefits in my business?',
                            '11. How do you ensure data security?',
                            '12. Why on pamar is a great template?',
                        );
                        $arrlength = count($title);
                        for($x = 0; $x < $arrlength ; $x++) { ?>

                            <?php 
                                $active_class = '';
                                $collapse_class = 'collapsed';
                                $show_class = '';
                                $arealabel       = 'false';

                                if ($x == 0) {
                                    $active_class = '';
                                    $collapse_class = 'collapsed';
                                    $show_class = '';
                                    $arealabel       = 'false';
                                }
                            ?>

                            <div class="accordion-card style3 <?php echo $active_class;?>">
                                <div class="accordion-header" id="collapse-item-0<?php echo $x + 1;?>">
                                    <button class="accordion-button <?php echo $collapse_class;?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-0<?php echo $x + 1;?>" aria-expanded="<?php echo $arealabel;?>" aria-controls="collapse-0<?php echo $x + 1;?>"><?php echo $title[$x];?></button>
                                </div>
                                <div id="collapse-0<?php echo $x + 1;?>" class="accordion-collapse collapse <?php echo $show_class;?>" aria-labelledby="collapse-item-0<?php echo $x + 1;?>" data-bs-parent="#faqAccordion2">
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
</section>