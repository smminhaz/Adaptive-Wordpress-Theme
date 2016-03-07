<?php

/***********************************************************************************************/
/* 	Define Constants */
/***********************************************************************************************/
define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT.'/images');

/***********************************************************************************************/
/* Add Menus */
/***********************************************************************************************/
function register_my_menus(){
	register_nav_menus(
		array(
			'top-menu' => __('Top Menu', 'adaptive-framework'),
			'main-menu' => __('Main Menu', 'adaptive-framework')
		)
	);
}
add_action('init', 'register_my_menus');
/***********************************************************************************************/
/* Add Sidebar Support */
/***********************************************************************************************/
	
if (function_exists('register_sidebar')) {
	register_sidebar(
		array(
			'name' => __('Main Sidebar', 'adaptive-framework'),
			'id' => 'main-sidebar',
			'description' => __('The Main sidebar area', 'adaptive-framework'),
			'before_widget' => '<div class="sidebar-widget">',
			'after_widget' => '</div> <!-- end sidebar-widget -->',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		)
	);
register_sidebar(
		array(
			'name' => __('Left Footer', 'adaptive-framework'),
			'id' => 'left-footer',
			'description' => __('The left footer area', 'adaptive-framework'),
			'before_widget' => '<div class="footer-widget span3">',
			'after_widget' => '</div> <!-- end footer-widget -->',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		)
	);
	register_sidebar(
		array(
			'name' => __('Right Footer', 'adaptive-framework'),
			'id' => 'right-footer',
			'description' => __('The right footer area', 'adaptive-framework'),
			'before_widget' => '<div class="footer-widget span6">',
			'after_widget' => '</div> <!-- end footer-widget -->',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		)
	);
}
/***********************************************************************************************/
/* Add Theme Support for Post Formats, Post Thumbnails and Automatic Feed Links */
/***********************************************************************************************/
if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails', array('post'));
	set_post_thumbnail_size(210, 210, true);
}
	
?>