<div class="widget widget-contact-form <?php echo $klass;?>">
    <h3 class="widget_title">Get In touch</h3>
    <form action="mail.php" method="POST" class="ajax-contact">
        <div class="row">
            <div class="form-group style-border col-12">
                <input type="text" class="form-control" name="name" id="name" placeholder="Your name*">
            </div>
            <div class="form-group style-border col-12">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email address*">
            </div>
            <div class="form-group style-border col-12">
                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Write Message..."></textarea>
            </div>
            <div class="form-btn col-12">
                <button class="th-btn style3">Submit Message</button>
            </div>
        </div>
        <p class="form-messages mb-0 mt-3"></p>
    </form>
</div>