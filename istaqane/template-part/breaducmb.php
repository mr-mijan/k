<div class="wpo-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                        <h2><?php echo str_replace("Archives:", "", get_the_archive_title()); ?></h2>
                            <ul>
                                <li><a href="<?php echo get_home_url();?>"><?php echo esc_html('Home');?></a></li>
                                <li><a href="<?php echo get_post_type_archive_link('event');?>">Event</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>