<?php
// add customized Javascript to our theme
function theme_js(){

	wp_enqueue_script( 'javascript',
	get_template_directory_uri() . '/js/javascript.js',
	array() );
	}
	
    add_action( 'wp_footer', 'theme_js' );

// add thumbnail
    add_theme_support( 'post-thumbnails' );

// add new thumbnail size
	add_image_size( 'languages-thumbnails', 75, 75 );