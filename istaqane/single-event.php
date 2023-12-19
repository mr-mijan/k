<?php get_header(); ?>

        <!-- start of breadcumb -->
        <?php get_template_part('template-part/breaducmb-single'); ?>
        <!-- end of breadcumb-->

        <!-- event-details-area start -->
        <div class="event-details-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8">
                        <div class="wpo-event-item">
                            <div class="wpo-event-img">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </div>
                            <div class="wpo-event-details-text">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-12">
                        <div class="blog-sidebar">
                        <?php dynamic_sidebar( 'event_sidebar' ) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- event-details-area end -->
<?php get_footer(); ?>