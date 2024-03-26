<?php
/**
 * Footer setting for Customizer
 *
 * @package thecraft
 * @version 3.6.8
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Footer General
$this->sections['wprt_footer_general'] = array(
	'title' => esc_html__( 'General', 'thecraft' ),
	'panel' => 'wprt_footer',
	'settings' => array(
		array(
			'id' => 'footer_columns',
			'default' => '4',
			'control' => array(
				'label' => esc_html__( 'Footer Column(s)', 'thecraft' ),
				'type' => 'select',
				'choices' => array(
					'4' => '4',
					'3' => '3',
					'2' => '2',
					'1' => '1',
				),
			),
		),
		array(
			'id' => 'footer_column_gutter',
			'default' => '30',
			'transport' => 'postMessage',
			'control' => array(
				'label' => esc_html__( 'Footer Column Gutter', 'thecraft' ),
				'type' => 'select',
				'choices' => array(
					'5'    => '5px',
					'10'   => '10px',
					'15'   => '15px',
					'20'   => '20px',
					'25'   => '25px',
					'30'   => '30px',
					'35'   => '35px',
					'40'   => '40px',
					'45'   => '45px',
					'50'   => '50px',
					'60'   => '60px',
					'70'   => '70px',
					'80'   => '80px',
				),
			),
		),
		array(
			'id' => 'footer_text_color',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Text Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#footer-widgets .widget',
				'alter' => 'color',
			),
		),
		array(
			'id' => 'footer_background',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Background Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#footer',
				'alter' => 'background-color',
			),
		),
		array(
			'id' => 'footer_top_padding',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Top Padding', 'thecraft' ),
				'description' => esc_html__( 'Example: 60px.', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#footer',
				'alter' => 'padding-top',
			),
		),
		array(
			'id' => 'footer_bottom_padding',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Bottom Padding', 'thecraft' ),
				'description' => esc_html__( 'Example: 60px.', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '#footer',
				'alter' => 'padding-bottom',
			),
		),
	),
);

// Footer Promotion
$this->sections['wprt_footer_promotion'] = array(
	'title' => esc_html__( 'Promotion Box', 'thecraft' ),
	'panel' => 'wprt_footer',
	'settings' => array(
		array(
			'id' => 'promotion',
			'default' => false,
			'control' => array(
				'label' => esc_html__( 'Enable', 'thecraft' ),
				'type' => 'checkbox',
			),
		),
		array(
			'id' => 'promotion_background',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'color',
				'label' => esc_html__( 'Background Color', 'thecraft' ),
			),
			'inline_css' => array(
				'target' => '.footer-promotion',
				'alter' => 'background-color',
			),
		),
		array(
			'id' => 'promotion_title',
			'default' => esc_html__( 'SOME OF THE WORLD\'S BEST DESIN TEAMS INSPECT THE CRAFT SOLUTIONS', 'thecraft' ),
			'control' => array(
				'label' => esc_html__( 'Title', 'thecraft' ),
				'type' => 'text',
			),
		),
		array(
			'id' => 'promotion_button',
			'default' => esc_html__( 'PURCHASE NOW', 'thecraft' ),
			'control' => array(
				'label' => esc_html__( 'Button', 'thecraft' ),
				'type' => 'text',
			),
		),
		array(
			'id' => 'promotion_button_url',
			'default' => esc_html__( '#', 'thecraft' ),
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Button URL', 'thecraft' ),
				'description' => esc_html__( 'Please \'http://\' included', 'thecraft' ),
			),	
		),
	),
);