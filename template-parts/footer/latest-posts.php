<ul>
    <?php
        $latest_posts = new WP_Query([
        'posts_per_page' => 4,
        'post_status' => 'publish',
    ]);
    if ($latest_posts->have_posts()) :
        while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>" class="blockblog-footer-post-link" data-blockblog-load="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </li>
    <?php endwhile;
        wp_reset_postdata();
    else : ?>
        <li><?php _e('No posts found', 'blockblog'); ?></li>
    <?php endif; ?>
</ul>
