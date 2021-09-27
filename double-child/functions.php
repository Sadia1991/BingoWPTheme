<?php
/**
 * Created by PhpStorm.
 * User: Nisa
 * Date: 9/27/2021
 * Time: 10:58 PM
 */

function enqueue_parent_styles(){
    wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
}

add_action('wp_enqueue_scripts','enqueue_parent_styles');