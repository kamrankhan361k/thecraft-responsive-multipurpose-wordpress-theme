<?php get_header(); ?>
    <div id="content-wrap" class="wprt-container">

		<div class="no-results">
			<div class="no-results-title">
				<h1><?php esc_html_e( 'Nothing Found', 'thecraft' ); ?></h1>
			</div>

			<div class="no-results-content">
				<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
					<p><?php 
						printf( '
							<a href="%1$s">%2$s</a>',
							esc_url( admin_url( 'post-new.php' ) ),
							esc_html__( 'Get started here with your first post', 'thecraft' )
						);
					?></p>
				<?php elseif ( is_search() ) : ?>
					<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'thecraft' ); ?></p>
					<?php get_search_form(); ?>
				<?php else : ?>
					<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'thecraft' ); ?></p>
					<?php get_search_form(); ?>
				<?php endif; ?>
			</div>
		</div><!-- /.no-results -->

    </div><!-- /#content-wrap -->
<?php get_footer(); ?>



