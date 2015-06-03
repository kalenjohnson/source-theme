<?php

namespace Source\Assets;

/**
 * Scripts and stylesheets
 */

function asset_path($filename) {
  $dist_path = get_template_directory_uri() . DIST_DIR;
  $directory = dirname($filename) . '/';
  $file = basename($filename);

  return $dist_path . $directory . $file;
}

function assets() {
  wp_enqueue_style('source_google_fonts', 'https://fonts.googleapis.com/css?family=Source+Code+Pro', false, null);
  wp_enqueue_style('source_css', asset_path('styles/main.css'), false, '1.0.0');

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_enqueue_script('modernizr', asset_path('scripts/modernizr.js'), [], null, true);
  wp_enqueue_script('jquery');
  wp_enqueue_script('source_js', asset_path('scripts/main.js'), ['jquery'], '1.0.0', true);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);
