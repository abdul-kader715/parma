<!--==============================
Blog Area
==============================-->
<section class="th-blog-wrapper <?php echo $klass; ?>">
    <div class="container">
        <div class="row gx-60">
            <div class="col-xl-8 col-lg-7">
                <div class="th-blog blog-single has-post-thumbnail" data-cue="slideInUp">
                    <div class="blog-img position-relative">
                        <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-1.jpg" alt="Blog Image"></a>
                        <div class="blog-date">
                           <h3>22</h3>
                           <span>July</span>
                        </div>
                    </div>
                    
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="blog.html" class="border1"><span>Kitchen Plumbing</span></a>
                            <a href="blog.html"><i class="fa-regular fa-comment"></i> Comments (3)</a>
                        </div>
                        <h2 class="blog-title"><a href="blog-details.html">Achieving calm minds from plumbing issues</a>
                        </h2>
                        <p class="blog-text">With transparent pricing, fast response times, and 24/7 emergency availability, we’re always here when you need us. Our customer-first approach means we treat every job with care, cleanliness, and professionalism. When you choose us, you're choosing plumbing done with integrity, efficiency, and peace of mind.</p>                        
                        <a href="blog-details.html" class="link-btn">
                            Read More
                           <span class="after-bg"></span>
                        </a>
                    </div>
                </div>
                <div class="th-blog blog-single has-post-thumbnail" data-cue="slideInUp">
                    <div class="blog-img position-relative">
                        <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-2.jpg" alt="Blog Image"></a>
                     <div class="blog-date">
                        <h3>26</h3>
                        <span>July</span>
                    </div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="blog.html" class="border1"><span>Kitchen Plumbing</span></a>
                            <a href="blog.html"><i class="fa-regular fa-comment"></i> Comments (3)</a>
                        </div>
                        <h2 class="blog-title"><a href="blog-details.html">Achieving calm minds from plumbing issues</a>
                        </h2>
                        <p class="blog-text">With transparent pricing, fast response times, and 24/7 emergency availability, we’re always here when you need us. Our customer-first approach means we treat every job with care, cleanliness, and professionalism. When you choose us, you're choosing plumbing done with integrity, efficiency, and peace of mind.</p>                        
                        <a href="blog-details.html" class="link-btn">
                            Read More
                           <span class="after-bg"></span>
                        </a>
                    </div>
                </div>
              
                <div class="th-blog blog-single" data-cue="slideInUp">
                  <div class="blog-content position-relative">
                        <div class="blog-date">
                           <h3>27</h3>
                           <span>July</span>
                        </div>
                        <div class="blog-meta">
                            <a href="blog.html" class="border1"><span>Kitchen Plumbing</span></a>
                            <a href="blog.html"><i class="fa-regular fa-comment"></i> Comments (3)</a>
                        </div>
                        <h2 class="blog-title"><a href="blog-details.html">Achieving calm minds from plumbing issues</a>
                        </h2>
                        <p class="blog-text">With transparent pricing, fast response times, and 24/7 emergency availability, we’re always here when you need us. Our customer-first approach means we treat every job with care, cleanliness, and professionalism. When you choose us, you're choosing plumbing done with integrity, efficiency, and peace of mind.</p>                        
                        <a href="blog-details.html" class="link-btn">
                            Read More
                           <span class="after-bg"></span>
                        </a>
                    </div>
                </div>

                <div class="th-blog blog-single has-post-thumbnail" data-cue="slideInUp">
                    <div class="blog-img position-relative">
                        <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-3.jpg" alt="Blog Image"></a>
                     <div class="blog-date">
                           <h3>28</h3>
                           <span>July</span>
                    </div>
                    </div>
                    
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="blog.html" class="border1"><span>Kitchen Plumbing</span></a>
                            <a href="blog.html"><i class="fa-regular fa-comment"></i> Comments (3)</a>
                        </div>
                        <h2 class="blog-title"><a href="blog-details.html">Achieving calm minds from plumbing issues</a>
                        </h2>
                        <p class="blog-text">With transparent pricing, fast response times, and 24/7 emergency availability, we’re always here when you need us. Our customer-first approach means we treat every job with care, cleanliness, and professionalism. When you choose us, you're choosing plumbing done with integrity, efficiency, and peace of mind.</p>                        
                        <a href="blog-details.html" class="link-btn">
                            Read More
                           <span class="after-bg"></span>
                        </a>
                    </div>
                </div>

                <?php get_section('pagination-v1'); ?>
            </div>
            <div class="col-xl-4 col-lg-5">
                <aside class="sidebar-area sidebar-sticky" data-cue="slideInUp">
                    <?php 
						get_widget('search');
						get_widget('categories');
						get_widget('recent-post');
                        get_widget('instagram-feeds');
						get_widget('tagcloud');
						
					?>
                </aside>
            </div>
        </div>
    </div>
</section>