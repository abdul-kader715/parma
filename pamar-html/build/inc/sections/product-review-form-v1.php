<!-- Comment Form -->
<div class="th-comment-form <?php echo $klass; ?>">
  <div class="form-title">
    <h3 class="blog-inner-title ">Add a review</h3>
  </div>
  <div class="row">
    <div class="form-group rating-select d-flex align-items-center">
      <label>Your Rating</label>
      <p class="stars"> 
        <span> 
          <a class="star-1" href="#">1</a> 
          <a class="star-2" href="#">2</a> 
          <a class="star-3" href="#">3</a> 
          <a class="star-4" href="#">4</a> 
          <a class="star-5" href="#">5</a> 
        </span> 
      </p>
    </div>    
    <div class="col-12 form-group">
      <textarea placeholder="Write a Message" class="form-control" ></textarea>
      <i class="text-title far fa-pencil-alt"></i>
    </div>
    <div class="col-md-6 form-group">
      <input type="text" placeholder="Your Name" class="form-control">
      <i class="text-title far fa-user"></i>
    </div>
    <div class="col-md-6 form-group">
      <input type="text" placeholder="Your Email" class="form-control">
      <i class="text-title far fa-envelope"></i>
    </div>
    <div class="col-12 form-group">
      <input id="reviewcheck" name="reviewcheck" type="checkbox">
      <label for="reviewcheck">Save my name, email, and website in this browser for the next time I comment.<span class="checkmark"></span></label>
    </div>
    <div class="col-12 form-group mb-0">
      <button class="th-btn">Post Review</button>
    </div>
  </div>
</div>