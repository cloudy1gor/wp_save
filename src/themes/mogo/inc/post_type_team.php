<?php
/*
 * Team post type
 *
 * @link https://wp-kama.ru/function/register_post_type
 */

function mogo_post_type_team() {
	register_post_type('team', [
		'label'  => esc_html__('Team'),
		'labels' => [
			'name'               => 'Team',
			'singular_name'      => 'Team',
			'add_new'            => 'Add worker',
			'add_new_item'       => 'Add new worker',
			'edit_item'          => 'Edit worker',
			'new_item'           => 'New worker',
			'view_item'          => 'View Team',
			'search_items'       => 'Search Team',
			'menu_name'          => 'Team',
		],
		'description'            => '',
		'public'                 => true,
		// 'publicly_queryable'  => null,
		'show_in_menu'           => true,
		'menu_position'       => 81,
		'menu_icon'           => 'dashicons-buddicons-buddypress-logo',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	]);
}

add_action('init', 'mogo_post_type_team');