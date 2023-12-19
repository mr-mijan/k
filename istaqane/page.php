<?php get_header(); ?>

        <!-- start of breadcumb -->
        <div class="wpo-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                        <h2><?php echo get_the_title();?></h2>
                            <ul>
                            <li><a href="<?php echo get_home_url();?>"><?php echo esc_html('Home');?></a></li>
                            <li><?php echo get_the_title();?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of breadcumb-->

        <!-- start wpo-blog-pg-section -->
        <section class="wpo-blog-pg-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <?php the_content(); ?>
                    </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-blog-pg-section -->

    <?php get_footer(); ?>