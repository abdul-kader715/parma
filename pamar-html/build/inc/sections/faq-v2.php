<!--==============================
Faq Area
==============================-->
<div class="<?php echo $klass; ?> faq-area-2">
 
        <div class=" accordion" id="faqAccordion">
            <?php 
                $title = array( 
                    '01. What is Business consulting?',
                    '02. Why should I hire a business consultant?',
                    '03. What services do you offer?',
                    '04. How can consultants benefit my business?',
                    '05. How do you ensure data security?',
                    '06. How do you tailor your approach?',
                    '07. How do you ensure confidentiality?',
                    '08. What are your fees and payment terms?',
                );

            

                $arrlength = count($title);
                for ($x = 0; $x < $arrlength; $x++) { 

                    $active_class   = '';
                    $collapse_class = 'collapsed';
                    $show_class     = '';
                    $arealabel      = 'false';

                    if ($x == 0) {
                        $collapse_class = '';
                        $show_class     = 'show';
                        $arealabel      = 'true';
                    }
                    
            ?>
                
                <div class="accordion-card style2">
                    <div class="accordion-header" id="collapse-item-<?php echo $x + 1; ?>">
                        <button class="accordion-button <?php echo $collapse_class; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $x + 1; ?>" aria-expanded="<?php echo $arealabel; ?>" aria-controls="collapse-<?php echo $x + 1; ?>">
                            <?php echo $title[$x]; ?>
                        </button>
                    </div>
                    <div id="collapse-<?php echo $x + 1; ?>" class="accordion-collapse collapse <?php echo $show_class; ?>" aria-labelledby="collapse-item-<?php echo $x + 1; ?>" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p class="faq-text">
                                At Pamar consultant, we redefine consultancy through a dynamic fusion of innovation, expertise, and strategic vision. Our dedicated team is committed to delivering tailored solutions that transcend traditional consulting boundaries.
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

</div>

