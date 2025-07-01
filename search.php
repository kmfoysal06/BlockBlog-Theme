<?php
/**
* @package BlockBlog
* Search Template to Load For Search Results
*/

/**
* load common header
*/
get_header(); 
$default_thumbnail = BLOCKBLOG_URI . '/assets/images/avatar.jpg';

get_template_part("template-parts/posts");

/**
* load common footer
*/
get_footer();
?>
