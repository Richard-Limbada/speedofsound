<?php 

function speedofsound_enqueue_script() {
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrapjs.min.js', array(), '3.3.4', true );
    wp_enqueue_script( 'speedofsound', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'speedofsound_enqueue_script' );

function speedofsound_theme_setup() {
    
    
    add_theme_support( 'custom-logo', array(
	'height'      => 40,
	'width'       => 164,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );
	
	add_theme_support('menus');
    
    //Add Feature Image
	add_theme_support('post-thumbnails');
    
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	
}

add_action('init', 'speedofsound_theme_setup');




function sos_add_google_fonts() {
 
wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Permanent+Marker', false );
wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', false ); 
}
 
add_action( 'wp_enqueue_scripts', 'sos_add_google_fonts' );





function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'news right sidebar',
		'id'            => 'news_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="newsSidebar">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Widgetized-Area',
		'id'            => 'news_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="newsSidebar">',
		'after_title'   => '</h2>',
	) );
	

}
add_action( 'widgets_init', 'arphabet_widgets_init' );





























?>