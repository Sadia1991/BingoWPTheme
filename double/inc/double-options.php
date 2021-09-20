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

    // header image a section
    CSF::createSection($prefix, array(

        'title' => 'Header Image',
        'icon' => 'fas fa-arrow-right',
        'fields' => array(
            array(
                'id' => 'head_image',
                'type' => 'media',
                'title' => 'Upload Logo',
            ),

        )
    ));


    // About Options
    CSF::createSection($prefix, array(
        'id' => 'about_options',
        'title' => 'About Section',
        'icon' => 'fas fa-arrow-right',
    ));

    // About Section Title
    CSF::createSection($prefix, array(
        'parent'=> 'about_options',
        'title' => 'About Section Title',
        'fields' => array(
            array(
                'id' => 'about_sec_title',
                'title' => 'Title',
                'type' => 'text'
            ),
            array(
                'id' => 'about_sec_subtitle',
                'title' => 'Sub Title',
                'type' => 'text',

            ),
            array(
                'id' => 'about-image',
                'type' => 'media',
                'title' => 'Upload Image',
            )
        )
    ));

    // About Section Title
    CSF::createSection($prefix, array(

        'title' => 'Agency Section Title',
        'parent'=> 'about_options',
        'fields' => array(
            array(
                'id' => 'bingo_title',
                'title' => 'Title',
                'type' => 'text',

            ),
            array(
                'id' => 'bingo_sub_title',
                'title' =>'Sub Title',
                'type' => 'text'
            ),
            array(
                'id' => 'about_sec_des',
                'title' => 'Description',
                'type' => 'textarea'
            ),

            array(
                'id' => 'opt-upload-2',
                'type' => 'media',
                'title' => 'Upload Image',
            )
        )
    ));

    // About Section Title
    CSF::createSection($prefix, array(

        'title' => 'Banner Section Title',
        'icon' => 'fas fa-arrow-right',
        'fields' => array(
            array(
                'id' => 'banner_title',
                'title' => 'Title',
                'type' => 'text',

            ),
            array(
                'id' => 'banner_sub_title',
                'title' =>'Sub Title',
                'type' => 'text'
            ),

            array(
                'id' => 'opt-upload-1',
                'type' => 'media',
                'title' => 'Upload Image',
            ),
            array(
                'id' => 'cta_btn_url',
                'type'=> 'text',
                'title' => 'Contact Us',

            )
        )
    ));

    // Counter Options

    CSF::createSection($prefix, array(
        'id' => 'counter_options',
        'title' => 'Counter Options',
        'icon' => 'fas fa-rocket',
        'fields' => array(
            array(
                'id' => 'counter_title',
                'title' => 'Title',
                'type' => 'text',

            ),
            array(
                'id' => 'counter_sub_title',
                'title' =>'Sub Title',
                'type' => 'text'
            ),
            array(
                'id' => 'counter_lists',
                'title' => 'Counter Lists',
                'type' => 'group',
                'button_title' => 'Add New Counter',
                'fields' => array(
                    array(
                        'id' => 'counter_title',
                        'type' => 'text',
                        'title' => 'Counter Title'
                    ),
                    array(
                        'id' => 'counter_number',
                        'type' => 'number',
                        'title' => 'Counter Number'
                    ),
                    array(
                        'id' => 'counter_icon',
                        'type' => 'icon',
                        'title' => 'Counter Icon'
                    ),
                )
            ),


        )
    ));


    // Create a section
    CSF::createSection($prefix, array(

        'title' => 'Blog Section Title',
        'icon' => 'fas fa-arrow-right',
        'fields' => array(
            array(
                'id' => 'blog_title',
                'title' => 'Title',
                'type' => 'text',

            ),
            array(
                'id' => 'blog_sub_title',
                'title' =>'Sub Title',
                'type' => 'text'
            ),

        )
    ));

    // About Options
    CSF::createSection($prefix, array(
        'id' => 'about_us_options',
        'title' => 'About Us Section',
        'icon' => 'fas fa-arrow-right',
    ));

    // Create a section
    CSF::createSection($prefix, array(
        'parent' => 'about_us_options',
        'title' => 'About First Section Title',
        'icon' => 'fas fa-arrow-right',
        'fields' => array(
            array(
                'id' => 'about_first_title',
                'title' => 'Title',
                'type' => 'text',

            ),
            array(
                'id' => 'about_first_sec_des',
                'title' => 'Description',
                'type' => 'textarea',
            ),
            array(
                'id' => 'opt-about-1',
                'type' => 'media',
                'title' => 'Upload Image',
            )

        )
    ));


    // Create a section
    CSF::createSection($prefix, array(
        'parent' => 'about_us_options',
        'title' => 'About Second Section Title',
        'icon' => 'fas fa-arrow-right',
        'fields' => array(
            array(
                'id' => 'about_second_title',
                'title' => 'Title',
                'type' => 'text',

            ),
            array(
                'id' => 'about_second_sec_des',
                'title' => 'Description',
                'type' => 'textarea',
            ),
            array(
                'id' => 'opt-about-3',
                'type' => 'media',
                'title' => 'Upload Image',
            )

        )
    ));


    // Create a section
    CSF::createSection($prefix, array(
        'parent' => 'about_us_options',
        'title' => 'About Third Section Title',
        'icon' => 'fas fa-arrow-right',
        'fields' => array(
            array(
                'id' => 'about_third_title',
                'title' => 'Title',
                'type' => 'text',

            ),
            array(
                'id' => 'about_third_sec_des',
                'title' => 'Description',
                'type' => 'textarea',
            ),
            array(
                'id' => 'opt-about-4',
                'type' => 'media',
                'title' => 'Upload Image',
            )

        )
    ));

    // Create a section
    CSF::createSection($prefix, array(

        'title' => 'Gallery Section Title',
        'icon' => 'fas fa-arrow-right',
        'fields' => array(
            array(
                'id' => 'gallery_title',
                'title' => 'Title',
                'type' => 'text',

            ),
            array(
                'id' => 'gallery_sub_title',
                'title' =>'Sub Title',
                'type' => 'text'
            ),

        )
    ));


    // Create a section
    CSF::createSection($prefix, array(

        'title' => 'Team Section Title',
        'icon' => 'fas fa-arrow-right',
        'fields' => array(
            array(
                'id' => 'team_title',
                'title' => 'Title',
                'type' => 'text',

            ),
            array(
                'id' => 'team_sub_title',
                'title' =>'Sub Title',
                'type' => 'text'
            ),

        )
    ));

    // Create a section
    CSF::createSection($prefix, array(

        'title' => 'Service Section Title',
        'icon' => 'fas fa-arrow-right',
        'fields' => array(
            array(
                'id' => 'service_title',
                'title' => 'Title',
                'type' => 'text',

            ),
            array(
                'id' => 'service_sub_title',
                'title' =>'Sub Title',
                'type' => 'text'
            ),

        )
    ));

    // Counter Options

    CSF::createSection($prefix, array(
        'id' => 'slider_options',
        'title' => 'Slider Options',
        'icon' => 'fas fa-angle-double-right',
        'fields' => array(
            array(
                'id' => 'slider_title',
                'title' => 'Title',
                'type' => 'text',

            ),
            array(
                'id' => 'slider_sub_title',
                'title' =>'Sub Title',
                'type' => 'text'
            ),
            array(
                'id' => 'slider_lists',
                'title' => 'Slider Lists',
                'type' => 'group',
                'button_title' => 'Add New Slider',
                'fields' => array(
                    array(
                        'id' => 'slide_title',
                        'type' => 'text',
                        'title' => 'Slide Title'
                    ),
                    array(
                        'id' => 'slider_number',
                        'type' => 'slider',
                        'title' => 'Slider Number',

                    ),

                )
            ),


        )
    ));

    // Create a section
    CSF::createSection($prefix, array(

        'title' => 'Skill Section Title',
        'icon' => 'fas fa-arrow-right',
        'fields' => array(
            array(
                'id' => 'skill_title',
                'title' => 'Title',
                'type' => 'text',

            ),
            array(
                'id' => 'skill_sub_title',
                'title' =>'Sub Title',
                'type' => 'text'
            ),

        )
    ));

    // Create a section
    CSF::createSection($prefix, array(

        'title' => 'Portfolio Section Title',
        'icon' => 'fas fa-arrow-right',
        'fields' => array(
            array(
                'id' => 'all_title',
                'title' => 'Title',
                'type' => 'text',

            ),
            array(
                'id' => 'all_sub_title',
                'title' =>'Sub Title',
                'type' => 'text'
            ),

        )
    ));


    // About Options
    CSF::createSection($prefix, array(
        'id' => 'team_about_options',
        'title' => 'Team About Us Section',
        'icon' => 'fas fa-arrow-right',
    ));

    // Create a section
    CSF::createSection($prefix, array(
        'parent' => 'team_about_options',
        'title' => 'About Us Section Title',
        'icon' => 'fas fa-arrow-right',
        'fields' => array(
            array(
                'id' => 'all_about_title',
                'title' => 'Title',
                'type' => 'text',

            ),
            array(
                'id' => 'all_about_sub_title',
                'title' =>'Sub Title',
                'type' => 'text'
            ),
            array(
                'id' => 'abs_con',
                'type' => 'media',
                'title' => 'Upload Image',
            ),
            array(
                'id' => 'about_team_sec_des',
                'title' => 'Description',
                'type' => 'textarea'
            )

        )
    ));

    // Create a section
    CSF::createSection($prefix, array(

        'title' => 'Contact Section Title',
        'icon' => 'fas fa-arrow-right',
        'fields' => array(
            array(
                'id' => 'con_title',
                'title' => 'Title',
                'type' => 'text',

            ),
            array(
                'id' => 'con_sub_title',
                'title' =>'Sub Title',
                'type' => 'text'
            ),

        )
    ));

    // Create a section
    CSF::createSection($prefix, array(

        'title' => 'Contact Details',
        'icon' => 'fas fa-arrow-right',
        'fields' => array(
            array(
                'id' => 'con_dec_title',
                'title' => 'Title',
                'type' => 'text',

            ),
            array(
                'id' => 'con_dec_sub_title',
                'title' =>'Sub Title',
                'type' => 'text'
            ),

        )
    ));

    // Contact Options
    CSF::createSection($prefix, array(
        'id' => 'contact_options',
        'title' =>'Contact Options',
        'icon' => 'fas fa-bullhorn',
        'fields' => array(
            array(
                'id' => 'contact_info',
                'title' => 'Contact Info',
                'type' => 'group',
                'button_title' => 'Add New Contact Items',
                'fields' => array(
                    array(
                        'id' => 'contact_info_icon',
                        'type' => 'icon',
                        'title' => 'Contact Info Icon',
                    ),
                    array(
                        'id' => 'contact_info_des',
                        'type' => 'text',
                        'title' => 'Contact Info Description',
                    )
                )
            ),


        )
    ));

    // Social Options
    CSF::createSection($prefix, array(
        'title' => 'Social Icons',
        'icon' => 'fas fa-arrow-right',
        'fields' => array(
            array(
                'id' => 'social_icons',
                'title'=> 'Social Icons',
                'type' => 'group',
                'button_title' =>'Add New Social Box',
                'fields' => array(
                    array(
                        'id' => 'social_link',
                        'type' => 'text',
                        'title' => 'Social Link',
                    ),
                    array(
                        'id' => 'social_icon',
                        'type' => 'icon',
                        'title' => 'Social Icon',
                    )
                )
            )
        )
    ));

}