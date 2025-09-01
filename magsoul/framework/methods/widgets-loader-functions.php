<?php
/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function magsoul_register_sidebars() {
    $sidebars = [
        [
            'id' => 'magsoul-home-fullwidth-widgets',
            'name' => esc_html__( 'Top Full Width Widgets (Default HomePage)', 'magsoul' ),
            'description' => esc_html__( 'This full-width widget area is located after the header of your website. Widgets of this widget area are displayed on the default homepage of your website (when you are showing your latest posts on homepage).', 'magsoul' ),
            'before_widget' => '<div id="%1$s" class="magsoul-main-widget widget magsoul-widget-box %2$s"><div class="magsoul-widget-box-inside">',
            'after_widget' => '</div></div>',
            'before_title' => '<div class="magsoul-widget-header"><h2 class="magsoul-widget-title"><span class="magsoul-widget-title-inside">',
            'after_title' => '</span></h2></div>',
        ],
        [
            'id' => 'magsoul-fullwidth-widgets',
            'name' => esc_html__( 'Top Full Width Widgets (Everywhere)', 'magsoul' ),
            'description' => esc_html__( 'This full-width widget area is located after the header of your website. Widgets of this widget area are displayed on every page of your website.', 'magsoul' ),
            'before_widget' => '<div id="%1$s" class="magsoul-main-widget widget magsoul-widget-box %2$s"><div class="magsoul-widget-box-inside">',
            'after_widget' => '</div></div>',
            'before_title' => '<div class="magsoul-widget-header"><h2 class="magsoul-widget-title"><span class="magsoul-widget-title-inside">',
            'after_title' => '</span></h2></div>',
        ],
        [
            'id' => 'magsoul-home-fullwidth-bottom-widgets',
            'name' => esc_html__( 'Bottom Full Width Widgets (Default HomePage)', 'magsoul' ),
            'description' => esc_html__( 'This full-width widget area is located before the footer of your website. Widgets of this widget area are displayed on the default homepage of your website (when you are showing your latest posts on homepage).', 'magsoul' ),
            'before_widget' => '<div id="%1$s" class="magsoul-main-widget widget magsoul-widget-box %2$s"><div class="magsoul-widget-box-inside">',
            'after_widget' => '</div></div>',
            'before_title' => '<div class="magsoul-widget-header"><h2 class="magsoul-widget-title"><span class="magsoul-widget-title-inside">',
            'after_title' => '</span></h2></div>',
        ],
        [
            'id' => 'magsoul-fullwidth-bottom-widgets',
            'name' => esc_html__( 'Bottom Full Width Widgets (Everywhere)', 'magsoul' ),
            'description' => esc_html__( 'This full-width widget area is located before the footer of your website. Widgets of this widget area are displayed on every page of your website.', 'magsoul' ),
            'before_widget' => '<div id="%1$s" class="magsoul-main-widget widget magsoul-widget-box %2$s"><div class="magsoul-widget-box-inside">',
            'after_widget' => '</div></div>',
            'before_title' => '<div class="magsoul-widget-header"><h2 class="magsoul-widget-title"><span class="magsoul-widget-title-inside">',
            'after_title' => '</span></h2></div>',
        ],
        [
            'id' => 'magsoul-single-post-bottom-widgets',
            'name' => esc_html__( 'Single Post Bottom Widgets', 'magsoul' ),
            'description' => esc_html__( 'This widget area is located at the bottom of single post of any post type (except attachments and pages).', 'magsoul' ),
            'before_widget' => '<div id="%1$s" class="magsoul-main-widget widget magsoul-widget-box %2$s"><div class="magsoul-widget-box-inside">',
            'after_widget' => '</div></div>',
            'before_title' => '<div class="magsoul-widget-header"><h2 class="magsoul-widget-title"><span class="magsoul-widget-title-inside">',
            'after_title' => '</span></h2></div>',
        ],
        [
            'id' => 'magsoul-top-footer',
            'name' => esc_html__( 'Footer Top Widgets', 'magsoul' ),
            'description' => esc_html__( 'This widget area is located on the top of the footer of your website.', 'magsoul' ),
            'before_widget' => '<div id="%1$s" class="magsoul-footer-widget widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="magsoul-widget-title"><span class="magsoul-widget-title-inside">',
            'after_title' => '</span></h2>',
        ],
        [
            'id' => 'magsoul-footer-1',
            'name' => esc_html__( 'Footer 1 Widgets', 'magsoul' ),
            'description' => esc_html__( 'This widget area is the column 1 of the footer of your website.', 'magsoul' ),
            'before_widget' => '<div id="%1$s" class="magsoul-footer-widget widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="magsoul-widget-title"><span class="magsoul-widget-title-inside">',
            'after_title' => '</span></h2>',
        ],
        [
            'id' => 'magsoul-footer-2',
            'name' => esc_html__( 'Footer 2 Widgets', 'magsoul' ),
            'description' => esc_html__( 'This widget area is the column 2 of the footer of your website.', 'magsoul' ),
            'before_widget' => '<div id="%1$s" class="magsoul-footer-widget widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="magsoul-widget-title"><span class="magsoul-widget-title-inside">',
            'after_title' => '</span></h2>',
        ],
        [
            'id' => 'magsoul-footer-3',
            'name' => esc_html__( 'Footer 3 Widgets', 'magsoul' ),
            'description' => esc_html__( 'This widget area is the column 3 of the footer of your website.', 'magsoul' ),
            'before_widget' => '<div id="%1$s" class="magsoul-footer-widget widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="magsoul-widget-title"><span class="magsoul-widget-title-inside">',
            'after_title' => '</span></h2>',
        ],
        [
            'id' => 'magsoul-footer-4',
            'name' => esc_html__( 'Footer 4 Widgets', 'magsoul' ),
            'description' => esc_html__( 'This widget area is the column 4 of the footer of your website.', 'magsoul' ),
            'before_widget' => '<div id="%1$s" class="magsoul-footer-widget widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="magsoul-widget-title"><span class="magsoul-widget-title-inside">',
            'after_title' => '</span></h2>',
        ],
        [
            'id' => 'magsoul-bottom-footer',
            'name' => esc_html__( 'Footer Bottom Widgets', 'magsoul' ),
            'description' => esc_html__( 'This widget area is located on the bottom of the footer of your website.', 'magsoul' ),
            'before_widget' => '<div id="%1$s" class="magsoul-footer-widget widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="magsoul-widget-title"><span class="magsoul-widget-title-inside">',
            'after_title' => '</span></h2>',
        ],
        [
            'id' => 'magsoul-404-widgets',
            'name' => esc_html__( '404 Page Widgets', 'magsoul' ),
            'description' => esc_html__( 'This widget area is located on the 404(not found) page of your website.', 'magsoul' ),
            'before_widget' => '<div id="%1$s" class="magsoul-main-widget widget magsoul-widget-box %2$s"><div class="magsoul-widget-box-inside">',
            'after_widget' => '</div></div>',
            'before_title' => '<div class="magsoul-widget-header"><h2 class="magsoul-widget-title"><span class="magsoul-widget-title-inside">',
            'after_title' => '</span></h2></div>',
        ],
    ];

    foreach ($sidebars as $sidebar) {
        register_sidebar($sidebar);
    }
}

add_action('widgets_init', 'magsoul_register_sidebars');

function magsoul_top_wide_widgets() { ?>

<?php if ( is_active_sidebar( 'magsoul-home-fullwidth-widgets' ) || is_active_sidebar( 'magsoul-fullwidth-widgets' ) ) : ?>
<div class="magsoul-top-wrapper-outer magsoul-clearfix">
<div class="magsoul-featured-posts-area magsoul-top-wrapper magsoul-clearfix">
<div class="magsoul-outer-wrapper magsoul-fullwidth-widgets-outer-wrapper">
<?php
if ( is_front_page() && is_home() && !is_paged() ) {
    dynamic_sidebar( 'magsoul-home-fullwidth-widgets' );
}

dynamic_sidebar( 'magsoul-fullwidth-widgets' );
?>
</div>
</div>
</div>
<?php endif; ?>

<?php }

function magsoul_bottom_wide_widgets() { ?>

<?php if ( is_active_sidebar( 'magsoul-home-fullwidth-bottom-widgets' ) || is_active_sidebar( 'magsoul-fullwidth-bottom-widgets' ) ) : ?>
<div class="magsoul-bottom-wrapper-outer magsoul-clearfix">
<div class="magsoul-featured-posts-area magsoul-bottom-wrapper magsoul-clearfix">
<div class="magsoul-outer-wrapper magsoul-fullwidth-widgets-outer-wrapper">
<?php
if ( is_front_page() && is_home() && !is_paged() ) {
    dynamic_sidebar( 'magsoul-home-fullwidth-bottom-widgets' );
}

dynamic_sidebar( 'magsoul-fullwidth-bottom-widgets' );
?>
</div>
</div>
</div>
<?php endif; ?>

<?php }

function magsoul_404_widgets() { ?>

<?php if ( is_active_sidebar( 'magsoul-404-widgets' ) ) : ?>
<div class="magsoul-featured-posts-area magsoul-featured-posts-area-top magsoul-clearfix">
<?php dynamic_sidebar( 'magsoul-404-widgets' ); ?>
</div>
<?php endif; ?>

<?php }

function magsoul_post_bottom_widgets() {
    if ( is_singular() ) {
        if ( is_active_sidebar( 'magsoul-single-post-bottom-widgets' ) ) : ?>
            <div class="magsoul-featured-posts-area magsoul-clearfix">
            <?php dynamic_sidebar( 'magsoul-single-post-bottom-widgets' ); ?>
            </div>
        <?php endif;
    }
}