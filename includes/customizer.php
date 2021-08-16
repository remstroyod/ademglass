<?php
/**
 * adem Theme Customizer
 *
 * @package adem
 */

/**
 * Customizer
 */
add_action('customize_register', function($wp_customize){
    $wp_customize->add_section(
        'my_parameters',
        array(
            'title' => 'Логотипы',
            'description' => 'Загрузить логотип',
            'priority' => 11,
        )
    );


    $wp_customize->add_setting('logo_header_black');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo_header_black',
            array(
                'label' => 'Логотип: Черный',
                'section' => 'my_parameters',
                'settings' => 'logo_header_black'
            )
        )
    );

    $wp_customize->add_setting('logo_header_white');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo_header_white',
            array(
                'label' => 'Логотип: Белый',
                'section' => 'my_parameters',
                'settings' => 'logo_header_white'
            )
        )
    );
});
