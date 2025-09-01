<?php
/**
* Page options
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function magsoul_page_options($wp_customize) {
    $panel_id  = 'magsoul_main_options_panel';
    $section_id  = 'magsoul_section_page';
    $section_priority  = 190;

    $wp_customize->add_section(
        $section_id,
        array(
            'title'    => esc_html__('Page Options', 'magsoul'),
            'panel'    => $panel_id,
            'priority' => $section_priority,
        )
    );

    $theme_options = array(
        'thumbnail_link_page' =>  array(
            'default' => 'yes',
            'sanitize_callback' => 'magsoul_sanitize_yes_no',
            'control_label'             => esc_html__('Featured Image Link', 'magsoul'),
            'control_description'       => esc_html__('Do you want the featured image in a page to be linked to its page?', 'magsoul'),
            'control_type'              => 'select',
            'control_choices'           => array(
                'yes' => esc_html__('Yes', 'magsoul'),
                'no' => esc_html__('No', 'magsoul')
            ),
        ),
        'hide_page_thumbnail' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Featured Image from Single Page', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'featured_media_under_page_title' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Move Featured Image to Bottom of Page Title', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'hide_page_header' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Page Header from Single Page', 'magsoul'),
            'control_description'       => esc_html__('If you check this option, it will hide page title and page header meta data from single page.', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'hide_page_title' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Page Title from Single Page', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'remove_page_title_link' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Remove Link from Single Page Title', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'hide_page_date' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Posted Date from Single Page', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'hide_page_author' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Page Author from Single Page', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'hide_page_comments' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Comment Link from Single Page', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'hide_page_comment_form' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Comments/Comment Form from Single Page', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'hide_page_edit' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Edit Link from Single Page', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'hide_static_page_title' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Page Header from Static Homepage', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'hide_static_page_meta' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Page Meta Data (Page Date, Page Author, Comment Link) from Static Homepage', 'magsoul'),
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