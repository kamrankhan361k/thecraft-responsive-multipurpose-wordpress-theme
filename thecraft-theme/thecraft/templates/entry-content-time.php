<?php
/**
 * Entry Content / Time
 *
 * @package thecraft
 * @version 3.6.8
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

echo '<div class="post-date-custom"><span>'.get_the_date("d").'</span><span>'.get_the_date("M").'</span></div>';
