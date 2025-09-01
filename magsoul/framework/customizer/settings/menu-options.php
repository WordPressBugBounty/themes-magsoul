<?php
/**
* Menu options
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function magsoul_menu_options($wp_customize) {
    $panel_id = 'magsoul_main_options_panel';
    $section_id  = 'magsoul_section_menu_options';
    $section_priority  = 100;

    $wp_customize->add_section(
        $section_id,
        array(
            'title'    => esc_html__('Menu Options', 'magsoul'),
            'panel'    => $panel_id,
            'priority' => $section_priority,
        )
    );

    $theme_options = array(
        'primary_menu_text' => array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
            'control_label'     => esc_html__('Primary Menu (Header Menu) Mobile Text', 'magsoul'),
            'control_type'      => 'text',
        ),
        'disable_primary_menu' => array(
            'default'           => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'     => esc_html__('Disable Primary Menu (Header Menu)', 'magsoul'),
            'control_type'      => 'checkbox',
        ),
        'secondary_menu_text' => array(
            'default'           => esc_html__('Menu', 'magsoul'),
            'sanitize_callback' => 'sanitize_text_field',
            'control_label'     => esc_html__('Secondary Menu Mobile Text', 'magsoul'),
            'control_type'      => 'text',
        ),
        'disable_secondary_menu' => array(
            'default'           => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'     => esc_html__('Disable Secondary Menu', 'magsoul'),
            'control_type'      => 'checkbox',
        ),
        'secondary_menu_location' =>  array(
            'default' => 'before-footer',
            'sanitize_callback' => 'magsoul_sanitize_secondary_menu_location',
            'control_label'             => esc_html__('Select Secondary Menu Location', 'magsoul'),
            'control_description'       => esc_html__('Select where you want to display secondary menu.', 'magsoul'),
            'control_type'              => 'select',
            'control_choices'           => array(
                'before-header' => esc_html__('Before Header', 'magsoul'),
                'after-header' => esc_html__('After Header', 'magsoul'),
                'before-footer' => esc_html__('Before Footer', 'magsoul'),
                'after-footer' => esc_html__('After Footer', 'magsoul')
            ),
        ),
        'no_center_secondary_menu' => array(
            'default'           => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'     => esc_html__('Do not Center Secondary Menu', 'magsoul'),
            'control_type'      => 'checkbox',
        ),
    );

    foreach ($theme_options as $theme_option_name => $theme_option_args) {
        $wp_customize->add_setting("magsoul_options[{$theme_option_name}]",
            array(
                'default'     => isset($theme_option_args['default']) ? $theme_option_args['default'] : '',
                'type'        => isset($theme_option_args['type']) ? $theme_option_args['type'] : 'option',
                'capability'  => isset($theme_option_args['capability']) ? $theme_option_args['capability'] : 'edit_theme_options',
                'transport'     => isset($theme_option_args['transport']) ? $theme_option_args['transport'] : 'refresh',
                'sanitize_callback'  => isset($theme_option_args['sanitize_callback']) ? $theme_option_args['sanitize_callback'] : '',
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