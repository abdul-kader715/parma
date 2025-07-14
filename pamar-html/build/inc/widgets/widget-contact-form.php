<div class="widget widget-contact-form <?php echo $klass;?>">
    <h3 class="widget_title text-white">Quick Plumbing Service book in 60 seconds</h3>
    <form action="mail.php" method="POST" class="ajax-contact">
        <div class="row">
            <div class="form-group style-border col-12">
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name">
            </div>
            <div class="form-group style-border col-12">
                <input type="number" class="form-control" name="number" id="number" placeholder="Phone*">
            </div>  
            <div class="form-group style-border col-12">
                <select name="subject" id="subject" class="form-select">
                    <option value="" disabled selected hidden>Service Type</option>
                    <option value="Web Development">Web Development</option>
                    <option value="Brand Marketing">Brand Marketing</option>
                    <option value="UI/UX Designing">UI/UX Designing</option>
                    <option value="Digital Marketing">Digital Marketing</option>
                </select>
            </div>
            <div class="form-btn col-12">
                <button class="link-btn3 w-100">Book An Appointment</button>
            </div>
        </div>
        <p class="form-messages mb-0 mt-3"></p>
    </form>
</div>