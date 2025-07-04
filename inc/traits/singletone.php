<?php
/**
 * Trait Singleton Template
 * @package BlockBlog
 * @since 1.0
 */

namespace Blockblog\Traits;

/**
 * Exit if accessed directly
 */
if(!defined("ABSPATH")) exit;

trait Singleton{
    public function __construct(){}
    public function __clone(){}
    final public static function get_instance(){
        static $instance = [];
        $called_class = get_called_class();
        if(!isset($instance[$called_class])){
            $instance[$called_class] = new $called_class;
            do_action(sprintf("blockblog_singleton_init%s",$called_class));
        }
        return $instance[$called_class];
    }
}
