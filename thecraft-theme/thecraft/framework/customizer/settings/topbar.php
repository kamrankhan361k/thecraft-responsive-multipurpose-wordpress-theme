<?php
/**
 * Top Bar setting for Customizer
 *
 * @package thecraft
 * @version 3.6.8
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Top Bar 1 General
$this->sections['wprt_topbar_general_one'] = array(
	'title' => esc_html__( 'General', 'thecraft' ),
	'panel' => 'wprt_topbar',
	'settings' => array(
		array(
			'id' => 'top_bar_one_background',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Background', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_topbar_one',
			),
			'inline_css' => array(
				'target' => '.top-bar-style-1 #top-bar',
				'alter' => 'background-color',
			),
		),
		array(
			'id' => 'top_bar_one_text',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Text Color', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_topbar_one',
			),
			'inline_css' => array(
				'target' => '.top-bar-style-1 #top-bar',
				'alter' => 'color',
			),
		),
		array(
			'id' => 'top_bar_one_link_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Link Color', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_topbar_one',
			),
			'inline_css' => array(
				'target' => '.top-bar-style-1 #top-bar a',
				'alter' => 'color',
			),
		),
		array(
			'id' => 'top_bar_one_social_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Socials: Color', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_topbar_one',
			),
			'inline_css' => array(
				'target' => '.top-bar-style-1 #top-bar .top-bar-socials .icons a',
				'alter' => 'color',
			),
		),
	),
);

// Top Bar 2 General
$this->sections['wprt_topbar_general_two'] = array(
	'title' => esc_html__( 'General', 'thecraft' ),
	'panel' => 'wprt_topbar',
	'settings' => array(
		array(
			'id' => 'top_bar_two_background',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Background', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_topbar_two',
			),
			'inline_css' => array(
				'target' => '.top-bar-style-2 #top-bar',
				'alter' => 'background-color',
			),
		),
		array(
			'id' => 'top_bar_two_text',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Text Color', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_topbar_two',
			),
			'inline_css' => array(
				'target' => '.top-bar-style-2 #top-bar',
				'alter' => 'color',
			),
		),
		array(
			'id' => 'top_bar_two_link_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Link Color', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_topbar_two',
			),
			'inline_css' => array(
				'target' => '.top-bar-style-2 #top-bar a',
				'alter' => 'color',
			),
		),
		array(
			'id' => 'top_bar_two_social_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Socials: Color', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_topbar_two',
			),
			'inline_css' => array(
				'target' => '.top-bar-style-2 #top-bar .top-bar-socials .icons a',
				'alter' => 'color',
			),
		),
	),
);

// Top Bar 3  General
$this->sections['wprt_topbar_general_three'] = array(
	'title' => esc_html__( 'General', 'thecraft' ),
	'panel' => 'wprt_topbar',
	'settings' => array(
		array(
			'id' => 'top_bar_three_background',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Background', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_topbar_three',
			),
			'inline_css' => array(
				'target' => '.top-bar-style-3 #top-bar',
				'alter' => 'background-color',
			),
		),
		array(
			'id' => 'top_bar_three_text',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Text Color', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_topbar_three',
			),
			'inline_css' => array(
				'target' => '.top-bar-style-3 #top-bar',
				'alter' => 'color',
			),
		),
		array(
			'id' => 'top_bar_three_link_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Link Color', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_topbar_three',
			),
			'inline_css' => array(
				'target' => '.top-bar-style-3 #top-bar a',
				'alter' => 'color',
			),
		),
		array(
			'id' => 'top_bar_three_social_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Socials: Color', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_topbar_three',
			),
			'inline_css' => array(
				'target' => '.top-bar-style-3 #top-bar .top-bar-socials .icons a',
				'alter' => 'color',
			),
		),
	),
);

// Top Bar Content
$this->sections['wprt_topbar_content'] = array(
	'title' => esc_html__( 'Content', 'thecraft' ),
	'panel' => 'wprt_topbar',
	'settings' => array(
		array(
			'id' => 'top_bar_content_welcome',
			'default' => '',
			'control' => array(
				'label' => esc_html__( 'Welcome Text', 'thecraft' ),
				'type' => 'wprt_textarea',
				'rows' => 3,
				'active_callback' => 'wprt_cac_has_topbar',
			),
		),
		array(
			'id' => 'top_bar_content_email',
			'default' => 'SUPPORT@NINZIO.COM',
			'control' => array(
				'label' => esc_html__( 'Email', 'thecraft' ),
				'type' => 'wprt_textarea',
				'rows' => 3,
				'active_callback' => 'wprt_cac_has_topbar',
			),
		),
		array(
			'id' => 'top_bar_content_phone',
			'default' => 'PHONE +7 (100) 450-460',
			'control' => array(
				'label' => esc_html__( 'Phone', 'thecraft' ),
				'type' => 'wprt_textarea',
				'rows' => 3,
				'active_callback' => 'wprt_cac_has_topbar',
			),
		),
		array(
			'id' => 'top_bar_content_address',
			'default' => '',
			'control' => array(
				'label' => esc_html__( 'Address', 'thecraft' ),
				'type' => 'wprt_textarea',
				'rows' => 3,
				'active_callback' => 'wprt_cac_has_topbar',
			),
		),
	),
);

// Top Bar Socials
$this->sections['wprt_topbar_social'] = array(
	'title' => esc_html__( 'Social', 'thecraft' ),
	'panel' => 'wprt_topbar',
	'settings' => array(
		array(
			'id' => 'top_bar_social_width',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Width', 'thecraft' ),
				'description' => esc_html__( 'Example: 30px.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_topbar',
			),
			'inline_css' => array(
				'target' => '#top-bar .top-bar-socials .icons a',
				'alter' => 'width',
			),
		),
		array(
			'id' => 'top_bar_social_height',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Height', 'thecraft' ),
				'description' => esc_html__( 'Example: 30px.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_topbar',
			),
			'inline_css' => array(
				'target' => '#top-bar .top-bar-socials .icons a',
				'alter' => array(
					'height',
					'line-height',
				),
			),
		),
		array(
			'id' => 'top_bar_social_space_between',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Space Between Items', 'thecraft' ),
				'description' => esc_html__( 'Example: 10px.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_topbar',
			),
			'inline_css' => array(
				'target' => '#top-bar .top-bar-socials .icons a',
				'alter' => 'margin-left',
			),
		),
		array(
			'id' => 'top_bar_social_font_size',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Icon Size', 'thecraft' ),
				'description' => esc_html__( 'Example: 20px.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_topbar',
			),
			'inline_css' => array(
				'target' => '#top-bar .top-bar-socials .icons a',
				'alter' => 'font-size',
			),
		),
	),
);

// Social settings
$social_options = wprt_topbar_social_options();
foreach ( $social_options as $key => $val ) {
	$this->sections['wprt_topbar_social']['settings'][] = array(
		'id' => 'top_bar_social_profiles[' . $key .']',
		'control' => array(
			'label' => $val['label'],
			'type' => 'text',
			'active_callback' => 'wprt_cac_has_topbar',
		),
	);
}

// Remove var from memory
unset( $social_options );