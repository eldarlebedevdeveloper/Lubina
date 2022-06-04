<?php 

	function landing_scripts() {
	  // wp_enqueue_style('style-css', get_stylesheet_uri() );
	  // wp_enqueue_style('lubina', get_template_directory_uri() . '/libs/owlCarousel/owl.carousel.min.css'); 
	  // wp_enqueue_style('lubina', get_template_directory_uri() . '/css/fonts.css'); 
	  // wp_enqueue_style('lubina', get_template_directory_uri() . '/css/components/normalize.css'); 
	  // wp_enqueue_style('lubina', get_template_directory_uri() . '/css/components/repeatElements.css'); 
	  // wp_enqueue_style('lubina', get_template_directory_uri() . '/css/components/header.css'); 
	  // wp_enqueue_style('lubina', get_template_directory_uri() . '/css/components/ourTeam.css'); 
	  // wp_enqueue_style('lubina', get_template_directory_uri() . '/css/components/footer.css'); 
	  // wp_enqueue_style('lubina', get_template_directory_uri() . '/css/home.css'); 
	  // wp_enqueue_style('lubina', get_template_directory_uri() . '/css/popUp.css'); 



	    // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/libs/jquery/jquery-3.5.1.min.js'); 
	    // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/libs/jquery/jquery-ui.min.js'); 
	    // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/libs/jquery-validation/jquery.validate.min.js'); 
	    // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/libs/owlCarousel/owl.carousel.min.js'); 
	    // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/script.js'); 

	}

	// add_action( 'wp_enqueue_scripts', 'landing_scripts' );


	add_filter( 'wpcf7_autop_or_not', '__return_false' );


?>