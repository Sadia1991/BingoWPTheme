<?php
/**
 * Created by PhpStorm.
 * User: Nisa
 * Date: 9/26/2021
 * Time: 4:32 PM
 */
//silence is golden<?php
/**
 * Plugin Name:       Double Custom Post Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Sadia Islam Nisa
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       double
 * Domain Path:       /languages
 */

function slider_custom_posts(){

    //slide custom post

    register_post_type( 'slides',
        // CPT Options
        array(
            'labels' => array(
                'name' => _x( 'Slider','double' ),
                'singular_name' => _x( 'Slider','double' ),
                'add_new' => __('Add New Slider','double'),
                'edit_item' => __('Edit Slider','double'),
                'featured_image' => __('Slider Image','double'),
                'search_items' => __('Search Slider','double'),
                'add_new_item' => __( 'Add New Slider', 'double' ),
            ),
            'public' => true,
            'supports' => array('title','editor','thumbnail','custom-fields'),
            'menu_icon' => 'dashicons-format-aside',

        )
    );

    //offer custom post
    register_post_type( 'services',
        // CPT Options
        array(
            'labels' => array(
                'name' => _x( 'Service', 'double' ),
                'singular_name' => _x( 'Service', 'double' ),
                'add_new' => __('Add New Service','double'),
                'edit_item' => __('Edit Service','double'),
                'search_items' => __('Search Service','double'),
                'add_new_item' => __( 'Add New Service', 'double' ),
            ),
            'public' => true,
            'supports' => array('title','editor','custom-fields'),
            'menu_icon' => 'dashicons-media-document',

        )
    );

    //offer custom post
    register_post_type( 'offers',
        // CPT Options
        array(
            'labels' => array(
                'name' => _x( 'Offers', 'double' ),
                'singular_name' => _x( 'Offers', 'double' ),
                'add_new' => __('Add New Offer','double'),
                'edit_item' => __('Edit Offer','double'),
                'search_items' => __('Search Offer','double'),
                'add_new_item' => __( 'Add New Offer', 'double' ),
            ),
            'public' => true,
            'supports' => array('title','editor','custom-fields'),
            'menu_icon' => 'dashicons-media-default',

        )
    );


    //testimonial custom post
    register_post_type( 'testimonial',
        // CPT Options
        array(
            'labels' => array(
                'name' => _x( 'Testimonial','double' ),
                'singular_name' => _x( 'Testimonial', 'double'),
                'add_new' => __('Add New Testimonial','double'),
                'edit_item' => __('Edit Testimonial','double'),
                'search_items' => __('Search Testimonial','double'),
                'add_new_item' => __( 'Add New Testimonial', 'double' ),
                'featured_image' => __('Testimonial Image','double'),
            ),
            'public' => true,
            'supports' => array('thumbnail','custom-fields','page-attributes'),
            'menu_icon' => 'dashicons-testimonial',
        )
    );

    //team custom post

    register_post_type( 'team',
        // CPT Options
        array(
            'labels' => array(
                'name' => _x( 'Team','double' ),
                'singular_name' => _x( 'Team','double'),
                'add_new' => __('Add New Team','double'),
                'edit_item' => __('Edit Team','double'),
                'search_items' => __('Search Team','double'),
                'add_new_item' => __( 'Add New Team', 'double' ),
                'featured_image' => __('Team Image','double'),
            ),
            'public' => true,
            'supports' => array('title','editor','thumbnail','custom-fields','page-attributes'),
            'menu_icon' => 'dashicons-admin-users',

        )
    );

    //gallery custom post

    register_post_type( 'gallery',
        // CPT Options
        array(
            'labels' => array(
                'name' => _x( 'Gallery','double' ),
                'singular_name' => _x( 'Gallery','double' ),
                'add_new' => __('Add New Image','double'),
                'edit_item' => __('Edit Image','double'),
                'search_items' => __('Search Image','double'),
                'add_new_item' => __( 'Add New Image', 'double' ),
                'featured_image' => __('Gallery Image','double'),
            ),
            'public' => true,
            'supports' => array('title','thumbnail','custom-fields','page-attributes'),
            'menu_icon' => 'dashicons-format-gallery',
        )
    );

    //logo custom post

    register_post_type( 'logo',
        // CPT Options
        array(
            'labels' => array(
                'name' => _x( 'Logo', 'double' ),
                'singular_name' => _x( 'Logo', 'double' ),
                'add_new' => __('Add New Logo','double'),
                'edit_item' => __('Edit Logo','double'),
                'search_items' => __('Search Logo','double'),
                'add_new_item' => __( 'Add New Logo', 'double' ),
                'featured_image' => __('Logo Image','double'),
            ),
            'public' => true,
            'supports' => array('title','thumbnail','custom-fields','page-attributes'),
            'menu_icon' => 'dashicons-format-image',

        )
    );


    //portfolio custom post

    register_post_type( 'portfolio',
        // CPT Options
        array(
            'labels' => array(
                'name' => _x( 'Portfolio','double' ),
                'singular_name' => _x( 'Portfolio','double' ),
                'add_new' => __('Add New Portfolio','double'),
                'edit_item' => __('Edit Portfolio','double'),
                'search_items' => __('Search Portfolio','double'),
                'add_new_item' => __( 'Add New Portfolio', 'double' ),
                'featured_image' => __('Portfolio Image','double'),
            ),
            'public' => true,
            'supports' => array('title','editor','thumbnail','custom-fields','page-attributes'),
            'menu_icon' => 'dashicons-portfolio',

        )
    );

    //portfolio taxonomy

    register_taxonomy('portfolio-cat','portfolio', array(
        'labels' => array(
            'name' => __('Categories','double'),
            'singular_name' => __('Category','double'),
        ),
        'hierarchical' => true,
        'show_admin_column' => true
    ));

}

add_action('init','slider_custom_posts');