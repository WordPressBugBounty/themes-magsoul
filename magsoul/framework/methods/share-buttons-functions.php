<?php
/**
* Post share buttons
*
* @package MagSoul WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function magsoul_share_text() {
    $sharetext = esc_html__( 'Share:', 'magsoul' );
    if ( magsoul_get_option('hide_share_text') ) {return;}
    if ( magsoul_get_option('share_text') ) {
        $sharetext = magsoul_get_option('share_text');
    }
    return apply_filters( 'magsoul_share_text', $sharetext );
}

function magsoul_social_sharing_buttons() {
        global $post;

        // Get current page URL 
        $posturl = rawurlencode(get_permalink($post->ID));

        // Get current page title
        $posttitle = rawurlencode(the_title_attribute('echo=0'));

        // Construct sharing URL without using any script
        $buffer_url = 'https://buffer.com/add?url='.$posturl.'&amp;text='.$posttitle;
        $twitter_url = 'https://twitter.com/intent/tweet?text='.$posttitle.'&amp;url='.$posturl;
        $x_url = 'https://x.com/intent/post?text='.$posttitle.'&amp;url='.$posturl;
        $facebook_url = 'https://www.facebook.com/sharer.php?u='.$posturl;
        $linkedin_url = 'https://www.linkedin.com/shareArticle?mini=true&amp;title='.$posttitle.'&amp;url='.$posturl;

        $postthumb = '';
        $postthumb_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false );
        $postthumb = isset($postthumb_attributes[0]) ? $postthumb_attributes[0] : '';

        if(!empty($postthumb)) {
            $pinterest_url = 'https://pinterest.com/pin/create/button/?url='.$posturl.'&amp;media='.$postthumb.'&amp;description='.$posttitle;
        }

        // Add sharing button at the end of page/page content
        $socialcontent = '<div class="magsoul-share-buttons magsoul-clearfix"><span class="magsoul-share-text">'.esc_html(magsoul_share_text()).' </span>';
        if ( !(magsoul_get_option('hide_share_twitter')) ) {
            $socialcontent .= '<a class="magsoul-share-buttons-twitter" href="'.esc_url($x_url).'" target="_blank" rel="nofollow" title="'.esc_attr__('Share this on X', 'magsoul').'"><i class="fab fa-x-twitter" aria-hidden="true"></i>'.esc_html__('X', 'magsoul').'</a>';
        }
        if ( !(magsoul_get_option('hide_share_facebook')) ) {
            $socialcontent .= '<a class="magsoul-share-buttons-facebook" href="'.esc_url($facebook_url).'" target="_blank" rel="nofollow" title="'.esc_attr__('Share this on Facebook', 'magsoul').'"><i class="fab fa-facebook-f" aria-hidden="true"></i>'.esc_html__('Facebook', 'magsoul').'</a>';
        }
        if ( !(magsoul_get_option('hide_share_pinterest')) && !(empty($postthumb)) ) {
            $socialcontent .= '<a class="magsoul-share-buttons-pinterest" href="'.esc_url($pinterest_url).'" target="_blank" rel="nofollow" title="'.esc_attr__('Share this on Pinterest', 'magsoul').'"><i class="fab fa-pinterest" aria-hidden="true"></i>'.esc_html__('Pinterest', 'magsoul').'</a>';
        }
        if ( !(magsoul_get_option('hide_share_linkedin')) ) {
            $socialcontent .= '<a class="magsoul-share-buttons-linkedin" href="'.esc_url($linkedin_url).'" target="_blank" rel="nofollow" title="'.esc_attr__('Share this on Linkedin', 'magsoul').'"><i class="fab fa-linkedin-in" aria-hidden="true"></i>'.esc_html__('Linkedin', 'magsoul').'</a>';
        }
        $socialcontent .= '</div>';

        return apply_filters( 'magsoul_social_sharing_buttons', $socialcontent );
}