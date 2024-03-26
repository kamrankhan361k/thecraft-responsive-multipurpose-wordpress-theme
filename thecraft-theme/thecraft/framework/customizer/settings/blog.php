<?php
/**
 * Blog setting for Customizer
 *
 * @package thecraft
 * @version 3.6.8
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Blog Posts General
$this->sections['wprt_blog_post'] = array(
	'title' => esc_html__( 'General', 'thecraft' ),
	'panel' => 'wprt_blog',
	'settings' => array(
		array(
			'id' => 'blog_featured_title',
			'default' => esc_html__( 'BLOG', 'thecraft' ),
			'control' => array(
				'label' => esc_html__( 'Blog Featured Title', 'thecraft' ),
				'type' => 'text',
			),
		),
		array(
			'id' => 'blog_entry_content_background',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Entry Content Background Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.post-content-wrap',
				'alter' => 'background-color',
			),
		),
		array(
			'id' => 'blog_entry_content_border_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Entry Content Border Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.hentry .post-content-wrap',
				'alter' => 'border-color',
			),
		),
		array(
			'id' => 'blog_entry_content_border_width',
			'transport' => 'postMessage',
			'control' => array (
				'type' => 'text',
				'label' => esc_html__( 'Entry Content Border Width', 'thecraft' ),
				'description' => esc_html__( 'Top Right Bottom Left. Example: 0px 2px 2px 0px', 'thecraft' ),
				'active_callback' => '',
			),
			'inline_css' => array(
				'target' => '.hentry .post-content-wrap',
				'alter' => 'border-width',
			),
		),
		array(
			'id' => 'blog_entry_content_padding',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Entry Content Padding', 'thecraft' ),
				'description' => esc_html__( 'Top Right Bottom Left.', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.hentry .post-content-wrap',
				'alter' => 'padding',
			),
		),
		array(
			'id' => 'blog_entry_content_bottom_margin',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Entry Bottom Margin', 'thecraft' ),
				'description' => esc_html__( 'Example: 30px.', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.hentry',
				'alter' => 'margin-top',
			),
		),
		array(
			'id' => 'blog_entry_composer',
			'default' => 'title,meta,excerpt_content,readmore',
			'control' => array(
				'label' => esc_html__( 'Entry Content Elements', 'thecraft' ),
				'type' => 'wprt-sortable',
				'object' => 'WPRT_Customize_Control_Sorter',
				'choices' => array(
					'title'           => esc_html__( 'Title', 'thecraft' ),
					'meta'            => esc_html__( 'Meta', 'thecraft' ),
					'excerpt_content' => esc_html__( 'Excerpt', 'thecraft' ),
					'readmore'        => esc_html__( 'Read More', 'thecraft' ),
				),
				'desc' => esc_html__( 'Drag and drop elements to re-order.', 'thecraft' ),
			),
		),
	),
);

// Blog Posts Media
$this->sections['wprt_blog_post_media'] = array(
	'title' => esc_html__( 'Blog Post - Media', 'thecraft' ),
	'panel' => 'wprt_blog',
	'settings' => array(
		array(
			'id' => 'blog_media_margin_bottom',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Bottom Margin', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.hentry .post-media',
				'alter' => 'margin-bottom',
			),
		),
	),
);

// Blog Posts Title
$this->sections['wprt_blog_post_title'] = array(
	'title' => esc_html__( 'Blog Post - Title', 'thecraft' ),
	'panel' => 'wprt_blog',
	'settings' => array(
		array(
			'id' => 'blog_title_margin',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Margin', 'thecraft' ),
				'description' => esc_html__( 'Top Right Bottom Left.', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.hentry .post-title',
				'alter' => 'margin',
			),
		),
		array(
			'id' => 'blog_title_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => array(
					'.hentry .post-title',
					'.hentry .post-title a',
				),
				'alter' => 'color',
			),
		),
		array(
			'id' => 'blog_title_color_hover',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Color Hover', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.hentry .post-title a:hover',
				'alter' => 'color',
			),
		),
	),
);

// Blog Posts Meta
$this->sections['wprt_blog_post_meta'] = array(
	'title' => esc_html__( 'Blog Post - Meta', 'thecraft' ),
	'panel' => 'wprt_blog',
	'settings' => array(
		array(
			'id' => 'blog_entry_meta_margin',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Meta Margin', 'thecraft' ),
				'description' => esc_html__( 'Top Right Bottom Left. Example: 0 0 20px 0.', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.hentry .post-meta',
				'alter' => 'margin',
			),
		),
		array(
			'id'  => 'blog_entry_meta_items',
			'default' => array( 'date', 'author', 'comments' ),
			'control' => array(
				'label' => esc_html__( 'Meta Items', 'thecraft' ),
				'desc' => esc_html__( 'Click and drag and drop elements to re-order them.', 'thecraft' ),
				'type' => 'wprt-sortable',
				'object' => 'WPRT_Customize_Control_Sorter',
				'choices' => array(
					'date'       => esc_html__( 'Date', 'thecraft' ),
					'author'     => esc_html__( 'Author', 'thecraft' ),
					'comments' => esc_html__( 'Comments', 'thecraft' ),
					'categories' => esc_html__( 'Categories', 'thecraft' ),
				),
			),
		),
		array(
			'id' => 'heading_blog_entry_meta_item',
			'control' => array(
				'type' => 'wprt-heading',
				'label' => esc_html__( 'Item Meta', 'thecraft' ),
			),
		),
		array(
			'id' => 'blog_entry_meta_item_style',
			'default' => 'style-1',
			'control' => array(
				'label' => esc_html__( 'Style', 'thecraft' ),
				'type' => 'select',
				'choices' => array(
					'style-1' => esc_html__( 'Style 1', 'thecraft' ),
					'style-2' => esc_html__( 'Style 2', 'thecraft' ),
				),
			),
		),
		array(
			'id' => 'blog_entry_meta_item_icon_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Separate Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => array(
					'.hentry .post-meta .post-meta-content .item .inner:before',
				),
				'alter' => array(
					'color',
				),
			),
		),
		array(
			'id' => 'blog_entry_meta_item_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Text Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.hentry .post-meta .item',
				'alter' => 'color',
			),
		),
		array(
			'id' => 'blog_entry_meta_item_link_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Link Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.hentry .post-meta .item a',
				'alter' => 'color',
			),
		),
		array(
			'id' => 'blog_entry_meta_item_link_color_hover',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Link Color Hover', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.hentry .post-meta .item a:hover',
				'alter' => 'color',
			),
		),
	),
);

// Blog Posts Excerpt
$this->sections['wprt_blog_post_excerpt'] = array(
	'title' => esc_html__( 'Blog Post - Excerpt', 'thecraft' ),
	'panel' => 'wprt_blog',
	'settings' => array(
		array(
			'id' => 'blog_content_style',
			'default' => 'style-1',
			'control' => array(
				'label' => esc_html__( 'Content Style', 'thecraft' ),
				'type' => 'select',
				'choices' => array(
					'style-1' => esc_html__( 'Normal', 'thecraft' ),
					'style-2' => esc_html__( 'Excerpt', 'thecraft' ),
				),
			),
		),
		array(
			'id' => 'blog_excerpt_length',
			'default' => '108',
			'control' => array(
				'label' => esc_html__( 'Excerpt length', 'thecraft' ),
				'type' => 'text',
				'active_callback' => 'wprt_cac_has_std_blog',
			),
		),
		array(
			'id' => 'blog_excerpt_length_grid',
			'default' => '35',
			'control' => array(
				'label' => esc_html__( 'Excerpt length', 'thecraft' ),
				'type' => 'text',
				'active_callback' => 'wprt_cac_has_grid_blog',
			),
		),
		array(
			'id' => 'blog_excerpt_length_list',
			'default' => '75',
			'control' => array(
				'label' => esc_html__( 'Excerpt length', 'thecraft' ),
				'type' => 'text',
				'active_callback' => 'wprt_cac_has_list_blog',
			),
		),
		array(
			'id' => 'blog_excerpt_margin',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Margin', 'thecraft' ),
				'description' => esc_html__( 'Top Right Bottom Left. Example: 0 0 30px 0.', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.hentry .post-excerpt',
				'alter' => 'margin',
			),
		),
		array(
			'id' => 'blog_excerpt_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.hentry .post-excerpt',
				'alter' => 'color',
			),
		),
	),
);

// Blog Posts Read More
$this->sections['wprt_blog_post_read_more'] = array(
	'title' => esc_html__( 'Blog Post - Read More', 'thecraft' ),
	'panel' => 'wprt_blog',
	'settings' => array(
		array(
			'id' => 'blog_entry_button_read_more_text',
			'default' => esc_html__( 'READ MORE', 'thecraft' ),
			'control' => array(
				'label' => esc_html__( 'Button Text', 'thecraft' ),
				'type' => 'text',
			),
		),
		array(
			'id' => 'blog_entry_read_more_margin',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Read More Margin', 'thecraft' ),
				'description' => esc_html__( 'Top Right Bottom Left.', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.hentry .post-read-more',
				'alter' => 'margin',
			),
		),
	),
);

