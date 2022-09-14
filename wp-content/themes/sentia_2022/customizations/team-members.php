<?php
// Register Custom Post Type Team Member
// Post Type Key: team
function create_teammember_cpt() {

	$labels = array(
		'name' => _x( 'Team Members', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Team Member', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Team Members', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Team Member', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Team Member Archives', 'textdomain' ),
		'attributes' => __( 'Team Member Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Team Member:', 'textdomain' ),
		'all_items' => __( 'All Team Members', 'textdomain' ),
		'add_new_item' => __( 'Add New Team Member', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Team Member', 'textdomain' ),
		'edit_item' => __( 'Edit Team Member', 'textdomain' ),
		'update_item' => __( 'Update Team Member', 'textdomain' ),
		'view_item' => __( 'View Team Member', 'textdomain' ),
		'view_items' => __( 'View Team Members', 'textdomain' ),
		'search_items' => __( 'Search Team Member', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Team Member', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Team Member', 'textdomain' ),
		'items_list' => __( 'Team Members list', 'textdomain' ),
		'items_list_navigation' => __( 'Team Members list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Team Members list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Team Member', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-businessman',
		'supports' => array('title', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'team', $args );

}
add_action( 'init', 'create_teammember_cpt', 0 );