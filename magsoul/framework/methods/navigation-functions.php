<?php
/**
* Posts navigation functions
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'magsoul_wp_pagenavi' ) ) :
function magsoul_wp_pagenavi() {
    ?>
    <nav class="navigation posts-navigation magsoul-clearfix" role="navigation">
        <?php wp_pagenavi(); ?>
    </nav><!-- .navigation -->
    <?php
}
endif;

if ( ! function_exists( 'magsoul_posts_navigation' ) ) :
function magsoul_posts_navigation() {
    if ( !(magsoul_get_option('hide_posts_navigation')) ) {
        if ( function_exists( 'wp_pagenavi' ) ) {
            magsoul_wp_pagenavi();
        } else {
            if ( magsoul_get_option('posts_navigation_type') === 'normalnavi' ) {
                the_posts_navigation(array('prev_text' => esc_html__( 'Older posts', 'magsoul' ), 'next_text' => esc_html__( 'Newer posts', 'magsoul' )));
            } else {
                the_posts_pagination(array('mid_size' => 2, 'prev_text' => esc_html__( '&larr; Newer posts', 'magsoul' ), 'next_text' => esc_html__( 'Older posts &rarr;', 'magsoul' )));
            }
        }
    }
}
endif;

if ( ! function_exists( 'magsoul_post_navigation' ) ) :
function magsoul_post_navigation() {
    global $post;
    if ( !(magsoul_get_option('hide_post_navigation')) ) {
            the_post_navigation(array('prev_text' => esc_html__( '%title &rarr;', 'magsoul' ), 'next_text' => esc_html__( '&larr; %title', 'magsoul' )));
    }
}
endif;