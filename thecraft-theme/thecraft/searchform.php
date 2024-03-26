<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-form">
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder', 'thecraft' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'thecraft' ); ?>" />
	<button type="submit" class="search-submit" title="<?php esc_attr_e('Search', 'thecraft'); ?>"><?php esc_html_e('SEARCH', 'thecraft'); ?></button>
</form>
