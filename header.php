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
                        <h4>kmfoysal06</h4>
                    </div>
                    <div class="nav-menu">
                        <ul class="blockblog-nav">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="https://profiles.wordpress.org/kmfoysal06">WordPress</a>
                            </li>
                            <li>
                                <a href="https://portfolio.kmfoysal06.com">About</a>
                            </li>
                            <li>
                                <a href="https://linkedin.com/in/kmfoysal06">Contact</a>
                            </li>
                        <ul>
                    </div>
                </div>
                <div class="search-and-profile">
                    <div class="search">
                        <?php get_search_form() ?> 
                    </div>
                    <div class="avatar blockblog-profile">
                         <img src="<?php echo get_avatar_url(get_current_user_id()); ?>" width="20px" height="20px" /> 
       <!--                 <img src="<?php echo BLOCKBLOG_URI . '/assets/images/avatar.jpg' ?>" width="20px" height="20px" /> -->
                    </div>
                </div>
            </div>
        </header>
