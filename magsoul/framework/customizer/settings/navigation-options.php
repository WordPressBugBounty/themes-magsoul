<?php
/**
* Navigation options
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function magsoul_navigation_options($wp_customize) {
    $panel_id  = 'magsoul_main_options_panel';
    $section_id  = 'magsoul_section_navigation';
    $section_priority  = 185;

    $wp_customize->add_section(
        $section_id,
        array(
            'title'    => esc_html__('Post/Posts Navigation Options', 'magsoul'),
            'panel'    => $panel_id,
            'priority' => $section_priority,
        )
    );

    $theme_options = array(
        'hide_post_navigation' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Post Navigation from Full Posts', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'hide_posts_navigation' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Posts Navigation from Home/Archive/Search Pages', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'posts_navigation_type' =>  array(
            'default' => 'numberednavi',
            'sanitize_callback' => 'magsoul_sanitize_posts_navigation_type',
            'control_label'             => esc_html__('Posts Navigation Type', 'magsoul'),
            'control_description'       => esc_html__('Select posts navigation type you need. If you activate WP-PageNavi plugin, this navigation will be replaced by WP-PageNavi navigation.', 'magsoul'),
            'control_type'              => 'select',
            'control_choices'           => array(
                'normalnavi' => esc_html__('Normal Navigation', 'magsoul'),
                'numberednavi' => esc_html__('Numbered Navigation', 'magsoul')
            ),
        ),
    );

    foreach ($theme_options as $theme_option_name => $theme_option_args) {
        $wp_customize->add_setting("magsoul_options[{$theme_option_name}]",
            array(
                'type'        => isset($theme_option_args['type']) ? $theme_option_args['type'] : 'option',
                'capability'  => isset($theme_option_args['capability']) ? $theme_option_args['capability'] : 'edit_theme_options',
                'default'     => isset($theme_option_args['default']) ? $theme_option_args['default'] : '',
                'transport'     => isset($theme_option_args['transport']) ? $theme_option_args['transport'] : 'refresh',
                'sanitize_callback'  => isset($theme_option_args['sanitize_callback']) ? $theme_option_args['sanitize_callback'] : '',
            )
        );

        $control_type = isset($theme_option_args['control_type']) ? $theme_option_args['control_type'] : 'text';

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