<!--==============================
Appointment Area   
==============================-->
<div class="<?php echo $klass;?>" data-bg-src="assets/img/bg/appointment_bg_1_1.png" data-opacity="9" data-overlay="black">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6">
                <div class="appointment-thumb text-xl-end mb-lg-0 mb-50">
                    <img src="assets/img/normal/appointment_1_1.png" alt="img">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="title-area">
                    <span class="sub-title"><img class="me-2" src="assets/img/theme-img/title_icon.svg" alt="shape">BOOK APPOINTMENT</span>
                    <h2 class="sec-title text-white">Book Business Solutions</h2>
                </div>
                <form action="mail.php" method="POST" class="appointment-form ajax-contact me-xl-5">
                    <div class="row">
                        <div class="form-group style-border col-md-12">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Write Your Name">
                            <i class="fal fa-user"></i>
                        </div>
                        <div class="form-group style-border col-md-12">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="form-group style-border col-md-12">
                            <input type="date" class="form-control" name="date" id="date">
                            <i class="fal fa-calendar-days"></i>
                        </div>
                        <div class="form-group style-border col-md-12">
                            <input type="text" class="form-control" name="location" id="location" placeholder="Your Location">
                            <i class="fal fa-location-dot"></i>
                        </div>
                        <div class="form-btn col-12">
                            <button class="th-btn btn-fw">Make an Appointment</button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
            
        </div>
        
    </div>
</div>