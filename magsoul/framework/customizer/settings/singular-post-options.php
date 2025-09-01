<?php
/**
* Post options
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function magsoul_post_options($wp_customize) {
    $panel_id  = 'magsoul_main_options_panel';
    $section_id  = 'magsoul_section_post';
    $section_priority  = 180;

    $wp_customize->add_section(
        $section_id,
        array(
            'title'    => esc_html__('Post Options', 'magsoul'),
            'panel'    => $panel_id,
            'priority' => $section_priority,
        )
    );

    $theme_options = array(
        'thumbnail_link' =>  array(
            'default' => 'yes',
            'sanitize_callback' => 'magsoul_sanitize_yes_no',
            'control_label'             => esc_html__('Featured Image Link', 'magsoul'),
            'control_description'       => esc_html__('Do you want the featured image in a single post to be linked to its post?', 'magsoul'),
            'control_type'              => 'select',
            'control_choices'           => array(
                'yes' => esc_html__('Yes', 'magsoul'),
                'no' => esc_html__('No', 'magsoul')
            ),
        ),
        'hide_thumbnail' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Featured Image from Full Post', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'featured_media_under_post_title' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Move Featured Image to Bottom of Full Post Title', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'auto_width_thumbnail' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Do not Stretch the Featured Image to Full Width', 'magsoul'),
            'control_description'       => esc_html__('When you check this option, the featured image will not automatically stretch to full width if the width of the featured image is smaller than the post content.', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'hide_post_breadcrumbs' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Breadcrumbs from Full Post', 'magsoul'),
            'control_description'       => esc_html__('Note: You need to install and activate "Yoast SEO" plugin to display breadcrumbs.', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'hide_post_header' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Post Header from Full Post', 'magsoul'),
            'control_description'       => esc_html__('If you check this option, it will hide post title and post header meta data from full post.', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'hide_post_title' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Post Title from Full Post', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'remove_post_title_link' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Remove Link from Full Post Title', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'hide_post_categories' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Post Categories from Full Post', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'hide_post_author' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Post Author from Full Post', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'hide_posted_date' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Post Date from Full Post', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'post_date_type' =>  array(
            'default' => 'published',
            'sanitize_callback' => 'magsoul_sanitize_date_type',
            'control_label'             => esc_html__('Post Date Type', 'magsoul'),
            'control_description'       => esc_html__('You can choose to display published or updated date of your post.', 'magsoul'),
            'control_type'              => 'select',
            'control_choices'           => array(
                'published' => esc_html__('Published', 'magsoul'),
                'updated' => esc_html__('Updated', 'magsoul')
            ),
        ),
        'hide_comments_link' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Comment Link from Full Post', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'hide_comment_form' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Comments/Comment Form from Full Post', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'show_post_edit' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Show Post Edit Link', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'hide_post_tags' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Post Tags from Full Post', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'hide_author_bio_box' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Author Bio Box', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'no_underline_content_links' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Do not Underline the Links within the Content', 'magsoul'),
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