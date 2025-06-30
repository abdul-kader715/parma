
<!--==============================
Faq Area
==============================-->
<div class="<?php echo $klass;?>">
    <div class="shape-mockup faq-bg-shape1-1 jump" data-mask-src="assets/img/normal/faq_1_3.png" data-top="15%" data-left="2%">
        <img src="assets/img/normal/faq_1_3.png" alt="img">
    </div>
    <div class="container">
        <div class="row gx-80 justify-content-between">
            <div class="col-xl-5">
                <div class="faq-img-box1">
                    <div class="img1">
                        <img src="assets/img/normal/faq_1_1.png" alt="img">
                    </div>
                    <div class="mask-shape" data-mask-src="assets/img/normal/faq_1_1-mask.png"></div>
                    <div class="img2 jump">
                        <img src="assets/img/normal/faq_1_2.png" alt="img">
                    </div>
                    <div class="img3 spin">
                        <img src="assets/img/shape/hand-group-shape1.png" alt="img">
                    </div>
                </div>
            </div>            
            <div class="col-xl-7">
                <div class="faq-wrap1">
                    <div class="title-area">
                        <span class="sub-title before-none">الأسئلة المتداولة
                        </span>
                        <h2 class="sec-title">هل لديك أي أسئلة لنا؟
                        </h2>
                    </div>
                    <div class="accordion" id="faqAccordion">
                        <?php 
                            $title = array( 
                                'ما الذي يحفزك على التبرع لجمعيتنا الخيرية؟
',
                                'كيف سمعت عن منظمتنا؟
',
                                'كم مرة تفضل العمل التطوعي؟
',
                                'ما الذي دفعك للمشاركة في هذا الحدث؟
',
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
    
                                <div class="accordion-card">
                                    <div class="accordion-header" id="collapse-item-<?php echo $x + 1;?>">
                                        <button class="accordion-button <?php echo $collapse_class;?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $x + 1;?>" aria-expanded="<?php echo $arealabel;?>" aria-controls="collapse-<?php echo $x + 1;?>"><?php echo $title[$x];?></button>
                                    </div>
                                    <div id="collapse-<?php echo $x + 1;?>" class="accordion-collapse collapse <?php echo $show_class;?>" aria-labelledby="collapse-item-<?php echo $x + 1;?>" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">استكشاف مجموعة متنوعة من الفرص التطوعية المتاحة. من التخطيط للفعاليات وجمع التبرعات إلى العمل الميداني والدعم الإداري، هناك العديد من الطرق لإقراض مواهبك. ابحث عن الخيار المثالي الذي يناسب مهاراتك واهتماماتك.
                                            </p>
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
</div>

