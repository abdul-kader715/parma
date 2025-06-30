<!--==============================
Contact Area  
==============================-->
<div class="contact-form-v4 <?php echo $klass;?>">
    <div class="title-area mb-30">
        <h3 class="title mt-n2">Contact with me</h3>
    </div>
    <form action="mail.php" method="POST" class="contact-form ajax-contact">
        <div class="row">
            <div class="form-group style-border col-md-6">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name*">
            </div>
            <div class="form-group style-border col-md-6">
                <input type="number" class="form-control" name="number" id="number" placeholder="Phone*">
            </div>  
            <div class="form-group style-border col-12">
                <input type="email" class="form-control" name="email" id="email" placeholder="e-mail address*">
            </div>     
                             
            <div class="form-group style-border col-12">
                <select name="subject" id="subject" class="form-select bg-white">
                    <option value="" disabled selected hidden>Select Subject</option>
                    <option value="Web Development">Web Development</option>
                    <option value="Brand Marketing">Brand Marketing</option>
                    <option value="UI/UX Designing">UI/UX Designing</option>
                    <option value="Digital Marketing">Digital Marketing</option>
                </select>
            </div>
            <div class="form-group style-border col-12">
                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="How can I help you? Feel free to get in touch!"></textarea>
            </div>
            <div class="form-btn col-12 mt-15">
                <button class="th-btn">Send Message</button>
            </div>
        </div>
        <p class="form-messages mb-0 mt-3"></p>
    </form>
</div>