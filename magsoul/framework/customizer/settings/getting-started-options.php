<?php
/**
* Getting started options
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function magsoul_getting_started($wp_customize) {

    $wp_customize->add_section( 'magsoul_section_getting_started', array( 'title' => esc_html__( 'Getting Started', 'magsoul' ), 'description' => esc_html__( 'Thanks for your interest in MagSoul! If you have any questions or run into any trouble, please visit us the following links. We will get you fixed up!', 'magsoul' ), 'panel' => 'magsoul_main_options_panel', 'priority' => 5, ) );

    $wp_customize->add_setting( 'magsoul_options[documentation]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );

    $wp_customize->add_control( new MagSoul_Customize_Button_Control( $wp_customize, 'magsoul_documentation_control', array( 'label' => esc_html__( 'Documentation', 'magsoul' ), 'section' => 'magsoul_section_getting_started', 'settings' => 'magsoul_options[documentation]', 'type' => 'magsoul-button', 'button_tag' => 'a', 'button_class' => 'button button-primary', 'button_href' => esc_url( 'https://themesdna.com/magsoul-wordpress-theme/' ), 'button_target' => '_blank', ) ) );

    $wp_customize->add_setting( 'magsoul_options[contact]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );

    $wp_customize->add_control( new MagSoul_Customize_Button_Control( $wp_customize, 'magsoul_contact_control', array( 'label' => esc_html__( 'Contact Us', 'magsoul' ), 'section' => 'magsoul_section_getting_started', 'settings' => 'magsoul_options[contact]', 'type' => 'magsoul-button', 'button_tag' => 'a', 'button_class' => 'button button-primary', 'button_href' => esc_url( 'https://themesdna.com/contact/' ), 'button_target' => '_blank', ) ) );

}