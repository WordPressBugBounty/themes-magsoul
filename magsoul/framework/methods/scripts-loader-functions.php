<?php
/**
* Enqueue scripts and styles
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function magsoul_scripts() {
    wp_enqueue_style('magsoul-maincss', get_stylesheet_uri(), array(), null);
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), null );
    wp_enqueue_style('magsoul-webfont', '//fonts.googleapis.com/css2?family=Oswald:wght@400;500;700&amp;family=Poppins:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;family=Encode+Sans+Condensed:wght@400;500;700&amp;display=swap', array(), null);

    $magsoul_fitvids_active = false;
    if ( magsoul_is_fitvids_active() ) {
        $magsoul_fitvids_active = true;
    }
    if ( $magsoul_fitvids_active ) {
        wp_enqueue_script('fitvids', get_template_directory_uri() .'/assets/js/jquery.fitvids.min.js', array( 'jquery' ), null, true);
    }

    $magsoul_backtotop_active = false;
    if ( magsoul_is_backtotop_active() ) {
        $magsoul_backtotop_active = true;
    }

    $magsoul_primary_menu_active = false;
    if ( magsoul_is_primary_menu_active() ) {
        $magsoul_primary_menu_active = true;
    }
    $magsoul_secondary_menu_active = false;
    if ( magsoul_is_secondary_menu_active() ) {
        $magsoul_secondary_menu_active = true;
    }

    $magsoul_sticky_header_active = false;
    $magsoul_sticky_header_mobile_active = false;
    if ( magsoul_is_sticky_header_active() ) {
        $magsoul_sticky_header_active = true;
    }
    if ( magsoul_is_sticky_mobile_header_active() ) {
        $magsoul_sticky_header_mobile_active = true;
    }

    wp_enqueue_script('magsoul-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), null, true );
    wp_enqueue_script('magsoul-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), null, true );
    wp_enqueue_script('magsoul-customjs', get_template_directory_uri() .'/assets/js/custom.js', array( 'jquery', 'imagesloaded' ), null, true);

    wp_localize_script( 'magsoul-customjs', 'magsoul_ajax_object',
        array(
            'ajaxurl' => esc_url_raw( admin_url( 'admin-ajax.php' ) ),
            'primary_menu_active' => $magsoul_primary_menu_active,
            'secondary_menu_active' => $magsoul_secondary_menu_active,
            'sticky_header_active' => $magsoul_sticky_header_active,
            'sticky_header_mobile_active' => $magsoul_sticky_header_mobile_active,
            'fitvids_active' => $magsoul_fitvids_active,
            'backtotop_active' => $magsoul_backtotop_active,
        )
    );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'magsoul_scripts' );

/**
 * Enqueue styles for the block-based editor.
 */
function magsoul_block_editor_styles() {
    wp_enqueue_style( 'magsoul-block-editor-style', get_template_directory_uri() . '/assets/css/editor-blocks.css', array(), null );
}
add_action( 'enqueue_block_editor_assets', 'magsoul_block_editor_styles' );

/**
 * Enqueue customizer styles.
 */
function magsoul_enqueue_customizer_styles() {
    wp_enqueue_style( 'magsoul-customizer', get_template_directory_uri() . '/assets/css/customizer.css', array(), null );
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), null );
}
add_action( 'customize_controls_enqueue_scripts', 'magsoul_enqueue_customizer_styles' );