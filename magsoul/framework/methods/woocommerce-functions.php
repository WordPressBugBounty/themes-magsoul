<?php
/**
* WooCommerce support
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

// Checking if WooCommerce is active
if ( MAGSOUL_WOOCOMMERCE_ACTIVE ) {

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'magsoul_woo_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'magsoul_woo_wrapper_end', 10);

function magsoul_woo_wrapper_start() { ?>

    <div class="magsoul-main-wrapper magsoul-clearfix" id="magsoul-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
    <div class="theiaStickySidebar">
    <div class="magsoul-main-wrapper-inside magsoul-clearfix">

    <?php magsoul_before_main_content(); ?>

    <div class="magsoul-posts-wrapper" id="magsoul-posts-wrapper">

    <div class="magsoul-posts magsoul-box">
    <div class="magsoul-box-inside">
    <div class="magsoul-posts-content">

<?php }

function magsoul_woo_wrapper_end() { ?>

    </div>
    </div>
    </div>

    </div><!--/#magsoul-posts-wrapper -->

    <?php magsoul_after_main_content(); ?>

    </div>
    </div>
    </div><!-- /#magsoul-main-wrapper -->

    <?php //get_sidebar(); ?>

<?php }

}