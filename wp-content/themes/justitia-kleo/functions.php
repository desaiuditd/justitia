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
