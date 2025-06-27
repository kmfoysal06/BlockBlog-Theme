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
        <header role="banner" class="blockblog-header">
            <div class="logo">
                <h4>kmfoysal06</h4>
            </div>
    <div class="nav-menu">
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/">Blogs</a>
            </li>
            <li>
                <a href="/">About</a>
            </li>
            <li>
                <a href="/">Contact</a>
            </li>
        <ul>
    </div>
    <div class="search-and-profile">
        <div class="search">
            <?php get_search_form() ?> 
        </div>
        <div class="avatar">
            <!-- <img src="<?php echo get_avatar_url(get_current_user_id()); ?>" width="20px" height="20px" /> -->
            <img src="<?php echo BLOCKBLOG_URI . '/assets/images/avatar.jpg' ?>" width="20px" height="20px" />
        </div>
    <div>
    </header>
