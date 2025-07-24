<?php
/**
* @package BlockBlog
* Search Form Template
*/
?>
<form role="search" method="get" id="searchform" class="searchform blockblog-search" action="/">
    <div class="search-actions-wrapper">
        <label class="screen-reader-text" for="s">Search for:</label>
        <input type="text" placeholder="Search" value="" name="s" id="s">
        <button type="submit" class="submit blockblog-header-search" aria-label="<?php esc_attr_e('Search', 'blockblog'); ?>">
            <span class="dashicons dashicons-search"><span>
        </button> 
    </div>
</form> 
