<?php 
// Register Custom Post Type Podcast
function podcast_post_type() {

	$labels = array(
		'name'                  => _x( 'podcasts', 'Post Type General Name', 'podcast' ),
		'singular_name'         => _x( 'podcast', 'Post Type Singular Name', 'podcast' ),
		'menu_name'             => __( 'Podcasts', 'podcast' ),
		'name_admin_bar'        => __( 'Podcast', 'podcast' ),
		'archives'              => __( 'Podcast Archives', 'podcast' ),
		'attributes'            => __( 'Podcast Attributes', 'podcast' ),
		'parent_item_colon'     => __( 'Parent Podcast:', 'podcast' ),
		'all_items'             => __( 'All Podcasts', 'podcast' ),
		'add_new_item'          => __( 'Add New Podcast', 'podcast' ),
		'add_new'               => __( 'Add New', 'podcast' ),
		'new_item'              => __( 'New Podcast', 'podcast' ),
		'edit_item'             => __( 'Edit Podcast', 'podcast' ),
		'update_item'           => __( 'Podcast Item', 'podcast' ),
		'view_item'             => __( 'View Podcast', 'podcast' ),
		'view_items'            => __( 'View Podcasts', 'podcast' ),
		'search_items'          => __( 'Search Podcast', 'podcast' ),
		'not_found'             => __( 'Not found', 'podcast' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'podcast' ),
		'featured_image'        => __( 'Featured Image', 'podcast' ),
		'set_featured_image'    => __( 'Set featured image', 'podcast' ),
		'remove_featured_image' => __( 'Remove featured image', 'podcast' ),
		'use_featured_image'    => __( 'Use as featured image', 'podcast' ),
		'insert_into_item'      => __( 'Insert into Podcast', 'podcast' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Podcast', 'podcast' ),
		'items_list'            => __( 'Podcasts list', 'podcast' ),
		'items_list_navigation' => __( 'Podcasts list navigation', 'podcast' ),
		'filter_items_list'     => __( 'Filter Podcasts list', 'podcast' ),
	);
	$args = array(
		'label'                 => __( 'podcast', 'podcast' ),
		'description'           => __( 'Podcast NicaSource', 'podcast' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields' ),
		'taxonomies'            => array( 'season', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-microphone',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'podcast', $args );

}
add_action( 'init', 'podcast_post_type', 0 );