<?php
/**
* Template part for displaying single posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<?php magsoul_before_single_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('magsoul-post-singular magsoul-box'); ?>>
<div class="magsoul-box-inside">

    <?php magsoul_before_single_post_title(); ?>

    <?php if ( !(magsoul_get_option('hide_post_breadcrumbs')) ) { ?>
        <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<div class="magsoul-entry-meta-single magsoul-entry-meta-single-top magsoul-entry-meta-single-breadcrumbs"><p id="magsoul-yoast-breadcrumbs">','</p></div>' ); } ?>
    <?php } ?>

    <?php if ( !(magsoul_get_option('hide_post_header')) ) { ?>
    <header class="entry-header">
    <div class="entry-header-inside magsoul-clearfix">
        <?php if ( !(magsoul_get_option('hide_post_title')) ) { ?>

        <?php if ( magsoul_get_option('remove_post_title_link') ) { ?>
            <?php the_title( '<h1 class="post-title entry-title">', '</h1>' ); ?>
        <?php } else { ?>
            <?php the_title( sprintf( '<h1 class="post-title entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
        <?php } ?>

        <?php } ?>

        <?php magsoul_single_postmeta(); ?>
    </div>
    </header><!-- .entry-header -->
    <?php } ?>

    <?php if ( !(magsoul_get_option('hide_share_buttons')) ) { ?>
        <?php echo wp_kses_post( force_balance_tags( magsoul_social_sharing_buttons() ) ); ?>
    <?php } ?>

    <?php magsoul_after_single_post_title(); ?>

    <div class="entry-content magsoul-clearfix">
            <?php
            magsoul_top_single_post_content();

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

            magsoul_bottom_single_post_content();
            ?>
    </div><!-- .entry-content -->

    <?php magsoul_after_single_post_content(); ?>

    <?php if ( !(magsoul_get_option('hide_author_bio_box')) ) { ?>
        <?php echo wp_kses_post( force_balance_tags( magsoul_add_author_bio_box() ) ); ?>
    <?php } ?>

    <?php if ( !(magsoul_get_option('hide_post_tags')) ) { ?>
    <?php if ( has_tag() ) { ?>
    <footer class="entry-footer magsoul-entry-footer">
    <div class="magsoul-entry-footer-inside">
        <?php magsoul_post_tags(); ?>
    </div>
    </footer><!-- .entry-footer -->
    <?php } ?>
    <?php } ?>

</div>
</article>

<?php magsoul_after_single_post(); ?>