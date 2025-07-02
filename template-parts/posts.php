<?php
/**
* @package BlockBlog
* Archive Template to Load For Archive Pages
*/
if(!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$default_thumbnail = BLOCKBLOG_URI . '/assets/images/avatar.jpg';
?>


    <?php if(have_posts()): ?>
    <div class="blockblog-container archive" id="blockblog-content">
        <?php while(have_posts()): the_post(); ?>
            <div class="blockblog-single">
            <?php 
                if(has_post_thumbnail()) {
                    $post_thumbnail = get_the_post_thumbnail_url();
                }else {
                    $post_thumbnail = $default_thumbnail;
                }
                $post_date = get_the_date('F j, Y');
                $post_author = get_the_author();
                $post_category = get_the_category();
            ?>
        <a href="<?php the_permalink(); ?>" class="post-thumbnail" data-blockblog-load="<?php the_permalink(); ?>" aria-labelledby="post-title">
                    <img src="<?php echo esc_url($post_thumbnail); ?>" width="200px" height="200px" alt="<?php the_title(); ?>" loading="lazy" />
                </a>
        <a href="<?php the_permalink(); ?>" class="post-title" data-blockblog-load="<?php the_permalink(); ?>" aria-labelledby="post-title">
                    <h2><?php the_title(); ?></h2>
                </a>
                <div class="post-meta">
                    <span class="post-date"><?php echo esc_html($post_date); ?></span>
            <span class="post-author">by 
                <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="post-author-link" data-blockblog-load="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                    <?php echo esc_html($post_author); ?>
                </a>
            </span>
                    <?php if(!empty($post_category)): ?>
                        <span class="post-category">
                in <a href="<?php echo esc_url(get_category_link($post_category[0]->term_id)); ?>" class="post-category-link" data-blockblog-load="<?php echo esc_url(get_category_link($post_category[0]->term_id)); ?>" aria-label="<?php esc_attr_e('Category: '. implode(', ', wp_list_pluck($post_category, 'name')), 'blockblog'); ?>">
                    <?php echo esc_html(implode(', ', wp_list_pluck($post_category, 'name'))); ?>
                            </a>
            </span>
                    <?php endif; ?>
                </div>
        <a href="<?php the_permalink(); ?>" class="post-excerpt" data-blockblog-load="<?php the_permalink(); ?>" aria-label="<?php esc_attr_e('Read more about: '. get_the_title(), 'blockblog'); ?>">
                    <p><?php the_excerpt(); ?></p>
                </a>
<a href="<?php the_permalink(); ?>" class="read-more" data-blockblog-load="<?php the_permalink(); ?>" aria-label="<?php esc_attr_e('Read more about: '. get_the_title(), 'blockblog'); ?>">
                    Read The Blog
                </a>
            </div>
        <?php endwhile; ?>
        </div>
    <div class="blockblog-pagination">
        <?php
        wp_reset_postdata();
        ?>
    </div>
    <?php else: ?>
        <?php get_template_part('template-parts/posts-not-found'); ?>
    <?php endif; ?>
