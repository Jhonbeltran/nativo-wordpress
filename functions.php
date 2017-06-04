<?php 

add_theme_support('post-thumbnails');

function register_my_menus(){
	register_nav_menus(
		array(
			'top-menu' => __('Top Menu'),
			'bottom_menu' => __('Footer Menu'),
			'sidebar_menu' => __('SideBar Menu'),
		)
	);
}

add_action('init', 'register_my_menus');