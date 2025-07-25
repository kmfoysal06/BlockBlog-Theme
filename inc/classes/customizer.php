<?php
/**
* site customizer
* @package BlockBlog
*/
namespace Blockblog\Classes;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

//use Blockblog\Traits\Singleton;
class Customizer
{
 //   use Singleton;
    public function __construct()
    {
        $this->init_hooks();
    }
    protected function init_hooks() {
        add_action('customize_register', [$this, "setup_customizer"]);
    }
    public function setup_customizer($customize) {
        $customize->add_section('blockblog_footer_customize', [
            'title' => __("Customize BlockBlog Footer", "blockblog"),
            'description' => '',
            'priority' => 10
        ]);
        $customize->add_setting('blockblog_footer[metadata]', [
            'type' => 'option', 
            'capability' => 'edit_theme_options',
            'transport' => 'refresh'
        ]);

        $customize->add_control('blockblog_footer_meta_text', [
            'label' => __("Information to show on footer(first line)", "blockblog"),
            'section' => 'blockblog_footer_customize',
            'settings' => 'blockblog_footer[metadata]'
        ]);
        $customize->add_setting('blockblog_footer[metadata_secondary]', [
            'type' => 'option', 
            'capability' => 'edit_theme_options',
            'transport' => 'refresh'
        ]);
        $customize->add_control('blockblog_footer_meta_text_secondary', [
            'label' => __("Information to show on footer(second line)", "blockblog"),
            'section' => 'blockblog_footer_customize',
            'settings' => 'blockblog_footer[metadata_secondary]'
        ]);
        $this->add_social_input($customize, "Facebook", "fb");
        $this->add_social_input($customize, "Instagram", "ig");
        $this->add_social_input($customize, "Linkedin", "linkedin");
        $this->add_social_input($customize, "X", "x");
        $this->add_social_input($customize, "Youtube", "yt");
//        $this->add_social_input($customize, "Github", "github");
        $this->add_social_input($customize, "WordPress", "wp");
//        $this->add_social_input($customize, "Leetcode", "leetcode");

    }
    protected function add_social_input($customize, $label, $name) {
        $customize->add_setting("blockblog_footer[social_link][{$name}]", [
            'type' => 'option', 
            'capability' => 'edit_theme_options',
            'transport' => 'refresh'
        ]);
        $customize->add_control("blockblog_footer_social_{$name}", [
            'label' => __("{$label} Link", "blockblog"),
            'section' => 'blockblog_footer_customize',
            'settings' => "blockblog_footer[social_link][{$name}]",
            'type' => 'url'
        ]);
    }
   }
