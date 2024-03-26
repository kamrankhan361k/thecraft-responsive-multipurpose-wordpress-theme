<?php
/**
 * Entry Content / Author
 *
 * @package thecraft
 * @version 3.6.8
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( is_single() && ! get_the_author_meta( 'description' ) )
	return;
?>

<div class="post-author cleafix">
    <div class="author-avatar">
        <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );?>" rel="author">
            <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'wprt_author_bio_avatar_size', 96 ) ); ?>
        </a>
    </div>
    <div class="author-desc">
        <h4 class="name"><?php the_author_meta( 'nickname' ); ?></h4>
        <p><?php the_author_meta( 'description' ); ?></p>
        <div class="author-socials">
            <?php if ( $url = get_the_author_meta( 'rt_facebook' ) ) : ?>
                <a href="<?php echo esc_url( $url ); ?>" title="<?php esc_attr_e( 'Facebook', 'thecraft' ); ?>">
                    <span class="craft-facebook"></span>
                </a>
            <?php endif; ?>

            <?php if ( $url = get_the_author_meta( 'rt_twitter' ) ) : ?>
                <a href="<?php echo esc_url( $url ); ?>" title="<?php esc_attr_e( 'Twitter', 'thecraft' ); ?>">
                    <span class="craft-twitter"></span>
                </a>
            <?php endif; ?>

            <?php if ( $url = get_the_author_meta( 'rt_google_plus' ) ) : ?>
                <a href="<?php echo esc_url( $url ); ?>" title="<?php esc_attr_e( 'Google +', 'thecraft' ); ?>">
                    <span class="craft-googleplus"></span>
                </a>
            <?php endif; ?>

            <?php if ( $url = get_the_author_meta( 'rt_linkedin' ) ) : ?>
                <a href="<?php echo esc_url( $url ); ?>" title="<?php esc_attr_e( 'Linkedin', 'thecraft' ); ?>">
                    <span class="craft-linkedin"></span>
                </a>
            <?php endif; ?>

            <?php if ( $url = get_the_author_meta( 'rt_pinterest' ) ) : ?>
                <a href="<?php echo esc_url( $url ); ?>" title="<?php esc_attr_e( 'Pinterest', 'thecraft' ); ?>">
                    <span class="craft-pinterest"></span>
                </a>
            <?php endif; ?>

            <?php if ( $url = get_the_author_meta( 'rt_instagram' ) ) : ?>
                <a href="<?php echo esc_url( $url ); ?>" title="<?php esc_attr_e( 'Instagram', 'thecraft' ); ?>">
                    <span class="craft-instagram"></span>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>




