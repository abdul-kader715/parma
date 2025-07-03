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
                <div class="box-content">
                    <h3 class="box-title"><?php echo $title[$x];?></h3>
                    <h4 class="price-card_price"><?php echo $price[$x];?> OFF!</h4>
                </div>
                <div class="checklist">
                    <ul>
                        <?php echo $list[$x];?>
                    </ul>
                </div>
                <div class="btn-wrap">
                    <a href="contact.html" class="th-btn style12">Grab This Offer</a>
                </div>
            </div>
        </div>
    <?php }
?>
