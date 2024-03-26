<?php
/**
 * Entry Content / Navigation
 *
 * @package thecraft
 * @version 3.6.8
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( is_single() && ! wprt_get_mod( 'wprt_blog_single_nav', true ) )
	return;

// Previous/next post navigation.
echo '<div class="clearfix">';
the_post_navigation( array(
	'next_text' => '<span class="meta-nav" aria-hidden="true">'. esc_html__( 'Next post', 'thecraft' ) .'</span>'.
		'<span class="screen-reader-text">'. esc_html__( 'Next post:', 'thecraft' ) .'</span> ',
	'prev_text' => '<span class="meta-nav" aria-hidden="true">'. esc_html__( 'Prev post', 'thecraft' ) .'</span>'.
		'<span class="screen-reader-text">'. esc_html__( 'Prev post:', 'thecraft' ) .'</span>',
) );
echo '</div>';