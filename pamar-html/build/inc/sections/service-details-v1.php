<!--==============================
    Service Area
==============================-->
<section class="space-top space-extra2-bottom">
    <div class="container">
        <div class="row gx-40">
            <div class="col-xxl-8 col-lg-8">
                <div class="page-single mb-30">
                    <div class="page-img">
                        <img class="w-100" src="assets/img/service/service_inner_1.png" alt="img">
                    </div>
                    <div class="page-content">
                        <h2 class="sec-title page-title fw-semibold">Gym & Fitness Training</h2>
                        <p class="mb-25">Gyms are adaptable to various fitness levels and preferences, catering to beginners and advanced individuals alike. Gyms prioritize safety and hygiene with equipment. Gyms offer a diverse range of exercise equipment, including cardio machines (treadmills, elliptical trainers), resistance machines, free weights (dumbbells, barbells), and functional training areas. Weightlifting and resistance training equipment in gyms target specific muscle groups, promoting strength, muscle tone, and overall body composition improvement.</p>
                        <p class="mb-30"> Treadmills, stationary bikes, and elliptical machines are commonly used for cardiovascular workouts, helping to improve endurance, burn calories, and enhance heart health. Many individuals benefit from personalized workout plans designed by fitness professionals or personal trainers to address specific fitness goals, such as muscle gain, weight loss, or improved athletic performance.</p>

                        <h4 class=" mt-40 mb-25 fw-medium">Granular potentialities oriented</h4>
                        <p class="mb-35">Gyms often have certified trainers who can provide guidance on proper exercise techniques, equipment usage, and the development of effective workout routines. Group fitness classes led by instructors offer structured workouts in a motivating group setting.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="page-img">
                                    <img class="w-100" src="assets/img/service/service_inner_2.png" alt="img">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="page-img">
                                    <img class="w-100" src="assets/img/service/service_inner_3.png" alt="img">
                                </div>
                            </div>
                        </div>
                        <p class="mb-50">Gyms provide the flexibility to choose from a variety of exercises, allowing individuals to customize their workouts based on preferences and needs. Extended operating hours and diverse amenities contribute to the convenience of gym workouts, accommodating various schedules. Many gyms offer tools and resources to track progress, such as fitness apps, workout logs, or integrated gym software that records workout history and achievements.</p>
                        <div class="accordion mb-40" id="faqAccordion">
                        <?php 
                            $title = array( 
                                'How it Works?',
                                'Are we open on weekend?',
                                'How We take Payments?',
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
                                            <p class="faq-text">Gyms provide the flexibility to choose from a variety of exercises, allowing individuals to customize their workouts based on preferences and needs. Extended operating hours and diverse amenities contribute to the convenience of gym workouts, accommodating various schedules.</p>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                        ?>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-4">
                <aside class="sidebar-area">
                    <?php 
						get_widget('search');
						get_widget('service');
						get_widget('schedule');
						get_widget('quote');
					?>
                </aside>
            </div>
        </div>
    </div>
</section>