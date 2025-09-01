<?php
/**
* Css Classes Functions
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

// Category ids in post class
function magsoul_category_id_class($classes) {
    global $post;
    foreach((get_the_category($post->ID)) as $category) {
        $classes[] = 'wpcat-' . $category->cat_ID . '-id';
    }
    return apply_filters( 'magsoul_category_id_class', $classes );
}
add_filter('post_class', 'magsoul_category_id_class');


// Adds custom classes to the array of body classes.
function magsoul_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'magsoul-group-blog';
    }

    if ( !(magsoul_get_option('disable_loading_animation')) ) {
        $classes[] = 'magsoul-animated magsoul-fadein';
    }

    $classes[] = 'magsoul-theme-is-active';

    if ( get_header_image() ) {
        $classes[] = 'magsoul-header-image-active';
    }

    if ( magsoul_get_option('header_image_cover') ) {
        $classes[] = 'magsoul-header-image-cover';
    }

    if ( has_custom_logo() ) {
        $classes[] = 'magsoul-custom-logo-active';
    }

    if ( is_singular() ) {
        $classes[] = 'magsoul-singular-page';
    } else {
        $classes[] = 'magsoul-non-singular-page';
    }

    $classes[] = 'magsoul-layout-type-full';

    $classes[] = 'magsoul-masonry-inactive';

    if ( is_singular() ) {
        if( is_single() ) {
            if ( magsoul_get_option('featured_media_under_post_title') ) {
                $classes[] = 'magsoul-single-media-under-title';
            }
        }
        if( is_page() ) {
            if ( magsoul_get_option('featured_media_under_page_title') ) {
                $classes[] = 'magsoul-single-media-under-title';
            }
        }
    }

    $classes[] = 'magsoul-layout-full-width';

    $classes[] = 'magsoul-header-style-logo-search-menu';

    if ( display_header_text() ) {
        $classes[] = 'magsoul-header-text-active';
    } else {
        $classes[] = 'magsoul-header-text-inactive';
    }

    if ( magsoul_get_option('hide_tagline') ) {
        $classes[] = 'magsoul-tagline-inactive';
    } else {
        $classes[] = 'magsoul-tagline-active';
    }

    if ( 'beside-title' === magsoul_get_option('logo_location') ) {
        $classes[] = 'magsoul-logo-beside-title';
    } elseif ( 'above-title' === magsoul_get_option('logo_location') ) {
        $classes[] = 'magsoul-logo-above-title';
    } else {
        $classes[] = 'magsoul-logo-above-title';
    }

    if ( magsoul_is_primary_menu_active() ) {
        $classes[] = 'magsoul-primary-menu-active';
    } else {
        $classes[] = 'magsoul-primary-menu-inactive';
    }
    $classes[] = 'magsoul-primary-mobile-menu-active';

    if ( magsoul_is_secondary_menu_active() ) {
        $classes[] = 'magsoul-secondary-menu-active';
    } else {
        $classes[] = 'magsoul-secondary-menu-inactive';
    }
    $classes[] = 'magsoul-secondary-mobile-menu-active';
    if ( !(magsoul_get_option('no_center_secondary_menu')) ) {
        $classes[] = 'magsoul-secondary-menu-centered';
    }

    if ( magsoul_get_option('disable_animation_post_title_home') ) {
        $classes[] = 'magsoul-grid-post-title-normal';
    } else {
        $classes[] = 'magsoul-grid-post-title-animated';
    }

    if ( magsoul_get_option('auto_width_thumbnail') ) {
        $classes[] = 'magsoul-auto-width-thumbnail';
    } else {
        $classes[] = 'magsoul-full-width-thumbnail';
    }

    if ( magsoul_get_option('no_underline_content_links') ) {
        $classes[] = 'magsoul-nouc-links';
    } else {
        $classes[] = 'magsoul-uc-links';
    }

    return apply_filters( 'magsoul_body_classes', $classes );
}
add_filter( 'body_class', 'magsoul_body_classes' );