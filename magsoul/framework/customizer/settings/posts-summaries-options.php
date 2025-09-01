<?php
/**
* Posts Summaries options
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function magsoul_posts_grid_options($wp_customize) {
    $panel_id  = 'magsoul_main_options_panel';
    $section_id  = 'magsoul_section_posts_summaries';
    $section_priority  = 160;

    $wp_customize->add_section(
        $section_id,
        array(
            'title'    => esc_html__('Posts Summaries Options', 'magsoul'),
            'description' => esc_html__('To display your latest posts as a grid on your homepage, please set the "Your homepage displays" option to "Your latest posts." You can find this setting in your WordPress Dashboard by navigating to "Settings" -> "Reading" -> "Your homepage displays."', 'magsoul'),
            'panel'    => $panel_id,
            'priority' => $section_priority,
        )
    );

    $theme_options = array(
        'hide_posts_home' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Blog Posts from Home Page', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'hide_posts_heading' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide HomePage Posts Heading', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'posts_heading' =>  array(
            'default' => esc_html__('Recent Posts', 'magsoul'),
            'sanitize_callback' => 'sanitize_text_field',
            'control_label'             => esc_html__('HomePage Posts Heading', 'magsoul'),
            'control_type'              => 'text',
        ),
        'thumbnail_link_home' =>  array(
            'default' => 'yes',
            'sanitize_callback' => 'magsoul_sanitize_yes_no',
            'control_label'             => esc_html__('Featured Images Links', 'magsoul'),
            'control_description'       => esc_html__('Do you want thumbnails in grid posts summaries to be linked to their posts?', 'magsoul'),
            'control_type'              => 'select',
            'control_choices'           => array(
                'yes' => esc_html__('Yes', 'magsoul'),
                'no' => esc_html__('No', 'magsoul')
            ),
        ),
        'hide_post_title_home' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Post Titles from Grid Posts Summaries', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'remove_post_title_link_home' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Remove Links of Post Titles from Grid Posts Summaries', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'disable_animation_post_title_home' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Disable "Hover Animation" from Post Titles in Grid Posts Summaries', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'limit_post_title_home' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Limit the Length of Post Titles in Grid Posts Summaries', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'post_title_length_home' =>  array(
            'default' => 6,
            'sanitize_callback' => 'magsoul_sanitize_positive_integer',
            'control_label'             => esc_html__('Maximum Length of Post Titles in Grid Posts Summaries', 'magsoul'),
            'control_description'       => esc_html__('Enter the maximum number of words need to display in grid post titles. Default is 6 words. This option only work if you have check the option "Limit the Length of Post Titles in Grid Posts Summaries".', 'magsoul'),
            'control_type'              => 'text',
        ),
        'hide_post_author_home' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Post Author Names from Grid Posts Summaries', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'hide_posted_date_home' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Post Dates from Grid Posts Summaries', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'post_date_type_home' =>  array(
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
        'show_comments_link_home' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Show Comment Links on Grid Posts Summaries', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'comments_count_full_home' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Display Comment Texts instead of Comments Counts on Grid Posts Summaries', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'read_more_length' =>  array(
            'default' => 17,
            'sanitize_callback' => 'magsoul_sanitize_read_more_length',
            'control_label'             => esc_html__('Post Snippets Length of Grid Posts Summaries', 'magsoul'),
            'control_description'       => esc_html__('Enter the number of words need to display in grid post summaries. Default is 17 words.', 'magsoul'),
            'control_type'              => 'text',
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