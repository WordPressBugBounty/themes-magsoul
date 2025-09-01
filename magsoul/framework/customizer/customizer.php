<?php
/**
* MagSoul Theme Customizer.
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! class_exists( 'WP_Customize_Control' ) ) {return null;}

$magsoul_settings_files = [ 'classes/class-customize-static-text-control', 'classes/class-customize-button-control', 'classes/class-customize-submit-control', 'sanitize-callbacks', 'getting-started-options', 'menu-options', 'header-options', 'posts-summaries-options', 'singular-post-options', 'navigation-options', 'singular-page-options', 'social-buttons-options', 'share-buttons-options', 'footer-options', 'extra-options', 'upgrade-to-pro-options', ];

foreach ($magsoul_settings_files as $magsoul_settings_file) {
    if ( strpos($magsoul_settings_file, 'classes/') === 0 ) {
        $magsoul_file_path = trailingslashit(get_template_directory()) . "framework/customizer/{$magsoul_settings_file}.php";
    } else {
        $magsoul_file_path = trailingslashit(get_template_directory()) . "framework/customizer/settings/{$magsoul_settings_file}.php";
    }
    require_once($magsoul_file_path); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
}

function magsoul_register_theme_customizer( $wp_customize ) {

    if(method_exists('WP_Customize_Manager', 'add_panel')):
    $wp_customize->add_panel('magsoul_main_options_panel', array( 'title' => esc_html__('Theme Options', 'magsoul'), 'priority' => 10, ));
    endif;

    $wp_customize->get_section( 'title_tagline' )->panel = 'magsoul_main_options_panel';
    $wp_customize->get_section( 'title_tagline' )->priority = 20;
    $wp_customize->get_section( 'header_image' )->panel = 'magsoul_main_options_panel';
    $wp_customize->get_section( 'header_image' )->priority = 26;
    $wp_customize->get_section( 'background_image' )->panel = 'magsoul_main_options_panel';
    $wp_customize->get_section( 'background_image' )->priority = 27;
    $wp_customize->get_section( 'colors' )->panel = 'magsoul_main_options_panel';
    $wp_customize->get_section( 'colors' )->priority = 40;
      
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
    $wp_customize->get_control( 'background_color' )->description = esc_html__('To change Background Color, need to remove background image first:- go to Appearance : Customize : Theme Options : Background Image', 'magsoul');

    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial( 'blogname', array(
            'selector'        => '.magsoul-site-title a',
            'render_callback' => 'magsoul_customize_partial_blogname',
        ) );
        $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
            'selector'        => '.magsoul-site-description',
            'render_callback' => 'magsoul_customize_partial_blogdescription',
        ) );
    }

    magsoul_getting_started($wp_customize);
    magsoul_menu_options($wp_customize);
    magsoul_header_options($wp_customize);
    magsoul_posts_grid_options($wp_customize);
    magsoul_post_options($wp_customize);
    magsoul_navigation_options($wp_customize);
    magsoul_page_options($wp_customize);
    magsoul_social_profiles($wp_customize);
    magsoul_share_buttons_options($wp_customize);
    magsoul_footer_options($wp_customize);
    magsoul_other_options($wp_customize);
    magsoul_upgrade_to_pro($wp_customize);

}
add_action( 'customize_register', 'magsoul_register_theme_customizer' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function magsoul_customize_partial_blogname() {
    bloginfo( 'name' );
}
/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function magsoul_customize_partial_blogdescription() {
    bloginfo( 'description' );
}

function magsoul_customizer_js_scripts() {
    wp_enqueue_script('magsoul-theme-customizer-js', get_template_directory_uri() . '/assets/js/customizer.js', array( 'jquery', 'customize-preview' ), null, true);
}
add_action( 'customize_preview_init', 'magsoul_customizer_js_scripts' );