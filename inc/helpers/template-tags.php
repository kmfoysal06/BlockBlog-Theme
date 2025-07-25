<?php
/**
* @package BlockBlog
* All functions will be here
*/

/**
*  get social links from customizer to load social link on footer
*/
function blockblog_social_links() {
    $footer_informations = get_option("blockblog_footer");
    $dashicon_mapping = [
        'fb' => 'dashicons-facebook',
        'ig' => 'dashicons-instagram',
        'x' => 'dashicons-twitter',
        'yt' => 'dashicons-youtube',
        'linkedin' => 'dashicons-linkedin',
    ];
    $links = [];
    if(isset($footer_informations['social_link']) && is_array($footer_informations['social_link'])) {
        foreach($footer_informations['social_link'] as $key => $link) {
            if(isset($dashicon_mapping[$key])) {
                $links[] = [
                    'url' => esc_url($link),
                    'icon' => $dashicon_mapping[$key],
                ];
            }
        }
    }
    return $links;
}
