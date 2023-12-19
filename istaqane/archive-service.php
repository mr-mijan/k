<?php get_header(); ?>

        <!-- start of breadcumb -->
        <div class="wpo-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2><?php echo str_replace("Archives:", "", get_the_archive_title()); ?></h2>
                            <ul>
                                <li><a href="<?php echo get_home_url();?>"><?php echo esc_html('Home');?></a></li>
                                <li><a href="<?php echo get_post_type_archive_link('service');?>">Service</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of breadcumb-->

        <!-- start of service -->
        <section class="service-section section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-12">
                        <div class="section-title">
                            <h2>Our Services</h2>
                            <h3>Our Services For Humanity</h3>
                        </div>
                    </div>
                </div>
                <div class="service-wrap">
                    <div class="row">
                    <?php
                    $args = array(
                    'post_type' => 'service',
                    'posts_per_page' => 6,
                    );
                $query = new WP_Query( $args );
                
                if ($query-> have_posts() ) : 
                    while($query-> have_posts()  ) : $query-> the_post();
                    ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="service-card">
                                <div class="icon">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="image">
                                </div>
                                <div class="text">
                                    <h2><?php the_title(); ?></h2>
                                  <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink(); ?>">Read More...</a>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; else: _e('No post found');
                    endif; 
                    wp_reset_postdata();
                    ?>
                    </div>
                </div>
            </div>
        </section>

    <?php get_footer(); ?>