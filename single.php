<?php
/**
* @package BlockBlog
* Single Post Template
*/
/**
* load common header
*/
get_header(); 

?>
<div class="blockblog-container" id="blockblog-content">
    <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
            <div class="<?php post_class('blockblog-single-post') ?>">
                <?php if(has_post_thumbnail()): ?>
                    <img src="<?php echo get_the_post_thumbnail(); ?>" width="200px" height="200px" alt="<?php the_title(); ?>" class="post-thumbnail" />
                <?php endif; ?>
                <h1 class="post-title"><?php the_title(); ?></h1>
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                    <div class="post-meta">
                        <span class="post-date"><?php echo get_the_date('F j, Y'); ?></span>
                        <span class="post-author">by 
                <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="post-author-link" data-blockblog-load="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                                <?php the_author(); ?>
                            </a>
                        </span>
                        <?php $post_category = get_the_category(); ?>
                        <?php if(!empty($post_category)): ?>
                            <span class="post-category">
                            in <a href="<?php echo esc_url(get_category_link($post_category[0]->term_id)); ?>" class="post-category-link" data-blockblog-load="<?php echo esc_url(get_category_link($post_category[0]->term_id)); ?>"><?php echo esc_html(implode(', ', wp_list_pluck($post_category, 'name'))); ?></a>
                            </span>
                        <?php endif; ?>
                        <div class="post-tags">
                            <?php the_tags('<span class="post-tags-label">Tags: </span>', ', '); ?>
                        </div>

                    </div> 
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
<?php
/**
* load common footer
*/
get_footer();
?>
