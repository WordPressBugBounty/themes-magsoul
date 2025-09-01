<?php
/**
* Header options
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function magsoul_header_options($wp_customize) {
    $panel_id = 'magsoul_main_options_panel';
    $priority = 120;

    $wp_customize->add_section(
        'magsoul_section_header',
        array(
            'title'    => esc_html__('Header Options', 'magsoul'),
            'panel'    => $panel_id,
            'priority' => $priority,
        )
    );

    // Options for 'magsoul_section_header' section
    $header_options = array(
        'hide_tagline' => array(
            'default'           => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'     => esc_html__('Hide Tagline', 'magsoul'),
            'control_description' => esc_html__('This option will hide the tagline from all screen sizes.', 'magsoul'),
            'control_type'      => 'checkbox',
        ),
        'hide_tagline_mobile' => array(
            'default'           => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'     => esc_html__('Hide Tagline from Smaller Screens', 'magsoul'),
            'control_description' => esc_html__('This option has no effect if you have checked the option: "Hide Tagline"', 'magsoul'),
            'control_type'      => 'checkbox',
        ),
        'disable_sticky_header' => array(
            'default'           => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'     => esc_html__('Disable Sticky Feature from Header', 'magsoul'),
            'control_type'      => 'checkbox',
        ),
        'enable_sticky_mobile_header' => array(
            'default'           => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'     => esc_html__('Enable Sticky Feature on Header for Small Screen Sizes', 'magsoul'),
            'control_type'      => 'checkbox',
        ),
        'hide_header_content' => array(
            'default'           => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'     => esc_html__('Hide Header Content', 'magsoul'),
            'control_type'      => 'checkbox',
        ),
        'header_padding' => array(
            'default'           => '10px',
            'sanitize_callback' => 'sanitize_text_field',
            'control_label'     => esc_html__('Header Padding', 'magsoul'),
            'control_description' => esc_html__('Enter the padding value for header content. Default is 10px', 'magsoul'),
            'control_type'      => 'text',
        ),
        'hide_header_search_button' => array(
            'default'           => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'     => esc_html__('Hide Header Search Button', 'magsoul'),
            'control_description' => esc_html__('If you have checked the option "Disable Primary Menu (Header Menu)," this option has no effect. Also, if you select the "Logo" value for the "Header Layout" option, this option has no effect.', 'magsoul'),
            'control_type'      => 'checkbox',
        ),
        'search_button_text' => array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
            'control_label'     => esc_html__('Header Search Button Text', 'magsoul'),
            'control_type'      => 'text',
        ),
    );

    foreach ($header_options as $header_option_name => $header_option_args) {
        $wp_customize->add_setting("magsoul_options[{$header_option_name}]",
            array(
                'default'     => isset($header_option_args['default']) ? $header_option_args['default'] : '',
                'type'        => isset($header_option_args['type']) ? $header_option_args['type'] : 'option',
                'capability'  => isset($header_option_args['capability']) ? $header_option_args['capability'] : 'edit_theme_options',
                'transport'     => isset($header_option_args['transport']) ? $header_option_args['transport'] : 'refresh',
                'sanitize_callback'  => isset($header_option_args['sanitize_callback']) ? $header_option_args['sanitize_callback'] : '',
            )
        );

        $header_control_type = isset($header_option_args['control_type']) ? $header_option_args['control_type'] : 'text';

        if ( $header_control_type == 'custom_control' ) {
            $wp_customize->add_control( 
                new $header_option_args['control_class']( $wp_customize, "magsoul_{$header_option_name}_control",
                    array( 
                        'label'       => isset($header_option_args['control_label']) ? $header_option_args['control_label'] : '',
                        'section'     => 'magsoul_section_header',
                        'settings'    => "magsoul_options[{$header_option_name}]",
                        'type'        => $header_control_type,
                        'description' => isset($header_option_args['control_description']) ? $header_option_args['control_description'] : '',
                        'choices'     => (isset($header_option_args['control_choices']) ? $header_option_args['control_choices'] : array()),
                        'priority'    => isset($header_option_args['control_priority']) ? $header_option_args['control_priority'] : 10,
                    )
                )
            );
        } else {
            $wp_customize->add_control("magsoul_{$header_option_name}_control",
                array(
                    'label'       => isset($header_option_args['control_label']) ? $header_option_args['control_label'] : '',
                    'section'     => 'magsoul_section_header',
                    'settings'    => "magsoul_options[{$header_option_name}]",
                    'type'        => $header_control_type,
                    'description' => isset($header_option_args['control_description']) ? $header_option_args['control_description'] : '',
                    'choices'     => (isset($header_option_args['control_choices']) ? $header_option_args['control_choices'] : array()),
                    'priority'    => isset($header_option_args['control_priority']) ? $header_option_args['control_priority'] : 10,
                )
            );
        }
    }

    // Options for 'title_tagline' section
    $title_tagline_options = array(
        'logo_location' => array(
            'default'           => 'above-title',
            'sanitize_callback' => 'magsoul_sanitize_logo_location',
            'control_label'     => esc_html__('Logo Location', 'magsoul'),
            'control_description' => esc_html__('Select how you want to display the site logo with site title and tagline.', 'magsoul'),
            'control_type'      => 'select',
            'control_choices'           => array(
                'beside-title' => esc_html__('Before Site Title and Tagline', 'magsoul'),
                'above-title'  => esc_html__('Above Site Title and Tagline', 'magsoul'),
            ),
            'control_priority'  => 8,
        ),
        'no_limit_logo_width' => array(
            'default'           => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'     => esc_html__('Do not Limit the Logo Width', 'magsoul'),
            'control_type'      => 'checkbox',
            'control_priority'  => 8,
        ),
        'logo_max_width' => array(
            'default'           => '320px',
            'sanitize_callback' => 'sanitize_text_field',
            'control_label'     => esc_html__('Max Width of the Logo', 'magsoul'),
            'control_description' => esc_html__('Enter the max-width value for the logo. Default value is "320px". Note: This option has no effect if you check the "Do not Limit the Logo Width" option.', 'magsoul'),
            'control_type'      => 'text',
            'control_priority'  => 8,
        ),
    );

    foreach ($title_tagline_options as $title_tagline_option_name => $title_tagline_option_args) {
        $wp_customize->add_setting("magsoul_options[{$title_tagline_option_name}]",
            array(
                'default'     => isset($title_tagline_option_args['default']) ? $title_tagline_option_args['default'] : '',
                'type'        => isset($title_tagline_option_args['type']) ? $title_tagline_option_args['type'] : 'option',
                'capability'  => isset($title_tagline_option_args['capability']) ? $title_tagline_option_args['capability'] : 'edit_theme_options',
                'transport'     => isset($title_tagline_option_args['transport']) ? $title_tagline_option_args['transport'] : 'refresh',
                'sanitize_callback'  => isset($title_tagline_option_args['sanitize_callback']) ? $title_tagline_option_args['sanitize_callback'] : '',
            )
        );

        $wp_customize->add_control("magsoul_{$title_tagline_option_name}_control",
            array(
                'label'       => isset($title_tagline_option_args['control_label']) ? $title_tagline_option_args['control_label'] : '',
                'section'     => 'title_tagline',
                'settings'    => "magsoul_options[{$title_tagline_option_name}]",
                'type'        => isset($title_tagline_option_args['control_type']) ? $title_tagline_option_args['control_type'] : 'text',
                'description' => isset($title_tagline_option_args['control_description']) ? $title_tagline_option_args['control_description'] : '',
                'choices'     => (isset($title_tagline_option_args['control_choices']) ? $title_tagline_option_args['control_choices'] : array()),
                'priority'    => isset($title_tagline_option_args['control_priority']) ? $title_tagline_option_args['control_priority'] : 10,
            )
        );
    }

    // Options for 'header_image' section
    $header_image_options = array(
        'hide_header_image' => array(
            'default'           => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'     => esc_html__('Hide Header Image from Everywhere', 'magsoul'),
            'control_type'      => 'checkbox',
        ),
        'remove_header_image_link' => array(
            'default'           => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'     => esc_html__('Remove Link from Header Image', 'magsoul'),
            'control_type'      => 'checkbox',
        ),
        'hide_header_image_details' => array(
            'default'           => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'     => esc_html__('Hide both Title and Description from Header Image', 'magsoul'),
            'control_description' => esc_html__('If you checked this option, header image title and description will be hidden from all screen sizes.', 'magsoul'),
            'control_type'      => 'checkbox',
        ),
        'hide_header_image_title' => array(
            'default'           => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'     => esc_html__('Hide Title from Header Image', 'magsoul'),
            'control_description' => esc_html__('If you checked this option, header image title will be hidden from all screen sizes. This option has no effect if you have checked the option: "Hide both Title and Description from Header Image"', 'magsoul'),
            'control_type'      => 'checkbox',
        ),
        'hide_header_image_description' => array(
            'default'           => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'     => esc_html__('Hide Description from Header Image', 'magsoul'),
            'control_description' => esc_html__('If you checked this option, header image description will be hidden from all screen sizes. This option has no effect if you have checked the option: "Hide both Title and Description from Header Image"', 'magsoul'),
            'control_type'      => 'checkbox',
        ),
        'header_image_title_mobile' => array(
            'default'           => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'     => esc_html__('Show Header Image Title on Smaller Screens', 'magsoul'),
            'control_description' => esc_html__('This option has no effect if you have checked any of these options: "Hide both Title and Description from Header Image", "Hide Title from Header Image"', 'magsoul'),
            'control_type'      => 'checkbox',
        ),
        'header_image_description_mobile' => array(
            'default'           => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'     => esc_html__('Show Header Image Description on Smaller Screens', 'magsoul'),
            'control_description' => esc_html__('This option has no effect if you have checked any of these options: "Hide both Title and Description from Header Image", "Hide Description from Header Image"', 'magsoul'),
            'control_type'      => 'checkbox',
        ),
        'header_image_custom_text' => array(
            'default'           => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'     => esc_html__('Add Custom Title/Custom Description to Header Image', 'magsoul'),
            'control_type'      => 'checkbox',
        ),
        'header_image_custom_title' => array(
            'default'           => '',
            'sanitize_callback' => 'magsoul_sanitize_html',
            'control_label'     => esc_html__('Header Image Custom Title', 'magsoul'),
            'control_type'      => 'text',
        ),
        'header_image_custom_description' => array(
            'default'           => '',
            'sanitize_callback' => 'magsoul_sanitize_html',
            'control_label'     => esc_html__('Header Image Custom Description', 'magsoul'),
            'control_type'      => 'text',
        ),
        'header_image_destination' => array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
            'control_label'     => esc_html__('Header Image Destination URL', 'magsoul'),
            'control_description' => esc_html__('Enter the URL a visitor should go when he/she click on the header image. If you did not enter a URL below, header image will be linked to the homepage of your website.', 'magsoul'),
            'control_type'      => 'text',
        ),
        'header_image_cover' => array(
            'default'           => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'     => esc_html__('Add a Minimum Height to Header Image on Smaller Screens', 'magsoul'),
            'control_type'      => 'checkbox',
        ),
        'header_image_height_mobile' => array(
            'default'           => '200px',
            'sanitize_callback' => 'sanitize_text_field',
            'control_label'     => esc_html__('Header Image Minimum Height on Smaller Screens', 'magsoul'),
            'control_description' => esc_html__('Enter the minimum height value for header image height. Default is "200px". Note: This option has no effect until you check "Add a Minimum Height to Header Image on Smaller Screens" option.', 'magsoul'),
            'control_type'      => 'text',
        ),
        'header_image_alt_text' => array(
            'default'           => get_bloginfo('name'),
            'sanitize_callback' => 'sanitize_text_field',
            'control_label'     => esc_html__('Header Image Alt Text', 'magsoul'),
            'control_type'      => 'text',
        ),
    );

    foreach ($header_image_options as $header_image_option_name => $header_image_option_args) {
        $wp_customize->add_setting("magsoul_options[{$header_image_option_name}]",
            array(
                'default'     => isset($header_image_option_args['default']) ? $header_image_option_args['default'] : '',
                'type'        => isset($header_image_option_args['type']) ? $header_image_option_args['type'] : 'option',
                'capability'  => isset($header_image_option_args['capability']) ? $header_image_option_args['capability'] : 'edit_theme_options',
                'transport'     => isset($header_image_option_args['transport']) ? $header_image_option_args['transport'] : 'refresh',
                'sanitize_callback'  => isset($header_image_option_args['sanitize_callback']) ? $header_image_option_args['sanitize_callback'] : '',
            )
        );

        $wp_customize->add_control("magsoul_{$header_image_option_name}_control",
            array(
                'label'       => isset($header_image_option_args['control_label']) ? $header_image_option_args['control_label'] : '',
                'section'     => 'header_image',
                'settings'    => "magsoul_options[{$header_image_option_name}]",
                'type'        => isset($header_image_option_args['control_type']) ? $header_image_option_args['control_type'] : 'text',
                'description' => isset($header_image_option_args['control_description']) ? $header_image_option_args['control_description'] : '',
                'choices'     => (isset($header_image_option_args['control_choices']) ? $header_image_option_args['control_choices'] : array()),
                'priority'    => isset($header_image_option_args['control_priority']) ? $header_image_option_args['control_priority'] : 10,
            )
        );
    }
}