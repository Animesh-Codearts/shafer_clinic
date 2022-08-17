<?php



/**

 * Enqueue scripts and styles.

 */



function shaferclinic_scripts() {

	// Theme stylesheet.

	wp_enqueue_style( 'shaferclinic-style', get_stylesheet_uri() );

	wp_enqueue_style( 'shaferclinic-bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '1.0' );

	wp_enqueue_style( 'shaferclinic-owl-css', get_theme_file_uri('/assets/css/owl.carousel.min.css'), array(), '1.0' );

	wp_enqueue_style( 'shaferclinic-custom-core', get_theme_file_uri('/assets/css/custom.css'), array(), '1.0' );

	wp_enqueue_style( 'shaferclinic-responsive-css', get_theme_file_uri('/assets/css/responsive.css'), array(), '1.0' );

	wp_enqueue_style( 'shaferclinic-all-min-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', array(), '1.0' );













    wp_enqueue_script( 'jquery-js', get_theme_file_uri('/assets/js/jquery-min.js'), array(), '1.0', true );

    wp_enqueue_script( 'bootstrap-bundle-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), '1.0', true );

    wp_enqueue_script( 'carousel-js', get_theme_file_uri('/assets/js/owl.carousel.min.js'), array(), '1.0', true );

    wp_enqueue_script( 'custom-js', get_theme_file_uri('/assets/js/custom.js'), array(), '1.0', true );






}

add_action( 'wp_enqueue_scripts', 'shaferclinic_scripts' );

