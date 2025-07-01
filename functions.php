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
require_once BLOCKBLOG_DIR . '/inc/helpers/autoload.php';
require_once BLOCKBLOG_DIR . '/inc/helpers/template-tags.php';

add_action("init", "blockblog_init");
function blockblog_init() {
    //return \Blockblog\Classes\Main::get_instance();
    new \Blockblog\Classes\Main();
}
blockblog_init();

