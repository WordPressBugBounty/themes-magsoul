<?php
/**
* The template for displaying the footer
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

</div>

</div><!--/#magsoul-content-wrapper -->
</div><!--/#magsoul-wrapper -->

<?php magsoul_bottom_wide_widgets(); ?>

<?php if ( 'before-footer' === magsoul_secondary_menu_location() ) { ?><?php magsoul_secondary_menu_area(); ?><?php } ?>

<?php magsoul_before_footer(); ?>

<?php if ( !(magsoul_hide_footer_widgets()) ) { ?>
<?php if ( is_active_sidebar( 'magsoul-footer-1' ) || is_active_sidebar( 'magsoul-footer-2' ) || is_active_sidebar( 'magsoul-footer-3' ) || is_active_sidebar( 'magsoul-footer-4' ) || is_active_sidebar( 'magsoul-top-footer' ) || is_active_sidebar( 'magsoul-bottom-footer' ) ) : ?>
<div class='magsoul-clearfix' id='magsoul-footer-blocks' itemscope='itemscope' itemtype='http://schema.org/WPFooter' role='contentinfo'>
<div class='magsoul-container magsoul-clearfix'>
<div class="magsoul-outer-wrapper magsoul-footer-outer-wrapper">

<?php if ( is_active_sidebar( 'magsoul-top-footer' ) ) : ?>
<div class='magsoul-clearfix'>
<div class='magsoul-top-footer-block'>
<?php dynamic_sidebar( 'magsoul-top-footer' ); ?>
</div>
</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'magsoul-footer-1' ) || is_active_sidebar( 'magsoul-footer-2' ) || is_active_sidebar( 'magsoul-footer-3' ) || is_active_sidebar( 'magsoul-footer-4' ) ) : ?>
<div class='magsoul-footer-block-cols magsoul-clearfix'>

<div class="magsoul-footer-block-col magsoul-footer-4-col" id="magsoul-footer-block-1">
<?php dynamic_sidebar( 'magsoul-footer-1' ); ?>
</div>

<div class="magsoul-footer-block-col magsoul-footer-4-col" id="magsoul-footer-block-2">
<?php dynamic_sidebar( 'magsoul-footer-2' ); ?>
</div>

<div class="magsoul-footer-block-col magsoul-footer-4-col" id="magsoul-footer-block-3">
<?php dynamic_sidebar( 'magsoul-footer-3' ); ?>
</div>

<div class="magsoul-footer-block-col magsoul-footer-4-col" id="magsoul-footer-block-4">
<?php dynamic_sidebar( 'magsoul-footer-4' ); ?>
</div>

</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'magsoul-bottom-footer' ) ) : ?>
<div class='magsoul-clearfix'>
<div class='magsoul-bottom-footer-block'>
<?php dynamic_sidebar( 'magsoul-bottom-footer' ); ?>
</div>
</div>
<?php endif; ?>

</div>
</div>
</div><!--/#magsoul-footer-blocks-->
<?php endif; ?>
<?php } ?>

<div class='magsoul-clearfix' id='magsoul-copyright-area'>
<div class='magsoul-copyright-area-inside magsoul-container magsoul-clearfix'>
<div class="magsoul-outer-wrapper magsoul-footer-outer-wrapper">

<div class='magsoul-copyright-area-inside-content'>
<div class='magsoul-copyright-content magsoul-copyright-area-block magsoul-clearfix'>
<?php if ( magsoul_get_option('footer_text') ) : ?>
  <p class='magsoul-copyright'><?php echo wp_kses_post( force_balance_tags( magsoul_get_option('footer_text') ) ); ?></p>
<?php else : ?>
  <p class='magsoul-copyright'><?php /* translators: %s: Year and site name. */ printf( esc_html__( 'Copyright &copy; %s', 'magsoul' ), esc_html(date_i18n(__('Y','magsoul'))) . ' ' . esc_html(get_bloginfo( 'name' ))  ); ?></p>
<?php endif; ?>
<p class='magsoul-credit'><a href="<?php echo esc_url( 'https://themesdna.com/' ); ?>"><?php /* translators: %s: Theme author. */ printf( esc_html__( 'Design by %s', 'magsoul' ), 'ThemesDNA.com' ); ?></a></p>
</div>

<?php if ( magsoul_is_social_buttons_active() ) { ?>
<?php magsoul_social_buttons(); ?>
<?php } ?>
</div>

</div>
</div>
</div><!--/#magsoul-copyright-area -->

<?php magsoul_after_footer(); ?>

<?php if ( 'after-footer' === magsoul_secondary_menu_location() ) { ?><?php magsoul_secondary_menu_area(); ?><?php } ?>

<?php if ( magsoul_is_backtotop_active() ) { ?><button class="magsoul-scroll-top" title="<?php esc_attr_e('Scroll to Top','magsoul'); ?>"><i class="fas fa-arrow-up" aria-hidden="true"></i><span class="magsoul-sr-only"><?php esc_html_e('Scroll to Top', 'magsoul'); ?></span></button><?php } ?>

<?php wp_footer(); ?>
</body>
</html>