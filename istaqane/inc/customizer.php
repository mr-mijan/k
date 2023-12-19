<?php
function istaqane_customizer($wp_customize){

    $wp_customize->add_panel( 'istaqane_theme_options', 
    array(
        //'priority'       => 100,
        'title'            => __( 'Theme Options', 'istaqane' ),
        'priority'   => 10,
    ) 
    );

    // Preloader
    $wp_customize->add_section( 'preloader' , array(
        'title'      => __( 'Preloader', 'istaqane' ),
        'panel'      => 'istaqane_theme_options',
    ) );
    
    $wp_customize->add_setting( 'preloader_customizer' , array(
        'default'    => get_template_directory_uri('template_directory') .'/assets/images/preloader.png',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'preloader_customizer', array(
        'label'      => __( 'Page Header Image', 'istaqane' ),
        'description' => 'Upload your Preloader image form here (50 by 50)',
        'section'    => 'preloader',
        'settings'   => 'preloader_customizer',
    ) ) );

// Footer Section
    $wp_customize->add_section( 'footer_section' , array(
        'title'      => __( 'Footer Secton', 'istaqane' ),
        'panel'      => 'istaqane_theme_options',
    ) );

    $wp_customize->add_setting( 'footer_section_setting' , array(
        'default'    => __('Copyright © 2023 Istiqbal by wpOceans. All Rights Reserved.' , 'istaqane'),
    ) );

    $wp_customize->add_control('footer_section_control', array(
        'label'      => __( 'Copyright Text', 'istaqane' ),
        'type'       => 'textarea',
        // 'description' => 'Change your button text from here',
        'section'    => 'footer_section',
        'settings'   => 'footer_section_setting',
    ) ) ;
    
}
    add_action('customize_register', 'istaqane_customizer' );