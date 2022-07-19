<?php
  function wp_holidays_create_post($post) {
    // category id for posts
    $category_ids = array(1);

    // Set the page ID so that we know the page was created successfully
    $post_id = wp_insert_post(
             array(
                  'post_author'    => 1,
                  'post_title'     => $post->post_title,
                  'post_content'   => $post->post_content,
                  'post_status'    => 'publish',
		  'post_category'  => $category_ids,
                  'comment_status' => 'closed',
                  'ping_status'    => 'closed',
                  'post_type'      => 'post'
                 )
    );

    // add featured image
    set_post_thumbnail($post_id, get_post_thumbnail_id($post->ID));

    return $post_id;
  }

  function wp_holidays_publish_post_cron() {
    $year = date("Y");
    $holidays = get_holidays_and_important_events($year);
    $timezone = wp_timezone_string();
    date_default_timezone_set($timezone);

    $now = time();
    $last_hour = strtotime("now -1 hour");

    // Check holidays to see if any of them need to be acted upon (to be run hourly)
    $args = array(
        'post_type'             => 'dsi-holidays',
        'post_status'           => 'publish',
        'numberposts'           => -1,
        'orderby'               => 'post_title',
    );
    $posts = get_posts($args);

    foreach($posts as $post) {
      $holiday = get_post_meta( $post->ID, 'wpholidays-holiday', true );
      $schedule_date = $holidays[$holiday]['date'];
      $schedule_time = get_post_meta( $post->ID, 'wpholidays-time', true ).":00";
      $schedule_timestamp = strtotime($schedule_date." ".$schedule_time);

      // See if the sale started in the last hour
      if (($schedule_timestamp > $last_hour) && ($schedule_timestamp <= $now)) { 
        $post_id = wp_holidays_create_post($post);
      }
    }
  }
  add_action( 'wp_holidays_publish_post_hook', 'wp_holidays_publish_post_cron' );
