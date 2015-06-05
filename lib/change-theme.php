<?php

$stock_themes = array(
  'twentyfifteen',
  'twentyfourteen',
  'twentythirteen',
  'twentytwelve',
  'twentyeleven',
  'twentyten'
);
foreach ($stock_themes as $theme) {
  if (file_exists(WP_CONTENT_DIR . '/' . $theme . '/style.css')) {
    switch_theme($theme);
    break;
  }

  /**
   * Check the standard directory in case WP_CONTENT_DIR is changed
   */
  if (file_exists(ABSPATH . 'wp-content/themes/' . $theme . '/style.css')) {
    switch_theme($theme);
    break;
  }
}
