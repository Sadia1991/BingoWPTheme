<?php
/*
   * double theme setup
   */






get_template_part('/inc/double-options');

if (! function_exists('double_setup')){


    function double_setup(){

      /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */

        add_theme_support( 'title-tag' );

        add_theme_support( 'post-thumbnails', array('slides', 'testimonial','post','team', 'gallery', 'logo','portfolio') );

        load_theme_textdomain( 'double', get_template_directory_uri() . '/languages' );

        add_theme_support( 'automatic-feed-links' );

        add_theme_support( "wp-block-styles" );

        add_theme_support( "responsive-embeds" );


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

        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'script',
                'style',
                'navigation-widgets',
            )
        );

        $args = array();

        add_theme_support( "html5", $args );
        add_theme_support( "custom-logo", $args );
        add_theme_support( "custom-header", $args );
        add_theme_support( "custom-background", $args );
        add_theme_support( "align-wide" );

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
wp_enqueue_style('all-css', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css' );

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


require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
require_once get_template_directory() . '/inc/double-activation.php';
require_once get_template_directory() . '/inc/double-demo-content.php';


function double_widget_init(){

    register_sidebar(
        array(
            'name' 		=> 'Main Sidebar',
            'id' 		=> 'mainbar-1',
            'description'	=> 'Add one widget, as it will be the 1st widget in the footer.',
            'before_widget' => '<div class="widget-categories-list">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>'
        )
    );


    register_sidebar(
        array(
            'name' 		=> 'Footer 1',
            'id' 		=> 'sidebar-1',
            'description'	=> 'Add one widget, as it will be the 1st widget in the footer.',
            'before_widget' => '<div class="bg-one">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>'
        )
    );

    register_sidebar(
        array(
            'name' 		=> 'Footer 2',
            'id' 		=> 'sidebar-2',
            'description'	=> 'Add one widget, as it will be the 2nd widget in the footer.',
            'before_widget' => '<div class="bg-one">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>'
        )
    );

    register_sidebar(
        array(
            'name' 		=> 'Footer 3',
            'id' 		=> 'sidebar-3',
            'description'	=> 'Add one widget, as it will be the 3rd widget in the footer.',
            'before_widget' => '<div class="bg-one">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>'
        )
    );

    register_sidebar(
        array(
            'name' 		=> 'Footer 4',
            'id' 		=> 'sidebar-4',
            'description'	=> 'Add one widget, as it will be the 4th widget in the footer.',
            'before_widget' => '<div class="bg-one">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>'
        )
    );



}


add_action( 'widgets_init', 'double_widget_init' );






function double_comment_field($field){

    $comment = $field['comment'];
    $author = $field['author'];
    $email = $field['email'];
    $url = $field['url'];
    $cookies = $field['cookies'];


    unset($field['comment']);
    unset($field['author']);
    unset($field['email']);
    unset($field['url']);
    unset($field['cookies']);


    $field['author'] = $author;
    $field['email'] = $email;
    $field['url'] = $url;
    $field['comment'] = $comment;
    $field['cookies'] = $cookies;

    return $field;


}

add_filter( 'comment_form_fields', 'double_comment_field' );

function double_queue_js(){
    if ( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') )
        wp_enqueue_script( 'comment-reply' );
}
add_action('wp_print_scripts', 'double_queue_js');


function double_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'double_theme_add_editor_styles' );

if ( function_exists( 'register_block_style' ) ) {
    register_block_style(
        'core/quote',
        array(
            'name'         => 'blue-quote',
            'label'        => __( 'Blue Quote', 'double' ),
            'is_default'   => true,
            'inline_style' => '.wp-block-quote.is-style-blue-quote { color: blue; }',
        )
    );
}

function double_register_my_patterns() {
    register_block_pattern(
        'wpdocs-my-plugin/my-awesome-pattern',
        array(
            'title'       => __( 'Two buttons', 'double' ),
            'description' => _x( 'Two horizontal buttons, the left button is filled in, and the right button is outlined.', 'Block pattern description', 'double' ),
            'content'     => "<!-- wp:buttons {\"align\":\"center\"} -->\n<div class=\"wp-block-buttons aligncenter\"><!-- wp:button {\"backgroundColor\":\"very-dark-gray\",\"borderRadius\":0} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-background has-very-dark-gray-background-color no-border-radius\">" . esc_html__( 'Button One', 'double' ) . "</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button {\"textColor\":\"very-dark-gray\",\"borderRadius\":0,\"className\":\"is-style-outline\"} -->\n<div class=\"wp-block-button is-style-outline\"><a class=\"wp-block-button__link has-text-color has-very-dark-gray-color no-border-radius\">" . esc_html__( 'Button Two', 'double' ) . "</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->",
        )
    );
}

add_action( 'init', 'double_register_my_patterns' );






?>



   
 
    
    
  
 

    
