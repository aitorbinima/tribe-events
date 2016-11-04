<?php

/**
* Custom Post Format
**/

add_action('init', 'my_theme_slug_add_post_formats_to_page', 11);

function my_theme_slug_add_post_formats_to_page(){
	// Orden en que saldrán los post-format
	add_theme_support( 'post-formats', array( 'gallery', 'video' ) );
	add_post_type_support( 'tribe_events', 'post-formats' );
}


/* Tribe custom functions */

function tribe_the_notices_custom( $echo = true ) {
	$notices = Tribe__Notices::get();

	//$html        = ! empty( $notices ) ? '<div class="tribe-events-notices"><ul><li>' . implode( '</li><li>', $notices ) . '</li></ul></div>' : '';
	$html        = ! empty( $notices ) ? '<div class="tribe-events-notices alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <ul><li>' . implode( '</li><li>', $notices ) . '</li></ul></div>' : '';
	

	/**
	 * Deprecated the tribe_events_the_notices filter in 4.0 in favor of tribe_the_notices. Remove in 5.0
	 */
	$the_notices = apply_filters( 'tribe_events_the_notices', $html, $notices );

	/**
	 * filters the notices HTML
	 */
	$the_notices = apply_filters( 'tribe_the_notices', $html, $notices );
	if ( $echo ) {
		echo $the_notices;
	} else {
		return $the_notices;
	}
}

?>