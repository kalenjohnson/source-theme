<?php

class SourceUpdatePHP
{
  protected $minimum_version;

  public function __construct( $minimum_version ) {
    $this->minimum_version = $minimum_version;
  }

  public function does_it_meet_required_php_version( $version ) {
    if ( $this->is_minimum_php_version( $version ) ) {
      return true;
    }

    $this->load_minimum_required_version_notice();
    return false;
  }

  private function is_minimum_php_version( $version ) {
    return version_compare( $this->minimum_version, $version, '<=' );
  }

  private function load_minimum_required_version_notice() {
    if ( is_admin() && ! defined( 'DOING_AJAX' ) ) {
      add_action( 'admin_notices', array( $this, 'admin_notice' ) );
    }
  }

  public function admin_notice() {
    echo '<div class="error">';
    echo '<p>Unfortunately, this theme can not run on PHP versions older than '. $this->minimum_version .'. Read more information about <a href="http://www.wpupdatephp.com/update/">how you can update</a>.</p>';
    echo '</div>';
  }
}
