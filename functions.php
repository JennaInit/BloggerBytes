<?php
register_nav_menus(['primary' => 'BlogBytesMenu']);

function blogbytes_assets() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('bloggerbytes-script', get_template_directory_uri() . '/js/bloggerbytes.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'blogbytes_assets');


/*BACKGROUND*/
function bloggerbytes_custom_background_setup(){
    add_theme_support('custom-background');
}
add_action('after_setup_theme', 'bloggerbytes_custom_background_setup');

/*SIDEBAR*/
function blogbytes_widgets_init(){
    register_sidebar( array (
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
}
add_action('widgets_init', 'blogbytes_widgets_init');

function excerpt_read_more() {
    global $post;
    return'<a href="' . get_permalink($post->ID) . '">Lue lisää &raquo;</a>';
}
add_filter('excerpt_more', 'excerpt_read_more');

/*TITLE*/
function bloggerbytes_theme_setup(){
    add_theme_support('title tag');
}
add_action('after_setup_theme', 'bloggerbytes_theme_setup');

/*Custom LOGO*/
function bloggerbytes_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'bloggerbytes_custom_logo_setup' );

/*HEADER*/
add_theme_support( 'custom-header' );

    
?>