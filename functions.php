<?php 

function asabest_scripts() {
	// up / on bu wp_head();
	wp_enqueue_style( 'asabest', get_stylesheet_uri() );
	wp_enqueue_style('bootstrap.min',  get_template_directory_uri() . '/assets/css/bootstrap.min.css');

	// down / on by wp_footer();
  	wp_enqueue_script('popper.min', get_template_directory_uri() . '/assets/js/popper.min.js', [], null, true);
  	wp_enqueue_style('bootstrap.min',  get_template_directory_uri() . '/assets/js/bootstrap.min.js', [], null, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	 if (is_front_page() && is_home()) {
		wp_dequeue_style( 'wp-block-library' );
	 }

} add_action( 'wp_enqueue_scripts', 'asabest_scripts' );
