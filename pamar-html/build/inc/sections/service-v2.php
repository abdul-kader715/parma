<?php
    $title = array(
        'AI Consulting Services',
        'Machine Learning',
        'Robotic Process Automation',
        'AI in Cybersecurity',
    );
    $img = array(
        'assets/img/service/service_card_2_2.jpg',
        'assets/img/service/service_card_2_1.jpg',
        'assets/img/service/service_card_2_3.jpg',
        'assets/img/service/service_card_2_4.jpg',
    );
    $text = array(
        'Identify and mitigate potential security threats in real-time.',
        'Develop and deploy models tailored to specific business needs.',
        'Automate repetitive tasks such as data entry, invoice processing, and report generation.',
        'Identify and mitigate potential security threats in real-time.',  
    );
    $num = array(
        '01',
        '02',
        '03',
        '04',
    );
    $active = array(
        '',
        'item-active',
        '',
        '',
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="service-card2 hover-item <?php echo $active[$x];?>" data-cue="slideInUp">
            <div class="box-img">
                <img src="<?php echo $img[$x];?>" alt="img">
            </div>
            <div class="box-content">
                <div class="box-number text-white">
                    <?php echo $num[$x];?>
                </div>
                <h3 class="box-title text-white"><a href="service.html"><?php echo $title[$x];?></a></h3>
                <p class="box-text"><?php echo $text[$x];?></p>
            </div>
            <a href="service-details.html" class="icon-btn style2"><i class="fal fa-arrow-right"></i></a>
        </div>
    <?php }; 
?>