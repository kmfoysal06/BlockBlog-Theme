<?php

/**
 * @package BlockBlog
 * Main Class for BlockbBlog
 */

namespace Blockblog\Classes;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
class Assets
{
    public function __construct()
    {
        $this->init_hooks();
    }
    public function init_hooks()
    {
        add_action('wp_enqueue_scripts', [$this, 'load_scripts']);
    }
    public function load_scripts() {
        $main_css_path = '/assets/css/main.css';
        $main_js_path = '/assets/js/main.js';
        wp_register_style("blockblog_main", BLOCKBLOG_URI . $main_css_path, [], filemtime(BLOCKBLOG_DIR . $main_css_path));
        wp_register_script("blockblog_main_js", BLOCKBLOG_URI . $main_js_path, [], filemtime(BLOCKBLOG_DIR . $main_js_path));
    
        wp_enqueue_style("blockblog_main");
        wp_enqueue_style("dashicons");
        wp_enqueue_script("blockblog_main_js");
    }
}
