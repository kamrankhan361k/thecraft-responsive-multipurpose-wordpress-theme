<?php
/**
 * Bottom Bar / Content
 *
 * @package thecraft
 * @version 3.6.8
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Get bottom content
$content = wprt_get_mod( 'bottom_copyright', '&copy; Copyright <span class="text-white">TheCraft.</span> All rights reserved.' );
?>

<div class="bottom-bar-content">
    <?php
    // Display copyright site
    if ( $content ) : ?>

        <div id="copyright">
            <?php printf('%1$s', do_shortcode( $content ));  ?>
        </div><!-- /#copyright -->

    <?php endif; ?>
</div><!-- /.bottom-bar-content -->

