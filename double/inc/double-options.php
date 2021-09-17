<?php

if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'double_framework';

    //
    // Create options
    CSF::createOptions( $prefix, array(
        'menu_title' => 'Double Options',
        'menu_slug'  => 'double-options',
        'framework_title' => 'Double Options',
        'menu_parent' => 'themes.php',
        'menu_type' => 'submenu'
    ) );

    //
    // Create a section
    CSF::createSection($prefix, array(

        'title' => 'Logo',
        'icon' => 'fas fa-arrow-right',
        'fields' => array(
            array(
                'id' => 'logo',
                'type' => 'media',
                'title' => 'Upload Logo',
            ),
            array(
                'id' => 'hello',
                'type' => 'media',
                'title' => 'Upload Logo Transparent',
            ),
            array(
                'id' => 'favicon',
                'type' => 'media',
                'title' => 'Upload Favicon',
            )
        )
    ));





}