<?php

if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'double_framework';

    //
    // Create options
    CSF::createOptions( $prefix, array(
        'menu_title' => 'Theme Options',
        'menu_slug'  => 'theme-options',
        'framework_title' => 'Theme Options',
        'menu_parent' => 'themes.php',
        'menu_type' => 'submenu'
    ) );

    //
    // Create a section
    CSF::createSection($prefix, array(

        'title' => 'Logo',
        'icon' => 'fas fa-icons',
        'fields' => array(
            array(
                'id' => 'logo',
                'type' => 'media',
                'title' => __('Upload Logo','double'),
            ),
            array(
                'id' => 'hello',
                'type' => 'media',
                'title' => __('Upload Logo Transparent','double'),
            ),
            array(
                'id' => 'favicon',
                'type' => 'media',
                'title' => __('Upload Favicon','double'),
            )
        )
    ));

    // header image a section
    CSF::createSection($prefix, array(

        'title' => 'Header Image',
        'icon' => 'fas fa-image',
        'fields' => array(
            array(
                'id' => 'head_image',
                'type' => 'media',
                'title' => __('Upload Header Image','double'),
            ),

        )
    ));


    // About Options
    CSF::createSection($prefix, array(
        'id' => 'about_options',
        'title' => 'Home Page Section',
        'icon' => 'fas fa-house-damage',
    ));

    // About Section Title
    CSF::createSection($prefix, array(
        'parent'=> 'about_options',
        'title' => 'HomePage Offer Section Title',
        'icon' => 'fab fa-buffer',
        'fields' => array(
            array(
                'id' => 'about_sec_title',
                'title' => __('Title','double'),
                'type' => 'text'
            ),
            array(
                'id' => 'about_sec_subtitle',
                'title' => __('Sub Title','double'),
                'type' => 'text',

            ),
            array(
                'id' => 'about-image',
                'type' => 'media',
                'title' => __('Upload Image','double'),
            )
        )
    ));

    // About Section Title
    CSF::createSection($prefix, array(

        'title' => 'HomePage Learn Section Title',
        'icon' => 'fas fa-coffee',
        'parent'=> 'about_options',
        'fields' => array(
            array(
                'id' => 'bingo_title',
                'title' => __('Title','double'),
                'type' => 'text',

            ),
            array(
                'id' => 'bingo_sub_title',
                'title' =>__('Sub Title','double'),
                'type' => 'text'
            ),
            array(
                'id' => 'about_sec_des',
                'title' => __('Description','double'),
                'type' => 'textarea'
            ),

            array(
                'id' => 'opt-upload-2',
                'type' => 'media',
                'title' => __('Upload Image','double'),
            ),

            array(
                'id'    => 'opt-link-1',
                'type'  => 'text',
                'title' => __('Learn More','double'),
            ),
        )
    ));

    // About Section Title
    CSF::createSection($prefix, array(

        'title' => 'CTA Section Title',
        'icon' => 'fas fa-location-arrow',
        'fields' => array(
            array(
                'id' => 'banner_title',
                'title' => __('Title','double'),
                'type' => 'text',

            ),
            array(
                'id' => 'banner_sub_title',
                'title' =>__('Sub Title','double'),
                'type' => 'text'
            ),

            array(
                'id' => 'opt-upload-1',
                'type' => 'media',
                'title' => __('Upload Image','double'),
            ),
            array(
                'id' => 'cta_btn_url',
                'type'=> 'text',
                'title' => __('Contact Us','double'),

            )
        )
    ));

    // Counter Options

    CSF::createSection($prefix, array(
        'id' => 'counter_options',
        'title' => 'Counter Options',
        'icon' => 'fas fa-globe',
        'fields' => array(
            array(
                'id' => 'counter_title',
                'title' => __('Title','double'),
                'type' => 'text',

            ),
            array(
                'id' => 'counter_sub_title',
                'title' =>__('Sub Title','double'),
                'type' => 'text'
            ),
            array(
                'id' => 'counter_lists',
                'title' => __('Counter Lists','double'),
                'type' => 'group',
                'button_title' => __('Add New Counter','double'),
                'fields' => array(
                    array(
                        'id' => 'counter_title',
                        'type' => 'text',
                        'title' => __('Counter Title','double'),
                    ),
                    array(
                        'id' => 'counter_number',
                        'type' => 'number',
                        'title' => __('Counter Number','double'),
                    ),
                    array(
                        'id' => 'counter_icon',
                        'type' => 'icon',
                        'title' => __('Counter Icon','double'),
                    ),
                )
            ),


        )
    ));


    // Create a section
    CSF::createSection($prefix, array(

        'title' => __('Blog Section Title','double'),
        'icon' => 'fas fa-blog',
        'fields' => array(
            array(
                'id' => 'blog_title',
                'title' => __('Title','double'),
                'type' => 'text',

            ),
            array(
                'id' => 'blog_sub_title',
                'title' =>__('Sub Title','double'),
                'type' => 'text'
            ),

        )
    ));

    // About Options
    CSF::createSection($prefix, array(
        'id' => 'about_us_options',
        'title' => __('About Us Section','double'),
        'icon' => 'fas fa-address-card',
    ));

    // Create a section
    CSF::createSection($prefix, array(
        'parent' => 'about_us_options',
        'title' => __('About Design Section Title','double'),
        'icon' => 'fas fa-directions',
        'fields' => array(
            array(
                'id' => 'about_first_title',
                'title' => __('Title','double'),
                'type' => 'text',

            ),
            array(
                'id' => 'about_first_sec_des',
                'title' => __('Description','double'),
                'type' => 'textarea',
            ),
            array(
                'id' => 'opt-about-1',
                'type' => 'media',
                'title' => __('Upload Image','double'),
            )

        )
    ));


    // Create a section
    CSF::createSection($prefix, array(
        'parent' => 'about_us_options',
        'title' => __('About Mission Section Title','double'),
        'icon' => 'fas fa-directions',
        'fields' => array(
            array(
                'id' => 'about_second_title',
                'title' => __('Title','double'),
                'type' => 'text',

            ),
            array(
                'id' => 'about_second_sec_des',
                'title' => __('Description','double'),
                'type' => 'textarea',
            ),
            array(
                'id' => 'opt-about-3',
                'type' => 'media',
                'title' => __('Upload Image','double'),
            )

        )
    ));


    // Create a section
    CSF::createSection($prefix, array(
        'parent' => 'about_us_options',
        'title' => __('About Vision Section Title','double'),
        'icon' => 'fas fa-directions',
        'fields' => array(
            array(
                'id' => 'about_third_title',
                'title' => __('Title','double'),
                'type' => 'text',

            ),
            array(
                'id' => 'about_third_sec_des',
                'title' => __('Description','double'),
                'type' => 'textarea',
            ),
            array(
                'id' => 'opt-about-4',
                'type' => 'media',
                'title' => __('Upload Image','double'),
            )

        )
    ));

    // Create a section
    CSF::createSection($prefix, array(

        'title' => __('Gallery Section Title','double'),
        'icon' => 'fab fa-envira',
        'fields' => array(
            array(
                'id' => 'gallery_title',
                'title' => __('Title','double'),
                'type' => 'text',

            ),
            array(
                'id' => 'gallery_sub_title',
                'title' => __('Sub Title','double'),
                'type' => 'text'
            ),

        )
    ));


    // Create a section
    CSF::createSection($prefix, array(

        'title' => __('Team Section Title','double'),
        'icon' => 'fab fa-teamspeak',
        'fields' => array(
            array(
                'id' => 'team_title',
                'title' => __('Title','double'),
                'type' => 'text',

            ),
            array(
                'id' => 'team_sub_title',
                'title' => __('Sub Title','double'),
                'type' => 'text'
            ),

        )
    ));

    // Create a section
    CSF::createSection($prefix, array(

        'title' => __('Service Section Title','double'),
        'icon' => 'fab fa-servicestack',
        'fields' => array(
            array(
                'id' => 'service_title',
                'title' => __('Title','double'),
                'type' => 'text',

            ),
            array(
                'id' => 'service_sub_title',
                'title' => __('Sub Title','double'),
                'type' => 'text'
            ),

        )
    ));

    // Counter Options

    CSF::createSection($prefix, array(
        'id' => 'slider_options',
        'title' => __('ProgressBar Options','double'),
        'icon' => 'fas fa-sliders-h',
        'fields' => array(
            array(
                'id' => 'slider_title',
                'title' => __('Title','double'),
                'type' => 'text',

            ),
            array(
                'id' => 'slider_sub_title',
                'title' => __('Sub Title','double'),
                'type' => 'text'
            ),
            array(
                'id' => 'slider_lists',
                'title' => __('ProgressBar Lists','double'),
                'type' => 'group',
                'button_title' =>  __('Add New ProgressBar','double'),
                'fields' => array(
                    array(
                        'id' => 'slide_title',
                        'type' => 'text',
                        'title' => __('ProgressBar Title','double'),
                    ),
                    array(
                        'id' => 'slider_number',
                        'type' => 'slider',
                        'title' => __('ProgressBar Number','double'),

                    ),

                )
            ),


        )
    ));

    // Create a section
    CSF::createSection($prefix, array(

        'title' => __('Skill Section Title','double'),
        'icon' => 'fas fa-blender-phone',
        'fields' => array(
            array(
                'id' => 'skill_title',
                'title' => __('Title','double'),
                'type' => 'text',

            ),
            array(
                'id' => 'skill_sub_title',
                'title' => __('Sub Title','double'),
                'type' => 'text'
            ),

        )
    ));

    // Create a section
    CSF::createSection($prefix, array(

        'title' => __('Portfolio Section Title','double'),
        'icon' => 'fas fa-photo-video',
        'fields' => array(
            array(
                'id' => 'all_title',
                'title' => __('Title','double'),
                'type' => 'text',

            ),
            array(
                'id' => 'all_sub_title',
                'title' => __('Sub Title','double'),
                'type' => 'text'
            ),

        )
    ));




    // Create a section
    CSF::createSection($prefix, array(

        'title' => __('Team Info Section Title','double'),
        'icon' => 'fas fa-info-circle',
        'fields' => array(
            array(
                'id' => 'all_about_title',
                'title' => __('Title','double'),
                'type' => 'text',

            ),
            array(
                'id' => 'all_about_sub_title',
                'title' => __('Sub Title','double'),
                'type' => 'text'
            ),
            array(
                'id' => 'abs_con',
                'type' => 'media',
                'title' => __('Upload Image','double'),
            ),
            array(
                'id' => 'about_team_sec_des',
                'title' => __('Description','double'),
                'type' => 'textarea'
            )

        )
    ));

    // About Options
    CSF::createSection($prefix, array(
        'id' => 'contact_options',
        'title' => __('Contact Page Section','double'),
        'icon' => 'fas fa-id-card',
    ));

    // Create a section
    CSF::createSection($prefix, array(
        'parent' => 'contact_options',
        'title' => __('Contact Section Title','double'),
        'icon' => 'fas fa-file-contract',
        'fields' => array(
            array(
                'id' => 'con_title',
                'title' => __('Title','double'),
                'type' => 'text',

            ),
            array(
                'id' => 'con_sub_title',
                'title' => __('Sub Title','double'),
                'type' => 'text'
            ),

        )
    ));

    // Create a section
    CSF::createSection($prefix, array(
        'parent' => 'contact_options',
        'title' => __('Contact Details','double'),
        'icon' => 'fas fa-file-signature',
        'fields' => array(
            array(
                'id' => 'con_dec_title',
                'title' => __('Title','double'),
                'type' => 'text',

            ),
            array(
                'id' => 'con_dec_sub_title',
                'title' => __('Sub Title','double'),
                'type' => 'text'
            ),

        )
    ));

    // Contact Options
    CSF::createSection($prefix, array(
        'parent' => 'contact_options',
        'title' => __('Contact Options','double'),
        'icon' => 'fas fa-id-badge',
        'fields' => array(
            array(
                'id' => 'contact_info',
                'title' => __('Contact Info','double'),
                'type' => 'group',
                'button_title' => __('Add New Contact Items','double'),
                'fields' => array(
                    array(
                        'id' => 'contact_info_icon',
                        'type' => 'icon',
                        'title' => __('Contact Info Icon','double'),
                    ),
                    array(
                        'id' => 'contact_info_des',
                        'type' => 'text',
                        'title' => __('Contact Info Description','double'),
                    )
                )
            ),


        )
    ));

    // Social Options
    CSF::createSection($prefix, array(
        'title' => __('Social Icons','double'),
        'icon' => 'fas fa-share',
        'fields' => array(
            array(
                'id' => 'social_icons',
                'title'=> __('Social Icons','double'),
                'type' => 'group',
                'button_title' => __('Add New Social Box','double'),
                'fields' => array(
                    array(
                        'id' => 'social_link',
                        'type' => 'text',
                        'title' => __('Social Link','double'),
                    ),
                    array(
                        'id' => 'social_icon',
                        'type' => 'icon',
                        'title' => __('Social Icon','double'),
                    )
                )
            )
        )
    ));

}