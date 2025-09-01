<?php
/**
* Post meta functions
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'magsoul_post_tags' ) ) :
/**
 * Prints HTML with meta information for the tags.
 */
function magsoul_post_tags() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space after the comma */
        $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'magsoul' ) );
        if ( $tags_list ) {
            /* translators: 1: list of tags. */
            printf( '<span class="magsoul-tags-links"><i class="fas fa-tags" aria-hidden="true"></i> ' . esc_html__( 'Tagged %1$s', 'magsoul' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }
    }
}
endif;

if ( ! function_exists( 'magsoul_single_cats' ) ) :
function magsoul_single_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( ', ', 'magsoul' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<span class="magsoul-entry-meta-single-cats"><i class="far fa-folder-open" aria-hidden="true"></i>&nbsp;' . __( '<span class="magsoul-sr-only">Posted in </span>%1$s', 'magsoul' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }
    }
}
endif;

if ( ! function_exists( 'magsoul_single_postmeta' ) ) :
function magsoul_single_postmeta() { ?>
    <?php global $post; ?>
    <?php if ( !(magsoul_get_option('hide_post_author')) || !(magsoul_get_option('hide_posted_date')) || !(magsoul_get_option('hide_comments_link')) || !(magsoul_get_option('hide_post_categories')) || magsoul_get_option('show_post_edit') ) { ?>
    <div class="magsoul-entry-meta-single">
    <?php if ( !(magsoul_get_option('hide_post_author')) ) { ?><span class="magsoul-entry-meta-single-author"><i class="far fa-user-circle" aria-hidden="true"></i>&nbsp;<span class="author vcard" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span></span><?php } ?>
    <?php if ( magsoul_get_option('post_date_type') == 'updated' ) { ?>
        <?php if ( !(magsoul_get_option('hide_posted_date')) ) { ?><span class="magsoul-entry-meta-single-date"><i class="far fa-clock" aria-hidden="true"></i>&nbsp;<?php echo esc_html( get_the_modified_date() ); ?></span><?php } ?>
    <?php } else { ?>
        <?php if ( !(magsoul_get_option('hide_posted_date')) ) { ?><span class="magsoul-entry-meta-single-date"><i class="far fa-clock" aria-hidden="true"></i>&nbsp;<?php echo esc_html( get_the_date() ); ?></span><?php } ?>
    <?php } ?>
    <?php if ( !(magsoul_get_option('hide_comments_link')) ) { ?><?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
    <span class="magsoul-entry-meta-single-comments"><i class="far fa-comments" aria-hidden="true"></i>&nbsp;<?php comments_popup_link( sprintf( wp_kses( /* translators: %s: post title */ __( 'Leave a Comment<span class="magsoul-sr-only"> on %s</span>', 'magsoul' ), array( 'span' => array( 'class' => array(), ), ) ), wp_kses_post( get_the_title() ) ) ); ?></span>
    <?php } ?><?php } ?>
    <?php if ( !(magsoul_get_option('hide_post_categories')) ) { ?><?php magsoul_single_cats(); ?><?php } ?>
    <?php if ( magsoul_get_option('show_post_edit') ) { ?><?php edit_post_link( sprintf( wp_kses( /* translators: %s: Name of current post. Only visible to screen readers */ __( 'Edit<span class="magsoul-sr-only"> %s</span>', 'magsoul' ), array( 'span' => array( 'class' => array(), ), ) ), wp_kses_post( get_the_title() ) ), '<span class="edit-link">&nbsp;&nbsp;<i class="far fa-edit" aria-hidden="true"></i> ', '</span>' ); ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;

if ( ! function_exists( 'magsoul_page_postmeta' ) ) :
function magsoul_page_postmeta() { ?>
    <?php global $post; ?>
    <?php if ( !(magsoul_get_option('hide_page_author')) || !(magsoul_get_option('hide_page_date')) || !(magsoul_get_option('hide_page_comments')) ) { ?>
    <?php if ( !((is_front_page()) && (magsoul_get_option('hide_static_page_meta'))) ) { ?>
    <div class="magsoul-entry-meta-single">
    <?php if ( !(magsoul_get_option('hide_page_author')) ) { ?><span class="magsoul-entry-meta-single-author"><i class="far fa-user-circle" aria-hidden="true"></i>&nbsp;<span class="author vcard" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span></span><?php } ?>
    <?php if ( !(magsoul_get_option('hide_page_date')) ) { ?><span class="magsoul-entry-meta-single-date"><i class="far fa-clock" aria-hidden="true"></i>&nbsp;<?php echo esc_html( get_the_date() ); ?></span><?php } ?>
    <?php if ( !(magsoul_get_option('hide_page_comments')) ) { ?><?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
    <span class="magsoul-entry-meta-single-comments"><i class="far fa-comments" aria-hidden="true"></i>&nbsp;<?php comments_popup_link( sprintf( wp_kses( /* translators: %s: post title */ __( 'Leave a Comment<span class="magsoul-sr-only"> on %s</span>', 'magsoul' ), array( 'span' => array( 'class' => array(), ), ) ), wp_kses_post( get_the_title() ) ) ); ?></span>
    <?php } ?><?php } ?>
    </div>
    <?php } ?>
    <?php } ?>
<?php }
endif;