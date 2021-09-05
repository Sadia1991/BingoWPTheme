<?php

  /*
   * double theme setup
   */

if (! function_exists('double_setup')){


    function double_setup(){

      /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */

        add_theme_support( 'title-tag' );


    /*
     * Add support for core custom logo.
     *
    */
        $logo_width  = 300;
        $logo_height = 100;

        add_theme_support(
            'custom-logo',
            array(
                'height'               => $logo_height,
                'width'                => $logo_width,
                'flex-width'           => true,
                'flex-height'          => true,
                'unlink-homepage-logo' => true,
            )
        );


        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus(
            array(
                'menu-1' => __( 'Primary', 'double' ),

            )
        );

}
}

add_action( 'after_setup_theme', 'double_setup' );

function double_theme_custom_style(){
//theme css file
wp_enqueue_style('themefisher-font', get_template_directory_uri().'/plugins/themefisher-font/style.css' );
wp_enqueue_style('bootstrap-min', get_template_directory_uri().'/plugins/bootstrap/css/bootstrap.min.css' );
wp_enqueue_style('Lightbox-min', get_template_directory_uri().'/plugins/lightbox2/dist/css/lightbox.min.css' );
wp_enqueue_style('animation-css', get_template_directory_uri().'/plugins/animate/animate.css' );
wp_enqueue_style('slick-css', get_template_directory_uri().'/plugins/slick/slick.css' );
wp_enqueue_style('slick-css', get_template_directory_uri().'/plugins/slick/slick.css' );
wp_enqueue_style('style', get_template_directory_uri().'/css/style.css' );
wp_enqueue_style('style-css', get_stylesheet_uri() );

//theme js file

wp_enqueue_script( 'jquery', get_template_directory_uri().'/plugins/jquery/jquery.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'googleapis', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ' );
wp_enqueue_script( 'gmap', get_template_directory_uri().'/plugins/google-map/gmap.js', array(), '1.0.0', true );
wp_enqueue_script( 'form-validation', get_template_directory_uri().'/plugins/form-validation/jquery.form.js', array(), '1.0.0', true );
wp_enqueue_script( 'form-valid', get_template_directory_uri().'/plugins/form-validation/jquery.validate.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/plugins/bootstrap/js/bootstrap.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'parallax', get_template_directory_uri().'/plugins/parallax/jquery.parallax-1.1.3.js', array(), '1.0.0', true );
wp_enqueue_script( 'lightbox', get_template_directory_uri().'/plugins/lightbox2/dist/js/lightbox.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'slick', get_template_directory_uri().'/plugins/slick/slick.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'filterizr', get_template_directory_uri().'/plugins/filterizr/jquery.filterizr.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'smooth-scroll', get_template_directory_uri().'/plugins/smooth-scroll/smooth-scroll.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'script', get_template_directory_uri().'/js/script.js', array(), '1.0.0', true );


}

add_action( 'wp_enqueue_scripts', 'double_theme_custom_style' );



/**
* Preloader
* Hook into 'wp_body_open' to ensure compatibility with
* header/footer builder plugins
*/

function double_preloader() {


?>

<div id="preloader">
  <div class='preloader'>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>

    <?php
}
add_action('wp_body_open', 'double_preloader');


require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


?>



   
 
    
    
  
 

    