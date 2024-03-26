<?php
/**
 * Header setting for Customizer
 *
 * @package thecraft
 * @version 3.6.8
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Header General
$this->sections['wprt_header_general'] = array(
	'title' => esc_html__( 'General', 'thecraft' ),
	'panel' => 'wprt_header',
	'settings' => array(
		// Header 1
		array(
			'id' => 'header_background',
			'transport' => 'postMessage',
			'control' => array(
				'label' => esc_html__( 'Background', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_one',
				'type' => 'color',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-1 #site-header'
				),
				'alter' => 'background-color',
			),
		),
		array(
			'id' => 'header_top_padding',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Top Padding', 'thecraft' ),
				'description' => esc_html__( 'Example: 50px.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_one',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-1 #site-header-inner'
				),
				'alter' => 'padding-top',
			),
		),
		array(
			'id' => 'header_bottom_padding',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Bottom Padding', 'thecraft' ),
				'description' => esc_html__( 'Example: 50px.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_one',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-1 #site-header-inner'
				),
				'alter' => 'padding-bottom',
			),
		),
		// Header 2
		array(
			'id' => 'header_two_background',
			'transport' => 'postMessage',
			'control' => array(
				'label' => esc_html__( 'Background', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_two',
				'type' => 'color',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-2 #site-header'
				),
				'alter' => 'background-color',
			),
		),
		array(
			'id' => 'header_two_top_padding',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Top Padding', 'thecraft' ),
				'description' => esc_html__( 'Example: 50px.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_two',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-2 #site-header-inner'
				),
				'alter' => 'padding-top',
			),
		),
		array(
			'id' => 'header_two_bottom_padding',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Bottom Padding', 'thecraft' ),
				'description' => esc_html__( 'Example: 50px.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_two',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-2 #site-header-inner'
				),
				'alter' => 'padding-bottom',
			),
		),
		// Header 3
		array(
			'id' => 'header_three_background',
			'transport' => 'postMessage',
			'control' => array(
				'label' => esc_html__( 'Background', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_three',
				'type' => 'color',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-3 #site-header'
				),
				'alter' => 'background-color',
			),
		),
		array(
			'id' => 'header_three_top_padding',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Top Padding', 'thecraft' ),
				'description' => esc_html__( 'Example: 50px.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_three',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-3 #site-header-inner'
				),
				'alter' => 'padding-top',
			),
		),
		array(
			'id' => 'header_three_bottom_padding',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Bottom Padding', 'thecraft' ),
				'description' => esc_html__( 'Example: 50px.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_three',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-3 #site-header-inner'
				),
				'alter' => 'padding-bottom',
			),
		),
		// Header 4 - Float
		array(
			'id' => 'header_four_background',
			'transport' => 'postMessage',
			'control' => array(
				'label' => esc_html__( 'Background', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_four',
				'type' => 'color',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-4 #site-header:after'
				),
				'alter' => 'background-color',
			),
		),
		array(
			'id' => 'header_four_background_opacity',
			'transport' => 'postMessage',
			'default' => '0.0001',
			'control' => array(
				'label'  => esc_html__( 'Background Opacity', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_four',
				'type' => 'select',
				'choices' => array(
					'1' => esc_html__( '1', 'thecraft' ),
					'0.9' => esc_html__( '0.9', 'thecraft' ),
					'0.8' => esc_html__( '0.8', 'thecraft' ),
					'0.7' => esc_html__( '0.7', 'thecraft' ),
					'0.6' => esc_html__( '0.6', 'thecraft' ),
					'0.5' => esc_html__( '0.5', 'thecraft' ),
					'0.4' => esc_html__( '0.4', 'thecraft' ),
					'0.3' => esc_html__( '0.3', 'thecraft' ),
					'0.2' => esc_html__( '0.2', 'thecraft' ),
					'0.1' => esc_html__( '0.1', 'thecraft' ),
					'0.0001' => esc_html__( '0', 'thecraft' ),
				),
			),
			'inline_css' => array(
				'target' => '.header-style-4 #site-header:after',
				'alter' => 'opacity',
			),
		),
		array(
			'id' => 'header_four_top_padding',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Top Padding', 'thecraft' ),
				'description' => esc_html__( 'Example: 50px.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_four',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-4 #site-header-inner'
				),
				'alter' => 'padding-top',
			),
		),
		array(
			'id' => 'header_four_bottom_padding',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Bottom Padding', 'thecraft' ),
				'description' => esc_html__( 'Example: 50px.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_four',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-4 #site-header-inner'
				),
				'alter' => 'padding-bottom',
			),
		),
		// Header 5
		array(
			'id' => 'header_five_background',
			'transport' => 'postMessage',
			'control' => array(
				'label' => esc_html__( 'Background', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_five',
				'type' => 'color',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-5 #site-header'
				),
				'alter' => 'background-color',
			),
		),
		array(
			'id' => 'header_five_top_padding',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Top Padding', 'thecraft' ),
				'description' => esc_html__( 'Example: 50px.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_five',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-5 #site-header-inner'
				),
				'alter' => 'padding-top',
			),
		),
		array(
			'id' => 'header_five_bottom_padding',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Bottom Padding', 'thecraft' ),
				'description' => esc_html__( 'Example: 50px.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_five',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-5 #site-header-inner'
				),
				'alter' => 'padding-bottom',
			),
		),
	)
);

// Header Logo
$this->sections['wprt_header_logo'] = array(
	'title' => esc_html__( 'Logo', 'thecraft' ),
	'panel' => 'wprt_header',
	'settings' => array(
		// Logo 1
		array(
			'id' => 'logo_margin',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Logo Margin', 'thecraft' ),
		 		'description' => esc_html__( 'Top Right Bottom Left. Example: 30px 0px 0px 0px.', 'thecraft' ),
		 		'active_callback' => 'wprt_cac_has_header_one_and_five',
			),
			'inline_css' => array(
				'media_query' => '(min-width: 992px)',
				'target' => '.header-style-1 #site-logo-inner',
				'alter' => 'margin',
			),
		),
		array(
			'id' => 'custom_logo',
			'default' => '',
			'control' => array(
				'label' => esc_html__( 'Logo Image', 'thecraft' ),
				'type' => 'image',
				'active_callback' => 'wprt_cac_has_header_one_and_five',
			),
		),
		array(
			'id' => 'logo_width',
			'control' => array(
				'label' => esc_html__( 'Logo Width', 'thecraft' ),
				'description' => esc_html__( 'This should be exactly the same as the width of the logo.', 'thecraft' ),
				'type' => 'text',
				'active_callback' => 'wprt_cac_has_header_one_and_five',
			),
		),
		array(
			'id' => 'logo_height',
			'control' => array(
				'label' => esc_html__( 'Logo Height', 'thecraft' ),
				'type' => 'text',
				'description' => esc_html__( 'This should be exactly the same as the height of the logo.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_one_and_five',
			),
		),
		array(
			'id' => 'retina_logo',
			'default' => '',
			'control' => array(
				'label' => esc_html__( 'Retina Logo Image', 'thecraft' ),
				'type' => 'image',
				'description' => esc_html__('2x times your logo dimension.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_one_and_five',
			),
		),
		// Logo 2
		array(
			'id' => 'logotwo_margin',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Logo Margin', 'thecraft' ),
		 		'description' => esc_html__( 'Top Right Bottom Left. Example: 30px 0px 0px 0px.', 'thecraft' ),
		 		'active_callback' => 'wprt_cac_has_header_two_and_four',
			),
			'inline_css' => array(
				'media_query' => '(min-width: 992px)',
				'target' => '.header-style-2 #site-logo-inner, .header-style-4 #site-logo-inner',
				'alter' => 'margin',
			),
		),
		array(
			'id' => 'custom_logotwo',
			'default' => '',
			'control' => array(
				'label' => esc_html__( 'Logo Image', 'thecraft' ),
				'type' => 'image',
				'active_callback' => 'wprt_cac_has_header_two_and_four',
			),
		),
		array(
			'id' => 'logotwo_width',
			'control' => array(
				'label' => esc_html__( 'Logo Width', 'thecraft' ),
				'description' => esc_html__( 'This should be exactly the same as the width of the logo.', 'thecraft' ),
				'type' => 'text',
				'active_callback' => 'wprt_cac_has_header_two_and_four',
			),
		),
		array(
			'id' => 'logotwo_height',
			'control' => array(
				'label' => esc_html__( 'Logo Height', 'thecraft' ),
				'type' => 'text',
				'description' => esc_html__( 'This should be exactly the same as the height of the logo.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_two_and_four',
			),
		),
		array(
			'id' => 'retina_logotwo',
			'default' => '',
			'control' => array(
				'label' => esc_html__( 'Retina Logo Image', 'thecraft' ),
				'type' => 'image',
				'description' => esc_html__('2x times your logo dimension.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_two_and_four',
			),
		),
		// Logo 3
		array(
			'id' => 'logothree_margin',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Logo Margin', 'thecraft' ),
		 		'description' => esc_html__( 'Top Right Bottom Left. Example: 30px 0px 0px 0px.', 'thecraft' ),
		 		'active_callback' => 'wprt_cac_has_header_three',
			),
			'inline_css' => array(
				'media_query' => '(min-width: 992px)',
				'target' => '.header-style-3 #site-logo-inner',
				'alter' => 'margin',
			),
		),
		array(
			'id' => 'custom_logothree',
			'default' => '',
			'control' => array(
				'label' => esc_html__( 'Logo Image', 'thecraft' ),
				'type' => 'image',
				'active_callback' => 'wprt_cac_has_header_three',
			),
		),
		array(
			'id' => 'logothree_width',
			'control' => array(
				'label' => esc_html__( 'Logo Width', 'thecraft' ),
				'description' => esc_html__( 'This should be exactly the same as the width of the logo.', 'thecraft' ),
				'type' => 'text',
				'active_callback' => 'wprt_cac_has_header_three',
			),
		),
		array(
			'id' => 'logothree_height',
			'control' => array(
				'label' => esc_html__( 'Logo Height', 'thecraft' ),
				'type' => 'text',
				'description' => esc_html__( 'This should be exactly the same as the height of the logo.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_three',
			),
		),
		array(
			'id' => 'retina_logothree',
			'default' => '',
			'control' => array(
				'label' => esc_html__( 'Retina Logo Image', 'thecraft' ),
				'type' => 'image',
				'description' => esc_html__('2x times your logo dimension.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_three',
			),
		),
	)
);

// Header Menu
$this->sections['wprt_header_menu'] = array(
	'title' => esc_html__( 'Menu', 'thecraft' ),
	'panel' => 'wprt_header',
	'settings' => array(
		// General
		array(
			'id' => 'menu_link_spacing',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Link Spacing', 'thecraft' ),
				'description' => esc_html__( 'Example: 20px.', 'thecraft' ),
				'active_callback' => 'wprt_cac_hasnt_header_five',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-1 #main-nav > ul > li',
					'.header-style-2 #main-nav > ul > li',
					'.header-style-3 #main-nav > ul > li',
					'.header-style-4 #main-nav > ul > li'
				),
				'alter' => array(
					'padding-left',
					'padding-right',
				),
			),
		),
		array(
			'id' => 'menu_five_link_spacing',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Link Spacing', 'thecraft' ),
				'description' => esc_html__( 'Example: 20px.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_five',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-5 #site-header .site-navigation-wrap #main-nav > ul > li'
				),
				'alter' => array(
					'padding-left',
					'padding-right',
				),
			),
		),
		array(
			'id' => 'menu_height',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Menu Height', 'thecraft' ),
				'description' => esc_html__( 'Default: 100px.', 'thecraft' ),
				'active_callback' => 'wprt_cac_hasnt_header_five',
			),
			'inline_css' => array(
				'target' => array(
					'#site-header #main-nav > ul > li > a',
				),
				'alter' => array(
					'height',
					'line-height',
				),
			),
		),
		array(
			'id' => 'menu_five_height',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Menu Height', 'thecraft' ),
				'description' => esc_html__( 'Default: 36px.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_five',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-5 #site-header .site-navigation-wrap #main-nav > ul > li > a',
				),
				'alter' => array(
					'height',
					'line-height',
				),
			),
		),
		// Header 1
		array(
			'id' => 'menu_link_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Link Color', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_one',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-1 #site-header #main-nav > ul > li > a',
				),
				'alter' => 'color',
			),
		),
		array(
			'id' => 'menu_link_color_hover',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Link Color: Hover', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_one',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-1 #site-header #main-nav > ul > li > a:hover',
				),
				'alter' => 'color',
			),
		),
		array(
			'id' => 'menu_link_current',
			'default' => 'cur-menu-1',
			'control' => array(
				'label' => esc_html__( 'Current Link Style', 'thecraft' ),
				'type' => 'select',
				'choices' => array(
					'cur-menu-1' => esc_html__( 'Style 1', 'thecraft' ),
					'cur-menu-2'  => esc_html__( 'Style 2', 'thecraft' ),
					'cur-menu-3'    => esc_html__( 'Style 3', 'thecraft' ),
				),
				'active_callback' => 'wprt_cac_has_header_one',
			),
		),
		// Header 2
		array(
			'id' => 'menu_two_link_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Link Color', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_two',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-2 #site-header #main-nav > ul > li > a',
				),
				'alter' => 'color',
			),
		),
		array(
			'id' => 'menu_two_link_color_hover',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Link Color: Hover', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_two',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-2 #site-header #main-nav > ul > li > a:hover',
				),
				'alter' => 'color',
			),
		),
		array(
			'id' => 'menu_two_link_current',
			'default' => 'cur-menu-1',
			'control' => array(
				'label' => esc_html__( 'Current Link Style', 'thecraft' ),
				'type' => 'select',
				'choices' => array(
					'cur-menu-1' => esc_html__( 'Style 1', 'thecraft' ),
					'cur-menu-2'  => esc_html__( 'Style 2', 'thecraft' ),
					'cur-menu-3'    => esc_html__( 'Style 3', 'thecraft' ),
				),
				'active_callback' => 'wprt_cac_has_header_two',
			),
		),
		// Header 3
		array(
			'id' => 'menu_three_link_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Link Color', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_three',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-3 #site-header #main-nav > ul > li > a',
				),
				'alter' => 'color',
			),
		),
		array(
			'id' => 'menu_three_link_color_hover',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Link Color: Hover', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_three',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-3 #site-header #main-nav > ul > li > a:hover',
				),
				'alter' => 'color',
			),
		),
		array(
			'id' => 'menu_three_link_current',
			'default' => 'cur-menu-1',
			'control' => array(
				'label' => esc_html__( 'Current Link Style', 'thecraft' ),
				'type' => 'select',
				'choices' => array(
					'cur-menu-1' => esc_html__( 'Style 1', 'thecraft' ),
					'cur-menu-2'  => esc_html__( 'Style 2', 'thecraft' ),
					'cur-menu-3'    => esc_html__( 'Style 3', 'thecraft' ),
				),
				'active_callback' => 'wprt_cac_has_header_three',
			),
		),
		// Header 4
		array(
			'id' => 'menu_four_link_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Link Color', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_four',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-4 #site-header #main-nav > ul > li > a',
				),
				'alter' => 'color',
			),
		),
		array(
			'id' => 'menu_four_link_color_hover',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Link Color: Hover', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_four',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-4 #site-header #main-nav > ul > li > a:hover',
				),
				'alter' => 'color',
			),
		),
		array(
			'id' => 'menu_four_link_current',
			'default' => 'cur-menu-1',
			'control' => array(
				'label' => esc_html__( 'Current Link Style', 'thecraft' ),
				'type' => 'select',
				'choices' => array(
					'cur-menu-1' => esc_html__( 'Style 1', 'thecraft' ),
					'cur-menu-2'  => esc_html__( 'Style 2', 'thecraft' ),
					'cur-menu-3'    => esc_html__( 'Style 3', 'thecraft' ),
				),
				'active_callback' => 'wprt_cac_has_header_four',
			),
		),
		// Header 5
		array(
			'id' => 'menu_five_link_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Link Color', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_five',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-5 #site-header .site-navigation-wrap #main-nav > ul > li > a',
				),
				'alter' => 'color',
			),
		),
		array(
			'id' => 'menu_five_link_color_hover',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Link Color: Hover', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_five',
			),
			'inline_css' => array(
				'target' => array(
					'.header-style-5 #site-header .site-navigation-wrap #main-nav > ul > li > a:hover',
				),
				'alter' => 'color',
			),
		),
	)
);

// Information
$this->sections['wprt_header_information'] = array(
	'title' => esc_html__( 'Information', 'thecraft' ),
	'panel' => 'wprt_header',
	'settings' => array(
		array(
			'id' => 'header_aside_info_one',
			'default' => '<span class="heading">Welcome to Best Website Building Tool</span>',
			'control' => array(
				'label' => esc_html__( 'Heading', 'thecraft' ),
				'type' => 'wprt_textarea',
				'rows' => 5,
				'active_callback' => 'wprt_cac_has_header_five',
			),
		),
		array(
			'id' => 'header_aside_info_one_right_margin',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Heading: Right Margin', 'thecraft' ),
				'description' => esc_html__( 'Example: 30px.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_five',
			),
			'inline_css' => array(
				'target' => '.header-style-5 #header-aside .header-info .heading',
				'alter' => 'margin-right',
			),
		),
		array(
			'id' => 'header_five_text_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Heading Color', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_header_five',
			),
			'inline_css' => array(
				'target' => '.header-style-5 #header-aside .header-info .heading',
				'alter' => 'color',
			),
		),
	)
);

// Search & Cart
$this->sections['wprt_header_search_cart'] = array(
	'title' => esc_html__( 'Search & Cart Icon', 'thecraft' ),
	'panel' => 'wprt_header',
	'settings' => array(
		// Search Icon
		array(
			'id' => 'header_search_icon',
			'default' => false,
			'control' => array(
				'label' => esc_html__( 'Search Icon', 'thecraft' ),
				'type' => 'checkbox',
			),
		),
		array(
			'id' => 'header_search_icon_margin',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Search Icon: Margin', 'thecraft' ),
				'description' => esc_html__( 'Default: 30px 0px 30px 10px.', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#site-header #header-search',
				'alter' => 'padding',
			),
		),
		// Cart Icon
		array(
			'id' => 'header_cart_icon',
			'default' => false,
			'control' => array(
				'label' => esc_html__( 'Cart Icon', 'thecraft' ),
				'type' => 'checkbox',
				'active_callback' => 'wprt_cac_has_woo',
			),
		),
		array(
			'id' => 'header_cart_icon_margin',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Cart Icon: Margin', 'thecraft' ),
				'description' => esc_html__( 'Default: 30px 0px 30px 10px.', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.nav-top-cart-wrapper',
				'alter' => 'padding',
			),
		),
	)
);