<?php get_header(); ?>

<div id="content-wrap" class="wprt-container">
    <div id="site-content" class="site-content clearfix archive-project">
    	<div id="inner-content" class="inner-content-wrap">
			<?php if ( have_posts() ) : ?>
				<div class="wprt-project-grid" data-layout="grid" data-column="3" data-column2="3" data-column3="2" data-column4="1" data-gaph="30" data-gapv="30">
					<div id="portfolio" class="cbp">
					    <?php while ( have_posts() ) : the_post();
							wp_enqueue_script( 'wprt-cubeportfolio' ); wp_enqueue_script( 'wprt-magnificpopup' ); ?>

				            <div class="cbp-item">
								<div class="project-box style-2">
									<div class="inner">
										<?php
					                    	$icon_html = sprintf('<div class="icon">
					                    		<a class="link" href="%1$s" title="%2$s"><i class="craft-plus2"></i></a>
					                    		<a class="zoom-popup cbp-lightbox" href="%3$s" data-title="%2$s"><i class="craft-magnifier3"></i></a>
					                    		</div>',
					                    		esc_url( get_the_permalink() ),
					                    		esc_attr( get_the_title() ),
					                    		wprt_get_image( array( 'size' => 'full', 'format' => 'src' ) )
					                    	);

					                    	$heading_html = sprintf('<h2><a href="%1$s" title="%2$s">%3$s</a></h2>', esc_url( get_the_permalink() ), esc_attr( get_the_title() ), get_the_title() );

					                    	echo '<div class="project-wrap"><div class="project-image">'. get_the_post_thumbnail( get_the_ID(), 'wprt-rectangle' ) .'</div><div class="project-text">'. $icon_html .'</div></div>'. $heading_html;
										?>
					                </div>
								</div><!-- /.project-box -->
				            </div><!-- /.cbp-item -->
						<?php endwhile; ?>
					</div><!-- /#portfolio -->

					<?php wprt_pagination(); ?>
				</div><!-- /.wprt-project -->
			<?php endif; ?>
    	</div>
    </div><!-- /#site-content -->
</div><!-- /#content-wrap -->

<?php get_footer(); ?>