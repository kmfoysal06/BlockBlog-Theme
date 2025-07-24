<?php
/**
* @package BlockBlog
* Common Footer Template
*/
?>

            <footer role="contentinfo" class="blockblog-footer">
                <div class="blockblog-footer-inner">
                    <div class="footer-section footer-owner-data">
                        <div class="contactinfo">
                            <h3>Kazi Mohammad Foysal</h3>
                            <p>Web Developer</p>
                            <p>Anowara, Chittagong, Bangladesh</p>
                            <p>info@kmfoysal06.com</p>
                        </div>
                        <div class="footer-search">
                            <?php get_search_form([
                                'aria_label' => __('Footer Search', 'blockblog'),
                                'placeholder' => __('Search...', 'blockblog'),
                            ]); ?>                            
                        </div>
                        <div class="footer-socials">
                            <ul>
                                <li> <a href=""><img src="https://z-m-static.xx.fbcdn.net/rsrc.php/v4/yD/r/5D8s-GsHJlJ.png" width="26px" height="26px" loading="lazy" ></a> </li>
                            </ul>
            
                        </div>
                    </div>
                    <div class="footer-section footer-section-menus">
                       <?php if(has_nav_menu('blockblog_footer_nav')): ?>
                            <div class="footer-subsection">
                                <h3>External Links:</h3>
                                <?php wp_nav_menu([
                                    'theme_location' => 'blockblog_footer_nav',
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
