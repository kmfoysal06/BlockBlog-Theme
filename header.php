<?php
/**
* @package BlockBlog
* Main Common Header
*/


use Blockblog\Classes\Nav_Walker;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <title><?php bloginfo('name'); ?><?php wp_title('|', true, 'left'); ?></title>
        <?php wp_head(); ?>
    </head>
    <body class="<?php body_class(); ?>">
        <?php wp_body_open(); ?>
            <a class="skip-link screen-reader-text" href="#blockblog-content">
                <?php _e('Skip to content', 'blockblog'); ?>
            </a>
 
        <header role="banner">
            <div class="blockblog-top-progress"></div>
            <div class="blockblog-header">
                <div class="logo-and-nav">
                    <div class="logo">
                        <a href="<?php echo esc_url(home_url("/")); ?>" data-blockblog-load="<?php echo esc_url(home_url("/")); ?>" aria-label="<?php esc_attr_e('Home', 'blockblog'); ?>" class="blockblog-logo-link">
                            <?php bloginfo('name'); ?>
                        </a>
                    </div>
                    <div class="nav-menu blockblog-nav">
                        <?php if(has_nav_menu("blockblog_header_nav")): ?>
                        <?php wp_nav_menu([
                            'theme_location' => 'blockblog_header_nav',
	                        'walker' => new Nav_Walker()
                            ]);
                        ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="search-and-profile">
                    <div class="search">
                        <?php get_search_form() ?> 
                    </div>
                    <div class="avatar blockblog-profile">
                        <a href="<?php echo esc_url(get_author_posts_url(get_current_user_id())); ?>" class="blockblog-profile-link" data-blockblog-load="<?php echo esc_url(get_author_posts_url(get_current_user_id())); ?>" aria-label="<?php esc_attr_e('Profile', 'blockblog'); ?>">

                         <img src="<?php echo get_avatar_url(get_current_user_id()); ?>" width="20px" height="20px" loading="lazy" /> 
                        </a>
                         <span class="blockblog-menu-toggler dashicons dashicons-menu-alt"></span>
                    </div>
                </div>
            </div>
            <div class="blockblog-page-loading-progress"></div>
        </header>
