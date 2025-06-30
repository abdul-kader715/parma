<!--==============================
Appointment Area   
==============================-->
<div class="<?php echo $klass;?>">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <form action="mail.php" method="POST" class="appointment-form appointment-page-form ajax-contact bg-smoke">
                    <h2 class="sec-title text-center">Book An Appointment</h2>
                    <div class="row">
                        <div class="form-group style-border3 col-md-6">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                            <i class="fal fa-user"></i>
                        </div>
                        <div class="form-group style-border3 col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="form-group style-border3 col-md-6">
                            <input type="number" class="form-control" name="number" id="number" placeholder="Phone Number">
                            <i class="fal fa-phone"></i>
                        </div>
                        <div class="form-group style-border3 col-md-6">
                            <input type="text" class="form-control" name="location" id="location" placeholder="Your Location">
                            <i class="fal fa-location-dot"></i>
                        </div>
                        <div class="form-group col-md-12 style-border3">
                            <select name="subject" id="subject" class="form-select">
                                <option value="" disabled selected hidden>Select Service</option>
                                <option value="Personal Training">Personal Training</option>
                                <option value="Gym & Fitness Training">Gym & Fitness Training</option>
                                <option value="Basic Yoga">Basic Yoga</option>
                                <option value="Muscle Building">Muscle Building</option>
                            </select>
                            <i class="fal fa-chevron-down"></i>
                        </div>
                        <div class="col-12 form-group style-border3">
                            <textarea placeholder="Type Appointment note...." class="form-control"></textarea>
                            <i class="far fa-pencil"></i>
                        </div>
                        
                        <div class="form-btn col-12">
                            <button class="th-btn style-radius style2 w-100">Make an Appointment</button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
            
        </div>
        
    </div>
</div>