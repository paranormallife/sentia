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
    
    $wp_customize->add_section( 'header' , array(
        'title'             => 'Header',
        'description'       => 'Header and Navigation Elements',
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

    $wp_customize->add_setting( 'default_hero_image' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'default_hero_image', array(
        'label'      => 'Default Hero Image',
        'section'    => 'defaults',
        'type'       => 'image',
        'description' => 'This is the fallback Featured Image for posts and pages.'
    ) ) );

    $wp_customize->add_setting( 'phone_number');
    $wp_customize->add_control( 'phone_number', array(
        'label'      => 'Phone Number',
        'section'    => 'defaults',
        'type'       => 'text',
    ) );

    $wp_customize->add_setting( 'contact_label');
    $wp_customize->add_control( 'contact_label', array(
        'label'      => '"Contact Us" Label',
        'section'    => 'header',
        'type'       => 'text',
    ) );

    $wp_customize->add_setting( 'contact_url');
    $wp_customize->add_control( 'contact_url', array(
        'label'      => '"Contact Us" Destination',
        'section'    => 'header',
        'type'       => 'dropdown-pages',
    ) );

    $wp_customize->add_setting( 'support_label');
    $wp_customize->add_control( 'support_label', array(
        'label'      => '"Support" Label',
        'section'    => 'header',
        'type'       => 'text',
    ) );

    $wp_customize->add_setting( 'support_url');
    $wp_customize->add_control( 'support_url', array(
        'label'      => '"Support" URL',
        'section'    => 'header',
        'type'       => 'text',
        'input_attrs' => array(
            'placeholder' => __( '"https://..." or "/example/"' ),
        )
    ) );

    $wp_customize->add_setting( 'location_label');
    $wp_customize->add_control( 'location_label', array(
        'label'      => 'Location Label',
        'section'    => 'header',
        'type'       => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'POK, NY' ),
        )
    ) );

    $wp_customize->add_setting( 'location_url');
    $wp_customize->add_control( 'location_url', array(
        'label'      => 'Location Destination',
        'section'    => 'header',
        'type'       => 'dropdown-pages'
    ) );

    $wp_customize->add_setting( 'business_name');
    $wp_customize->add_control( 'business_name', array(
        'label'      => 'Full Business Name',
        'section'    => 'defaults',
        'type'       => 'text',
    ) );

    $wp_customize->add_setting( 'address_line_one');
    $wp_customize->add_control( 'address_line_one', array(
        'label'      => 'Address Line One',
        'section'    => 'defaults',
        'type'       => 'text',
    ) );

    $wp_customize->add_setting( 'address_line_two');
    $wp_customize->add_control( 'address_line_two', array(
        'label'      => 'Address Line Two',
        'section'    => 'defaults',
        'type'       => 'text',
    ) );

    $wp_customize->add_setting( 'contact_email');
    $wp_customize->add_control( 'contact_email', array(
        'label'      => 'Contact Email Address',
        'section'    => 'defaults',
        'type'       => 'text',
    ) );

    $wp_customize->add_setting( 'footer-heading-one');
    $wp_customize->add_control( 'footer-heading-one', array(
        'label'      => 'Footer Column One Heading',
        'section'    => 'footer',
        'type'       => 'text',
    ) );

    $wp_customize->add_setting( 'footer-heading-two');
    $wp_customize->add_control( 'footer-heading-two', array(
        'label'      => 'Footer Column Two Heading',
        'section'    => 'footer',
        'type'       => 'text',
    ) );

    $wp_customize->add_setting( 'footer-heading-three');
    $wp_customize->add_control( 'footer-heading-three', array(
        'label'      => 'Footer Column Three Heading',
        'section'    => 'footer',
        'type'       => 'text',
    ) );

    $wp_customize->add_setting( 'footer-summary');
    $wp_customize->add_control( 'footer-summary', array(
        'label'      => 'Company Summary in Footer',
        'section'    => 'footer',
        'type'       => 'textarea',
    ) );

    $wp_customize->add_setting( 'newsletter-form-code');
    $wp_customize->add_control( 'newsletter-form-code', array(
        'label'      => 'Newsletter Subscription Form Code',
        'section'    => 'footer',
        'type'       => 'textarea',
    ) );

    $wp_customize->add_setting( 'quick-connect-id');
    $wp_customize->add_control( 'quick-connect-id', array(
        'label'      => 'Quick Connect Form ID',
        'section'    => 'homepage',
        'type'       => 'text',
        'description' => 'Enter the ID of the Contact Form.'
    ) );

    $wp_customize->add_setting( 'articles_title');
    $wp_customize->add_control( 'articles_title', array(
        'label'      => 'Featured Content Title',
        'section'    => 'homepage',
        'type'       => 'text',
        'input_attrs' => array(
            'placeholder' => __( 'What\'s New' ),
        )
    ) );

    $wp_customize->add_setting( 'featured_page_1');
    $wp_customize->add_control( 'featured_page_1', array(
        'label'      => 'First Featured Page',
        'section'    => 'homepage',
        'type'       => 'dropdown-pages'
    ) );

    $wp_customize->add_setting( 'featured_page_1_title');
    $wp_customize->add_control( 'featured_page_1_title', array(
        'label'      => 'First Featured Page Title',
        'section'    => 'homepage',
        'type'       => 'text'
    ) );

    $wp_customize->add_setting( 'featured_page_1_image' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'featured_page_1_image', array(
        'label'      => 'First Featured Page Image',
        'section'    => 'homepage',
        'type'       => 'image',
        'description' => 'Optional. This will default to the page\'s featured image.'
    ) ) );

    $wp_customize->add_setting( 'featured_page_2');
    $wp_customize->add_control( 'featured_page_2', array(
        'label'      => 'Second Featured Page',
        'section'    => 'homepage',
        'type'       => 'dropdown-pages'
    ) );

    $wp_customize->add_setting( 'featured_page_2_title');
    $wp_customize->add_control( 'featured_page_2_title', array(
        'label'      => 'Second Featured Page Title',
        'section'    => 'homepage',
        'type'       => 'text'
    ) );

    $wp_customize->add_setting( 'featured_page_2_image' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'featured_page_2_image', array(
        'label'      => 'Second Featured Page Image',
        'section'    => 'homepage',
        'type'       => 'image',
        'description' => 'Optional. This will default to the page\'s featured image.'
    ) ) );
            
    }
    add_action( 'customize_register', 'asw_customize_register' );