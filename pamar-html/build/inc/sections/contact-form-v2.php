<!--==============================
Contact Area  
==============================-->
<div class="contact-form-v2 <?php echo $klass;?>">
    <div class="title-area text-center mb-35">
        <h6 class="sub-title text-theme after-none before-none fadeinup wow" data-wow-duration="1.2s" data-wow-delay="0.1s">FREE CONSULTATION</h6>
        <h2 class="title mt-n3 fw-semibold mb-30 text-white fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.3s">Book Appointment</h2>
    </div>
    <form action="mail.php" method="POST" class="contact-form ajax-contact fadeinup wow" data-wow-duration="1.5s" data-wow-delay="0.5s">
        <div class="row">
            <div class="form-group style2 style-radius-0 col-md-6">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name*">
            </div>
            <div class="form-group style2 style-radius-0 col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
            </div>     
            <div class="form-group style2 style-radius-0 col-md-6">
                <input type="number" class="form-control" name="number" id="number" placeholder="Phone*">
            </div>                   
            <div class="form-group style2 style-radius-0 col-md-6">
                <select name="subject" id="subject" class="form-select">
                    <option value="" disabled selected hidden>Select Subject</option>
                    <option value="Web Development">Web Development</option>
                    <option value="Brand Marketing">Brand Marketing</option>
                    <option value="UI/UX Designing">UI/UX Designing</option>
                    <option value="Digital Marketing">Digital Marketing</option>
                </select>
                <i class="far fa-angle-down"></i>
            </div>
            <div class="form-group style2 style-radius-0 col-12">
                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Messsage*"></textarea>
            </div>
            <div class="form-btn col-12 mt-15">
                <button class="th-btn style6 btn-radius-0">Submit Now</button>
            </div>
        </div>
        <p class="form-messages mb-0 mt-3"></p>
    </form>
</div>