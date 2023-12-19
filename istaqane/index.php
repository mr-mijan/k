<?php get_header(); ?>

        <!-- start of breadcumb -->
        <div class="wpo-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                        <h2><?php echo str_replace("Archives: ", "", get_the_archive_title('Blog')); ?></h2>
                            <ul>
                            <li><a href="<?php echo get_home_url();?>"><?php echo esc_html('Home');?></a></li>
                            <li><?php echo str_replace("Archives: ", "", get_the_archive_title()); ?></a></li>
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
                    <div class="col-lg-8 col-md-12">
                        <div class="wpo-blog-content">
                        <?php 
                            if ( have_posts() ) :
                            while ( have_posts() ) : the_post();
                            ?>
                            <div class="post format-standard-image">
                                <div class="entry-media">
                                    <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="fi flaticon-user"></i> <?php echo esc_html('By ');?><?php echo get_the_author_posts_link(); ?>
                                        </li>
                                        <li><i class="fi flaticon-comment-white-oval-bubble"></i> <?php comments_number(); ?>
                                        </li>
                                        <li><i class="fi flaticon-calendar"></i><?php echo get_the_date(); ?></li>
                                    </ul>
                                </div>
                                <div class="entry-details">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink(); ?>" class="read-more"><?php echo esc_html('READ MORE...'); ?></a>
                                </div>
                            </div>
                            <?php
                            endwhile;
                            endif;
                            ?>
                            <div class="pagination-wrapper pagination-wrapper-left">
                            <ul class="pg-pagination">
                            <?php the_posts_pagination( array(
                                    'mid_size'  => 3,
                                    'prev_text' => __( '<i class="fi ti-angle-left"></i>', 'katen' ),
                                    'next_text' => __( '<i class="fi ti-angle-right"></i>', 'katen' ),
                                ) ); ?>
                            </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-sidebar">
                            <?php dynamic_sidebar('blog_sidebar')?>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-blog-pg-section -->

    <?php get_footer(); ?>