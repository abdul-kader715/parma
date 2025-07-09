<!--==============================
    Blog Area
==============================-->
<section class="th-blog-wrapper blog-details <?php echo $klass; ?>">
    <div class="container">
        <div class="row gx-60">
            <div class="col-xl-8 col-lg-7">
                <div class="th-blog blog-single has-post-thumbnail" data-cue="slideInUp">
                    <div class="blog-img position-relative">
                        <img src="assets/img/blog/blog-s-1-1.jpg" alt="Blog Image">
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
                        <h3 class="mb-30">Achieving calm minds from plumbing issues</h3>  
                        <p class="mb-30">With transparent pricing, fast response times, and 24/7 emergency availability, we’re always here when you need us. Our customer-first approach means we treat every job with care, cleanliness, and professionalism. When you choose us, you're choosing plumbing done with integrity, efficiency, and peace of mind. Perform our Concierge Plan subscription service to manage your home more simply and effectively.</p>  
                        <p class="mb-0">Take advantage of the advantages that come with hiring a specialist handyman service provider. Employers need to know if a candidate can do the repair and maintenance tasks that will be expected of them on the job before they decide who to hire.</p>   
                          
                        <blockquote>
                           <div class="quote">
                              <img src="assets/img/icon//left-quote.svg" alt="">
                           </div>
                           <p>Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                           <cite>Monalisa Saisha</cite>
                        </blockquote>                        
                        
                        <p class="mb-30">Our customer-first approach means we treat every job with care, cleanliness, and professionalism. When you choose us, you're choosing plumbing done with integrity, efficiency, and peace of mind. Perform our Concierge Plan subscription service to manage your home more simply and effectively. Take advantage of the advantages that come with hiring a specialist handyman service provider.</p>
                        <div class="row gx-30 mt-30">
                            <div class="col-md-6 mb-30">
                                <div class="blog-radius-img">
                                    <img class="w-100" src="assets/img/blog/blog_inner_1.jpg" alt="Blog Image">
                                </div>
                            </div>
                            <div class="col-md-6 mb-30">
                            <div class="blog-radius-img">
                                    <img class="w-100" src="assets/img/blog/blog_inner_2.jpg" alt="Blog Image">
                                </div>
                            </div>
                        </div>   
                        
                        <p class="mb-0">Our AI agency is a cutting-edge technology partner that specializes in delivering artificial intelligence solutions to help businesses streamline operations, improve decision-making, and enhance customer experiences. By leveraging the power of AI, we aim to revolutionize industries and empower organizations to stay competitive in a rapidly evolving digital landscape. Our team of AI experts, data scientists, and software engineers work collaboratively with clients to design, develop, and implement AI solutions tailored to their unique needs.</p>          
                        
                        <?php get_section('blog-share-links'); ?>
                    </div>
                </div>
                <?php get_section('blog-author'); ?>
                <?php get_section('pagination-post'); ?>
                <?php get_section('blog-comment-v1'); ?>
                <?php get_section('comment-form-v1'); ?>
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