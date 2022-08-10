<?php 

add_action( 'wp_enqueue_scripts', function() {

    // <!-- <link rel="stylesheet" href="css/normalize.css" />
    // <link rel="stylesheet" href="css/style.css" />
    // <link rel="stylesheet" href="css/slick.css" /> -->
    
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );


    // <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    // <script src="js/slick.min.js"></script>
    // <script src="js/main.js"></script>

    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');

	wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'slick ', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true );
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?>