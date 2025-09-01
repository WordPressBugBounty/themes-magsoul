<?php
/**
* Media functions
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function magsoul_media_content_single() {
    global $post;
    if ( has_post_thumbnail($post->ID) ) {
        if ( !(magsoul_get_option('hide_thumbnail')) ) {
            if ( magsoul_get_option('thumbnail_link') == 'no' ) { ?>
                <div class="magsoul-post-thumbnail-single">
                <?php the_post_thumbnail('magsoul-1218w-autoh-image', array('class' => 'magsoul-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0'))); ?>
                </div>
            <?php } else { ?>
                <div class="magsoul-post-thumbnail-single">
                <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'magsoul' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="magsoul-post-thumbnail-single-link"><?php the_post_thumbnail('magsoul-1218w-autoh-image', array('class' => 'magsoul-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0'))); ?></a>
                </div>
    <?php   }
        }
    }
}

function magsoul_media_content_single_location() {
    global $post;
    if( magsoul_get_option('featured_media_under_post_title') ) {
        add_action('magsoul_after_single_post_title', 'magsoul_media_content_single', 10 );
    } else {
        add_action('magsoul_before_single_post_title', 'magsoul_media_content_single', 10 );
    }
}
add_action('template_redirect', 'magsoul_media_content_single_location', 100 );

function magsoul_media_content_page() {
    global $post;
    if ( has_post_thumbnail($post->ID) ) {
        if ( !(magsoul_get_option('hide_page_thumbnail')) ) {
            if ( magsoul_get_option('thumbnail_link_page') == 'no' ) { ?>
                <div class="magsoul-post-thumbnail-single">
                <?php the_post_thumbnail('magsoul-1218w-autoh-image', array('class' => 'magsoul-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0'))); ?>
                </div>
            <?php } else { ?>
                <div class="magsoul-post-thumbnail-single">
                <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'magsoul' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="magsoul-post-thumbnail-single-link"><?php the_post_thumbnail('magsoul-1218w-autoh-image', array('class' => 'magsoul-post-thumbnail-single-img', 'title' => the_title_attribute('echo=0'))); ?></a>
                </div>
    <?php   }
        }
    }
}

function magsoul_media_content_page_location() {
    global $post;
    if( magsoul_get_option('featured_media_under_page_title') ) {
        add_action('magsoul_after_single_page_title', 'magsoul_media_content_page', 10 );
    } else {
        add_action('magsoul_before_single_page_title', 'magsoul_media_content_page', 10 );
    }
}
add_action('template_redirect', 'magsoul_media_content_page_location', 110 );