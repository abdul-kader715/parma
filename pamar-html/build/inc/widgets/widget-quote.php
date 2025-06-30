<div class="widget widget_quote <?php echo $klass;?>">
    <h3 class="widget_title">Get a Quote</h3>
    <form action="mail.php" method="POST" class="widget-form">
        <div class="form-group style-radius style-shadow">
            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
            <i class="fal fa-user"></i>
        </div>
        <div class="form-group style-radius style-shadow">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
            <i class="fal fa-envelope"></i>
        </div>
        <div class="form-group style-radius style-shadow">
            <input type="tel" class="form-control" name="number" id="number" placeholder="Your Number">
            <i class="fal fa-phone"></i>
        </div>
        <div class="form-group style-radius style-shadow">
            <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Write Message"></textarea>
            <i class="fal fa-pencil"></i>
        </div>
        <div class="form-btn">
            <button class="th-btn style2 style-radius w-100">Send Message</button>
        </div>
        <p class="form-messages mb-0 mt-3"></p>
    </form>
</div>