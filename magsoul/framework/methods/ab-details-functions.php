<?php
/**
* Author bio box
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function magsoul_add_author_bio_box() {
    $content='';
    if (is_single()) {
        $content .= '
            <div class="magsoul-author-bio">
            <div class="magsoul-author-bio-inside">
            <div class="magsoul-author-bio-top">
            <span class="magsoul-author-bio-gravatar">
                '. get_avatar( get_the_author_meta('email') , 80 ) .'
            </span>
            <div class="magsoul-author-bio-text">
                <div class="magsoul-author-bio-name">'.esc_html__( 'Author: ', 'magsoul' ).'<span>'. get_the_author_link() .'</span></div><div class="magsoul-author-bio-text-description">'. wp_kses_post( get_the_author_meta('description',get_query_var('author') ) ) .'</div>
            </div>
            </div>
            </div>
            </div>
        ';
    }
    return apply_filters( 'magsoul_add_author_bio_box', $content );
}