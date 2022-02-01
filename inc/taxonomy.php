<?php
// Register Custom Taxonomy Season
function season_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Seasons', 'Taxonomy General Name', 'season' ),
		'singular_name'              => _x( 'Season', 'Taxonomy Singular Name', 'season' ),
		'menu_name'                  => __( 'Seasons', 'season' ),
		'all_items'                  => __( 'All Seasons', 'season' ),
		'parent_item'                => __( 'Parent Season', 'season' ),
		'parent_item_colon'          => __( 'Parent Season:', 'season' ),
		'new_item_name'              => __( 'New Season Name', 'season' ),
		'add_new_item'               => __( 'Add New Season', 'season' ),
		'edit_item'                  => __( 'Edit Season', 'season' ),
		'update_item'                => __( 'Update Season', 'season' ),
		'view_item'                  => __( 'View Season', 'season' ),
		'separate_items_with_commas' => __( 'Separate Seasons with commas', 'season' ),
		'add_or_remove_items'        => __( 'Add or remove Seasons', 'season' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'season' ),
		'popular_items'              => __( 'Popular Seasons', 'season' ),
		'search_items'               => __( 'Search Season', 'season' ),
		'not_found'                  => __( 'Not Found', 'season' ),
		'no_terms'                   => __( 'No Seasons', 'season' ),
		'items_list'                 => __( 'Seasons list', 'season' ),
		'items_list_navigation'      => __( 'Seasons list navigation', 'season' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'season', array( 'podcast' ), $args );

}
add_action( 'init', 'season_taxonomy', 0 );