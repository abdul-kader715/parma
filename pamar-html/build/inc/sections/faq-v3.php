<!--==============================
Faq Area
==============================-->
<section class="<?php echo $klass; ?>">
    <div class="container">
        <div class="row gx-60 flex-row-reverse">
            <div class="col-xxl-9 col-xl-8 col-lg-7">
                <div class="page-single mb-0">
                    <span class="page-subtitle mb-4">FAQ</span>
                    <h2 class="page-title mt-n2 mb-40">Main Questions</h2>
                    <div class="accordion" id="faqAccordion">
                        <?php 
                            $title = array( 
                                '01. What is business strategic plan?',
                                '02. Why should i hire a business consultant?',
                                '03. What services does pamar offer?',
                                '04. How can consultant benefits in my business?',
                                '05. How do you ensure data security?',
                                '06. What are your fees and payment terms?',
                                '07. Why should i hire a business consultant?',
                                '08. Why should i hire a business consultant?',
                                '09. What services does pamar offer?',
                                '10. How can consultant benefits in my business?',
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

            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-5">
                <aside class="sidebar-area sidebar-sticky">
                    <?php 
						get_widget('categories');
						get_widget('banner');
					?>
                </aside>
            </div>
        </div>
    </div>
</section>