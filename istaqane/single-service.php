<?php get_header(); ?>

        <!-- start of breadcumb -->
        <div class="wpo-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2><?php the_title(); ?></h2>
                        <ul class="wpo-breadcumb-wrap">
                            <li><a href="<?php echo get_home_url();?>">Home</a></li>
                            <li><a href="<?php echo get_post_type_archive_link('service');?>">Service</a></li>
                            <li><?php the_title(); ?></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of breadcumb-->

        <!-- start of service-single -->
        <section class="wpo-service-single-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="wpo-service-single-wrap">
                            <div class="wpo-service-single-content">
                                <div class="wpo-service-single-content-des">
                                    <h2><?php the_title(); ?></h2>
                                    <p>I must explain to you how all this mistaken idea of denouncing pleasure
                                        and
                                        praising pain was born and I will give you a complete account of the
                                        system, and
                                        expound the actual teachings of the great explorer of the truth, the
                                        master-builder of human happiness. No one rejects, dislikes, or avoids
                                        pleasure
                                        itself, because it is pleasure, but because those who do not know how to
                                        pursue
                                        pleasure rationally encounter consequences that are extremely painful.
                                    </p>
                                    <p>Nor again is there anyone who loves or pursues or desires to obtain pain
                                        of
                                        itself, because it is pain, but because occasionally circumstances occur
                                        in
                                        which toil and pain can procure him some great pleasure. To take a
                                        trivial
                                        example, which of us ever undertakes laborious physical exercise.</p>
                                    <div class="wpo-service-single-sub-img">
                                        <ul>
                                            <li><img src="assets/images/service-single/2.jpg" alt="image" /></li>
                                            <li><img src="assets/images/service-single/3.jpg" alt="image" /></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="wpo-solutions-section">
                                <h2>Our Solutions</h2>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="wpo-solutions-item">
                                            <div class="wpo-solutions-icon">
                                                <div class="icon">
                                                    <img src="assets/images/service/1.svg" alt="image" />
                                                </div>
                                            </div>
                                            <div class="wpo-solutions-text">
                                                <h2><a href="service-single.html">Special Child Care</a></h2>
                                                <p>The lower-numbered purposes are better understood and
                                                    practiced </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="wpo-solutions-item">
                                            <div class="wpo-solutions-icon">
                                                <div class="icon">
                                                    <img src="assets/images/service/2.svg" alt="image" />
                                                </div>
                                            </div>
                                            <div class="wpo-solutions-text">
                                                <h2><a href="service-single.html">Charity & Donation</a></h2>
                                                <p>The lower-numbered purposes are better understood and
                                                    practiced </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="wpo-solutions-item">
                                            <div class="wpo-solutions-icon">
                                                <div class="icon">
                                                    <img src="assets/images/service/3.svg" alt="image" />
                                                </div>
                                            </div>
                                            <div class="wpo-solutions-text">
                                                <h2><a href="service-single.html">Special Child Care</a></h2>
                                                <p>The lower-numbered purposes are better understood and
                                                    practiced </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpo-benefits-section">
                                <h2>Benefits</h2>
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="wpo-benefits-item">
                                            <div class="accordion" id="accordionExample">
                                                <div class="accordion-item">
                                                    <h3 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            We Can Save More Lifes With Your Helping Hand.
                                                        </button>
                                                    </h3>
                                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <p>Lorem ipsum dolor, sit amet consectetur
                                                                adipisicing elit.
                                                                Eum exercitationem pariatur iure nemo esse
                                                                repellendus
                                                                est quo recusandae. Delectus, maxime.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h3 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">
                                                            Planning can help alleviate workplace stress and
                                                            increase
                                                            productivity.
                                                        </button>
                                                    </h3>
                                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <p>Lorem ipsum dolor, sit amet consectetur
                                                                adipisicing elit.
                                                                Eum exercitationem pariatur iure nemo esse
                                                                repellendus
                                                                est quo recusandae. Delectus, maxime.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h3 class="accordion-header" id="headingThree">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">
                                                            Those who experiment the most, are able to innovate
                                                            the
                                                            best.
                                                        </button>
                                                    </h3>
                                                    <div id="collapseThree" class="accordion-collapse collapse"
                                                        aria-labelledby="headingThree"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <p>Lorem ipsum dolor, sit amet consectetur
                                                                adipisicing elit.
                                                                Eum exercitationem pariatur iure nemo esse
                                                                repellendus
                                                                est quo recusandae. Delectus, maxime.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h3 class="accordion-header" id="headingFour">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                            aria-expanded="false" aria-controls="collapseFour">
                                                            Understand Your Problem, You must understand the
                                                            issue.
                                                        </button>
                                                    </h3>
                                                    <div id="collapseFour" class="accordion-collapse collapse"
                                                        aria-labelledby="headingFour"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <p>Lorem ipsum dolor, sit amet consectetur
                                                                adipisicing elit.
                                                                Eum exercitationem pariatur iure nemo esse
                                                                repellendus
                                                                est quo recusandae. Delectus, maxime.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="wpo-single-sidebar">
                            <?php dynamic_sidebar( 'service_sidebar' ) ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of service-single -->
<?php get_footer(); ?>