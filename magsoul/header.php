<?php
/**
* The header for MagSoul theme.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="magsoul-site-body" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#magsoul-content-wrapper"><?php esc_html_e( 'Skip to content', 'magsoul' ); ?></a>

<?php magsoul_header_image(); ?>

<?php if ( 'before-header' === magsoul_secondary_menu_location() ) { ?><?php magsoul_secondary_menu_area(); ?><?php } ?>

<?php magsoul_before_header(); ?>

<div class="magsoul-site-header magsoul-container" id="magsoul-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">
<div class="magsoul-head-content magsoul-clearfix" id="magsoul-head-content">

<?php if ( magsoul_is_header_content_active() ) { ?>
<div class="magsoul-header-inside magsoul-clearfix">
<div class="magsoul-header-inside-content magsoul-clearfix">
<div class="magsoul-outer-wrapper magsoul-header-outer-wrapper">
<div class="magsoul-header-inside-container">

<?php if ( magsoul_is_primary_menu_active() ) { ?><div class="magsoul-primary-menu-mobile-button" id="magsoul-primary-menu-mobile-button"><button class="magsoul-primary-responsive-menu-icon" aria-controls="magsoul-menu-primary-navigation" aria-expanded="false"><?php if ( magsoul_primary_menu_text() ) { ?>&nbsp;&nbsp;<?php echo esc_html( magsoul_primary_menu_text() ); ?><?php } ?></button></div><?php } ?>

<div class="magsoul-header-layout-logo magsoul-header-layout-item">
<div class="magsoul-header-layout-logo-inside magsoul-header-layout-item-inside">
<?php if ( has_custom_logo() ) : ?>
    <div class="site-branding site-branding-full">
    <div class="magsoul-custom-logo-image">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="magsoul-logo-img-link">
        <img src="<?php echo esc_url( magsoul_custom_logo() ); ?>" alt="" class="magsoul-logo-img"/>
    </a>
    </div>
    <div class="magsoul-logo-info magsoul-custom-logo-info"><?php magsoul_site_title(); ?></div>
    </div>
<?php else: ?>
    <div class="site-branding">
      <div class="magsoul-logo-info"><?php magsoul_site_title(); ?></div>
    </div>
<?php endif; ?>
</div>
</div>

<div class="magsoul-header-layout-search magsoul-header-layout-item">
<div class="magsoul-header-layout-search-inside magsoul-header-layout-item-inside">
<?php get_search_form(); ?>
</div>
</div>

<?php if ( magsoul_is_primary_menu_active() ) { ?>
<div class="magsoul-header-layout-menu magsoul-header-layout-item">
<div class="magsoul-header-layout-menu-inside magsoul-header-layout-item-inside">
<div class="magsoul-container magsoul-primary-menu-container magsoul-clearfix">
<div class="magsoul-primary-menu-container-inside magsoul-clearfix">
<nav class="magsoul-nav-primary" id="magsoul-primary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'magsoul' ); ?>">
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'magsoul-menu-primary-navigation', 'menu_class' => 'magsoul-primary-nav-menu magsoul-menu-primary magsoul-clearfix', 'fallback_cb' => 'magsoul_primary_fallback_menu', 'container' => '', ) ); ?>
</nav>
</div>
</div>
</div>
</div>
<?php } ?>

<?php if ( magsoul_is_primary_menu_active() ) { ?><?php if ( !(magsoul_get_option('hide_header_search_button')) ) { ?><div class="magsoul-search-mobile-button" id="magsoul-search-mobile-button"><button class="magsoul-search-mobile-btn" aria-label="<?php esc_attr_e( 'Search', 'magsoul' ); ?>" title="<?php esc_attr_e('Search','magsoul'); ?>"><?php if ( magsoul_search_button_text() ) { ?>&nbsp;&nbsp;<?php echo esc_html( magsoul_search_button_text() ); ?><?php } ?></button></div><?php } ?><?php } ?>

</div>
</div>
</div>
</div>
<?php } else { ?>
<div class="magsoul-no-header-content">
  <?php magsoul_site_title(); ?>
</div>
<?php } ?>

</div><!--/#magsoul-head-content -->
</div><!--/#magsoul-header -->

<?php if ( magsoul_is_primary_menu_active() ) { ?>
<?php if ( !(magsoul_get_option('hide_header_search_button')) ) { ?>
<div id="magsoul-search-overlay-wrap" class="magsoul-search-overlay">
  <div class="magsoul-search-overlay-content">
    <?php get_search_form(); ?>
  </div>
  <button class="magsoul-search-closebtn" aria-label="<?php esc_attr_e( 'Close Search', 'magsoul' ); ?>" title="<?php esc_attr_e('Close Search','magsoul'); ?>">&#xD7;</button>
</div>
<?php } ?>
<?php } ?>

<?php magsoul_after_header(); ?>

<div id="magsoul-header-end"></div>

<?php if ( 'after-header' === magsoul_secondary_menu_location() ) { ?><?php magsoul_secondary_menu_area(); ?><?php } ?>

<?php magsoul_top_wide_widgets(); ?>

<div class="magsoul-outer-wrapper magsoul-main-area-outer-wrapper" id="magsoul-wrapper-outside">

<div class="magsoul-container magsoul-clearfix" id="magsoul-wrapper">
<div class="magsoul-content-wrapper magsoul-clearfix" id="magsoul-content-wrapper">