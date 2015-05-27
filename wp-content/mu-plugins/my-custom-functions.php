<?php
/**
 * Plugin Name: My Custom Functions
 * Plugin URI: http://webbuha.com
 * Description: This is an awesome custom plugin with functionality that I'd like to keep when switching things.
 * Author: Yuriy Buha
 * Author URI: http://yuriybuha.com
 * Inspired by http://wphidedash.org/2011/04/best-practice-for-adding-custom-functions/ 
 * 			and http://justintadlock.com/archives/2011/02/02/creating-a-custom-functions-plugin-for-end-users
 * Version: 0.1.0
 */

/* Disallow direct access to the plugin file */
 
if (basename($_SERVER['PHP_SELF']) == basename (__FILE__)) {
	die('Sorry, but you cannot access this page directly.');
}

/* Place custom code below this line. */
/* URL: http://wphidedash.org/2011/04/best-practice-for-adding-custom-functions/
    Set the admin bar so it only shows in the admin area, not the public-facing site.
    This overrides the admin bar settings on the profile page for all users. */
 
function my_custom_admin_bar_setting() {
	if (is_admin())
		return TRUE;
	else
		return FALSE;
}
 
add_filter ('show_admin_bar', 'my_custom_admin_bar_setting');



// Adds my custom script to the theme
// that depends on jQuery library
// Source https://codex.wordpress.org/Function_Reference/wp_enqueue_script#Link_a_Theme_Script_Which_Depends_on_jQuery
function my_scripts_method() {
	// Include script if the page is not a Home page.
	// It breaks the parallax slider
	if(!is_front_page()){
		wp_enqueue_script(
			'yuriy-script',
			get_stylesheet_directory_uri() . '/js/yuriy_script.js',
			array( 'jquery' )
		);	
	}
	
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );


function home_page_script() {
	// Include script if the page is not a Home page.
	// It breaks the parallax slider
	if(is_front_page()){
		wp_enqueue_script(
			'yuriy-home-script',
			get_stylesheet_directory_uri() . '/js/yuriy_home_script.js'
		);	
	}
	
}

add_action( 'wp_enqueue_scripts', 'home_page_script' );

// Tutorial: http://www.skyverge.com/blog/change-woocommerce-return-to-shop-button/
function skyverge_change_empty_cart_button_url() {
	return '/menu/';
	// return get_site_url();
	//Can use any page instead, like return '/sample-page/';
}
add_filter( 'woocommerce_return_to_shop_redirect', 'skyverge_change_empty_cart_button_url' );


/* Place custom code above this line. */
?>