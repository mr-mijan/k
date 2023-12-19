<?php get_header(); ?>

        <!-- start of breadcumb -->
        <?php get_template_part('template-part/breaducmb'); ?>
        <!-- end of breadcumb-->

        <!-- start of event -->
        <section class="blog-section section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-12">
                        <div class="section-title">
                            <h2>Our Events</h2>
                            <h3>Our Latest Events</h3>
                        </div>
                    </div>
                </div>
                <div class="blog-wrap">
                    <div class="row">
                    <?php 
                $args = array(
                    'post_type' => 'event',
                    'posts_per_page' => 3,
                    );
                $query = new WP_Query( $args );
                
                if ($query-> have_posts() ) : 
                    while($query-> have_posts()  ) : $query-> the_post();
                    ?>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="blog-card">
                                <div class="image">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                </div>
                                <div class="contnet">
                                    <ul>
                                        <li><?php echo get_the_date(); ?></li>
                                        <li><?php echo get_the_author_posts_link(); ?></li>
                                    </ul>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink(); ?>">Read More</a>
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