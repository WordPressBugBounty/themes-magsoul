<?php
/**
* Footer options
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function magsoul_footer_options($wp_customize) {
    $panel_id  = 'magsoul_main_options_panel';
    $section_id  = 'magsoul_section_footer';
    $section_priority  = 280;

    $wp_customize->add_section(
        $section_id,
        array(
            'title'    => esc_html__('Footer Options', 'magsoul'),
            'panel'    => $panel_id,
            'priority' => $section_priority,
        )
    );

    $theme_options = array(
        'footer_text' =>  array(
            'sanitize_callback' => 'magsoul_sanitize_html',
            'control_label'             => esc_html__('Footer copyright notice', 'magsoul'),
            'control_type'              => 'text',
        ),
        'hide_footer_widgets' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Footer Widgets', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'disable_backtotop' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Disable Back to Top Button', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
    );

    foreach ($theme_options as $theme_option_name => $theme_option_args) {
        $wp_customize->add_setting("magsoul_options[{$theme_option_name}]",
            array(
                'type'        => isset($theme_option_args['type']) ? $theme_option_args['type'] : 'option',
                'capability'  => isset($theme_option_args['capability']) ? $theme_option_args['capability'] : 'edit_theme_options',
                'default'     => isset($theme_option_args['default']) ? $theme_option_args['default'] : '',
                'transport'     => isset($theme_option_args['transport']) ? $theme_option_args['transport'] : 'refresh',
                'sanitize_callback'  => isset($theme_option_args['sanitize_callback']) ? $theme_option_args['sanitize_callback'] : '__return_false',
            )
        );

        $wp_customize->add_control("magsoul_{$theme_option_name}_control",
            array(
                'label'       => isset($theme_option_args['control_label']) ? $theme_option_args['control_label'] : '',
                'section'     => $section_id,
                'settings'    => "magsoul_options[{$theme_option_name}]",
                'type'        => isset($theme_option_args['control_type']) ? $theme_option_args['control_type'] : 'text',
                'description' => isset($theme_option_args['control_description']) ? $theme_option_args['control_description'] : '',
                'choices'     => (isset($theme_option_args['control_choices']) ? $theme_option_args['control_choices'] : array()),
                'priority'    => isset($theme_option_args['control_priority']) ? $theme_option_args['control_priority'] : 10,
            )
        );
    }
}