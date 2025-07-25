<?php
/**
* load social links in footer
* @package BlockBlog
*/
if(!defined("ABSPATH")) {
    exit;
}

$social_links = blockblog_social_links();
if(is_array($social_links) && !empty($social_links)):
?>
    <div class="footer-socials">
        <ul>
            <?php foreach($social_links as $link): ?>
            <li> <a href="<?php echo esc_url($link['url']); ?>"><span class="<?php echo esc_attr("dashicons " . $link['icon']);  ?>"></span></a> </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
