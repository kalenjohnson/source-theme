<?php
/**
 * Source includes
 *
 * We check for minimum PHP first and foremost
 */
if (!class_exists('WPUpdatePhp')) {
  require_once locate_template('vendor/wpupdatephp/wp-update-php/src/WPUpdatePhp.php');
}
require_once locate_template('lib/php-check.php');

/**
 * The $source_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$source_includes = array(
  'vendor/autoload.php',           // Composer packages
  'lib/utils.php',                 // Utility functions
  'lib/init.php',                  // Initial theme setup and constants
  'lib/wrapper.php',               // Theme wrapper class
  'lib/config.php',                // Configuration
  'lib/assets.php',                // Scripts and stylesheets
  'lib/titles.php',                // Page titles
  'lib/extras.php',                // Custom functions
);

foreach ($source_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'source'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);
