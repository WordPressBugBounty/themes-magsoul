<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

get_header(); ?>

<div class="magsoul-main-wrapper magsoul-clearfix" id="magsoul-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<div class="theiaStickySidebar">
<div class="magsoul-main-wrapper-inside magsoul-clearfix">

<?php magsoul_before_main_content(); ?>

<?php if ( !(is_front_page() && is_home() && !is_paged() && magsoul_get_option('hide_posts_home')) ) { ?>
<div class="magsoul-posts-wrapper" id="magsoul-posts-wrapper">

<?php if ( !(magsoul_get_option('hide_posts_heading')) ) { ?>
<?php if(is_home() && !is_paged()) { ?>
<?php if ( magsoul_get_option('posts_heading') ) : ?>
<div class="magsoul-posts-header"><h2 class="magsoul-posts-heading"><span class="magsoul-posts-heading-inside"><?php echo esc_html( magsoul_get_option('posts_heading') ); ?></span></h2></div>
<?php else : ?>
<div class="magsoul-posts-header"><h2 class="magsoul-posts-heading"><span class="magsoul-posts-heading-inside"><?php esc_html_e( 'Recent Posts', 'magsoul' ); ?></span></h2></div>
<?php endif; ?>
<?php } ?>
<?php } ?>

<div class="magsoul-posts-content">

<?php if (have_posts()) : ?>

    <div class="magsoul-posts magsoul-posts-grid">
    <?php $magsoul_post_counter=1; while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'template-parts/content-grid' ); ?>

    <?php $magsoul_post_counter++; endwhile; ?>
    </div>
    <div class="clear"></div>

    <?php magsoul_posts_navigation(); ?>

<?php else : ?>

  <?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

</div>

</div><!--/#magsoul-posts-wrapper -->
<?php } ?>

<?php magsoul_after_main_content(); ?>

</div>
</div>
</div><!-- /#magsoul-main-wrapper -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>