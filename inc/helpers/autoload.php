<?php
/**
 * Class File Autoloader
 * @package BlockBlog
 */

/**
 * Exit if accessed directly
 */
if(!defined("ABSPATH")) exit;

spl_autoload_register('blockblog_autoloader');
function blockblog_autoloader($class) {
	$namespace = 'Blockblog';
    $src = '/inc';
 
	if (strpos($class, $namespace) !== 0) {
		return;
	}
 
	$class = str_replace($namespace, $src, $class);
	$class = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

	$path = strtolower(BLOCKBLOG_DIR . $class);

	if (file_exists($path)) {
		require_once($path);
	}
}
