<?php get_header(); ?>

        <!-- start of breadcumb -->
        <div class="wpo-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>404</h2>
                            <ul>
                            <li><a href="<?php echo get_home_url();?>"><?php echo esc_html('Home');?></a></li>
                                <li><span>404</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of breadcumb-->

        <!-- start error-404-section -->
        <section class="error-404-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="content clearfix">
                            <div class="error">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/error-404.png" alt>
                            </div>
                            <div class="error-message">
                                <h3>Oops! Page Not Found!</h3>
                                <p>We’re sorry but we can’t seem to find the page you requested. This might be
                                    because
                                    you have typed the web address incorrectly.</p>
                                <a href="<?php echo get_home_url();?>" class="theme-btn">Back to home</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end error-404-section -->


       <?php get_footer(); ?>