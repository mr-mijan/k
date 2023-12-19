<div class="wpo-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                        <h2><?php the_title(); ?></h2>
                        <ul class="wpo-breadcumb-wrap">
                            <li><a href="<?php echo get_home_url();?>">Home</a></li>
                            <li><a href="<?php echo get_post_type_archive_link('event');?>">Event</a></li>
                            <li><?php the_title(); ?></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>