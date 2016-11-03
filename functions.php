<?php

/**
* Custom Post Formrmat
**/

add_action('init', 'my_theme_slug_add_post_formats_to_page', 11);

function my_theme_slug_add_post_formats_to_page(){
	// Orden en que saldrán los post-format
	add_theme_support( 'post-formats', array( 'gallery', 'video' ) );
	add_post_type_support( 'tribe_events', 'post-formats' );
}

?>