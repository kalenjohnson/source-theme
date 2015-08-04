<?php
/**
 * Source includes
 *
 * We check for minimum PHP first and foremost
 */
if (!class_exists('SourceUpdatePHP')) {
  require_once locate_template('lib/wpupdatephp.php');
}

$updatePhp = new SourceUpdatePHP('5.4.0');

if (!$updatePhp->does_it_meet_required_php_version(PHP_VERSION)) {
  require_once locate_template('lib/change-theme.php');
} else {
  /**
   * The $source_includes array determines the code library included in your theme.
   * Add or remove files to the array as needed. Supports child theme overrides.
   *
   * Please note that missing files will produce a fatal error.
   *
   * @link https://github.com/roots/sage/pull/1042
   */
  $source_includes = array(
    'lib/utils.php',                 // Utility functions
    'lib/init.php',                  // Initial theme setup and constants
    'lib/wrapper.php',               // Theme wrapper class
    'lib/config.php',                // Configuration
    'lib/assets.php',                // Scripts and stylesheets
    'lib/titles.php',                // Page titles
    'lib/extras.php',                // Custom functions
  );

  /**
   * Include Composer autoload file if it's there
   * Else, assume it's included with Bedrock
   */
  if (locate_template('vendor/autoload.php')) {
    $source_includes[] = 'vendor/autoload.php';
  }

  foreach ($source_includes as $file) {
    if (!$filepath = locate_template($file)) {
      trigger_error(sprintf(__('Error locating %s for inclusion', 'source'), $file), E_USER_ERROR);
    }

    require_once $filepath;
  }
  unset($file, $filepath);
}
