<?php


        add_theme_support( 'post-thumbnails' );

        /* Register Nav */
        register_nav_menus( array(
            'main-menu'   =>  __( "Main Menu"),
            'footer-menu'   =>  __( "Footer Menu")
        ));

if( ! function_exists( "cowan_theme_setup" ) ) {
    function cowan_theme_setup() {


       // Register custom navigation walker
        //require_once('wp-bootstrap-navwalker.php');

        wp_register_script('main-script',get_template_directory_uri().'/js/scripts.min.js', false, false, true);
 
        wp_enqueue_script( 'main-script' );

        wp_enqueue_style( 'main-style', get_template_directory_uri().'/css/main.min.css' );
        wp_enqueue_style( 'cm-style', get_template_directory_uri().'/css/cm-style.css' );

        
    }

    add_action( 'wp_enqueue_scripts', 'cowan_theme_setup' );
}
	add_image_size( 'full-width', 1920, 630, true); 
	add_image_size( 'post-img', 300, 330, true); 
    add_image_size( 'big-slider', 1920, 630);
	add_image_size( 'icon', 100, 100);
	add_image_size( 'landscape', 640, 300, true);
	add_image_size( 'service-img', 540, 385, true);
	add_image_size( 'project-about-img', 380, 380, true);
	add_image_size( 'feat-project1', 380, 550, true);
	add_image_size( 'feat-project2', 380, 440, true);
	add_image_size( 'project-small-img', 460, 380, true);

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

add_filter('excerpt_more', function($more) {
	return '...';
});
// function turn_on(){
// 	wp_register_style('main-style',get_template_directory_uri().'/css/main.min.css');
// 	wp_register_script('main-script',get_template_directory_uri().'/js/scripts.min.js');

// 	wp_enqueue_style('main-style');
// 	wp_enqueue_script('main-script');
// }

// add_action('wp_enqueue_scripts','turn_on');
// add_theme_support('post-thumbnails');

// register_nav_menus(array(
// 	'main-menu'=>'Main menu',
// 	'footer-menu'=>'Footer menu',

// ));


	    /* === For SVG Type === */
    function add_file_types_to_uploads($file_types){
        $new_filetypes = array();
        $new_filetypes['svg'] = 'image/svg+xml';
        $file_types = array_merge($file_types, $new_filetypes );
        return $file_types;
    }
    add_action('upload_mimes', 'add_file_types_to_uploads');