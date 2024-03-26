<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

extract( shortcode_atts( array(
	'style' => 'style-1',
	'padding' => '',
	'background' => 'accent',
    'heading' => 'Newsletter Subscribe',
), $atts ) );
$content = wpb_js_remove_wpautop($content, true);

$cls = $css = $html = $text_html = '';
$cls .= $style .' bg-'. $background;
$css .= 'padding:'. $padding .';';

if ( class_exists('MC4WP_MailChimp') ) {
	echo '<div class="wprt-subscribe clearfix '. $cls .'" style="'. $css .'">';
	echo '<div class="text-wrap"><div class="heading-wrap"><h5 class="heading">'. $heading .'</h5></div></div>';
	echo '<div class="form-wrap">';
	mc4wp_show_form(0);
	echo '</div>';
	echo '</div>';
}