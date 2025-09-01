<?php
/**
* MagSoul functions and definitions.
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

define( 'MAGSOUL_PROURL', 'https://themesdna.com/magsoul-pro-wordpress-theme/' );
define( 'MAGSOUL_CONTACTURL', 'https://themesdna.com/contact/' );
define( 'MAGSOUL_THEMEOPTIONSDIR', get_template_directory() . '/framework/customizer' );

// Add new constant that returns true if WooCommerce is active
define( 'MAGSOUL_WOOCOMMERCE_ACTIVE', class_exists( 'WooCommerce' ) );

require_once( MAGSOUL_THEMEOPTIONSDIR . '/customizer.php' );

/**
 * This function return a value of given theme option name from database.
 *
 * @since 1.0.0
 *
 * @param string $option Theme option to return.
 * @return mixed The value of theme option.
 */
function magsoul_get_option($option) {
    $magsoul_options = get_option('magsoul_options');
    if ((is_array($magsoul_options)) && (array_key_exists($option, $magsoul_options))) {
        return $magsoul_options[$option];
    }
    else {
        return '';
    }
}

function magsoul_is_option_set($option) {
    $magsoul_options = get_option('magsoul_options');
    if ((is_array($magsoul_options)) && (array_key_exists($option, $magsoul_options))) {
        return true;
    } else {
        return false;
    }
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
class MagSoul_Setup {
    public function __construct() {
        add_action('after_setup_theme', array($this, 'setup'));
    }

    public function setup() {
        global $wp_version;

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on MagSoul, use a find and replace
         * to change 'magsoul' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'magsoul', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support( 'post-thumbnails' );

        if ( function_exists( 'add_image_size' ) ) {
            add_image_size( 'magsoul-1218w-autoh-image', 1218, 9999, false );
            add_image_size( 'magsoul-360w-270h-image', 360, 270, true );
        }

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
        'primary' => esc_html__('Primary Menu', 'magsoul'),
        'secondary' => esc_html__('Secondary Menu', 'magsoul')
        ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        $markup = array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'navigation-widgets' );
        add_theme_support( 'html5', $markup );

        add_theme_support( 'custom-logo', array(
            'height'      => 37,
            'width'       => 280,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array( 'site-title', 'site-description' ),
        ) );

        // Support for Custom Header
        add_theme_support( 'custom-header', apply_filters( 'magsoul_custom_header_args', array(
        'default-image'          => '',
        'default-text-color'     => 'ffffff',
        'width'                  => 1920,
        'height'                 => 400,
        'flex-width'            => true,
        'flex-height'            => true,
        'wp-head-callback'       => 'magsoul_header_style',
        'uploads'                => true,
        ) ) );

        // Set up the WordPress core custom background feature.
        $background_args = array(
                'default-color'          => 'f1f1f1',
                'default-image'          => get_template_directory_uri() .'/assets/images/background.png',
                //'default-image'          => '',
                'default-repeat'         => 'repeat',
                'default-position-x'     => 'left',
                'default-position-y'     => 'top',
                'default-size'     => 'auto',
                'default-attachment'     => 'fixed',
                'wp-head-callback'       => '_custom_background_cb',
                'admin-head-callback'    => 'admin_head_callback_func',
                'admin-preview-callback' => 'admin_preview_callback_func',
        );
        add_theme_support( 'custom-background', apply_filters( 'magsoul_custom_background_args', $background_args) );
        
        // Support for Custom Editor Style
        add_editor_style( 'assets/css/editor-style.css' );

        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );

        // Add support for Block Styles.
        add_theme_support( 'wp-block-styles' );

        add_theme_support( 'woocommerce' );

        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );

        add_theme_support( 'yoast-seo-breadcrumbs' );

        if ( !(magsoul_get_option('enable_widgets_block_editor')) ) {
            remove_theme_support( 'widgets-block-editor' );
        }
    }
}
new MagSoul_Setup();

/**
 * Check if WooCommerce is activated
 */
function magsoul_is_woocommerce_activated() {
    if ( class_exists( 'woocommerce' ) ) {
        return true;
    } else {
        return false;
    }
}

/**
 * Includes theme functions
 */
function magsoul_file_includes() {
    $magsoul_includes = [ 'layout-functions', 'widgets-loader-functions', 'share-buttons-functions', 'social-buttons-functions', 'ab-details-functions', 'postmeta-functions', 'navigation-functions', 'woocommerce-functions', 'menu-functions', 'header-functions', 'css-functions', 'extra-functions', 'action-hooks-functions', 'media-functions', 'scripts-loader-functions', 'block-styles-functions', 'customizer/custom', ];

    foreach ($magsoul_includes as $magsoul_file) {
        if ( strpos($magsoul_file, 'customizer/') === 0 ) {
            $magsoul_file_path = trailingslashit(get_template_directory()) . "framework/{$magsoul_file}.php";
        } else {
            $magsoul_file_path = trailingslashit(get_template_directory()) . "framework/methods/{$magsoul_file}.php";
        }
        require_once($magsoul_file_path);
    }
}
magsoul_file_includes();