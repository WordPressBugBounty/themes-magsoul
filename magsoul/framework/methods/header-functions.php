<?php
/**
* Header Functions
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function magsoul_pingback_header() {
    if ( is_singular() && pings_open() ) {
        echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
    }
}
add_action( 'wp_head', 'magsoul_pingback_header' );

// Get custom-logo URL
function magsoul_custom_logo() {
    if ( ! has_custom_logo() ) {return;}
    $magsoul_custom_logo_id = get_theme_mod( 'custom_logo' );
    $magsoul_logo = wp_get_attachment_image_src( $magsoul_custom_logo_id , 'full' );
    $magsoul_logo_src = $magsoul_logo[0];
    return apply_filters( 'magsoul_custom_logo', $magsoul_logo_src );
}

// Site Title
function magsoul_site_title() {
    if ( is_front_page() && is_home() ) { ?>
            <h1 class="magsoul-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php if ( !(magsoul_get_option('hide_tagline')) ) { ?><p class="magsoul-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_home() ) { ?>
            <h1 class="magsoul-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php if ( !(magsoul_get_option('hide_tagline')) ) { ?><p class="magsoul-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_singular() ) { ?>
            <p class="magsoul-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(magsoul_get_option('hide_tagline')) ) { ?><p class="magsoul-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_category() ) { ?>
            <p class="magsoul-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(magsoul_get_option('hide_tagline')) ) { ?><p class="magsoul-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_tag() ) { ?>
            <p class="magsoul-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(magsoul_get_option('hide_tagline')) ) { ?><p class="magsoul-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_author() ) { ?>
            <p class="magsoul-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(magsoul_get_option('hide_tagline')) ) { ?><p class="magsoul-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_archive() && !is_category() && !is_tag() && !is_author() ) { ?>
            <p class="magsoul-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(magsoul_get_option('hide_tagline')) ) { ?><p class="magsoul-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_search() ) { ?>
            <p class="magsoul-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(magsoul_get_option('hide_tagline')) ) { ?><p class="magsoul-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } elseif ( is_404() ) { ?>
            <p class="magsoul-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php if ( !(magsoul_get_option('hide_tagline')) ) { ?><p class="magsoul-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php } else { ?>
            <h1 class="magsoul-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php if ( !(magsoul_get_option('hide_tagline')) ) { ?><p class="magsoul-site-description"><?php bloginfo( 'description' ); ?></p><?php } ?>
    <?php }
}

function magsoul_header_image_destination() {
    $url = home_url( '/' );

    if ( magsoul_get_option('header_image_destination') ) {
        $url = magsoul_get_option('header_image_destination');
    }

    return apply_filters( 'magsoul_header_image_destination', $url );
}

function magsoul_header_image_alt_text() {
    $header_image_alt_text = get_bloginfo( 'name' );

    if ( magsoul_get_option('header_image_alt_text') ) {
        $header_image_alt_text = magsoul_get_option('header_image_alt_text');
    }

    return apply_filters( 'magsoul_header_image_alt_text', $header_image_alt_text );
}

function magsoul_header_image_markup() {
    if ( get_header_image() ) {
        if ( magsoul_get_option('remove_header_image_link') ) {
            the_header_image_tag( array( 'class' => 'magsoul-header-img', 'alt' => esc_attr( magsoul_header_image_alt_text() ) ) );
        } else { ?>
            <a href="<?php echo esc_url( magsoul_header_image_destination() ); ?>" rel="home" class="magsoul-header-img-link"><?php the_header_image_tag( array( 'class' => 'magsoul-header-img', 'alt' => esc_attr( magsoul_header_image_alt_text() ) ) ); ?></a>
        <?php }
    }
}

function magsoul_header_image_details() {
    global $post;

    $header_image_custom_title = '';
    if ( magsoul_get_option('header_image_custom_title') ) {
        $header_image_custom_title = magsoul_get_option('header_image_custom_title');
    }

    $header_image_custom_description = '';
    if ( magsoul_get_option('header_image_custom_description') ) {
        $header_image_custom_description = magsoul_get_option('header_image_custom_description');
    }

    if ( !(magsoul_get_option('hide_header_image_details')) ) {
    if ( magsoul_get_option('header_image_custom_text') ) {
        if ( $header_image_custom_title || $header_image_custom_description ) { ?>
            <div class="magsoul-header-image-info">
            <div class="magsoul-header-image-info-inside">
                <?php if ( !(magsoul_get_option('hide_header_image_title')) ) { ?><?php if ( $header_image_custom_title ) { ?><p class="magsoul-header-image-site-title magsoul-header-image-block"><?php echo wp_kses_post( force_balance_tags( do_shortcode($header_image_custom_title) ) ); ?></p><?php } ?><?php } ?>
                <?php if ( !(magsoul_get_option('hide_header_image_description')) ) { ?><?php if ( $header_image_custom_description ) { ?><p class="magsoul-header-image-site-description magsoul-header-image-block"><?php echo wp_kses_post( force_balance_tags( do_shortcode($header_image_custom_description) ) ); ?></p><?php } ?><?php } ?>
            </div>
            </div>
        <?php }
    } else { ?>
        <div class="magsoul-header-image-info">
        <div class="magsoul-header-image-info-inside">
            <?php if ( !(magsoul_get_option('hide_header_image_title')) ) { ?><p class="magsoul-header-image-site-title magsoul-header-image-block"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p><?php } ?>
            <?php if ( !(magsoul_get_option('hide_header_image_description')) ) { ?><p class="magsoul-header-image-site-description magsoul-header-image-block"><?php bloginfo( 'description' ); ?></p><?php } ?>
        </div>
        </div>
    <?php }
    }
}

function magsoul_header_image_wrapper() { ?>
    <div class="magsoul-header-image magsoul-clearfix">
    <?php magsoul_header_image_markup(); ?>
    <?php magsoul_header_image_details(); ?>
    </div>
    <?php
}

function magsoul_header_image() {
    if ( magsoul_get_option('hide_header_image') ) { return; }
    if ( get_header_image() ) {
        magsoul_header_image_wrapper();
    }
}

function magsoul_logo_max_width() {
    $logo_max_width = '320px';

    if ( magsoul_get_option('logo_max_width') ) {
        $logo_max_width = magsoul_get_option('logo_max_width');
    }

    return apply_filters( 'magsoul_logo_max_width', $logo_max_width );
}

function magsoul_search_button_text() {
   $search_text = '';
    if ( magsoul_get_option('search_button_text') ) {
        $search_text = magsoul_get_option('search_button_text');
    }
   return apply_filters( 'magsoul_search_button_text', $search_text );
}