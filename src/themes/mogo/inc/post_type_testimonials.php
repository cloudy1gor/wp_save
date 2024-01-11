<?php
/*
 * Testimonials post type
 *
 * @link https://wp-kama.ru/function/register_post_type
 */

function mogo_post_type_testimonials() {
	register_post_type('testimonials', [
		'label'  => esc_html__('Testimonials'),
		'labels' => [
			'name'               => 'Testimonials',
			'singular_name'      => 'Testimonials',
			'add_new'            => 'Add testimonial',
			'add_new_item'       => 'Add new testimonial',
			'edit_item'          => 'Edit testimonial',
			'new_item'           => 'New testimonial',
			'view_item'          => 'View Testimonial',
			'search_items'       => 'Search Testimonial',
			'menu_name'          => 'Testimonials',
		],
		'description'            => '',
		'public'                 => true,
		// 'publicly_queryable'  => null,
		'show_in_menu'           => true,
		'menu_position'       => 80,
		'menu_icon'           => 'dashicons-testimonial',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'thumbnail', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	]);
}

add_action('init', 'mogo_post_type_testimonials');