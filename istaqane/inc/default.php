<?php
// Theme Functions
function Istaqane_after_setup_theme() {

    /*
    * Make theme available for translation.
    * Translations can be filed in the /languages/ directory.
    * If you're building a theme based on the_theme, use a find and replace
    * to change 'the_theme' to the name of your theme in all the template files.
    */
	load_theme_textdomain( 'istaqane', get_template_directory() . '/languages' );

    /*
    * Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */
    add_theme_support('title-tag');
    add_theme_support( 'woocommerce' );
    //add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
    /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
    add_theme_support( 'post-thumbnails', array('post', 'page' ,'event', 'service', ));


    // This theme uses wp_nav_menu() in one location.
    register_nav_menu( 'Primary_Menu', __('Main Menu', 'istaqane'));
    register_nav_menu( 'Footer_Menu', __('Footer Menu', 'istaqane'));

    /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

    /**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
    add_theme_support( 'custom-logo' );

    // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

    /// Add theme support for selective refresh for widgets.
	// add_theme_support( 'customize-selective-refresh-widgets' );
    
    }
    add_action( 'after_setup_theme', 'Istaqane_after_setup_theme' );

    // Post Excerpt
    function Istaqane_custom_excerpt_length( $length ) {
        return 30;
    }
    add_filter( 'excerpt_length', 'Istaqane_custom_excerpt_length', 999 );

    function Istaqane_length_excerpt_more( $more ) {
        return ' ...';
    }
    add_filter( 'excerpt_more', 'Istaqane_length_excerpt_more' );