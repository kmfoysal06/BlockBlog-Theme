<?php

/**
 * @package BlockBlog
 * Main Class for BlockbBlog
 */

namespace Blockblog\Classes;
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

//use Blockblog\Traits\Singleton;
class Main
{
 //   use Singleton;
    public function __construct()
    {
        new Assets();
        $this->init_hooks();
    }
    protected function init_hooks() {
        add_filter('excerpt_length', [$this, 'excerpt_limit'], 999);
        add_action('after_setup_theme', [$this, 'theme_setup']);
    }
   public function theme_setup() 
    {
        register_nav_menus([
            'blockblog_header_nav' => __('BlockBlog Header Menu', 'blockblog'),
        ]);
        add_theme_support('title-tag');
        add_theme_support('automatic-feed-links');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo', [
            'height' => 60,
            'width' => 200,
            'flex-height' => true,
            'flex-width' => true,
        ]);
        add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
    }
    public function excerpt_limit()
    {
        return 20;
    }
}
