<!--==============================
Project Area  
==============================-->
<div class="overflow-hidden <?php echo $klass;?>">
    <div class="container">



        <div class="title-area text-center">
            <div class="filter-menu indicator-active filter-menu-active">
                <button data-filter="*" class="tab-btn active" type="button">View All</button>
                <button data-filter=".cat1" class="tab-btn" type="button">Drain Plumber</button>
                <button data-filter=".cat2" class="tab-btn" type="button">Install & Repair</button>
                <button data-filter=".cat3" class="tab-btn" type="button">Water Heater Fixes</button>
                <button data-filter=".cat4" class="tab-btn" type="button">Leak Detection</button>
                <button data-filter=".cat5" class="tab-btn" type="button">Burst Pipe Repair</button>
            </div>
        </div>
        <div class="row gy-30 gallery-row filter-active">
            <?php get_section('project-v2.1' , 'col-lg-6' );?>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mt-60">
                    <a href="#" class="th-btn style3 loodingbtn">
                        Load More
                        <span class="after-bg"></span>
                    </a> 
               </div>
            </div>
        </div>
    </div>
</div>