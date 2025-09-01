<?php
/**
* The file for displaying the search form
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<form role="search" method="get" class="magsoul-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<label>
    <span class="magsoul-sr-only"><?php echo esc_html_x( 'Search for:', 'label', 'magsoul' ); ?></span>
    <input type="search" class="magsoul-search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'magsoul' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
</label>
<input type="submit" class="magsoul-search-submit" value="<?php echo esc_attr_x( '&#xf002;', 'submit button', 'magsoul' ); ?>" />
</form>