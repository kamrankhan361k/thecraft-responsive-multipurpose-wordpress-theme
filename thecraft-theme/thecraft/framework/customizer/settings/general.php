<?php
/**
 * General setting for Customizer
 *
 * @package thecraft
 * @version 3.6.8
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Accent Colors
$this->sections['wprt_accent_colors'] = array(
	'title' => esc_html__( 'Accent Colors', 'thecraft' ),
	'panel' => 'wprt_general',
	'settings' => array(
		array(
			'id' => 'accent_color',
			'default' => '#1a7dd7',
			'control' => array(
				'label' => esc_html__( 'Accent Color', 'thecraft' ),
				'type' => 'color',
			),
		),
	)
);

// Favicon
$this->sections['wprt_favicon'] = array(
	'title' => esc_html__( 'Favicon', 'thecraft' ),
	'panel' => 'wprt_general',
	'settings' => array(
		array(
			'id' => 'favicon',
			'default' => '',
			'control' => array(
				'label' => esc_html__( 'Site Icon', 'thecraft' ),
				'type' => 'image',
				'description' => esc_html__( 'The Site Icon is used as a browser and app icon for your site. Icons must be square, and at least 512 pixels wide and tall.', 'thecraft' ),
			),
		),
	)
);

// PreLoader
$this->sections['wprt_preloader'] = array(
	'title' => esc_html__( 'PreLoader', 'thecraft' ),
	'panel' => 'wprt_general',
	'settings' => array(
		array(
			'id' => 'preloader',
			'default' => 'animsition',
			'control' => array(
				'label' => esc_html__( 'Preloader Option', 'thecraft' ),
				'type' => 'select',
				'choices' => array(
					'animsition' => esc_html__( 'Enable','thecraft' ),
					'' => esc_html__( 'Disable','thecraft' )
				),
			),
		),
	)
);

// Top Bar Site
$this->sections['wprt_topbar_site'] = array(
	'title' => esc_html__( 'Top Bar Site', 'thecraft' ),
	'panel' => 'wprt_general',
	'settings' => array(
		array(
			'id' => 'top_bar_site_style',
			'default' => 'style-4',
			'control' => array(
				'label' => esc_html__( 'Top Bar Style', 'thecraft' ),
				'type' => 'select',
				'choices' => array(
					'style-1' => esc_html__( 'Top-Bar Dark', 'thecraft' ),
					'style-2' => esc_html__( 'Top-Bar Grey', 'thecraft' ),
					'style-3' => esc_html__( 'Top-Bar Accent', 'thecraft' ),
					'style-4' => esc_html__( 'Hide Top-Bar', 'thecraft' )
				),
				'desc' => esc_html__( 'Top Bar Style for all pages on website. (e.g. pages, blog posts, single post, archives, etc ). Single page can override this setting in Page Settings metabox when edit.', 'thecraft' )
			),
		),
	),
);

// Header Site
$this->sections['wprt_header_site'] = array(
	'title' => esc_html__( 'Header Site', 'thecraft' ),
	'panel' => 'wprt_general',
	'settings' => array(
		array(
			'id' => 'header_site_style',
			'default' => 'style-1',
			'control' => array(
				'label' => esc_html__( 'Header Style', 'thecraft' ),
				'type' => 'select',
				'choices' => array(
					'style-1' => esc_html__( 'Header White', 'thecraft' ),
					'style-2' => esc_html__( 'Header Dark', 'thecraft' ),
					'style-3' => esc_html__( 'Header Accent', 'thecraft' ),
					'style-4' => esc_html__( 'Header Transparent', 'thecraft' ),
					'style-5' => esc_html__( 'Header Aside', 'thecraft' )
				),
				'desc' => esc_html__( 'Header Style for all pages on website. (e.g. pages, blog posts, single post, archives, etc ). Single page can override this setting in Page Settings metabox when edit.', 'thecraft' )
			),
		),
		array(
			'id' => 'header_fixed',
			'default' => false,
			'control' => array(
				'label' => esc_html__( 'Header Fixed: Enable', 'thecraft' ),
				'type' => 'checkbox',
			),
		),
	),
);

// Scroll to top
$this->sections['wprt_scroll_top'] = array(
	'title' => esc_html__( 'Scroll Top Button', 'thecraft' ),
	'panel' => 'wprt_general',
	'settings' => array(
		array(
			'id' => 'scroll_top',
			'default' => true,
			'control' => array(
				'label' => esc_html__( 'Enable', 'thecraft' ),
				'type' => 'checkbox',
			),
		),
		array(
			'id' => 'scroll_top_width',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Width', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_scroll_top',
				'description' => esc_html__( 'Example: 30px.', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#scroll-top',
				'alter' => 'width',
			),
		),
		array(
			'id' => 'scroll_top_height',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Height', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_scroll_top',
				'description' => esc_html__( 'Example: 30px.', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#scroll-top',
				'alter' => array(
					'height',
					'line-height',
				),
			),
		),
		array(
			'id' => 'scroll_top_icon_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Icon Color', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_scroll_top',
			),
			'inline_css' => array(
				'target' => '#scroll-top:after',
				'alter' => 'color',
			),
		),
		array(
			'id' => 'scroll_top_background',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Background Color', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_scroll_top',
			),
			'inline_css' => array(
				'target' => '#scroll-top:before',
				'alter' => 'background-color',
			),
		),
		array(
			'id' => 'scroll_top_rounded',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Rounded', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_scroll_top',
				'description' => esc_html__( 'Example: 50%. 0px is square.', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#scroll-top:before',
				'alter' => 'border-radius',
			),
		),
		array(
			'id' => 'scroll_top_icon_size',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Icon Size', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_scroll_top',
				'description' => esc_html__( 'Example: 16px.', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#scroll-top:after',
				'alter' => 'font-size',
			),
		),
		array(
			'id' => 'scroll_top_background_hover_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Background Color: Hover', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_scroll_top',
			),
			'inline_css' => array(
				'target' => '#scroll-top:hover:before',
				'alter' => 'background-color',
			),
		),
		array(
			'id' => 'scroll_top_icon_hover_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Icon Color: Hover', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_scroll_top',
			),
			'inline_css' => array(
				'target' => '#scroll-top:hover:after',
				'alter' => 'color',
			),
		),
	),
);

// Forms
$this->sections['wprt_general_forms'] = array(
	'title' => esc_html__( 'Forms', 'thecraft' ),
	'panel' => 'wprt_general',
	'settings' => array(
		array(
			'id' => 'input_border_rounded',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Border Rounded', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => array(
					'textarea,input[type="text"],input[type="password"],input[type="datetime"],input[type="datetime-local"],input[type="date"],input[type="month"],input[type="time"],input[type="week"],input[type="number"],input[type="email"],input[type="url"],input[type="search"],input[type="tel"],input[type="color"]',
				),
				'alter' => 'border-radius',
			),
		),
		array(
			'id' => 'input_background_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Background', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => array(
					'textarea,input[type="text"],input[type="password"],input[type="datetime"],input[type="datetime-local"],input[type="date"],input[type="month"],input[type="time"],input[type="week"],input[type="number"],input[type="email"],input[type="url"],input[type="search"],input[type="tel"],input[type="color"]',
				),
				'alter' => 'background-color',
			),
		),
		array(
			'id' => 'input_border_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Border Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => array(
					'textarea,input[type="text"],input[type="password"],input[type="datetime"],input[type="datetime-local"],input[type="date"],input[type="month"],input[type="time"],input[type="week"],input[type="number"],input[type="email"],input[type="url"],input[type="search"],input[type="tel"],input[type="color"]',
				),
				'alter' => 'border-color',
			),
		),
		array(
			'id' => 'input_border_width',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Border Width', 'thecraft' ),
				'description' => esc_html__( 'Enter a value in pixels. Example: 20px.', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => array(
					'textarea,input[type="text"],input[type="password"],input[type="datetime"],input[type="datetime-local"],input[type="date"],input[type="month"],input[type="time"],input[type="week"],input[type="number"],input[type="email"],input[type="url"],input[type="search"],input[type="tel"],input[type="color"]',
				),
				'alter' => 'border-width',
			),
		),
		array(
			'id' => 'input_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => array(
					'textarea,input[type="text"],input[type="password"],input[type="datetime"],input[type="datetime-local"],input[type="date"],input[type="month"],input[type="time"],input[type="week"],input[type="number"],input[type="email"],input[type="url"],input[type="search"],input[type="tel"],input[type="color"]',
				),
				'alter' => 'color',
			),
		),
	),
);

// Responsive
$this->sections['wprt_responsive'] = array(
	'title' => esc_html__( 'Responsive', 'thecraft' ),
	'panel' => 'wprt_general',
	'settings' => array(
		// Mobile Button
		array(
			'id' => 'heading_mobile_button',
			'control' => array(
				'type' => 'wprt-heading',
				'label' => esc_html__( 'Mobile Button', 'thecraft' ),
			),
		),
		array(
			'id' => 'mobile_button_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Mobile Button Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.mobile-button:before, .mobile-button:after, .mobile-button span',
				'alter' => 'background-color'
			),
		),
		// Mobile Logo
		array(
			'id' => 'heading_mobile_logo',
			'control' => array(
				'type' => 'wprt-heading',
				'label' => esc_html__( 'Mobile Logo', 'thecraft' ),
			),
		),
		array(
			'id' => 'mobile_logo_width',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Mobile Logo: Width', 'thecraft' ),
				'description' => esc_html__( 'Default: 200px.', 'thecraft' ),
			),
			'inline_css' => array(
				'media_query' => '(max-width: 991px)',
				'target' => '#site-logo',
				'alter' => 'max-width',
			),
		),
		array(
			'id' => 'mobile_logo_margin',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Mobile Logo: Margin', 'thecraft' ),
				'description' => esc_html__( 'Example: 10px 0px 10px 0px.', 'thecraft' ),
			),
			'inline_css' => array(
				'media_query' => '(max-width: 991px)',
				'target' => '#site-logo-inner',
				'alter' => 'margin',
			),
		),
		// Mobile Menu
		array(
			'id' => 'heading_mobile_menu',
			'control' => array(
				'type' => 'wprt-heading',
				'label' => esc_html__( 'Mobile Menu', 'thecraft' ),
			),
		),
		array(
			'id' => 'mobile_menu_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Text Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#main-nav-mobi ul > li > a',
				'alter' => 'color'
			),
		),
		array(
			'id' => 'mobile_menu_item_height',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Item Height', 'thecraft' ),
				'description' => esc_html__( 'Example: 40px.', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => array(
					'#main-nav-mobi ul > li > a',
					'#main-nav-mobi .menu-item-has-children .arrow'
				),
				'alter' => 'line-height'
			),
		),
		array(
			'id' => 'mobile_menu_background',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Item Background', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#main-nav-mobi ul li',
				'alter' => 'background-color'
			),
		),
		array(
			'id' => 'mobile_menu_border',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Item Border', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#main-nav-mobi ul li',
				'alter' => 'border-color'
			),
		),
	)
);