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
        $css_path = '/assets/css/';
        $js_path = '/assets/js/';
        $prisma_path = '/assets/prism/';
        wp_register_style("blockblog_main", BLOCKBLOG_URI . $css_path . 'main.css', [], filemtime(BLOCKBLOG_DIR . $css_path . 'main.css'));
        wp_register_style("blockblog_utilities", BLOCKBLOG_URI . $css_path . 'utilities.css', [], filemtime(BLOCKBLOG_DIR . $css_path . 'utilities.css'));
        wp_register_style("blockblog_prism_css", BLOCKBLOG_URI . $prisma_path . 'prism.css', [], filemtime(BLOCKBLOG_DIR . $prisma_path . 'prism.css'));
        
        wp_register_script("blockblog_prism_js", BLOCKBLOG_URI . $prisma_path . 'prism.js', [], filemtime(BLOCKBLOG_DIR . $prisma_path . 'prism.js'), true);
        wp_register_script("blockblog_main_js", BLOCKBLOG_URI . $js_path . 'main.js', [], filemtime(BLOCKBLOG_DIR . $js_path . 'main.js'), true);
    
        wp_enqueue_style("blockblog_main");
        wp_enqueue_style("blockblog_utilities");
        wp_enqueue_style("dashicons");
        wp_enqueue_script("blockblog_main_js");

        if(is_single() || is_page()) {
            wp_enqueue_style("blockblog_prism_css");
            wp_enqueue_script("blockblog_prism_js");
        }
    }
}