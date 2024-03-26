<?php
get_header();

$related_title = wprt_get_mod( 'project_related_title' );
$related_title   = $related_title ? $related_title : esc_html__( 'RELATED PROJECTS', 'thecraft' );
$related_query = wprt_get_mod( 'project_related_query', '7' );
$related_column = wprt_get_mod( 'project_related_column', '3' );
$related_item_gap = wprt_get_mod( 'project_related_item_spacing', '0' );
$related_item_crop = wprt_get_mod( 'project_related_img_crop', 'square' );

$terms = get_the_terms( $post->ID, 'project_category' );
$term_ids = wp_list_pluck( $terms, 'term_id' );
?>
<div class="project-detail-wrap">
	<?php
	while ( have_posts() ) : the_post();
		the_content();
	endwhile; ?>
</div>

<?php if ( wprt_get_mod( 'project_related', true )  ): ?>
<div class="project-related-wrap">
	<div class="title-wrap"><h2 class="title"><span><?php echo esc_html( $related_title ); ?></span></h2></div>
	<div class="wprt-container">
		<?php
		$query_args = array(
			'post_type' => 'project',
			'tax_query' => array(
				array(
				'taxonomy' => 'project_category',
				'field' => 'term_id',
				'terms' => $term_ids,
				'operator'=> 'IN'
				)),
			'ignore_sticky_posts' => 1,
			'post__not_in'=> array( $post->ID )
		);

		$query_args['posts_per_page'] = $related_query;
		$query = new WP_Query( $query_args );
		if ( $query->have_posts() ) : ?>
			<div class="project-related arrow-center offset20 has-arrows" data-gap="<?php echo esc_html( $related_item_gap ); ?>" data-column="<?php echo esc_html( $related_column ); ?>">
				<div class="owl-carousel owl-theme">
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<?php wp_enqueue_script( 'wprt-owlcarousel' ); ?>

					<div class="project-box style-1">
						<div class="inner">
							<?php
								if ( has_post_thumbnail() )
							    	$img_size = 'wprt-rectangle3';

		                    	$icon_html = sprintf('<div class="icon">
		                    		<a class="link" href="%1$s" title="%2$s"><i class="craft-plus3"></i></a>
		                    		<a class="zoom-popup cbp-lightbox" href="%3$s" data-title="%2$s"><i class="craft-magnifier3"></i></a>
		                    		</div>',
		                    		esc_url( get_the_permalink() ),
		                    		esc_attr( get_the_title() ),
		                    		wprt_get_image( array( 'size' => 'full', 'format' => 'src' ) )
		                    	);

		                    	$heading_html = sprintf('<h2><a href="%1$s" title="%2$s">%3$s</a></h2>', esc_url( get_the_permalink() ), esc_attr( get_the_title() ), get_the_title() );

		                    	echo '<div class="project-wrap"><div class="project-image">'. get_the_post_thumbnail( get_the_ID(), $img_size ) .'</div><div class="project-text">'. $icon_html . $heading_html .'</div></div>';
							?>
		                </div>
					</div><!-- /.project-box -->
					<?php endwhile; ?>
				</div><!-- /.owl-carousel -->
			</div><!-- /.project-related -->
		<?php
		endif; wp_reset_postdata();
		?>
	</div><!-- /.wprt-container -->
</div><!-- /.project-related-wrap -->
<?php endif; ?>

<?php get_footer(); ?>