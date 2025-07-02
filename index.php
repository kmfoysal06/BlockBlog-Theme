<?php
/**
* @package BlockBlog
* Default Index Template to Load For Almost Every Pages (search, home, archive, suer profile)
*/

/**
* load common header
*/
get_header(); 

get_template_part("template-parts/posts", "header");

get_template_part("template-parts/posts");

/**
* load common footer
*/
get_footer();
?>
