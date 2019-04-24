<?php
function my_register_additional_customizer_settings( $wp_customize )
{

    $wp_customize->add_section( 'mytheme_company_section' , array(
        'title'      => __( 'Additional Company Info', 'mytheme' ),
        'priority'   => 30,
    ));

    $wp_customize->add_setting( 'mytheme_company-name', array());

    $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'mytheme_company_control',
            array(
                'label'      => __( 'Вконтакте', 'mytheme' ),
                'section'    => 'mytheme_company_section',
                'settings'   => 'mytheme_company-name',
                'priority'   => 1
            )
        )
    );

    $wp_customize->add_setting( 'mytheme_company-name1', array());

    $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'mytheme_company_control1',
            array(
                'label'      => __( 'Instagram', 'mytheme' ),
                'section'    => 'mytheme_company_section',
                'settings'   => 'mytheme_company-name1',
                'priority'   => 2
            )
        )
    );
    $wp_customize->add_setting( 'mytheme_company-name2', array());

    $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'mytheme_company_control2',
            array(
                'label'      => __( 'Номер(header)', 'mytheme' ),
                'section'    => 'mytheme_company_section',
                'settings'   => 'mytheme_company-name2',
                'priority'   => 3
            )
        )
    );

    $wp_customize->add_setting( 'mytheme_company-name3', array());

    $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'mytheme_company_control3',
            array(
                'label'      => __( 'Номер (footer)', 'mytheme' ),
                'section'    => 'mytheme_company_section',
                'settings'   => 'mytheme_company-name3',
                'priority'   => 4
            )
        )
    );
    $wp_customize->add_setting( 'mytheme_company-name4', array());

    $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'mytheme_company_control4',
            array(
                'label'      => __( 'Mail', 'mytheme' ),
                'section'    => 'mytheme_company_section',
                'settings'   => 'mytheme_company-name4',
                'priority'   => 5
            )
        )
    );


    $wp_customize->add_setting( 'mytheme_company-name5', array());

    $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'mytheme_company_control5',
            array(
                'label'      => __( 'skype', 'mytheme' ),
                'section'    => 'mytheme_company_section',
                'settings'   => 'mytheme_company-name5',
                'priority'   => 6
            )
        )
    );


    $wp_customize->add_setting( 'mytheme_company-name6', array());

    $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'mytheme_company_control6',
            array(
                'label'      => __( 'Вконтакте(footer)', 'mytheme' ),
                'section'    => 'mytheme_company_section',
                'settings'   => 'mytheme_company-name6',
                'priority'   => 7
            )
        )
    );



    $wp_customize->add_setting( 'mytheme_company-name7', array());

    $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'mytheme_company_control7',
            array(
                'label'      => __( 'Instagram(footer)', 'mytheme' ),
                'section'    => 'mytheme_company_section',
                'settings'   => 'mytheme_company-name7',
                'priority'   => 8
            )
        )
    );

}
function our_sanitize_function( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

add_action( 'customize_register', 'my_register_additional_customizer_settings' );