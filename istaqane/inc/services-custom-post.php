<?php
/**
 * Register a custom post type called "Service".
 *
 * @see get_post_type_labels() for label keys.
 */
function helpass_custom_post_service() {
	$labels = array(
		'name'                  => __( 'Services', 'Post type general name', 'textdomain' ),
		'singular_name'         => __( 'service', 'Post type singular name', 'textdomain' ),
		'menu_name'             => __( 'Services', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => __( 'Service', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New Service', 'textdomain' ),
		'add_new_item'          => __( 'Add New Service', 'textdomain' ),
		'new_item'              => __( 'New Services', 'textdomain' ),
		'edit_item'             => __( 'Edit Service', 'textdomain' ),
		'view_item'             => __( 'View Service', 'textdomain' ),
		'all_items'             => __( 'All Service', 'textdomain' ),
		'search_items'          => __( 'Search Services', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent Services:', 'textdomain' ),
		'not_found'             => __( 'No services found.', 'textdomain' ),
		'not_found_in_trash'    => __( 'No services found in Trash.', 'textdomain' ),
		'featured_image'        => __( 'Service Icon Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'set_featured_image'    => __( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'remove_featured_image' => __( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'use_featured_image'    => __( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'archives'              => __( 'Service archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'insert_into_item'      => __( 'Insert into Service', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'     => __( 'Filter services list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => __( 'Services list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => __( 'Services list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'service' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-admin-generic',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
       // 'taxonomies'         => array( 'category', 'post_tag' ),
		
	);

	register_post_type( 'service', $args );
	register_taxonomy('service_cat', 'service', 
	array(
		'hierarchical'	=> true,
		'label' 		=> 'Category',
		'query_var'		=> true,
		'rewrite'		=> true
	));
	register_taxonomy('service_tag', 'service', 
	array(
		'hierarchical'	=> true,
		'label' 		=> 'Tags',
		'query_var'		=> true,
		'rewrite'		=> true
	));

}


add_action( 'init', 'helpass_custom_post_service' );

