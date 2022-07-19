<?php
/*
 * Plugin Name: WP Holidays
 * Plugin URI:
 * Description: Creates posts on specified holidays.
 * Version: 0.1
 * Author: Michael Patrick
 * Author URI: https://www.dragonsociety.com
*/

include( plugin_dir_path( __FILE__ )."/functions.php");
include( plugin_dir_path( __FILE__ )."/holidays.php");
include( plugin_dir_path( __FILE__ )."/metabox.php");
include( plugin_dir_path( __FILE__ )."/cron.php");

function wp_holidays_plugin_install() {
  // schedule the job hourly
  if ( ! wp_next_scheduled( 'wp_holidays_publish_post_hook' ) ) {
    wp_schedule_event( time(), 'hourly', 'wp_holidays_publish_post_hook' );
  }
}
register_activation_hook( __FILE__, 'wp_holidays_plugin_install' );

function wp_holidays_plugin_uninstall() {
  $timestamp = wp_next_scheduled('wp_holidays_publish_post_hook');
  wp_unschedule_event($timestamp, 'wp_holidays_publish_post_hook');
}
register_deactivation_hook( __FILE__, 'wp_holidays_plugin_uninstall' );
