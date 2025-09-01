<?php
/**
* More Custom Functions
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

// Change excerpt length
function magsoul_excerpt_length($length) {
    if ( is_admin() ) {
        return $length;
    }
    $read_more_length = 17;
    if ( magsoul_get_option('read_more_length') ) {
        $read_more_length = magsoul_get_option('read_more_length');
    }
    return apply_filters( 'magsoul_excerpt_length', $read_more_length );
}
add_filter('excerpt_length', 'magsoul_excerpt_length');

// Change excerpt more word
function magsoul_excerpt_more($more) {
    if ( is_admin() ) {
        return $more;
    }
    return '...';
}
add_filter('excerpt_more', 'magsoul_excerpt_more');


if ( ! function_exists( 'wp_body_open' ) ) :
    /**
     * Fire the wp_body_open action.
     *
     * Added for backwards compatibility to support pre 5.2.0 WordPress versions.
     */
    function wp_body_open() { // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedFunctionFound
        /**
         * Triggered after the opening <body> tag.
         */
        do_action( 'wp_body_open' ); // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedHooknameFound
    }
endif;

function magsoul_grid_post_title_length() {
    $post_title_length_home = 6;
    if ( magsoul_get_option('post_title_length_home') ) {
        $post_title_length_home = magsoul_get_option('post_title_length_home');
    }
    return apply_filters( 'magsoul_grid_post_title_length', $post_title_length_home );
}

function magsoul_add_menu_search_button( $items, $args ) {

    // Only used for the main menu
    if ( 'primary' != $args->theme_location ) {
        return $items;
    }

    $search_button = '';

    $mobile_menu_close_button = '<li class="magsoul-primary-menu-close-item"><a href="' . esc_url( '#' ) . '" aria-label="'.esc_attr__('Menu Close Button','magsoul').'" class="magsoul-mobile-mennu-close"><i class="fas fa-xmark" aria-hidden="true" title="'.esc_attr__('Close','magsoul').'"></i></a></li>';

    $items = $items . $search_button . $mobile_menu_close_button;
    return $items;

}
add_filter( 'wp_nav_menu_items', 'magsoul_add_menu_search_button', 10, 2 );

if ( magsoul_get_option('disable_lazy_load') ) {
add_filter( 'wp_lazy_loading_enabled', '__return_false', 1000 );
}

if ( !(magsoul_get_option('enable_widgets_block_editor')) ) {
    // Disables the block editor from managing widgets in the Gutenberg plugin.
    add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );

    // Disables the block editor from managing widgets.
    add_filter( 'use_widgets_block_editor', '__return_false' );
}

if ( ! function_exists( 'magsoul_remove_theme_support' ) ) :
function magsoul_remove_theme_support() {

    if ( magsoul_is_fitvids_active() ) {
        // Remove responsive embedded content support.
        remove_theme_support( 'responsive-embeds' );
    }

}
endif;
add_action( 'after_setup_theme', 'magsoul_remove_theme_support', 1000 );