<?php
/**
* @package BlockBlog
* Common Footer Template
*/
?>

<?php
$footer_informations = get_option("blockblog_footer");
?>
            <footer role="contentinfo" class="blockblog-footer">
                <div class="blockblog-footer-inner">
                    <div class="footer-section footer-owner-data">
                        <div class="contactinfo">
                            <h3><?php bloginfo('name'); ?></h3>
                            <p><?php bloginfo('description'); ?></p>
                            <?php if($footer_informations && is_array($footer_informations)): ?>
                            <?php if(isset($footer_informations['metadata'])): ?>
                            <p><?php echo esc_html($footer_informations['metadata']); ?></p>
                            <?php endif; ?>

                            <?php if(isset($footer_informations['metadata_secondary'])): ?>
                            <p><?php echo esc_html($footer_informations['metadata_secondary']); ?></p>
                            <?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <div class="footer-search">
                        <?php
                                    ob_start();
                                    get_search_form([
                                            'aria_label' => __('Footer Search', 'blockblog'),
                                            'placeholder' => __('Search...', 'blockblog'),
                                        ]);
                                    $default_search = ob_get_clean();
                        ?>
                        <?php echo apply_filter('blockblog-footer-search', $default_search);?>                            
                        
                        <?php get_search_form([
                                'aria_label' => __('Footer Search', 'blockblog'),
                                'placeholder' => __('Search...', 'blockblog'),
                            ]); ?>                            
                        </div>
                        <?php get_template_part('template-parts/footer/social_links', '', ['footer_info' => $footer_informations]) ; ?>
                    </div>
                    <div class="footer-section footer-section-menus">
                       <?php if(has_nav_menu('blockblog_footer_nav')): ?>
                            <div class="footer-subsection">
                                <h3>External Links:</h3>
                                <?php wp_nav_menu([
                                    'theme_location' => 'blockblog_footer_nav',
                                    'link_after' => '<span class="dashicons dashicons-external"></span>'
                                    ]);
                                ?>
                            </div>
                        <?php endif; ?>
                        <div class="footer-subsection">
                            <h3>Latest Posts:</h3>
                            <?php get_template_part("template-parts/footer/latest-posts"); ?>
                        </div>
                    </div>
            
                </div>
                <div class="copyright">
                    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
                </div>
            </footer>
        <?php wp_footer(); ?>
    </body>
</html>
