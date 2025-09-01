<?php
/**
* Template part for displaying posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<div id="magsoul-grid-post-<?php the_ID(); ?>" class="magsoul-grid-post magsoul-6-col magsoul-360w-270h-grid-thumbnail magsoul-small-height-grid-thumbnail">
<div class="magsoul-grid-post-inside">

    <div class="magsoul-grid-post-thumbnail magsoul-grid-post-block">
        <?php if ( has_post_thumbnail(get_the_ID()) ) { ?>
            <?php if ( magsoul_get_option('thumbnail_link_home') == 'no' ) { ?>
                <?php the_post_thumbnail('magsoul-360w-270h-image', array('class' => 'magsoul-grid-post-thumbnail-img', 'title' => the_title_attribute('echo=0'))); ?>
            <?php } else { ?>
                <a href="<?php echo esc_url( get_permalink() ); ?>" class="magsoul-grid-post-thumbnail-link" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'magsoul' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail('magsoul-360w-270h-image', array('class' => 'magsoul-grid-post-thumbnail-img', 'title' => the_title_attribute('echo=0'))); ?></a>
            <?php } ?>
        <?php } else { ?>
            <?php if ( magsoul_get_option('thumbnail_link_home') == 'no' ) { ?>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/no-image-360-270.jpg' ); ?>" class="magsoul-grid-post-thumbnail-img"/>
            <?php } else { ?>
                <a href="<?php echo esc_url( get_permalink() ); ?>" class="magsoul-grid-post-thumbnail-link" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'magsoul' ), the_title_attribute( 'echo=0' ) ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/no-image-360-270.jpg' ); ?>" class="magsoul-grid-post-thumbnail-img"/></a>
            <?php } ?>
        <?php } ?>

        <?php if ( magsoul_get_option('show_comments_link_home') && (! post_password_required() && ( comments_open() || get_comments_number() )) ) { ?>
        <div class="magsoul-grid-post-header magsoul-clearfix">
        <?php if ( magsoul_get_option('comments_count_full_home') ) { ?>
        <span class="magsoul-grid-post-comments magsoul-grid-post-header-meta"><i class="far fa-comments" aria-hidden="true"></i>&nbsp;<?php comments_popup_link( sprintf( wp_kses( /* translators: %s: post title */ __( '0 Comment<span class="magsoul-sr-only"> on %s</span>', 'magsoul' ), array( 'span' => array( 'class' => array(), ), ) ), wp_kses_post( get_the_title() ) ) ); ?></span>
        <?php } else { ?>
        <span class="magsoul-grid-post-comments magsoul-grid-post-header-meta"><i class="far fa-comments" aria-hidden="true"></i>&nbsp;<?php comments_popup_link( sprintf( wp_kses( /* translators: %s: post title */ __( '0<span class="magsoul-sr-only"> Comment on %s</span>', 'magsoul' ), array( 'span' => array( 'class' => array(), ), ) ), wp_kses_post( get_the_title() ) ), sprintf( wp_kses( /* translators: %s: post title */ __( '1<span class="magsoul-sr-only"> Comment on %s</span>', 'magsoul' ), array( 'span' => array( 'class' => array(), ), ) ), wp_kses_post( get_the_title() ) ), sprintf( wp_kses( /* translators: %s: post title */ __( '%1$s<span class="magsoul-sr-only"> Comments on %2$s</span>', 'magsoul' ), array( 'span' => array( 'class' => array(), ), ) ), number_format_i18n( get_comments_number() ), wp_kses_post( get_the_title() ) ) ); ?></span>
        <?php } ?>
        </div>
        <?php } ?>

        <?php if ( !(magsoul_get_option('hide_post_author_home')) || !(magsoul_get_option('hide_posted_date_home')) ) { ?>
        <div class="magsoul-grid-post-footer magsoul-grid-post-block">
        <div class="magsoul-grid-post-footer-inside">
        <?php if ( !(magsoul_get_option('hide_post_author_home')) ) { ?><span class="magsoul-grid-post-author magsoul-grid-post-meta"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span><?php } ?>
        <?php if ( magsoul_get_option('post_date_type_home') == 'updated' ) { ?>
            <?php if ( !(magsoul_get_option('hide_posted_date_home')) ) { ?><span class="magsoul-grid-post-date magsoul-grid-post-meta"><?php echo esc_html( get_the_modified_date() ); ?></span><?php } ?>
        <?php } else { ?>
            <?php if ( !(magsoul_get_option('hide_posted_date_home')) ) { ?><span class="magsoul-grid-post-date magsoul-grid-post-meta"><?php echo esc_html( get_the_date() ); ?></span><?php } ?>
        <?php } ?>
        </div>
        </div>
        <?php } ?>
    </div>

    <?php if ( !(magsoul_get_option('hide_post_title_home')) ) { ?>
    <div class="magsoul-grid-post-details magsoul-grid-post-block">

    <?php if ( !(magsoul_get_option('hide_post_title_home')) ) { ?>

    <?php if ( magsoul_get_option('remove_post_title_link_home') ) { ?>

        <?php if ( magsoul_get_option('limit_post_title_home') ) { ?>
            <h3 class="magsoul-grid-post-title"><?php echo esc_html( wp_trim_words( get_the_title(), magsoul_grid_post_title_length(), '...' ) ); ?></h3>
        <?php } else { ?>
            <?php the_title( '<h3 class="magsoul-grid-post-title">', '</h3>' ); ?>
        <?php } ?>

    <?php } else { ?>

        <?php if ( magsoul_get_option('limit_post_title_home') ) { ?>
            <h3 class="magsoul-grid-post-title"><a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'magsoul' ), the_title_attribute( 'echo=0' ) ) ); ?>"><span class="magsoul-grid-post-title-inside magsoul-dashed" data-grid-post-title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>"><?php echo esc_html( wp_trim_words( get_the_title(), magsoul_grid_post_title_length(), '...' ) ); ?></span></a></h3>
        <?php } else { ?>
            <h3 class="magsoul-grid-post-title"><a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'magsoul' ), the_title_attribute( 'echo=0' ) ) ); ?>"><span class="magsoul-grid-post-title-inside magsoul-dashed" data-grid-post-title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></span></a></h3>
        <?php } ?>

    <?php } ?>

    <?php } ?>

    </div>
    <?php } ?>

</div>
</div>