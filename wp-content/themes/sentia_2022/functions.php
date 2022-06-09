<?php

/**
 * @package WordPress
 * @subpackage asw_template
 */

// Thumbnails
add_theme_support('post-thumbnails');

add_post_type_support( 'page', 'excerpt' );

//menus
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
	register_nav_menus(
		array(
			'nav1' => __( 'Main Navigation' ),
			'nav2' => __( 'Footer Menu' )
		)
	);
}
 

function asw_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer Top',
		'id'            => 'footer_top',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => ''
	) );

	register_sidebar( array(
		'name'          => 'Footer Column 1',
		'id'            => 'footer_column_1',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => ''
	) );

	register_sidebar( array(
		'name'          => 'Footer Column 2',
		'id'            => 'footer_column_2',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => ''
	) );

	register_sidebar( array(
		'name'          => 'Footer Column 3',
		'id'            => 'footer_column_3',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => ''
	) );

	register_sidebar( array(
		'name'          => 'Footer Column 4',
		'id'            => 'footer_column_4',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => ''
	) );

	register_sidebar( array(
		'name'          => 'Footer Bottom',
		'id'            => 'footer_bottom',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => ''
	) );

}
add_action( 'widgets_init', 'asw_widgets_init' );

function mytheme_setup() {
    // Add support for Block Styles
	add_theme_support( 'wp-block-styles' );
	// Add Color Palettes
	add_theme_support( 'editor-color-palette', array(
		array(
			'name' => __( 'Black' ),
			'slug' => 'black',
			'color' => '#000',
		),
		array(
			'name' => __( 'White' ),
			'slug' => 'white',
			'color' => '#FFF',
		),
		array(
			'name' => __( 'Salamander' ),
			'slug' => 'salamander',
			'color' => '#F54B00',
		),
		array(
			'name' => __( 'Turquoise' ),
			'slug' => 'turqoise',
			'color' => '#01C3CD',
		),
		array(
			'name' => __( 'Off-White' ),
			'slug' => 'off-white',
			'color' => '#EDEDED',
		),
		array(
			'name' => __( 'Charcoal' ),
			'slug' => 'charcoal',
			'color' => '#444444',
		),
	) );
	add_theme_support( 'disable-custom-colors' );
	add_theme_support('disable-custom-font-sizes');
	add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'mytheme_setup' );

if (is_singular() && comments_open() && (get_option('thread_comments') == 1)) {
    wp_enqueue_script('comment-reply', 'wp-includes/js/comment-reply', array(), false, true);
}

// Include Extras
include_once( get_template_directory() . '/customizations/theme-customizations.php' );