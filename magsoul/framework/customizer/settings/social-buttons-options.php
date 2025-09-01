<?php
/**
* Social profiles options
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function magsoul_social_profiles($wp_customize) {
    $panel_id = 'magsoul_main_options_panel';
    $section_id  = 'magsoul_section_social';
    $section_priority  = 240;

    $wp_customize->add_section(
        $section_id,
        array(
            'title'    => esc_html__('Social Links Options', 'magsoul'),
            'panel'    => $panel_id,
            'priority' => $section_priority,
        )
    );

    $theme_options = array(
        'hide_footer_social_buttons' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Hide Footer Social + Login/Logout Buttons', 'magsoul'),
            'control_description'       => esc_html__('If you checked this option, all buttons will disappear from footer. There is no any effect from these option: "Show Login/Logout Button in Footer".', 'magsoul'),
            'control_type'              => 'checkbox',
        ),
        'show_footer_login_button' =>  array(
            'default' => false,
            'sanitize_callback' => 'magsoul_sanitize_checkbox',
            'control_label'             => esc_html__('Show Login/Logout Button in Footer', 'magsoul'),
            'control_description'       => esc_html__('This option has no effect if you checked the option: "Hide Footer Social + Login/Logout Buttons"', 'magsoul'),
            'control_type'              => 'checkbox',
        ),

        'twitterlink' => array( 'control_label' => esc_html__('X URL', 'magsoul') ),
        'facebooklink' => array( 'control_label' => esc_html__('Facebook URL', 'magsoul') ),
        'threadslink' => array( 'control_label' => esc_html__('Threads URL', 'magsoul') ),
        'pinterestlink' => array( 'control_label' => esc_html__('Pinterest URL', 'magsoul') ),
        'linkedinlink' => array( 'control_label' => esc_html__('Linkedin URL', 'magsoul') ),
        'instagramlink' => array( 'control_label' => esc_html__('Instagram URL', 'magsoul') ),
        'vklink' => array( 'control_label' => esc_html__('VK URL', 'magsoul') ),
        'flickrlink' => array( 'control_label' => esc_html__('Flickr URL', 'magsoul') ),
        'youtubelink' => array( 'control_label' => esc_html__('Youtube URL', 'magsoul') ),
        'vimeolink' => array( 'control_label' => esc_html__('Vimeo URL', 'magsoul') ),
        'soundcloudlink' => array( 'control_label' => esc_html__('Soundcloud URL', 'magsoul') ),
        'messengerlink' => array( 'control_label' => esc_html__('Messenger URL', 'magsoul') ),
        'whatsapplink' => array( 'control_label' => esc_html__('WhatsApp URL', 'magsoul') ),
        'tiktoklink' => array( 'control_label' => esc_html__('TikTok URL', 'magsoul') ),
        'lastfmlink' => array( 'control_label' => esc_html__('Lastfm URL', 'magsoul') ),
        'mediumlink' => array( 'control_label' => esc_html__('Medium URL', 'magsoul') ),
        'githublink' => array( 'control_label' => esc_html__('Github URL', 'magsoul') ),
        'bitbucketlink' => array( 'control_label' => esc_html__('Bitbucket URL', 'magsoul') ),
        'tumblrlink' => array( 'control_label' => esc_html__('Tumblr URL', 'magsoul') ),
        'digglink' => array( 'control_label' => esc_html__('Digg URL', 'magsoul') ),
        'deliciouslink' => array( 'control_label' => esc_html__('Delicious URL', 'magsoul') ),
        'stumblelink' => array( 'control_label' => esc_html__('Stumbleupon URL', 'magsoul') ),
        'mixlink' => array( 'control_label' => esc_html__('Mix URL', 'magsoul') ),
        'redditlink' => array( 'control_label' => esc_html__('Reddit URL', 'magsoul') ),
        'dribbblelink' => array( 'control_label' => esc_html__('Dribbble URL', 'magsoul') ),
        'flipboardlink' => array( 'control_label' => esc_html__('Flipboard URL', 'magsoul') ),
        'bloggerlink' => array( 'control_label' => esc_html__('Blogger URL', 'magsoul') ),
        'etsylink' => array( 'control_label' => esc_html__('Etsy URL', 'magsoul') ),
        'behancelink' => array( 'control_label' => esc_html__('Behance URL', 'magsoul') ),
        'amazonlink' => array( 'control_label' => esc_html__('Amazon URL', 'magsoul') ),
        'meetuplink' => array( 'control_label' => esc_html__('Meetup URL', 'magsoul') ),
        'mixcloudlink' => array( 'control_label' => esc_html__('Mixcloud URL', 'magsoul') ),
        'slacklink' => array( 'control_label' => esc_html__('Slack URL', 'magsoul') ),
        'snapchatlink' => array( 'control_label' => esc_html__('Snapchat URL', 'magsoul') ),
        'spotifylink' => array( 'control_label' => esc_html__('Spotify URL', 'magsoul') ),
        'yelplink' => array( 'control_label' => esc_html__('Yelp URL', 'magsoul') ),
        'wordpresslink' => array( 'control_label' => esc_html__('WordPress URL', 'magsoul') ),
        'twitchlink' => array( 'control_label' => esc_html__('Twitch URL', 'magsoul') ),
        'telegramlink' => array( 'control_label' => esc_html__('Telegram URL', 'magsoul') ),
        'bandcamplink' => array( 'control_label' => esc_html__('Bandcamp URL', 'magsoul') ),
        'quoralink' => array( 'control_label' => esc_html__('Quora URL', 'magsoul') ),
        'foursquarelink' => array( 'control_label' => esc_html__('Foursquare URL', 'magsoul') ),
        'deviantartlink' => array( 'control_label' => esc_html__('DeviantArt URL', 'magsoul') ),
        'imdblink' => array( 'control_label' => esc_html__('IMDB URL', 'magsoul') ),
        'codepenlink' => array( 'control_label' => esc_html__('Codepen URL', 'magsoul') ),
        'jsfiddlelink' => array( 'control_label' => esc_html__('JSFiddle URL', 'magsoul') ),
        'stackoverflowlink' => array( 'control_label' => esc_html__('Stack Overflow URL', 'magsoul') ),
        'stackexchangelink' => array( 'control_label' => esc_html__('Stack Exchange URL', 'magsoul') ),
        'bsalink' => array( 'control_label' => esc_html__('BuySellAds URL', 'magsoul') ),
        'web500pxlink' => array( 'control_label' => esc_html__('500px URL', 'magsoul') ),
        'ellolink' => array( 'control_label' => esc_html__('Ello URL', 'magsoul') ),
        'discordlink' => array( 'control_label' => esc_html__('Discord URL', 'magsoul') ),
        'goodreadslink' => array( 'control_label' => esc_html__('Goodreads URL', 'magsoul') ),
        'odnoklassnikilink' => array( 'control_label' => esc_html__('Odnoklassniki URL', 'magsoul') ),
        'houzzlink' => array( 'control_label' => esc_html__('Houzz URL', 'magsoul') ),
        'pocketlink' => array( 'control_label' => esc_html__('Pocket URL', 'magsoul') ),
        'xinglink' => array( 'control_label' => esc_html__('XING URL', 'magsoul') ),
        'mastodonlink' => array( 'control_label' => esc_html__('Mastodon URL', 'magsoul') ),
        'googleplaylink' => array( 'control_label' => esc_html__('Google Play URL', 'magsoul') ),
        'slidesharelink' => array( 'control_label' => esc_html__('SlideShare URL', 'magsoul') ),
        'dropboxlink' => array( 'control_label' => esc_html__('Dropbox URL', 'magsoul') ),
        'paypallink' => array( 'control_label' => esc_html__('PayPal URL', 'magsoul') ),
        'viadeolink' => array( 'control_label' => esc_html__('Viadeo URL', 'magsoul') ),
        'wikipedialink' => array( 'control_label' => esc_html__('Wikipedia URL', 'magsoul') ),
        'skypeusername' => array( 'sanitize_callback' => 'sanitize_text_field', 'control_label' => esc_html__('Skype Username', 'magsoul') ),
        'emailaddress' => array( 'sanitize_callback' => 'magsoul_sanitize_email', 'control_label' => esc_html__('Email Address', 'magsoul') ),
        'rsslink' => array( 'control_label' => esc_html__('RSS Feed URL', 'magsoul') ),
    );

    foreach ($theme_options as $theme_option_name => $theme_option_args) {
        $wp_customize->add_setting("magsoul_options[{$theme_option_name}]",
            array(
                'type'        => isset($theme_option_args['type']) ? $theme_option_args['type'] : 'option',
                'capability'  => isset($theme_option_args['capability']) ? $theme_option_args['capability'] : 'edit_theme_options',
                'default'     => isset($theme_option_args['default']) ? $theme_option_args['default'] : '',
                'transport'     => isset($theme_option_args['transport']) ? $theme_option_args['transport'] : 'refresh',
                'sanitize_callback'  => isset($theme_option_args['sanitize_callback']) ? $theme_option_args['sanitize_callback'] : 'esc_url_raw',
            )
        );

        $wp_customize->add_control("magsoul_{$theme_option_name}_control",
            array(
                'label'       => isset($theme_option_args['control_label']) ? $theme_option_args['control_label'] : '',
                'section'     => $section_id,
                'settings'    => "magsoul_options[{$theme_option_name}]",
                'type'        => isset($theme_option_args['control_type']) ? $theme_option_args['control_type'] : 'text',
                'description' => isset($theme_option_args['control_description']) ? $theme_option_args['control_description'] : '',
                'choices'     => (isset($theme_option_args['control_choices']) ? $theme_option_args['control_choices'] : array()),
                'priority'    => isset($theme_option_args['control_priority']) ? $theme_option_args['control_priority'] : 10,
            )
        );
    }
}