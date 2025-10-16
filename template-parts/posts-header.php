<?php
/**
* @package BlockBlog
* Post Header Template
*/
if(!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (is_search()) {
    $search_query = get_search_query(); $html = '<div class="blockblog-container">'; $html .= '<h1 class="blockblog-search-title">';
    $html .= sprintf(__('Search Results for: %s', 'blockblog'), esc_html($search_query));
    $html .= '</h1>';
    $html .= '</div>';
    echo $html;
}
if(is_category()) {
    $category = get_queried_object();
    $html = '<div class="blockblog-container">';
    $html .= '<h1 class="blockblog-category-title">';
    $html .= sprintf(__('Category: %s', 'blockblog'), esc_html($category->name));
    $html .= '</h1>';
    $html .= '</div>';
    echo $html;
}
if(is_author()) {
    $author = get_queried_object();
    $html = '<div class="blockblog-container">';
    $html .= '<h1 class="blockblog-author-title">';
    $html .= sprintf(__('Author: %s', 'blockblog'), esc_html($author->display_name));
    $html .= '</h1>';
    $html .= '</div>';
    echo $html;
}
if(is_home() || is_front_page()) {
    $html = '<div class="blockblog-container">';
    $html .= '<h1 class="blockblog-home-title screen-reader-text">';
    $html .= sprintf(__('%s\'s Latest Posts', 'blockblog'), get_bloginfo('name'));
    $html .= '</h1>';
    $html .= '</div>';
    echo $html;
}
