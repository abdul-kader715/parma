<?php
    $title = array(
        'Michael Lacefield',
        'Harry Callum',
        'Mason Robert',
        'Amelia Margaret',
        'Sophia Jennifer',
        'Daniel Thomas',
        'James Charles',
        'Alexander Joseph',
        'Jessica Madison',
    );
    $desig = array(
        'Co-founder, XYZ',
        'Co-founder',
        'Co-founder, XYZ',
        'Co-founder',
        'Co-founder, XYZ',
        'Co-founder',
        'Co-founder, XYZ',
        'Co-founder',
        'Co-founder, XYZ',
    );
    $img = array(
        'assets/img/testimonial/testi1-1.jpg',
        'assets/img/testimonial/testi1-2.jpg',
        'assets/img/testimonial/testi1-3.jpg',
        'assets/img/testimonial/testi1-4.jpg',
        'assets/img/testimonial/testi1-5.jpg',
        'assets/img/testimonial/testi1-6.jpg',
        'assets/img/testimonial/testi1-7.jpg',
        'assets/img/testimonial/testi1-8.jpg',
        'assets/img/testimonial/testi1-9.jpg',
    );
    $text = array(
        "“Sit molestie orci a lacus. Consectetur eu accumsan aliquet nisi. Eget mauris commodo dis sed arcu integer fringilla. Egestas vitae non cum sit. Tellus nec in sapien maecenas in vel.”",
        "“Eget mauris commodo dis sed arcu integer fringilla. Sit molestie orci a lacus. Consectetur eu accumsan aliquet nisi. Egestas vitae non cum sit. Tellus nec in sapien maecenas in vel.”",
        "“Consectetur eu accumsan aliquet nisi. Sit molestie orci a lacus. Eget mauris commodo dis sed arcu integer fringilla. Egestas vitae non cum sit. Tellus nec in sapien maecenas in vel.”",
        "“Tellus nec in sapien maecenas in vel. Sit molestie orci a lacus. Consectetur eu accumsan aliquet nisi. Eget mauris commodo dis sed arcu integer fringilla. Egestas vitae non cum sit.”",
        "“Egestas vitae non cum sit. Sit molestie orci a lacus. Consectetur eu accumsan aliquet nisi. Eget mauris commodo dis sed arcu integer fringilla. Tellus nec in sapien maecenas in vel.”",
        "“Mauris eget commodo dis sed arcu integer fringilla. Sit molestie orci a lacus. Consectetur eu accumsan aliquet nisi. Egestas vitae non cum sit. Tellus nec in sapien maecenas in vel.”",
        "“Sit molestie orci a lacus. Consectetur eu accumsan aliquet nisi. Eget mauris commodo dis sed arcu integer fringilla. Egestas vitae non cum sit. Tellus nec in sapien maecenas in vel.”",
        "“Eget mauris commodo dis sed arcu integer fringilla. Sit molestie orci a lacus. Consectetur eu accumsan aliquet nisi. Egestas vitae non cum sit. Tellus nec in sapien maecenas in vel.”",
        "“Consectetur eu accumsan aliquet nisi. Sit molestie orci a lacus. Eget mauris commodo dis sed arcu integer fringilla. Egestas vitae non cum sit. Tellus nec in sapien maecenas in vel.”",
        
    );
    $arrlength = count($title);

    for($x = 0; $x < $arrlength; $x++) {
    ?>
        <div class="<?php echo $klass;?>">
            <div class="testi-card">
                <div class="testi-card_review">
                    <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                </div>
                <p class="box-text"><?php echo $text[$x];?></p>
                <div class="testi-card-profile">
                    <div class="testi-card-avater">
                        <img src="<?php echo $img[$x];?>" alt="img">
                    </div>
                    <div class="testi-card-profile-detaile">
                        <h3 class="box-title"><?php echo $title[$x];?></h3>
                        <p class="box-desig"><?php echo $desig[$x];?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php }; 
?>