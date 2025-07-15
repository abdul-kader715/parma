
<!--==============================
calculation Area  
==============================-->
<section class="<?php echo $klass;?>" id="cta-sec" >
    <div class="container">
         <div class="calculation-wrap bg-gray-color overflow-hidden">
            <div class="title">
                <h2 class='box-title text-white'>Estimate your costing</h2>
                <p class="box-text text-white"><i class="fa-solid fa-circle-exclamation mr-10"></i>Costing may be changed according Government tax!</p>
            </div>
           <div class="row pt-70 pb-70 justify-content-center">
                <div class="col-xl-8">
                    <form action="mail.php" method="POST" class="contact-form-v5 ajax-contact">
                        <div class="row gx-40 gy-30 ">
                            <div class="form-group style3 col-12">
                                <label>Service Area</label>
                                <div class="price_slider_wrapper style2">
                                    <div class="price_slider costcalculating_slider"></div>
                                    <div class="price_label costcalculating_slider_label bg-mask" data-mask-src="assets/img/shape/costcalculating-slider.png">
                                        <span class="from_text">SQFT: <span class="from_text costcalculating_slider_from"></span></span> 
                                        <span class="to_text">Cost: <span class="costcalculating_slider_to"></span></span>
                                    </div>
                                </div>
                            </div>            
                            <div class="form-group style3 col-12">
                                <label>Type of Services</label>
                                <select name="services" id="services" class="form-select ">
                                    <option value="" disabled selected hidden>Select Services</option>
                                    <option value="General Plumbing Repairs">General Plumbing Repairst</option>
                                    <option value="Drain Cleaning Services">Drain Cleaning Services</option>
                                    <option value="Bathroom & Kitchen Plumbing">Bathroom & Kitchen Plumbing</option>
                                </select>
                            </div>
                           <div class="form-group style3 col-12">
                                <label>Worker Number</label>
                                <select name="subject" id="subject" class="form-select ">
                                    <option value="" disabled selected hidden>2 Worker</option>
                                    <option value="3 Worker">3 Worker</option>
                                    <option value="4 Worker">4 Worker</option>
                                    <option value="5 Worker">5 Worker</option>
                                </select>
                            </div>
                            <div class="form-group style3 col-12">
                                <label>Need Emergency</label>
                                <div class="checkbox-wrap">
                                     <div class="custom-checkbox">
                                        <input type="checkbox" id="remembermylogin">
                                        <label for="remembermylogin">For 01 Hour <span>5$</span></label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="remembermylogin2">
                                        <label for="remembermylogin2">For 03 Hour <span>10$</span></label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="remembermylogin3">
                                        <label for="remembermylogin3">For 05 Hour <span>15$</span></label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="remembermylogin4">
                                        <label for="remembermylogin4">For 01 Day <span>50$</span></label>
                                    </div>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="remembermylogin5">
                                        <label for="remembermylogin5">For 02 Day <span>55$</span></label>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="form-group style3 col-lg-8 col-12">
                                <label>Total Amount</label>
                                <input type="text" readonly class="form-control" name="amount" id="amount" placeholder="$4590">
                            </div>
                            <div class="form-btn col-lg-4 col-12 d-flex align-items-end">
                                <button class="th-btn w-100">Book An Appointment <span class="after-bg"></span></button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
           </div>
           
        </div>
    </div>

</section>