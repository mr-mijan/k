<?php get_header(); ?>
<?php 
global $post;
$author_id = $post->post_author;
?>
        <!-- start of breadcumb -->
        <div class="wpo-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                        <h2><?php the_title()?></h2>
                            <ul>
                            <li><a href="<?php echo get_home_url();?>"><?php echo esc_html('Home');?></a></li>
                            <li><?php the_title()?></li>
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
                    <div class="col col-lg-8 col-md-12">
                    <div class="wpo-blog-content">
                            <div class="post format-standard-image">
                                <div class="entry-media">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                    <li><i class="fi flaticon-user"></i> <?php echo esc_html('By ');?><?php echo get_the_author_meta( 'display_name', $author_id ); ?>
                                        </li>
                                        <li><i class="fi flaticon-comment-white-oval-bubble"></i> <?php comments_number(); ?></li>
                                        <li><i class="fi flaticon-calendar"></i><?php echo get_the_date(); ?></li>
                                    </ul>
                                </div>
                                <h2><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                            </div>

                            <div class="tag-share clearfix">
                                <div class="tag">
                                    <span>Share: </span>
                                    <ul>
                                        <li><a href="#">Donation</a></li>
                                        <li><a href="#">Charity</a></li>
                                        <li><a href="#">Education</a></li>
                                    </ul>
                                </div>
                            </div> <!-- end tag-share -->
                            <div class="tag-share-s2 clearfix">
                                <div class="tag">
                                    <span>Share: </span>
                                    <ul>
                                        <li><a href="#">facebook</a></li>
                                        <li><a href="#">twitter</a></li>
                                        <li><a href="#">linkedin</a></li>
                                        <li><a href="#">pinterest</a></li>
                                    </ul>
                                </div>
                            </div> <!-- end tag-share -->
                            <div class="author-box">
                                <div class="author-avatar">
                                    <a href="#" target="_blank"><img src="assets/images/blog-details/author.jpg" alt=""></a>
                                </div>
                                <div class="author-content">
                                    <a href="#" class="author-name">Author: Jenny Watson</a>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis.</p>
                                    <div class="socials">
                                        <ul class="social-link">
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- end author-box -->
                            <div class="more-posts">
                                <div class="previous-post">
                                    <a href="blog.html">
                                        <span class="post-control-link">Previous Post</span>
                                        <span class="post-name">At vero eos et accusamus et iusto odio dignissimos
                                            ducimus qui blanditiis praesentium.</span>
                                    </a>
                                </div>
                                <div class="next-post">
                                    <a href="blog-left-sidebar.html">
                                        <span class="post-control-link">Next Post</span>
                                        <span class="post-name">Dignissimos ducimus qui blanditiis praesentiu deleniti
                                            atque corrupti quos dolores</span>
                                    </a>
                                </div>
                            </div>
                            <div class="comments-area">
                                <?php comments_template(); ?>
                        </div>
                    </div>
</div>
                    <div class="col col-lg-4">
                        <div class="blog-sidebar">
                            <?php dynamic_sidebar('blog_sidebar')?>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-blog-pg-section -->

    <?php get_footer(); ?>