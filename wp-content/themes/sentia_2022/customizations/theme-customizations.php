<?php
function asw_customize_register( $wp_customize ) {

    // Create our panels
    
    $wp_customize->add_panel( 'theme', array(
        'priority'       => 1,
        'title'          => 'Theme Customizations',
    ) );
            
    // Create our sections
    
    $wp_customize->add_section( 'defaults' , array(
        'title'             => 'Defaults',
        'description'       => 'Theme Defaults and Fallbacks',
        'panel'             => 'theme',
    ) );
    
    $wp_customize->add_section( 'taglines' , array(
        'title'             => 'Taglines',
        'description'       => 'Taglines are randomly selected to appear beneath the logo.',
        'panel'             => 'theme',
    ) );
    
    $wp_customize->add_section( 'homepage' , array(
        'title'             => 'Homepage',
        'panel'             => 'theme',
    ) );
    
    $wp_customize->add_section( 'footer' , array(
        'title'             => 'Footer',
        'panel'             => 'theme',
    ) );
            
    // Create our settings

    // Taglines -------------------------------------------------------- /

    $wp_customize->add_setting( 'tagline_1');
    $wp_customize->add_control( 'tagline_1', array(
        'label'      => 'Tagline #1',
        'section'    => 'taglines',
        'type'       => 'text',
        'description' => 'Appears beneath logo.'
    ) );

    $wp_customize->add_setting( 'tagline_2');
    $wp_customize->add_control( 'tagline_2', array(
        'label'             => 'Tagline #2',
        'section'    => 'taglines',
        'type'       => 'text',
        'description' => 'Appears beneath logo.'
    ) );

    $wp_customize->add_setting( 'tagline_3');
    $wp_customize->add_control( 'tagline_3', array(
        'label'             => 'Tagline #3',
        'section'    => 'taglines',
        'type'       => 'text',
        'description' => 'Appears beneath logo.'
    ) );

    $wp_customize->add_setting( 'tagline_4');
    $wp_customize->add_control( 'tagline_4', array(
        'label'             => 'Tagline #4',
        'section'    => 'taglines',
        'type'       => 'text',
        'description' => 'Appears beneath logo.'
    ) );

    $wp_customize->add_setting( 'tagline_5');
    $wp_customize->add_control( 'tagline_5', array(
        'label'             => 'Tagline #5',
        'section'    => 'taglines',
        'type'       => 'text',
        'description' => 'Appears beneath logo.'
    ) );

    $wp_customize->add_setting( 'tagline_6');
    $wp_customize->add_control( 'tagline_6', array(
        'label'             => 'Tagline #6',
        'section'    => 'taglines',
        'type'       => 'text',
        'description' => 'Appears beneath logo.'
    ) );

    $wp_customize->add_setting( 'phone_number');
    $wp_customize->add_control( 'phone_number', array(
        'label'      => 'Phone Number',
        'section'    => 'defaults',
        'type'       => 'text',
    ) );

    $wp_customize->add_setting( 'appointment_label');
    $wp_customize->add_control( 'appointment_label', array(
        'label'      => 'Appointment Link Label',
        'section'    => 'defaults',
        'type'       => 'text',
    ) );

    $wp_customize->add_setting( 'appointment_destination');
    $wp_customize->add_control( 'appointment_destination', array(
        'label'      => 'Appointment Link Destination',
        'section'    => 'defaults',
        'type'       => 'dropdown-pages',
    ) );

    $wp_customize->add_setting( 'blog_heading');
    $wp_customize->add_control( 'blog_heading', array(
        'label'      => 'Blog Heading',
        'section'    => 'defaults',
        'description' => 'Appears above blog index grids',
        'type'       => 'text',
    ) );

    $wp_customize->add_setting( 'map_code');
    $wp_customize->add_control( 'map_code', array(
        'label'      => 'Map Embed Code',
        'section'    => 'defaults',
        'type'       => 'textarea',
        'description' => 'Map appears on Contact page unless this is left blank.'
    ) );

    $wp_customize->add_setting( 'header_scripts');
    $wp_customize->add_control( 'header_scripts', array(
        'label'      => 'Header Scripts',
        'section'    => 'defaults',
        'type'       => 'textarea'
    ) );

    $wp_customize->add_setting( 'newsletter-form-code');
    $wp_customize->add_control( 'newsletter-form-code', array(
        'label'      => 'Newsletter Subscription Form Code',
        'section'    => 'footer',
        'type'       => 'textarea',
    ) );

    $wp_customize->add_setting( 'show_testimonials_carousel');
    $wp_customize->add_control( 'show_testimonials_carousel', array(
        'label'      => 'Show Testimonials Carousel',
        'section'    => 'homepage',
        'type'       => 'checkbox',
    ) );

    $wp_customize->add_setting( 'show_blog_posts');
    $wp_customize->add_control( 'show_blog_posts', array(
        'label'      => 'Show Recent Blog Posts',
        'section'    => 'homepage',
        'type'       => 'checkbox',
    ) );

    $wp_customize->add_setting( 'seo_title');
    $wp_customize->add_control( 'seo_title', array(
        'label'      => 'SEO Title',
        'section'    => 'homepage',
        'type'       => 'text',
    ) );

    $wp_customize->add_setting( 'seo_description');
    $wp_customize->add_control( 'seo_description', array(
        'label'      => 'SEO Description',
        'section'    => 'homepage',
        'type'       => 'textarea',
    ) );
            
    }
    add_action( 'customize_register', 'asw_customize_register' );