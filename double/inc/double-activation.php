<?php
/**
 * Created by PhpStorm.
 * User: Nisa
 * Date: 9/22/2021
 * Time: 7:41 PM
 */

require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

function double_activation(){

    $plugins = array(
        array(
            'name' => __('Advanced Custom Fields', 'double'),
            'slug' => 'advanced-custom-fields',
            'required' => true
        ),
        array(
            'name' => __('Codestar Framework', 'double'),
            'slug' => 'codestar-framework',
            'source' => 'https://github.com/Codestar/codestar-framework/archive/refs/heads/master.zip',
            'required' => true
        ),
        array(
            'name' => __('Contact Form 7', 'double'),
            'slug' => 'contact-form-7',
            'required' => true
        ),
        array(
            'name' => __('One Click Demo Import', 'double'),
            'slug' => 'one-click-demo-import',
            'required' => true
        ),
        array(
            'name' => __('Widget Importer & Exporter', 'double'),
            'slug' => 'widget-importer-&-exporter',
            'required' => true
        )
    );

    $config = array(
        'id' => 'double_plugins_activation',
        'menu' => 'double-plugins-activation',
        'parent_slug'  => 'themes.php',
        'has_notices'  => true

    );

    tgmpa($plugins, $config);

}
add_action('tgmpa_register', 'double_activation');