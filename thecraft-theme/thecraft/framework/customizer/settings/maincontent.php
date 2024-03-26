<?php
/**
 * Main Content setting for Customizer
 *
 * @package thecraft
 * @version 3.6.8
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Main Content General
$this->sections['wprt_maincontent_general'] = array(
	'title' => esc_html__( 'General', 'thecraft' ),
	'panel' => 'wprt_maincontent',
	'settings' => array(
		array(
			'id' => 'main_content_top_padding',
			'transport' => 'postMessage',
			'control' => array (
				'type' => 'text',
				'label' => esc_html__( 'Top Padding', 'thecraft' ),
				'description' => esc_html__( 'Example: 30px', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#main-content',
				'alter' => 'padding-top',
			),
		),
		array(
			'id' => 'main_content_bottom_padding',
			'transport' => 'postMessage',
			'control' => array (
				'type' => 'text',
				'label' => esc_html__( 'Bottom Padding', 'thecraft' ),
				'description' => esc_html__( 'Example: 30px', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#main-content',
				'alter' => 'padding-bottom',
			),
		),
		array(
			'id' => 'main_content_background',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Background Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#main-content',
				'alter' => 'background-color',
			),
		),
		array(
			'id' => 'main_content_background_img',
			'control' => array(
				'type' => 'image',
				'label' => esc_html__( 'Background Image', 'thecraft' ),
			),
		),
		array(
			'id' => 'main_content_background_img_style',
			'default' => '',
			'control' => array(
				'label' => esc_html__( 'Background Image Style', 'thecraft' ),
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
			),
		),
	),
);

// Main Content Left
$this->sections['wprt_maincontent_left'] = array(
	'title' => esc_html__( 'Content', 'thecraft' ),
	'panel' => 'wprt_maincontent',
	'settings' => array(
		array(
			'id' => 'left_content_padding',
			'transport' => 'postMessage',
			'control' => array (
				'type' => 'text',
				'label' => esc_html__( 'Padding', 'thecraft' ),
				'description' => esc_html__( 'Top Right Bottom Left. Example: 30px', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#inner-content',
				'alter' => 'padding',
			),
		),
		array(
			'id' => 'left_content_background',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Background Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#inner-content',
				'alter' => 'background-color',
			),
		),
		array(
			'id' => 'left_content_border_width',
			'transport' => 'postMessage',
			'control' => array (
				'type' => 'text',
				'label' => esc_html__( 'Border Width', 'thecraft' ),
				'description' => esc_html__( 'Top Right Bottom Left. Example: 0px 3px 2px 0px', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#inner-content:after',
				'alter' => 'border-width',
			),
		),
		array(
			'id' => 'left_content_border_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Border Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#inner-content:after',
				'alter' => 'border-color',
			),
		),
	),
);

// Main Content Right
$this->sections['wprt_maincontent_right'] = array(
	'title' => esc_html__( 'Sidebar', 'thecraft' ),
	'panel' => 'wprt_maincontent',
	'settings' => array(
		array(
			'id' => 'right_content_padding',
			'transport' => 'postMessage',
			'control' => array (
				'type' => 'text',
				'label' => esc_html__( 'Padding', 'thecraft' ),
				'description' => esc_html__( 'Top Right Bottom Left. Example: 30px', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#inner-sidebar',
				'alter' => 'padding',
			),
		),
		array(
			'id' => 'right_content_background',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Background Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#inner-sidebar',
				'alter' => 'background-color',
			),
		),
		array(
			'id' => 'right_content_border_width',
			'transport' => 'postMessage',
			'control' => array (
				'type' => 'text',
				'label' => esc_html__( 'Border Width', 'thecraft' ),
				'description' => esc_html__( 'Top Right Bottom Left. Example: 0px 3px 3px 0px', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#inner-sidebar:after',
				'alter' => 'border-width',
			),
		),
		array(
			'id' => 'right_content_border_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Border Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#inner-sidebar:after',
				'alter' => 'border-color',
			),
		),
	),
);