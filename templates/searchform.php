<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
  <label class="screen-reader-text"><?php _e('Search for:', 'source'); ?></label>
  <input type="search" value="<?php echo get_search_query(); ?>" name="s" class="search-field" placeholder="<?php _e('Search', 'source'); ?>" required>
  <button type="submit" class="search-submit"><?php _e('Search', 'source'); ?></button>
</form>
