<?php
/**
 * Footer Promotion
 *
 * @package thecraft
 * @version 3.6.8
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Exit if disabled via Customizer
if ( ! wprt_get_mod( 'promotion', false ) ) return false;

$title = wprt_get_mod( 'promotion_title', 'SOME OF THE WORLD\'S BEST DESIN TEAMS INSPECT THE CRAFT SOLUTIONS' );
$button = wprt_get_mod( 'promotion_button', 'PURCHASE NOW' );
$button_url = wprt_get_mod( 'promotion_button_url', '#' );

$html = $text_html = '';
if ( $title ) $html .= sprintf( '
	<div class="heading-wrap">
		<div class="text-wrap">
			<span class="promo-icon"><i class="craft-diamond"></i></span>
			<h5 class="heading">%1$s</h5>
		</div>
	</div>', $title );
if ( $button) $html .= sprintf( '
	<div class="button-wrap">
		<a href="%2$s" class="promo-btn">
			<span><span class="icon"><i class="craft-shop5"></i></span>%1$s</span>
		</a>
	</div>', $button, $button_url );

if ( $title || $button )
	$text_html = sprintf( '<div class="inner">%1$s</div>', $html );

if ( $text_html )
	printf( '<div class="footer-promotion clearfix"><div class="wprt-container">%1$s</div></div>', $text_html );