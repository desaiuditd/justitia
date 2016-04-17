<?php
/**
 * Created by PhpStorm.
 * User: udit
 * Date: 16/04/16
 * Time: 23:11
 */

/*
Plugin Name: j-bbpress-labels
Plugin URI: http://google.com
Author: Udit Desai
Version: 1.0
Author URI: http://google.com
*/

add_action( 'plugins_loaded', 'j_load_forum_labels' );

function j_load_forum_labels() {
	add_filter( 'bbp_get_forum_post_type_labels', 'j_forum_labels' );
	add_filter( 'bbp_get_topic_post_type_labels', 'j_topic_labels' );
	add_filter( 'bbp_get_topic_tag_tax_labels', 'j_tag_labels' );
}

function j_forum_labels( $labels ) {
	$labels = array(
		'name'               => __( 'Categories',                   'bbpress' ),
		'menu_name'          => __( 'Categories',                   'bbpress' ),
		'singular_name'      => __( 'Category',                    'bbpress' ),
		'all_items'          => __( 'All Categories',               'bbpress' ),
		'add_new'            => __( 'New Category',                'bbpress' ),
		'add_new_item'       => __( 'Create New Category',         'bbpress' ),
		'edit'               => __( 'Edit',                     'bbpress' ),
		'edit_item'          => __( 'Edit Category',               'bbpress' ),
		'new_item'           => __( 'New Category',                'bbpress' ),
		'view'               => __( 'View Category',               'bbpress' ),
		'view_item'          => __( 'View Category',               'bbpress' ),
		'search_items'       => __( 'Search Categories',            'bbpress' ),
		'not_found'          => __( 'No categories found',          'bbpress' ),
		'not_found_in_trash' => __( 'No categories found in Trash', 'bbpress' ),
		'parent_item_colon'  => __( 'Parent Category:',            'bbpress' )
	);
	return $labels;
}

function j_topic_labels( $labels ) {
	$labels = array(
		'name'               => __( 'Stories',                   'bbpress' ),
		'menu_name'          => __( 'Stories',                   'bbpress' ),
		'singular_name'      => __( 'Story',                    'bbpress' ),
		'all_items'          => __( 'All Stories',               'bbpress' ),
		'add_new'            => __( 'New Story',                'bbpress' ),
		'add_new_item'       => __( 'Create New Story',         'bbpress' ),
		'edit'               => __( 'Edit',                     'bbpress' ),
		'edit_item'          => __( 'Edit Story',               'bbpress' ),
		'new_item'           => __( 'New Story',                'bbpress' ),
		'view'               => __( 'View Story',               'bbpress' ),
		'view_item'          => __( 'View Story',               'bbpress' ),
		'search_items'       => __( 'Search Stories',            'bbpress' ),
		'not_found'          => __( 'No stories found',          'bbpress' ),
		'not_found_in_trash' => __( 'No stories found in Trash', 'bbpress' ),
		'parent_item_colon'  => __( 'Categories:',                   'bbpress' )
	);
	return $labels;
}

function j_tag_labels( $labels ) {
	$labels = array(
		'name'          => __( 'Story Tags',     'bbpress' ),
		'singular_name' => __( 'Story Tag',      'bbpress' ),
		'search_items'  => __( 'Search Tags',    'bbpress' ),
		'popular_items' => __( 'Popular Tags',   'bbpress' ),
		'all_items'     => __( 'All Tags',       'bbpress' ),
		'edit_item'     => __( 'Edit Tag',       'bbpress' ),
		'update_item'   => __( 'Update Tag',     'bbpress' ),
		'add_new_item'  => __( 'Add New Tag',    'bbpress' ),
		'new_item_name' => __( 'New Tag Name',   'bbpress' ),
		'view_item'     => __( 'View Story Tag', 'bbpress' )
	);
	return $labels;
}