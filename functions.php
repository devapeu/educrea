<?php 

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

function token_scripts() {
	wp_enqueue_style('style.css', get_stylesheet_uri());
	wp_enqueue_style('fancybox.css', get_template_directory_uri().'/css/fancybox.css');
	wp_enqueue_script('fancybox.js', get_template_directory_uri()."/js/fancybox.js", array(),'1.0.0', true);
	wp_enqueue_script('scripts.js', get_template_directory_uri()."/js/scripts.js", array(),'1.0.0', true);
}

add_action( "wp_enqueue_scripts", "token_scripts");

?>