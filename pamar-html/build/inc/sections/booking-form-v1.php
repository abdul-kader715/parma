<!--==============================
booking from 
==============================-->
<div class="booking-form-v1 <?php echo $klass;?>">
    <form action="mail.php" method="POST" class="contact-form ajax-contact">
        <div class="form-group-wrap ">
            <div class="form-group style3 ">
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name">
            </div>
            <div class="form-group style3 ">
                <input type="number" class="form-control" name="number" id="number" placeholder="Phone Number">
            </div>
                      
            <div class="form-group style3 ">
                <select name="subject" id="subject" class="form-select">
                    <option value="" disabled selected hidden>Service Type</option>
                    <option value="Web Development">Web Development</option>
                    <option value="Brand Marketing">Brand Marketing</option>
                    <option value="UI/UX Designing">UI/UX Designing</option>
                    <option value="Digital Marketing">Digital Marketing</option>
                </select>
            </div>
            <div class="form-group style3">
                <button class="link-btn3 ">
                     Book Now
                </button>
            </div>
        </div>
    </form>
</div>