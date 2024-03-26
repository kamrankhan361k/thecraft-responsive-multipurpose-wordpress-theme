<?php
/**
 * Footer Widget setting for Customizer
 *
 * @package thecraft
 * @version 3.6.8
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Footer General
$this->sections['wprt_footer_widget_general'] = array(
	'title' => esc_html__( 'General', 'thecraft' ),
	'panel' => 'wprt_footerwidget',
	'settings' => array(
		array(
			'id' => 'footer_widgets',
			'default' => true,
			'control' => array(
				'label' => esc_html__( 'Enable', 'thecraft' ),
				'type' => 'checkbox',
			),
		),
		// Title Widget
		array(
			'id' => 'heading_footer_widget_title',
			'control' => array(
				'type' => 'wprt-heading',
				'label' => esc_html__( 'Title Widget', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_footer_widgets'
			),
		),
		array(
			'id' => 'footer_widget_title_margin',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Title Widget: Margin', 'thecraft' ),
				'description' => esc_html__( 'Top Right Bottom Left.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_footer_widgets'
			),
			'inline_css' => array(
				'target' => '#footer-widgets .widget .widget-title',
				'alter' => 'margin',
			),
		),
		array(
			'id' => 'footer_widget_title_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Title Widget: Color', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_footer_widgets'
			),
			'inline_css' => array(
				'target' => '#footer-widgets .widget .widget-title',
				'alter' => 'color',
			),
		),
		array(
			'id' => 'footer_widget_title_line_width',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Title Widget Line: Width', 'thecraft' ),
				'description' => esc_html__( 'Example: 50px. 100% is full-width.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_footer_widgets'
			),
			'inline_css' => array(
				'target' => '#footer-widgets .widget .widget-title > span:after',
				'alter' => 'width',
			),
		),
		array(
			'id' => 'footer_widget_title_line_height',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Title Widget Line: Height', 'thecraft' ),
				'description' => esc_html__( 'Default: 1px.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_footer_widgets'
			),
			'inline_css' => array(
				'target' => '#footer-widgets .widget .widget-title > span:after',
				'alter' => 'height',
			),
		),
		array(
			'id' => 'footer_widget_title_line_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Title Widget Line: Color', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_footer_widgets'
			),
			'inline_css' => array(
				'target' => '#footer-widgets .widget .widget-title > span:after',
				'alter' => 'background-color',
			),
		),
	),
);

// Footer Widget Search
$this->sections['wprt_footer_widget_search'] = array(
	'title' => esc_html__( 'Widget: Search', 'thecraft' ),
	'panel' => 'wprt_footerwidget',
	'settings' => array(
		array(
			'id' => 'footer_widget_search_form_icon_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Icon Color', 'thecraft' ),
				'active_callback' => 'wprt_cac_hasnt_title_widget_search_three'
			),
			'inline_css' => array(
				'target' => '#footer-widgets .widget.widget_search .search-form .search-submit:before',
				'alter' => 'color',
			),
		),
		array(
			'id' => 'footer_widget_search_form_border_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Border Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#footer-widgets .widget.widget_search .search-form .search-field',
				'alter' => 'border-color',
			),
		),
		array(
			'id' => 'footer_widget_search_form_border_width',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Border Width', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#footer-widgets .widget.widget_search .search-form .search-field',
				'alter' => 'border-width',
			),
		),
	),
);

// Footer Widget Built-In
$this->sections['wprt_footer_widget_built_in'] = array(
	'title' => esc_html__( 'Widget: Categories, Archives, Meta...', 'thecraft' ),
	'panel' => 'wprt_footerwidget',
	'settings' => array(
		array(
			'id' => 'footer_widget_built_in_list_padding',
			'transport' => 'postMessage',
			'control' => array (
				'type' => 'text',
				'label' => esc_html__( 'Item Padding', 'thecraft' ),
				'description' => esc_html__( 'Top Right Bottom Left. Ex: 13px 0px', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => array(
					'#footer-widgets .widget.widget_categories ul li',
					'#footer-widgets .widget.widget_meta ul li',
					'#footer-widgets .widget.widget_pages ul li',
					'#footer-widgets .widget.widget_archive ul li'
				),
				'alter' => 'padding',
			),
		),
		array(
			'id' => 'footer_widget_built_in_link_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Links Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => array(
					'#footer-widgets .widget.widget_categories ul li a',
					'#footer-widgets .widget.widget_meta ul li a',
					'#footer-widgets .widget.widget_pages ul li a',
					'#footer-widgets .widget.widget_archive ul li a'
				),
				'alter' => 'color',
			),
		),
		array(
			'id' => 'footer_widget_built_in_border_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Border Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => array(
					'#footer-widgets .widget.widget_categories ul li',
					'#footer-widgets .widget.widget_meta ul li',
					'#footer-widgets .widget.widget_pages ul li',
					'#footer-widgets .widget.widget_archive ul li'
				),
				'alter' => 'border-color',
			),
		),
	),
);

// Footer Widget Tags
$this->sections['wprt_footer_widget_tags'] = array(
	'title' => esc_html__( 'Footer Widget: Tags', 'thecraft' ),
	'panel' => 'wprt_footerwidget',
	'settings' => array(
		array(
			'id' => 'footer_widget_tags_padding',
			'transport' => 'postMessage',
			'control' => array (
				'type' => 'text',
				'label' => esc_html__( 'Padding', 'thecraft' ),
				'description' => esc_html__( 'Top Right Bottom Left. Ex: 2px 8px 2px 8px', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#footer-widgets .widget.widget_tag_cloud .tagcloud a',
				'alter' => 'padding',
			),
		),
		array(
			'id' => 'footer_widget_tags_rounded',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Rounded', 'thecraft' ),
				'description' => esc_html__( '0px is square.', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#footer-widgets .widget.widget_tag_cloud .tagcloud a:after',
				'alter' => 'border-radius',
			),
		),
		array(
			'id' => 'footer_widget_tags_space_between',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Space Between Items', 'thecraft' ),
				'description' => esc_html__( 'Example: 6px.', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#footer-widgets .widget.widget_tag_cloud .tagcloud a',
				'alter' => array(
					'margin-right',
					'margin-bottom'
				),
			),
		),
		array(
			'id' => 'footer_widget_tags_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#footer-widgets .widget.widget_tag_cloud .tagcloud a',
				'alter' => 'color',
			),
		),
		array(
			'id' => 'footer_widget_tags_background',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Background Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#footer-widgets .widget.widget_tag_cloud .tagcloud a:after',
				'alter' => 'background-color',
			),
		),
	),
);