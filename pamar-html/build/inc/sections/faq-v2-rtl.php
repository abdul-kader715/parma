<!--==============================
Faq Area
==============================-->
<div class="<?php echo $klass;?> faq-area-2" data-bg-src="assets/img/bg/gray-bg2.png">
    <div class="shape-mockup faq-shape2-1 jump-reverse" data-top="20%" data-right="0">
        <img src="assets/img/shape/hand-bg-shape2-1.png" alt="img">
    </div>
    <div class="container">
        <div class="row gy-60 gx-60">
            <div class="col-xl-7">
            <div class="faq-wrap2">
                    <div class="title-area">
                        <span class="sub-title after-none before-none"><i class="far fa-heart text-theme"></i> الأسئلة المتداولة
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
                                            <p class="faq-text">استكشاف مجموعة متنوعة من الفرص التطوعية المتاحة. من التخطيط للفعاليات وجمع التبرعات إلى العمل الميداني والدعم الإداري، هناك العديد من الطرق لإقراض مواهبك. ابحث عن الخيار المثالي الذي يناسب مهاراتك الطرق لإقراض مواهبك. ابحث عن الخيار المثالي الذي يناسب مهاراتك واهتماماتك.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="faq-img-box2">
                    <div class="img1">
                        <img src="assets/img/normal/faq_2_1.png" alt="img">
                    </div>
                    <div class="faq-img-shape">
                        <img src="assets/img/shape/faq-shape2-1.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

