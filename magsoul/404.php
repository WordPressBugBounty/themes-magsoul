<?php
/**
* The template for displaying 404 pages (not found).
*
* @link https://codex.wordpress.org/Creating_an_Error_404_Page
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

get_header(); ?>

<div class='magsoul-main-wrapper magsoul-clearfix' id='magsoul-main-wrapper' itemscope='itemscope' itemtype='http://schema.org/Blog' role='main'>
<div class='theiaStickySidebar'>
<div class="magsoul-main-wrapper-inside magsoul-clearfix">

<div class='magsoul-posts-wrapper' id='magsoul-posts-wrapper'>

<div class='magsoul-posts magsoul-box'>
<div class="magsoul-box-inside">

<div class="magsoul-page-header-outside">
<header class="magsoul-page-header">
<div class="magsoul-page-header-inside">
    <h1 class="page-title"><?php esc_html_e( 'Oops! That page can not be found.', 'magsoul' ); ?></h1>
</div>
</header><!-- .magsoul-page-header -->
</div>

<div class='magsoul-posts-content'>

    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'magsoul' ); ?></p>

    <?php get_search_form(); ?>

</div>

</div>
</div>

</div><!--/#magsoul-posts-wrapper -->

<?php magsoul_404_widgets(); ?>

</div>
</div>
</div><!-- /#magsoul-main-wrapper -->

<?php get_footer(); ?>