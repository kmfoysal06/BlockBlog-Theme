<?php
/**
* @package BlockBlog
* all functions
*/
if(!defined("BLOCKBLOG_DIR")) {
    define("BLOCKBLOG_DIR", untrailingslashit(get_template_directory()));
}
if(!defined("BLOCKBLOG_URI")) {
    define("BLOCKBLOG_URI", untrailingslashit(get_template_directory_uri()));
}
function blockblog_load_assets() {
    $main_css_path = '/assets/css/main.css';
    $main_js_path = '/assets/js/main.js';
    wp_register_style("blockblog_main", BLOCKBLOG_URI . $main_css_path, [], filemtime(BLOCKBLOG_DIR . $main_css_path));
    wp_register_script("blockblog_main_js", BLOCKBLOG_URI . $main_js_path, [], filemtime(BLOCKBLOG_DIR . $main_js_path));

    wp_enqueue_style("blockblog_main");
    wp_enqueue_script("blockblog_main_js");
}
add_action("wp_enqueue_scripts", "blockblog_load_assets");

function blockblog_limit_excerpt() {
    return 20;
}
add_filter("excerpt_length", "blockblog_limit_excerpt");
