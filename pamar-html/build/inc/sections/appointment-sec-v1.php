<!--==============================
Appointment Area   
==============================-->
<div class="<?php echo $klass;?>" >
    <div class="container-fluid">
        <div class="appointment-wrap mt-40 mb-40">
            <div class="row align-items-center gx-70 ">
                <div class="col-xxl-4">
                    <div class="appointment-thumb">
                        <img src="assets/img/normal/appointment-3-1.jpg" alt="img">
                    </div>
                </div>
                <div class="col-xxl-8">
                    <div class="appointment-from">
                        <div class="title-area  mb-40">
                            <span class="sub-title2 style2 text-bg-white" data-cue="slideInUp">Book Appointment Now</span>
                            <h2 class="sec-title style5 text-anim2 text-white" data-cue="slideInUp">
                                Get Your Estimate & Book Now
                            </h2>
                        </div>
                        <form action="mail.php" method="POST" class="appointment-form ajax-contact">
                            <div class="row gx-20 gy-20">
                                <div class="form-group style-border4 col-lg-4">
                                    <label>Your Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
                                </div>
                                <div class="form-group style-border4 col-lg-4">
                                    <label>Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                                </div>
                                <div class="form-group style-border4 col-lg-4">
                                    <label>Your Phone</label>
                                    <input type="number" class="form-control" name="number" id="number" placeholder="Enter your phone number">
                                    
                                </div>
                                
                                <div class="form-group style-border4 col-lg-6">
                                    <label>Your Address</label>
                                    <input type="text" class="form-control" name="address" id="address" placeholder="Your full address here">
                                
                                </div>
                                <div class="form-group style-border4 col-lg-6">
                                    <label>Your Service</label>
                                    <select name="subject" id="subject" class="form-select">
                                        <option value="" disabled selected hidden>Choose your service</option>
                                        <option value="Web Development">Web Development</option>
                                        <option value="Brand Marketing">Brand Marketing</option>
                                        <option value="UI/UX Designing">UI/UX Designing</option>
                                        <option value="Digital Marketing">Digital Marketing</option>
                                    </select>
                                
                                </div>
                                <div class="form-group style-border4 style4 col-lg-6">
                                    <label>Select Date</label>
                                    <i class="fal fa-calendar-days"></i>
                                    <input type="date" class="form-control" name="date" id="date" >
                                </div>
                                <div class="form-group style-border4 style4 col-lg-6">
                                    <label>Select Time</label>
                                    <i class="fa-solid fa-clock"></i>
                                    <input type="time" class="form-control" name="time" id="time">
                                </div>
                                <div class="form-btn style4 col-12">
                                    <button class="th-btn style14">Make an Appointment</button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
                
            </div>
            <div class="shape-mockup d-none d-xxl-block " style="top: 0%; right:0%">
                <img src="assets/img/shape/contact-time3-1.png" alt="shape">
            </div>
        </div> 
    </div>
</div>