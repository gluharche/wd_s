<?php
/**
 * The template for displaying the search form.
 *
 * @package _s
 */

?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="search-field"><span class="screen-reader-text"><?php esc_html_e( 'To search this site, enter a search term', '_s' ); ?></span></label>
	<input class="search-field" id="search-field" type="text" name="s" value="<?php echo get_search_query(); ?>" aria-required="false" autocomplete="off" placeholder="<?php echo esc_attr_e( 'Search', '_s' ); ?>" />
	<input type="submit" id="search-submit" class="button button-search" value="<?php esc_attr_e( 'Submit', '_s' ); ?>" />
</form>
