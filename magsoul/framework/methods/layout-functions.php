<?php
/**
* Layout Functions
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function magsoul_hide_footer_widgets() {
    $hide_footer_widgets = false;

    if ( magsoul_get_option('hide_footer_widgets') ) {
        $hide_footer_widgets = true;
    }

    return apply_filters( 'magsoul_hide_footer_widgets', $hide_footer_widgets );
}

function magsoul_is_header_content_active() {
    $header_content_active = true;

    if ( magsoul_get_option('hide_header_content') ) {
        $header_content_active = false;
    }

    return apply_filters( 'magsoul_is_header_content_active', $header_content_active );
}

function magsoul_is_primary_menu_active() {
    $primary_menu_active = true;

    if ( magsoul_get_option('disable_primary_menu') ) {
        $primary_menu_active = false;
    }

    return apply_filters( 'magsoul_is_primary_menu_active', $primary_menu_active );
}

function magsoul_is_secondary_menu_active() {
    $secondary_menu_active = true;

    if ( magsoul_get_option('disable_secondary_menu') ) {
        $secondary_menu_active = false;
    }

    return apply_filters( 'magsoul_is_secondary_menu_active', $secondary_menu_active );
}

function magsoul_is_sticky_header_active() {
    $sticky_header_active = true;

    if ( magsoul_get_option('disable_sticky_header') ) {
        $sticky_header_active = false;
    }

    return apply_filters( 'magsoul_is_sticky_header_active', $sticky_header_active );
}

function magsoul_is_sticky_mobile_header_active() {
    $sticky_mobile_header_active = false;

    if ( magsoul_get_option('enable_sticky_mobile_header') ) {
        $sticky_mobile_header_active = true;
    }

    return apply_filters( 'magsoul_is_sticky_mobile_header_active', $sticky_mobile_header_active );
}

function magsoul_is_social_buttons_active() {
    $footer_social_buttons_active = true;

    if ( magsoul_get_option('hide_footer_social_buttons') ) {
        $footer_social_buttons_active = false;
    }

    return apply_filters( 'magsoul_is_social_buttons_active', $footer_social_buttons_active );
}

function magsoul_is_fitvids_active() {
    $fitvids_active = true;

    if ( magsoul_get_option('disable_fitvids') ) {
        $fitvids_active = false;
    }

    return apply_filters( 'magsoul_is_fitvids_active', $fitvids_active );
}

function magsoul_is_backtotop_active() {
    $backtotop_active = true;

    if ( magsoul_get_option('disable_backtotop') ) {
        $backtotop_active = false;
    }

    return apply_filters( 'magsoul_is_backtotop_active', $backtotop_active );
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function magsoul_content_width() {
    $content_width = 1218;

    $GLOBALS['content_width'] = apply_filters( 'magsoul_content_width', $content_width ); /* phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound */
}
add_action( 'template_redirect', 'magsoul_content_width', 0 );