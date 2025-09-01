<?php
/**
* Customizer Options
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function magsoul_inline_css() {
    $custom_css = '';

    if ( !(magsoul_is_backtotop_active()) ) {
        $custom_css .= '.magsoul-scroll-top{display:none !important;}';
    }
    if ( magsoul_get_option('hide_tagline_mobile') ) {
        $custom_css .= '@media screen and (max-width: 599px){.magsoul-site-description{display:none !important;}.magsoul-site-title{margin-bottom:0 !important;}}';
    }
    if ( magsoul_get_option('header_image_title_mobile') ) {
        $custom_css .= '.magsoul-header-image .magsoul-header-image-info{display:block !important;}';
        $custom_css .= '.magsoul-header-image .magsoul-header-image-info .magsoul-header-image-site-title{display:block !important;}';
    }
    if ( magsoul_get_option('header_image_description_mobile') ) {
        $custom_css .= '.magsoul-header-image .magsoul-header-image-info{display:block !important;}';
        $custom_css .= '.magsoul-header-image .magsoul-header-image-info .magsoul-header-image-site-description{display:block !important;}';
    }
    if ( magsoul_get_option('header_image_cover') ) {
        if ( magsoul_get_option('header_image_height_mobile') ) {
            $custom_css .= '@media screen and (max-width: 599px){.magsoul-header-image-cover .magsoul-header-img{min-height:'.esc_html( magsoul_get_option('header_image_height_mobile') ).';}}';
        }
    }
    if ( magsoul_get_option('header_padding') ) {
        $custom_css .= '.magsoul-header-inside-content{padding:'.esc_html( magsoul_get_option('header_padding') ).';}';
    }
    if ( !(magsoul_get_option('no_limit_logo_width')) ) {
        if ( magsoul_logo_max_width() ) {
            $custom_css .= '.magsoul-logo-img{max-width:'.esc_html( magsoul_logo_max_width() ).';}';
        }
    }
    if( '' != $custom_css ) {
        wp_add_inline_style( 'magsoul-maincss', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'magsoul_inline_css' );

// Header styles
if ( ! function_exists( 'magsoul_header_style' ) ) :
function magsoul_header_style() {
    $header_text_color = get_header_textcolor();
    //if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) { return; }
    ?>
    <style type="text/css">
    <?php if ( ! display_header_text() ) : ?>
        .magsoul-site-title, .magsoul-site-description {position:absolute !important;word-wrap:normal !important;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(1px,1px,1px,1px);-webkit-clip-path:inset(50%);clip-path:inset(50%);white-space:nowrap;border:0;}
    <?php else : ?>
        .magsoul-site-title, .magsoul-site-title a, .magsoul-site-description {color: #<?php echo esc_attr( $header_text_color ); ?>;}
    <?php endif; ?>
    </style>
    <?php
}
endif;