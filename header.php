<?php
/**
* @package BlockBlog
* Main Common Header
*/
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <?php wp_head(); ?>
    </head>
    <body class="<?php echo body_class(); ?>">
        <?php echo wp_body_open(); ?>
            <a class="skip-link screen-reader-text" href="#blockblog-content">
                <?php _e('Skip to content', 'blockblog'); ?>
            </a>
 
        <header role="banner">
            <div class="blockblog-header">
                <div class="logo-and-nav">
                    <div class="logo">
                        <a href="/" data-blockblog-load="/">kmfoysal06</a>
                    </div>
                    <div class="nav-menu blockblog-nav">
                        <?php wp_nav_menu("blockblog_header_nav"); ?>
                    </div>
                </div>
                <div class="search-and-profile">
                    <div class="search">
                        <?php get_search_form() ?> 
                    </div>
                    <div class="avatar blockblog-profile">
                        <a href="<?php echo esc_url(get_author_posts_url(get_current_user_id())); ?>" class="blockblog-profile-link" data-blockblog-load="<?php echo esc_url(get_author_posts_url(get_current_user_id())); ?>">
                         <img src="<?php echo get_avatar_url(get_current_user_id()); ?>" width="20px" height="20px" /> 
                        </a>
                         <span class="blockblog-menu-toggler dashicons dashicons-menu-alt"></span>
                    </div>
                </div>
            </div>
        </header>
