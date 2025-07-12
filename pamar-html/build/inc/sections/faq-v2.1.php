
<!--==============================
Faq Area
==============================-->
<div class="faq-wrap1">
    <div class="accordion" id="faqAccordion">
        <?php 
            $title = array( 
                'Are you available for emergency plumbing issues?',
                'Do you offer 24/7 customer support for plumbing services?',
                'Can you provide a quote for a plumbing emergency?',
                'Do you have certified technicians for emergency plumbing?',
                'What types of plumbing emergencies do you handle?',
                'Is there a service fee for after-hours plumbing calls?',
                'How quickly can you respond to a plumbing emergency?',
                'Do you provide warranties for your plumbing services?',
                'What payment options are available for plumbing repairs?',
                'Are your plumbing services insured and licensed?',
                'Can you assist with plumbing issues outside of business hours?',
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

                <div class="accordion-card style4 style5" data-cue="slideInUp">
                    <div class="accordion-header" id="collapse-item-<?php echo $x + 1;?>">
                        <button class="accordion-button <?php echo $collapse_class;?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $x + 1;?>" aria-expanded="<?php echo $arealabel;?>" aria-controls="collapse-<?php echo $x + 1;?>"><?php echo $title[$x];?></button>
                    </div>
                    <div id="collapse-<?php echo $x + 1;?>" class="accordion-collapse collapse <?php echo $show_class;?>" aria-labelledby="collapse-item-<?php echo $x + 1;?>" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p class="faq-text">We offer a full range of services, including leak detection, drain cleaning, water heater installation, sewer line repair, pipe replacement, and emergency plumbing services.</p>
                        </div>
                    </div>
                </div>
            <?php }
        ?>
    </div>
</div>