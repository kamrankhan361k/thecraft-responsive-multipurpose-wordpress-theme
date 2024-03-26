<?php
/**
 * WooCommerce setting for Customizer
 *
 * @package thecraft
 * @version 3.6.8
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// WooCommerce General
$this->sections['wprt_woocommerce_general'] = array(
	'title' => esc_html__( 'General', 'thecraft' ),
	'panel' => 'wprt_woocommerce',
	'settings' => array(
		array(
			'id' => 'shop_featured_title',
			'default' => esc_html__( 'Shop', 'thecraft' ),
			'control' => array(
				'label' => esc_html__( 'Shop Featured Title', 'thecraft' ),
				'type' => 'text',
				'active_callback' => 'wprt_cac_has_woo',
			),
		),
		array(
			'id' => 'shop_products_per_page',
			'default' => 9,
			'control' => array(
				'label' => esc_html__( 'Products Per Page', 'thecraft' ),
				'type' => 'number',
				'active_callback' => 'wprt_cac_has_woo',
			),
		),
		array(
			'id' => 'shop_item_products_desc',
			'default' => 20,
			'control' => array(
				'label' => esc_html__( 'Product Item: Desciption', 'thecraft' ),
				'type' => 'number',
				'active_callback' => 'wprt_cac_has_woo',
			),
		),
		array(
			'id' => 'shop_columns',
			'default' => '3',
			'control' => array(
				'label' => esc_html__( 'Shop Columns', 'thecraft' ),
				'type' => 'select',
				'choices' => array(
					'2' => '2',
					'3' => '3',
					'4' => '4',
					'5' => '5',
				),
				'active_callback' => 'wprt_cac_has_woo',
			),
		),
		array(
			'id' => 'shop_item_bottom_margin',
			'transport' => 'postMessage',
			'control' => array(
				'type' => 'text',
				'label' => esc_html__( 'Item Bottom Margin', 'thecraft' ),
				'description' => esc_html__( 'Example: 30px.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_woo',
			),
			'inline_css' => array(
				'target' => '.woocommerce-page .content-woocommerce .products li',
				'alter' => 'margin-bottom',
			),
		),
		array(
			'id' => 'shop_layout_position',
			'default' => 'no-sidebar',
			'control' => array(
				'label' => esc_html__( 'Shop Layout Position', 'thecraft' ),
				'type' => 'select',
				'choices' => array(
					'sidebar-right' => esc_html__( 'Right Sidebar', 'thecraft' ),
					'sidebar-left'  => esc_html__( 'Left Sidebar', 'thecraft' ),
					'no-sidebar'    => esc_html__( 'No Sidebar', 'thecraft' ),
				),
				'desc' => esc_html__( 'Specify layout for main shop page.', 'thecraft' )
			),
		),
		array(
			'id' => 'shop_single_layout_position',
			'default' => 'no-sidebar',
			'control' => array(
				'label' => esc_html__( 'Shop Single Layout Position', 'thecraft' ),
				'type' => 'select',
				'choices' => array(
					'sidebar-right' => esc_html__( 'Right Sidebar', 'thecraft' ),
					'sidebar-left'  => esc_html__( 'Left Sidebar', 'thecraft' ),
					'no-sidebar'    => esc_html__( 'No Sidebar', 'thecraft' ),
				),
				'desc' => esc_html__( 'Specify layout on the shop single page.', 'thecraft' ),
				'active_callback' => 'wprt_cac_has_woo',
			),
		),
	),
);