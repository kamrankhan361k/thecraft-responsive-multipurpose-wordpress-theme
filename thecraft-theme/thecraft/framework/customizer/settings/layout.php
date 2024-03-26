<?php
/**
 * Layout setting for Customizer
 *
 * @package thecraft
 * @version 3.6.8
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Layout Style
$this->sections['wprt_layout_style'] = array(
	'title' => esc_html__( 'Layout Site', 'thecraft' ),
	'panel' => 'wprt_layout',
	'settings' => array(
		array(
			'id' => 'site_layout_style',
			'default' => 'full-width',
			'control' => array(
				'label' => esc_html__( 'Layout Style', 'thecraft' ),
				'type' => 'select',
				'choices' => array(
					'full-width' => esc_html__( 'Full Width','thecraft' ),
					'boxed' => esc_html__( 'Boxed','thecraft' )
				),
			),
		),
		array(
			'id' => 'site_layout_boxed_shadow',
			'control' => array(
				'label' => esc_html__( 'Box Shadow', 'thecraft' ),
				'type' => 'checkbox',
				'active_callback' => 'wprt_cac_has_boxed_layout',
			),
		),
		array(
			'id' => 'site_layout_wrapper_margin',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Wrapper Margin', 'thecraft' ),
				'desc' => esc_html__( 'Top Right Bottom Left. Default: 30px 0px 30px 0px.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_boxed_layout',
			),
			'inline_css' => array(
				'target' => '.site-layout-boxed #wrapper',
				'alter' => 'padding',
			),
		),
		array(
			'id' => 'wrapper_background_color',
			'transport' => 'postMessage',
			'control' => array(
				'label' => esc_html__( 'Outer Background Color', 'thecraft' ),
				'type' => 'color',
				'active_callback' => 'wprt_cac_has_boxed_layout',
			),
			'inline_css' => array(
				'target' => '.site-layout-boxed #wrapper',
				'alter' => 'background-color',
			),
		),
		array(
			'id' => 'wrapper_background_img',
			'control' => array(
				'label' => esc_html__( 'Outer Background Image', 'thecraft' ),
				'type' => 'image',
				'active_callback' => 'wprt_cac_has_boxed_layout',
			),
		),
		array(
			'id' => 'wrapper_background_img_style',
			'default' => '',
			'control' => array(
				'label' => esc_html__( 'Outer Background Image Style', 'thecraft' ),
				'type'  => 'image',
				'type'  => 'select',
				'choices' => array(
					''             => esc_html__( 'Default', 'thecraft' ),
					'cover'        => esc_html__( 'Cover', 'thecraft' ),
					'center-top'        => esc_html__( 'Center Top', 'thecraft' ),
					'fixed-top'    => esc_html__( 'Fixed Top', 'thecraft' ),
					'fixed'        => esc_html__( 'Fixed Center', 'thecraft' ),
					'fixed-bottom' => esc_html__( 'Fixed Bottom', 'thecraft' ),
					'repeat'       => esc_html__( 'Repeat', 'thecraft' ),
					'repeat-x'     => esc_html__( 'Repeat-x', 'thecraft' ),
					'repeat-y'     => esc_html__( 'Repeat-y', 'thecraft' ),
				),
				'active_callback' => 'wprt_cac_has_boxed_layout',
			),
		),
	),
);

// Layout Position
$this->sections['wprt_layout_position'] = array(
	'title' => esc_html__( 'Layout Position', 'thecraft' ),
	'panel' => 'wprt_layout',
	'settings' => array(
		array(
			'id' => 'site_layout_position',
			'default' => 'sidebar-right',
			'control' => array(
				'label' => esc_html__( 'Site Layout Position', 'thecraft' ),
				'type' => 'select',
				'choices' => array(
					'sidebar-right' => esc_html__( 'Right Sidebar', 'thecraft' ),
					'sidebar-left'  => esc_html__( 'Left Sidebar', 'thecraft' ),
					'no-sidebar'    => esc_html__( 'No Sidebar', 'thecraft' ),
				),
				'desc' => esc_html__( 'Specify layout for all pages on website. (e.g. pages, blog posts, single post, archives, etc ). Single page can override this setting in Page Settings metabox when edit.', 'thecraft' )
			),
		),
		array(
			'id' => 'single_post_layout_position',
			'default' => 'sidebar-right',
			'control' => array(
				'label' => esc_html__( 'Single Post Layout Position', 'thecraft' ),
				'type' => 'select',
				'choices' => array(
					'sidebar-right' => esc_html__( 'Right Sidebar', 'thecraft' ),
					'sidebar-left'  => esc_html__( 'Left Sidebar', 'thecraft' ),
					'no-sidebar'    => esc_html__( 'No Sidebar', 'thecraft' ),
				),
				'desc' => esc_html__( 'Specify layout for all single post pages.', 'thecraft' )
			),
		),
	),
);

// Layout Widths
$this->sections['wprt_layout_widths'] = array(
	'title' => esc_html__( 'Layout Widths', 'thecraft' ),
	'panel' => 'wprt_layout',
	'settings' => array(
		array(
			'id' => 'site_desktop_container_width',
			'transport' => 'postMessage',
			'control' => array(
				'label' => esc_html__( 'Container', 'thecraft' ),
				'type' => 'text',
				'desc' => esc_html__( 'Default: 1180px', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => array( 
					'.site-layout-full-width .wprt-container',
					'.site-layout-boxed #page'
				),
				'alter' => 'width',
			),
		),
		array(
			'id' => 'left_container_width',
			'transport' => 'postMessage',
			'control' => array(
				'label' => esc_html__( 'Content', 'thecraft' ),
				'type' => 'text',
				'desc' => esc_html__( 'Example: 66%', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#site-content',
				'alter' => 'width',
			),
		),
		array(
			'id' => 'sidebar_width',
			'transport' => 'postMessage',
			'control' => array(
				'label' => esc_html__( 'Sidebar', 'thecraft' ),
				'type' => 'text',
				'desc' => esc_html__( 'Example: 23%', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#sidebar',
				'alter' => 'width',
			),
		),
	),
);