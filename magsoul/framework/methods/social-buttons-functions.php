<?php
/**
* Social buttons
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function magsoul_social_buttons() { ?>

<div class='magsoul-social-icons magsoul-copyright-area-block magsoul-clearfix'>
    <?php if ( magsoul_get_option('twitterlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('twitterlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-twitter" aria-label="<?php esc_attr_e('X Button','magsoul'); ?>"><i class="fab fa-x-twitter" aria-hidden="true" title="<?php esc_attr_e('X','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('facebooklink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('facebooklink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-facebook" aria-label="<?php esc_attr_e('Facebook Button','magsoul'); ?>"><i class="fab fa-facebook-f" aria-hidden="true" title="<?php esc_attr_e('Facebook','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('threadslink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('threadslink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-threads" aria-label="<?php esc_attr_e('Threads Button','magsoul'); ?>"><i class="fab fa-threads" aria-hidden="true" title="<?php esc_attr_e('Threads','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('pinterestlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('pinterestlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-pinterest" aria-label="<?php esc_attr_e('Pinterest Button','magsoul'); ?>"><i class="fab fa-pinterest" aria-hidden="true" title="<?php esc_attr_e('Pinterest','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('linkedinlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('linkedinlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-linkedin" aria-label="<?php esc_attr_e('Linkedin Button','magsoul'); ?>"><i class="fab fa-linkedin-in" aria-hidden="true" title="<?php esc_attr_e('Linkedin','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('instagramlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('instagramlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-instagram" aria-label="<?php esc_attr_e('Instagram Button','magsoul'); ?>"><i class="fab fa-instagram" aria-hidden="true" title="<?php esc_attr_e('Instagram','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('flickrlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('flickrlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-flickr" aria-label="<?php esc_attr_e('Flickr Button','magsoul'); ?>"><i class="fab fa-flickr" aria-hidden="true" title="<?php esc_attr_e('Flickr','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('youtubelink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('youtubelink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-youtube" aria-label="<?php esc_attr_e('Youtube Button','magsoul'); ?>"><i class="fab fa-youtube" aria-hidden="true" title="<?php esc_attr_e('Youtube','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('vimeolink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('vimeolink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-vimeo" aria-label="<?php esc_attr_e('Vimeo Button','magsoul'); ?>"><i class="fab fa-vimeo-v" aria-hidden="true" title="<?php esc_attr_e('Vimeo','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('soundcloudlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('soundcloudlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-soundcloud" aria-label="<?php esc_attr_e('SoundCloud Button','magsoul'); ?>"><i class="fab fa-soundcloud" aria-hidden="true" title="<?php esc_attr_e('SoundCloud','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('messengerlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('messengerlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-messenger" aria-label="<?php esc_attr_e('Messenger Button','magsoul'); ?>"><i class="fab fa-facebook-messenger" aria-hidden="true" title="<?php esc_attr_e('Messenger','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('whatsapplink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('whatsapplink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-whatsapp" aria-label="<?php esc_attr_e('WhatsApp Button','magsoul'); ?>"><i class="fab fa-whatsapp" aria-hidden="true" title="<?php esc_attr_e('WhatsApp','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('tiktoklink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('tiktoklink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-tiktok" aria-label="<?php esc_attr_e('TikTok Button','magsoul'); ?>"><i class="fab fa-tiktok" aria-hidden="true" title="<?php esc_attr_e('TikTok','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('lastfmlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('lastfmlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-lastfm" aria-label="<?php esc_attr_e('Lastfm Button','magsoul'); ?>"><i class="fab fa-lastfm" aria-hidden="true" title="<?php esc_attr_e('Lastfm','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('mediumlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('mediumlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-medium" aria-label="<?php esc_attr_e('Medium Button','magsoul'); ?>"><i class="fab fa-medium-m" aria-hidden="true" title="<?php esc_attr_e('Medium','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('githublink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('githublink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-github" aria-label="<?php esc_attr_e('Github Button','magsoul'); ?>"><i class="fab fa-github" aria-hidden="true" title="<?php esc_attr_e('Github','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('bitbucketlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('bitbucketlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-bitbucket" aria-label="<?php esc_attr_e('Bitbucket Button','magsoul'); ?>"><i class="fab fa-bitbucket" aria-hidden="true" title="<?php esc_attr_e('Bitbucket','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('tumblrlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('tumblrlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-tumblr" aria-label="<?php esc_attr_e('Tumblr Button','magsoul'); ?>"><i class="fab fa-tumblr" aria-hidden="true" title="<?php esc_attr_e('Tumblr','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('digglink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('digglink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-digg" aria-label="<?php esc_attr_e('Digg Button','magsoul'); ?>"><i class="fab fa-digg" aria-hidden="true" title="<?php esc_attr_e('Digg','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('deliciouslink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('deliciouslink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-delicious" aria-label="<?php esc_attr_e('Delicious Button','magsoul'); ?>"><i class="fab fa-delicious" aria-hidden="true" title="<?php esc_attr_e('Delicious','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('stumblelink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('stumblelink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-stumbleupon" aria-label="<?php esc_attr_e('Stumbleupon Button','magsoul'); ?>"><i class="fab fa-stumbleupon" aria-hidden="true" title="<?php esc_attr_e('Stumbleupon','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('mixlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('mixlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-mix" aria-label="<?php esc_attr_e('Mix Button','magsoul'); ?>"><i class="fab fa-mix" aria-hidden="true" title="<?php esc_attr_e('Mix','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('redditlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('redditlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-reddit" aria-label="<?php esc_attr_e('Reddit Button','magsoul'); ?>"><i class="fab fa-reddit" aria-hidden="true" title="<?php esc_attr_e('Reddit','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('dribbblelink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('dribbblelink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-dribbble" aria-label="<?php esc_attr_e('Dribbble Button','magsoul'); ?>"><i class="fab fa-dribbble" aria-hidden="true" title="<?php esc_attr_e('Dribbble','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('flipboardlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('flipboardlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-flipboard" aria-label="<?php esc_attr_e('Flipboard Button','magsoul'); ?>"><i class="fab fa-flipboard" aria-hidden="true" title="<?php esc_attr_e('Flipboard','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('bloggerlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('bloggerlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-blogger" aria-label="<?php esc_attr_e('Blogger Button','magsoul'); ?>"><i class="fab fa-blogger" aria-hidden="true" title="<?php esc_attr_e('Blogger','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('etsylink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('etsylink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-etsy" aria-label="<?php esc_attr_e('Etsy Button','magsoul'); ?>"><i class="fab fa-etsy" aria-hidden="true" title="<?php esc_attr_e('Etsy','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('behancelink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('behancelink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-behance" aria-label="<?php esc_attr_e('Behance Button','magsoul'); ?>"><i class="fab fa-behance" aria-hidden="true" title="<?php esc_attr_e('Behance','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('amazonlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('amazonlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-amazon" aria-label="<?php esc_attr_e('Amazon Button','magsoul'); ?>"><i class="fab fa-amazon" aria-hidden="true" title="<?php esc_attr_e('Amazon','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('meetuplink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('meetuplink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-meetup" aria-label="<?php esc_attr_e('Meetup Button','magsoul'); ?>"><i class="fab fa-meetup" aria-hidden="true" title="<?php esc_attr_e('Meetup','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('mixcloudlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('mixcloudlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-mixcloud" aria-label="<?php esc_attr_e('Mixcloud Button','magsoul'); ?>"><i class="fab fa-mixcloud" aria-hidden="true" title="<?php esc_attr_e('Mixcloud','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('slacklink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('slacklink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-slack" aria-label="<?php esc_attr_e('Slack Button','magsoul'); ?>"><i class="fab fa-slack" aria-hidden="true" title="<?php esc_attr_e('Slack','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('snapchatlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('snapchatlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-snapchat" aria-label="<?php esc_attr_e('Snapchat Button','magsoul'); ?>"><i class="fab fa-snapchat" aria-hidden="true" title="<?php esc_attr_e('Snapchat','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('spotifylink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('spotifylink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-spotify" aria-label="<?php esc_attr_e('Spotify Button','magsoul'); ?>"><i class="fab fa-spotify" aria-hidden="true" title="<?php esc_attr_e('Spotify','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('yelplink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('yelplink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-yelp" aria-label="<?php esc_attr_e('Yelp Button','magsoul'); ?>"><i class="fab fa-yelp" aria-hidden="true" title="<?php esc_attr_e('Yelp','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('wordpresslink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('wordpresslink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-wordpress" aria-label="<?php esc_attr_e('WordPress Button','magsoul'); ?>"><i class="fab fa-wordpress" aria-hidden="true" title="<?php esc_attr_e('WordPress','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('twitchlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('twitchlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-twitch" aria-label="<?php esc_attr_e('Twitch Button','magsoul'); ?>"><i class="fab fa-twitch" aria-hidden="true" title="<?php esc_attr_e('Twitch','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('telegramlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('telegramlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-telegram" aria-label="<?php esc_attr_e('Telegram Button','magsoul'); ?>"><i class="fab fa-telegram" aria-hidden="true" title="<?php esc_attr_e('Telegram','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('bandcamplink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('bandcamplink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-bandcamp" aria-label="<?php esc_attr_e('Bandcamp Button','magsoul'); ?>"><i class="fab fa-bandcamp" aria-hidden="true" title="<?php esc_attr_e('Bandcamp','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('quoralink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('quoralink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-quora" aria-label="<?php esc_attr_e('Quora Button','magsoul'); ?>"><i class="fab fa-quora" aria-hidden="true" title="<?php esc_attr_e('Quora','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('foursquarelink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('foursquarelink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-foursquare" aria-label="<?php esc_attr_e('Foursquare Button','magsoul'); ?>"><i class="fab fa-foursquare" aria-hidden="true" title="<?php esc_attr_e('Foursquare','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('deviantartlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('deviantartlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-deviantart" aria-label="<?php esc_attr_e('DeviantArt Button','magsoul'); ?>"><i class="fab fa-deviantart" aria-hidden="true" title="<?php esc_attr_e('DeviantArt','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('imdblink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('imdblink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-imdb" aria-label="<?php esc_attr_e('IMDB Button','magsoul'); ?>"><i class="fab fa-imdb" aria-hidden="true" title="<?php esc_attr_e('IMDB','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('vklink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('vklink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-vk" aria-label="<?php esc_attr_e('VK Button','magsoul'); ?>"><i class="fab fa-vk" aria-hidden="true" title="<?php esc_attr_e('VK','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('codepenlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('codepenlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-codepen" aria-label="<?php esc_attr_e('Codepen Button','magsoul'); ?>"><i class="fab fa-codepen" aria-hidden="true" title="<?php esc_attr_e('Codepen','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('jsfiddlelink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('jsfiddlelink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-jsfiddle" aria-label="<?php esc_attr_e('JSFiddle Button','magsoul'); ?>"><i class="fab fa-jsfiddle" aria-hidden="true" title="<?php esc_attr_e('JSFiddle','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('stackoverflowlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('stackoverflowlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-stackoverflow" aria-label="<?php esc_attr_e('Stack Overflow Button','magsoul'); ?>"><i class="fab fa-stack-overflow" aria-hidden="true" title="<?php esc_attr_e('Stack Overflow','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('stackexchangelink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('stackexchangelink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-stackexchange" aria-label="<?php esc_attr_e('Stack Exchange Button','magsoul'); ?>"><i class="fab fa-stack-exchange" aria-hidden="true" title="<?php esc_attr_e('Stack Exchange','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('bsalink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('bsalink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-buysellads" aria-label="<?php esc_attr_e('BuySellAds Button','magsoul'); ?>"><i class="fab fa-buysellads" aria-hidden="true" title="<?php esc_attr_e('BuySellAds','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('web500pxlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('web500pxlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-web500px" aria-label="<?php esc_attr_e('500px Button','magsoul'); ?>"><i class="fab fa-500px" aria-hidden="true" title="<?php esc_attr_e('500px','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('ellolink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('ellolink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-ello" aria-label="<?php esc_attr_e('Ello Button','magsoul'); ?>"><i class="fab fa-ello" aria-hidden="true" title="<?php esc_attr_e('Ello','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('discordlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('discordlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-discord" aria-label="<?php esc_attr_e('Discord Button','magsoul'); ?>"><i class="fab fa-discord" aria-hidden="true" title="<?php esc_attr_e('Discord','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('goodreadslink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('goodreadslink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-goodreads" aria-label="<?php esc_attr_e('Goodreads Button','magsoul'); ?>"><i class="fab fa-goodreads" aria-hidden="true" title="<?php esc_attr_e('Goodreads','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('odnoklassnikilink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('odnoklassnikilink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-odnoklassniki" aria-label="<?php esc_attr_e('Odnoklassniki Button','magsoul'); ?>"><i class="fab fa-odnoklassniki" aria-hidden="true" title="<?php esc_attr_e('Odnoklassniki','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('houzzlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('houzzlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-houzz" aria-label="<?php esc_attr_e('Houzz Button','magsoul'); ?>"><i class="fab fa-houzz" aria-hidden="true" title="<?php esc_attr_e('Houzz','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('pocketlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('pocketlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-pocket" aria-label="<?php esc_attr_e('Pocket Button','magsoul'); ?>"><i class="fab fa-get-pocket" aria-hidden="true" title="<?php esc_attr_e('Pocket','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('xinglink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('xinglink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-xing" aria-label="<?php esc_attr_e('XING Button','magsoul'); ?>"><i class="fab fa-xing" aria-hidden="true" title="<?php esc_attr_e('XING','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('mastodonlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('mastodonlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-mastodon" aria-label="<?php esc_attr_e('Mastodon Button','magsoul'); ?>"><i class="fab fa-mastodon" aria-hidden="true" title="<?php esc_attr_e('Mastodon','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('googleplaylink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('googleplaylink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-googleplay" aria-label="<?php esc_attr_e('Google Play Button','magsoul'); ?>"><i class="fab fa-google-play" aria-hidden="true" title="<?php esc_attr_e('Google Play','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('slidesharelink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('slidesharelink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-slideshare" aria-label="<?php esc_attr_e('SlideShare Button','magsoul'); ?>"><i class="fab fa-slideshare" aria-hidden="true" title="<?php esc_attr_e('SlideShare','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('dropboxlink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('dropboxlink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-dropbox" aria-label="<?php esc_attr_e('Dropbox Button','magsoul'); ?>"><i class="fab fa-dropbox" aria-hidden="true" title="<?php esc_attr_e('Dropbox','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('paypallink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('paypallink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-paypal" aria-label="<?php esc_attr_e('PayPal Button','magsoul'); ?>"><i class="fab fa-paypal" aria-hidden="true" title="<?php esc_attr_e('PayPal','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('viadeolink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('viadeolink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-viadeo" aria-label="<?php esc_attr_e('Viadeo Button','magsoul'); ?>"><i class="fab fa-viadeo" aria-hidden="true" title="<?php esc_attr_e('Viadeo','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('wikipedialink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('wikipedialink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-wikipedia" aria-label="<?php esc_attr_e('Wikipedia Button','magsoul'); ?>"><i class="fab fa-wikipedia-w" aria-hidden="true" title="<?php esc_attr_e('Wikipedia','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('skypeusername') ) : ?>
            <a href="skype:<?php echo esc_html( magsoul_get_option('skypeusername') ); ?>?chat" class="magsoul-social-icon-skype" aria-label="<?php esc_attr_e('Skype Button','magsoul'); ?>"><i class="fab fa-skype" aria-hidden="true" title="<?php esc_attr_e('Skype','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('emailaddress') ) : ?>
            <a href="mailto:<?php echo esc_html( magsoul_get_option('emailaddress') ); ?>" class="magsoul-social-icon-email" aria-label="<?php esc_attr_e('Email Us Button','magsoul'); ?>"><i class="far fa-envelope" aria-hidden="true" title="<?php esc_attr_e('Email Us','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('rsslink') ) : ?>
            <a href="<?php echo esc_url( magsoul_get_option('rsslink') ); ?>" target="_blank" rel="nofollow" class="magsoul-social-icon-rss" aria-label="<?php esc_attr_e('RSS Button','magsoul'); ?>"><i class="fas fa-rss" aria-hidden="true" title="<?php esc_attr_e('RSS','magsoul'); ?>"></i></a><?php endif; ?>
    <?php if ( magsoul_get_option('show_footer_login_button') ) { ?><?php if (is_user_logged_in()) : ?><a href="<?php echo esc_url( wp_logout_url( get_permalink() ) ); ?>" aria-label="<?php esc_attr_e( 'Logout Button', 'magsoul' ); ?>" class="magsoul-social-icon-login"><i class="fas fa-sign-out-alt" aria-hidden="true" title="<?php esc_attr_e('Logout','magsoul'); ?>"></i></a><?php else : ?><a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>" aria-label="<?php esc_attr_e( 'Login / Register Button', 'magsoul' ); ?>" class="magsoul-social-icon-login"><i class="fas fa-sign-in-alt" aria-hidden="true" title="<?php esc_attr_e('Login / Register','magsoul'); ?>"></i></a><?php endif;?><?php } ?>
</div>

<?php }