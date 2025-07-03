<?php 
    $title = array(
        'Weekly Services',
        'Monthly Services',
        'Weekly Services',
    );
 
    $price = array(
        '30%',
        '50%',
        '30%',
    );
    $duration = array(
        'OFF!',
        'OFF!',
        'OFF!',
    );
    $active = array(
        '',
        'active',
        '',
    );
    

    $list = array(
        '<li><i class="fa-solid fa-badge-check"></i>Leak Detection & Repair</li>
        <li><i class="fa-solid fa-badge-check"></i>Faucet Repair / Replacement</li>
        <li><i class="fa-solid fa-badge-check"></i>Toilet Repair / Installation</li>
        <li><i class="fa-solid fa-badge-check"></i>Shower & Bathtub Repairs</li>
        <li><i class="fa-solid fa-badge-check"></i>Pipe Repair (Copper, PEX, PVC)</li>
        <li><i class="fa-solid fa-badge-check"></i>Garbage Disposal Repair</li>',

         '<li><i class="fa-solid fa-badge-check"></i>Leak Detection & Repair</li>
        <li><i class="fa-solid fa-badge-check"></i>Faucet Repair / Replacement</li>
        <li><i class="fa-solid fa-badge-check"></i>Toilet Repair / Installation</li>
        <li><i class="fa-solid fa-badge-check"></i>Shower & Bathtub Repairs</li>
        <li><i class="fa-solid fa-badge-check"></i>Pipe Repair (Copper, PEX, PVC)</li>
        <li><i class="fa-solid fa-badge-check"></i>Garbage Disposal Repair</li>',
        
         '<li><i class="fa-solid fa-badge-check"></i>Leak Detection & Repair</li>
        <li><i class="fa-solid fa-badge-check"></i>Faucet Repair / Replacement</li>
        <li><i class="fa-solid fa-badge-check"></i>Toilet Repair / Installation</li>
        <li><i class="fa-solid fa-badge-check"></i>Shower & Bathtub Repairs</li>
        <li><i class="fa-solid fa-badge-check"></i>Pipe Repair (Copper, PEX, PVC)</li>
        <li><i class="fa-solid fa-badge-check"></i>Garbage Disposal Repair</li>',

    );
    
    $arrlength = count($title);
    for($x = 0; $x < $arrlength; $x++) { ?>

        <div class="<?php echo $klass;?>">
            <div class="price-card style3 <?php echo $active[$x];?>">
                <div class="card-bg-img" data-mask-src="<?php echo $img[$x];?>"></div>
                <h3 class="box-title"><?php echo $title[$x];?></h3>
                <h4 class="price-card_price"><?php echo $price[$x];?><span class="duration"><?php echo $duration[$x];?></span>
                </h4>
                
                <div class="checklist">
                    <ul>
                        <?php echo $list[$x];?>
                    </ul>
                </div>
                <div class="btn-wrap">
                    <a href="contact.html" class="th-btn btn-sm btn-radius-0 style-border3 w-100">Choose Plan</a>
                </div>
            </div>
        </div>
    <?php }
?>
