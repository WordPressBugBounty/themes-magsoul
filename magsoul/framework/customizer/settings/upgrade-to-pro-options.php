<?php
/**
* Upgrade to pro options
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

function magsoul_upgrade_to_pro($wp_customize) {
    $section_id = 'magsoul_section_upgrade';
    $priority = 400;

    $wp_customize->add_section(
        $section_id,
        array(
            'title'    => esc_html__('Upgrade to Pro Version', 'magsoul'),
            'priority' => $priority,
        )
    );

    $wp_customize->add_setting(
        'magsoul_options[upgrade_text]',
        array(
            'default'           => '',
            'sanitize_callback' => '__return_false',
        )
    );

    $pro_features = array(
        esc_html__('Color Options', 'magsoul'),
        esc_html__('Font Options', 'magsoul'),
        esc_html__('1-10 Columns Support for Posts Grids', 'magsoul'),
        esc_html__('10+ Thumbnail Sizes Options for Posts Grids', 'magsoul'),
        esc_html__('Switch between Masonry Grid (JavaScript based) and CSS only Grid', 'magsoul'),
        esc_html__('Display Ads/Custom Contents between Posts in the Grid', 'magsoul'),
        esc_html__('Switch between Boxed or Full Layout Type', 'magsoul'),
        esc_html__('10+ Layout Styles for Posts/Pages', 'magsoul'),
        esc_html__('10+ Layout Styles for Non-Singular Pages', 'magsoul'),
        esc_html__('10+ Custom Page Templates', 'magsoul'),
        esc_html__('10+ Custom Post Templates', 'magsoul'),
        esc_html__('8 Header Layouts', 'magsoul'),
        esc_html__('Footer with Layout Options (1/2/3/4/5/6 columns)', 'magsoul'),
        esc_html__('Width Change Capability of Different Areas of the Website', 'magsoul'),
        esc_html__('Capability to Add Different Header Images for Each Post/Page with Unique Link, Title and Description', 'magsoul'),
        esc_html__('Grid Featured Posts Widget (Recent/Categories/Tags/PostIDs based) - with capability to display posts according to Likes/Views/Comments/Dates/... and there are many options', 'magsoul'),
        esc_html__('List Featured Posts Widget (Recent/Categories/Tags/PostIDs based) - with capability to display posts according to Likes/Views/Comments/Dates/... and there are many options', 'magsoul'),
        esc_html__('Tabbed Widget (Recent/Categories/Tags/PostIDs based) - with capability to display posts according to Likes/Views/Comments/Dates/... and there are many options.', 'magsoul'),
        esc_html__('About and Social Widget - 60+ Social Buttons', 'magsoul'),
        esc_html__('News Ticker (Recent/Categories/Tags/PostIDs based) - It can display posts according to Likes/Views/Comments/Dates/... and there are many options.', 'magsoul'),
        esc_html__('Settings Panel to Control Options in Each Post', 'magsoul'),
        esc_html__('Settings Panel to Control Options in Each Page', 'magsoul'),
        esc_html__('Built-in Posts Views Counter', 'magsoul'),
        esc_html__('Built-in Posts Likes System', 'magsoul'),
        esc_html__('Built-in Infinite Scroll and Load More Button', 'magsoul'),
        esc_html__('Post Share Buttons Styles with Options - 25+ Social Networks are Supported', 'magsoul'),
        esc_html__('Related Posts (Categories/Tags/Author/PostIDs based) with Many Options - For both single posts and post summaries', 'magsoul'),
        esc_html__('Sticky Menu/Sticky Sidebars with enable/disable capability', 'magsoul'),
        esc_html__('Author Bio Box with Social Buttons - 60+ Social Buttons', 'magsoul'),
        esc_html__('Ability to Enable/Disable Mobile View from Primary and Secondary Menus', 'magsoul'),
        esc_html__('Post Navigation with Thumbnails', 'magsoul'),
        esc_html__('Ability to add Ads under Post Title and under Post Content', 'magsoul'),
        esc_html__('Ability to Disable Google Fonts - for faster loading', 'magsoul'),
        esc_html__('Ability to Disable Post Format Views - for faster loading', 'magsoul'),
        esc_html__('More Widget Areas', 'magsoul'),
        esc_html__('Built-in Contact Form', 'magsoul'),
        esc_html__('WooCommerce Compatible', 'magsoul'),
        esc_html__('Yoast SEO Breadcrumbs Support', 'magsoul'),
        esc_html__('Full RTL Language Support', 'magsoul'),
        esc_html__('Search Engine Optimized', 'magsoul'),
        esc_html__('Random Posts Button', 'magsoul'),
        esc_html__('Many Useful Customizer Theme options', 'magsoul'),
        esc_html__('More Features...', 'magsoul'),
    );

    $features_list = '<ul class="magsoul-customizer-pro-features">';
    foreach ($pro_features as $feature) {
        $features_list .= '<li><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html($feature) . '</li>';
    }
    $features_list .= '</ul>';

    $wp_customize->add_control(
        new MagSoul_Customize_Static_Text_Control(
            $wp_customize,
            'magsoul_upgrade_text_control',
            array(
                'label'       => esc_html__('MagSoul Pro', 'magsoul'),
                'section'     => $section_id,
                'settings'    => 'magsoul_options[upgrade_text]',
                'description' => esc_html__('Do you enjoy MagSoul? Upgrade to MagSoul Pro now and get:', 'magsoul') . $features_list . '<strong><a href="' . MAGSOUL_PROURL . '" class="button button-primary" target="_blank"><i class="fas fa-shopping-cart" aria-hidden="true"></i> ' . esc_html__('Upgrade To MagSoul PRO', 'magsoul') . '</a></strong>',
            )
        )
    );
}