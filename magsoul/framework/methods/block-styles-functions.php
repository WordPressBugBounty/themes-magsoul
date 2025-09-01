<?php
/**
* Block Styles
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( function_exists( 'register_block_style' ) ) :
    function magsoul_register_block_styles() {

        /**
         * Register block style
         */
        register_block_style( 'core/button', array( 'name' => 'magsoul-button', 'label' => esc_html__( 'GridBone Button', 'magsoul' ), 'is_default' => true, 'style_handle' => 'magsoul-maincss', ) ); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style

    }
    add_action( 'init', 'magsoul_register_block_styles' );
endif;