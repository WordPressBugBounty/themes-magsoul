<?php
/**
* Template part for displaying page content in page.php.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<?php magsoul_before_single_page(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('magsoul-post-singular magsoul-box'); ?>>
<div class="magsoul-box-inside">

    <?php magsoul_before_single_page_title(); ?>

    <?php if ( !(magsoul_get_option('hide_page_header')) ) { ?>
    <?php if ( !((is_front_page()) && (magsoul_get_option('hide_static_page_title'))) ) { ?>
    <header class="entry-header">
    <div class="entry-header-inside magsoul-clearfix">
        <?php if ( !(magsoul_get_option('hide_page_title')) ) { ?>

        <?php if ( magsoul_get_option('remove_page_title_link') ) { ?>
            <?php the_title( '<h1 class="post-title entry-title">', '</h1>' ); ?>
        <?php } else { ?>
            <?php the_title( sprintf( '<h1 class="post-title entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
        <?php } ?>

        <?php } ?>

        <?php magsoul_page_postmeta(); ?>
    </div>
    </header><!-- .entry-header -->
    <?php } ?>
    <?php } ?>

    <?php magsoul_after_single_page_title(); ?>

    <div class="entry-content magsoul-clearfix">
            <?php
            the_content( sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="magsoul-sr-only"> "%s"</span> <span class="meta-nav">&rarr;</span>', 'magsoul' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                wp_kses_post( get_the_title() )
            ) );

            wp_link_pages( array(
             'before'      => '<div class="magsoul-clearfix"></div><div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'magsoul' ) . '</span>',
             'after'       => '</div>',
             'link_before' => '<span>',
             'link_after'  => '</span>',
             ) );
             ?>
    </div><!-- .entry-content -->

    <?php magsoul_after_single_page_content(); ?>

    <?php
    if ( !(magsoul_get_option('hide_page_edit')) ) {
        edit_post_link(
            sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Edit <span class="magsoul-sr-only">%s</span>', 'magsoul' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                wp_kses_post( get_the_title() )
            ),
            '<footer class="entry-footer magsoul-entry-footer"><div class="magsoul-entry-footer-inside"><span class="edit-link">',
            '</span></div></footer>'
        );
    }
    ?>

</div>
</article>

<?php magsoul_after_single_page(); ?>