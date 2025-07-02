<?php
/**
* @package BlockBlog
* Posts Not Found Template
*/

if(!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if(is_search()) {
    $message = __('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'blockblog');
}

if(is_category() || is_tag()) {
    $message = __('Sorry, but nothing matched your criteria. Please try again with some different keywords.', 'blockblog');
}

if(is_author()) {
    $message = __('Sorry The User Not Found.', 'blockblog');
}

if(is_archive()) {
    $message = __('Archive Not Found', 'blockblog');
}

if(is_home() || is_front_page()) {
    $message = __('There are no posts to show!', 'blockblog');
}
if(!isset($message)) {
    $message = __('No posts found', 'blockblog');
}
$html = '';
$html .= '<div class="min-h-dvh flex-middle">';
$html .= '<div class="blockblog-container posts-not-found" id="blockblog-content">';
$html .= '<h2 class="posts-not-found-title">' . esc_html($message) . '</h2>';
$html .= '<p class="posts-not-found-description">';
$html .= __('Please try again with some different keywords.', 'blockblog');
$html .= '</p>';
$html .= '<a href="' . esc_url(home_url('/')) . '" class="posts-not-found-link">';
$html .= __('Go to Home', 'blockblog');
$html .= '</a>';
$html .= '</div>';
$html .= '</div>';
echo $html;
