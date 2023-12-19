<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*/
function istaqane_widget_register(){

	// Footer Sidebar 01
	register_sidebar( array(
        'name' => esc_html__('Footer-01', 'istaqane'),
        'id'   => 'footer_1',
		'description'    => esc_html__( 'Add widgets here.', 'istaqane' ),
		'class'          => '',
		'before_widget'  => '<div id="%1$s" class="widget-title rounded %2$s">',
		'after_widget'   => "</div>\n",
		'before_title'   => '<h3 class="">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
    ) );


	// Footer Sidebar 02
	register_sidebar( array(
		'name' => esc_html__('Footer-02', 'istaqane'),
		'id'   => 'footer_2',
		'description'    => esc_html__( 'Add widgets here.', 'istaqane' ),
		'class'          => '',
		'before_widget'  => '<div id="%1$s" class="widget-title rounded %2$s">',
		'after_widget'   => "</div>\n",
		'before_title'   => '<h3 class="">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
	) );

	// Footer Sidebar 03
	register_sidebar( array(
		'name' => esc_html__('Footer-03', 'istaqane'),
		'id'   => 'footer_3',
		'description'    => esc_html__( 'Add widgets here.', 'istaqane' ),
		'class'          => '',
		'before_widget'  => '<div id="%1$s" class="widget-title rounded %2$s">',
		'after_widget'   => "</div>\n",
		'before_title'   => '<h3 class="">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
	) );

	// Footer Sidebar 04
	register_sidebar( array(
		'name' => esc_html__('Footer-04', 'istaqane'),
		'id'   => 'footer_4',
		'description'    => esc_html__( 'Add widgets here.', 'istaqane' ),
		'class'          => '',
		'before_widget'  => '<div id="%1$s" class="widget-title rounded %2$s">',
		'after_widget'   => "</div>\n",
		'before_title'   => '<h3 class="">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
	) );


	// Footer Sidebar 02
    register_sidebar( array(
        'name' => esc_html__('Blog Sidebar', 'istaqane'),
        'id'   => 'blog_sidebar',
		'description'    => esc_html__( 'Add widgets here.', 'istaqane' ),
		'class'          => '',
		'before_widget'  => '<section id="%1$s" class="widget rounded %2$s">',
		'after_widget'   => "</section>\n",
		'before_title'   => '<h3 class="">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
    ) );

	register_sidebar( array(
        'name' => esc_html__('Service Sidebar', 'istaqane'),
        'id'   => 'service_sidebar',
		'description'    => esc_html__( 'Add widgets here.', 'istaqane' ),
		'class'          => '',
		'before_widget'  => '<section id="%1$s" class="widget rounded %2$s">',
		'after_widget'   => "</section>\n",
		'before_title'   => '<h3 class="mb-5">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
    ) );

	// Event Sidebar
	register_sidebar( array(
        'name' => esc_html__('Event Sidebar', 'istaqane'),
        'id'   => 'event_sidebar',
		'description'    => esc_html__( 'Add widgets here.', 'istaqane' ),
		'class'          => '',
		'before_widget'  => '<section id="%1$s" class="widget rounded %2$s">',
		'after_widget'   => "</section>\n",
		'before_title'   => '<h3 class="mb-5">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
    ) );

    
}
add_action( 'widgets_init', 'istaqane_widget_register' );


// Custom widget For event

class My_Widget_post_event extends WP_Widget {

	public function __construct() {
		parent::__construct(
			'My_Widget_post_event', // Base ID
			'Latest Event', // Name
		);
		add_action('widgets_init', function(){
			register_widget('My_Widget_post_event' );
		});
	}
	public function widget($args, $instance ){

		?><div class="widget"><?php
		echo '<h3 class="widget-title mb-4">'. $instance['title'] .'</h3>';
		$args = array(
			'post_type' => 'event',
			'posts_per_page' => 5,
		) ;
		$query = new WP_Query($args);
		while ($query -> have_posts()){
			$query -> the_post(); ?>

            <div class="posts">
                <div class="post">
                    <div class="img-holder">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                    </div>
                    <div class="details">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <span class="date"><?php echo get_the_date(); ?></span>
                    </div>
                </div>
            </div>

			<?php
		    }
		    wp_reset_postdata();
		    ?>
        </div>
             <?php
	}

	public function form( $instance ) {
		$title = $instance['title'];

		?>
		<p>
		<label" for="<?php echo $this->get_field_id( 'title' ); ?>">Title</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php
	}

}

$My_Widget_post_event = new My_Widget_post_event();


