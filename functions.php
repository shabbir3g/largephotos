<?php




function stock_main_function() {

	
	register_nav_menus( array(
		'primary' 		=> __( 'Main Menu', 'stocky' ),
		'toogle-menu' 	=> __( 'Toggle Menu', 'stocky' ),
	) );



}
add_action('after_setup_theme', 'stock_main_function');












function child_cusotm_script() {

	
	wp_enqueue_script('jquery-fitvids', get_stylesheet_directory_uri(). '/js/custom-child.js');



}
add_action('wp_enqueue_scripts', 'child_cusotm_script');
