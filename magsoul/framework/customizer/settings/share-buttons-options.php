<?php
/**
* Share Button options
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function magsoul_share_buttons_options($wp_customize) {
    $panel_id  = 'magsoul_main_options_panel';
    $section_id  = 'magsoul_section_share';
    $section_priority  = 260;

    $wp_customize->add_section(
        $section_id,
        array(
            'title'    => esc_html__('Share Buttons Options', 'magsoul'),
            'panel'    => $panel_id,
            'priority' => $section_priority,
        )
    );

    $theme_options = array(
        'hide_share_buttons' =>  array( 'control_label' => esc_html__('Hide Share Buttons', 'magsoul'), ),
        'hide_share_text' =>  array( 'control_label' => esc_html__('Hide Share Text', 'magsoul'), ),
        'share_text' =>  array(
            'default' => esc_html__( 'Share:', 'magsoul' ),
            'sanitize_callback' => 'sanitize_text_field',
            'control_label'             => esc_html__('Share Text', 'magsoul'),
            'control_type'              => 'text',
        ),
        'hide_share_twitter' =>  array( 'control_label' => esc_html__('Hide X Share Button', 'magsoul'), ),
        'hide_share_facebook' =>  array( 'control_label' => esc_html__('Hide Facebook Share Button', 'magsoul'), ),
        'hide_share_pinterest' =>  array( 'control_label' => esc_html__('Hide Pinterest Share Button', 'magsoul'), ),
        'hide_share_linkedin' =>  array( 'control_label' => esc_html__('Hide Linkedin Share Button', 'magsoul'), ),
    );

    foreach ($theme_options as $theme_option_name => $theme_option_args) {
        $wp_customize->add_setting("magsoul_options[{$theme_option_name}]",
            array(
                'type'        => isset($theme_option_args['type']) ? $theme_option_args['type'] : 'option',
                'capability'  => isset($theme_option_args['capability']) ? $theme_option_args['capability'] : 'edit_theme_options',
                'default'     => isset($theme_option_args['default']) ? $theme_option_args['default'] : false,
                'transport'     => isset($theme_option_args['transport']) ? $theme_option_args['transport'] : 'refresh',
                'sanitize_callback'  => isset($theme_option_args['sanitize_callback']) ? $theme_option_args['sanitize_callback'] : 'magsoul_sanitize_checkbox',
            )
        );

        $control_type = isset($theme_option_args['control_type']) ? $theme_option_args['control_type'] : 'checkbox';

        if ( $control_type == 'custom_control' ) {
            $wp_customize->add_control( 
                new $theme_option_args['control_class']( $wp_customize, "magsoul_{$theme_option_name}_control",
                    array( 
                        'label'       => isset($theme_option_args['control_label']) ? $theme_option_args['control_label'] : '',
                        'section'     => $section_id,
                        'settings'    => "magsoul_options[{$theme_option_name}]",
                        'type'        => $control_type,
                        'description' => isset($theme_option_args['control_description']) ? $theme_option_args['control_description'] : '',
                        'choices'     => (isset($theme_option_args['control_choices']) ? $theme_option_args['control_choices'] : array()),
                        'priority'    => isset($theme_option_args['control_priority']) ? $theme_option_args['control_priority'] : 10,
                    )
                )
            );
        } else {
            $wp_customize->add_control("magsoul_{$theme_option_name}_control",
                array(
                    'label'       => isset($theme_option_args['control_label']) ? $theme_option_args['control_label'] : '',
                    'section'     => $section_id,
                    'settings'    => "magsoul_options[{$theme_option_name}]",
                    'type'        => $control_type,
                    'description' => isset($theme_option_args['control_description']) ? $theme_option_args['control_description'] : '',
                    'choices'     => (isset($theme_option_args['control_choices']) ? $theme_option_args['control_choices'] : array()),
                    'priority'    => isset($theme_option_args['control_priority']) ? $theme_option_args['control_priority'] : 10,
                )
            );
        }
    }
}