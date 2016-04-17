<?php
/**
 * Created by PhpStorm.
 * User: udit
 * Date: 16/04/16
 * Time: 18:10
 */

add_action( 'wp_enqueue_scripts', 'j_theme_enqueue_styles' );
function j_theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ) );
}

add_action( 'rtp_hook_end_primary_menu', 'j_register_link' );
function j_register_link() {
	$page_array = get_option("bp-pages");

	if ( ! empty( $page_array['register'] ) && ! is_user_logged_in() ) {
		global $wp_query;
		$current_class = "";
		if ($wp_query->queried_object->ID == $page_array['register']) {
			$current_class = "current-menu-item current_page_item";
		}
		echo '<ul class="menu rtp-nav-container">';
		echo '<li class="menu-item ' . $current_class . '"><a href="/register">Register</a></li>';
		echo '</ul>';
	}
}