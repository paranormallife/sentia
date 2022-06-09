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
    
    $wp_customize->add_section( 'footer' , array(
        'title'             => 'Footer',
        'panel'             => 'theme',
    ) );
            
    // Create our settings

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

    $wp_customize->add_setting( 'newsletter-form-code');
    $wp_customize->add_control( 'newsletter-form-code', array(
        'label'      => 'Newsletter Subscription Form Code',
        'section'    => 'footer',
        'type'       => 'textarea',
    ) );
            
    }
    add_action( 'customize_register', 'asw_customize_register' );