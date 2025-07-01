<?php
/**
* @package BlockBlog
* Common Footer Template
*/
?>
        <footer role="contentinfo" class="blockblog-footer">
            <div class="container">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
