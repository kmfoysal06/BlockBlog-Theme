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
    wp_register_style("blockblog_main", BLOCKBLOG_URI . $main_css_path, [], filemtime(BLOCKBLOG_DIR . $main_css_path));

    wp_enqueue_style("blockblog_main");
}
add_action("wp_enqueue_scripts", "blockblog_load_assets");
