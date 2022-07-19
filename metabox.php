<?php

function wpholidays_meta_box_markup($post) {
    $year = date("Y");
    $holidays = get_holidays_and_important_events($year);

    $selected_holiday = get_post_meta($post->ID, "wpholidays-holiday", true);
    $selected_time = get_post_meta($post->ID, "wpholidays-time", true); 
    $display_datetime = date("l, F d, Y \@ g:i A", strtotime($holidays[$selected_holiday][date]." ".get_post_meta($post->ID, "wpholidays-time", true).":00"));
    wp_nonce_field(basename(__FILE__), "meta-box-wpholidays-nonce");
    ?>

        <div>
            <label for="meta-box-warketing-holiday">Associated Holiday:</label><br>
            <select name="wpholidays-holiday">
              <option value="">No holiday selected</option>
              <?php 
                $lastmonth = "00";
                foreach($holidays as $holiday => $arr) {
                  $thismonth = sprintf("%02d", substr($arr['date'], 5, 2));
                  $the_day = sprintf("%02d", substr($arr['date'], 8, 2));
                  if ($lastmonth != $thismonth) {
                    echo "<option disabled>─── ".date("F", strtotime($year."-".$thismonth."-01"))." ───</option>\n";
                    $lastmonth = $thismonth;
                  }
                  if ($selected_holiday == $holiday) $selected = "selected"; else $selected = "";
                  echo "<option value=\"".$holiday."\" ".$selected.">".$the_day." - ".$arr['name']."</option>\n";
                }
              ?>
            </select>
            <br>
            <select name="wpholidays-time">
              <?php 
                for ($i=0; $i < 24; $i++) {
                  $time = sprintf("%02d", $i).":00";
                  if ($selected_time == $time) $selected = "selected"; else $selected = "";
                  echo "<option value=\"".$time."\" ".$selected.">".$time."</option>\n";
                }
              ?>
            </select>
        </div>

    <?php      

    if (isset($selected_holiday)) {
      echo "<br>";
      echo "Post Date:<br>".$display_datetime."<br>";
    }
}

function add_wpholidays_meta_box() {
    add_meta_box("wpholidays-meta-box", "WP-Holidays", "wpholidays_meta_box_markup", "dsi-holidays", "side", "high", null);
}
add_action("add_meta_boxes", "add_wpholidays_meta_box");

function save_custom_wpholidays_meta_box($post_id, $post, $update) {
    if (!isset($_POST["meta-box-wpholidays-nonce"]) || !wp_verify_nonce($_POST["meta-box-wpholidays-nonce"], basename(__FILE__)))
        return $post_id;

    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    if($post->post_type != "dsi-holidays")
        return $post_id;

    if(isset($_POST["wpholidays-holiday"])) {
        update_post_meta($post_id, "wpholidays-holiday", $_POST["wpholidays-holiday"]);
    }   

    if(isset($_POST["wpholidays-time"])) {
        update_post_meta($post_id, "wpholidays-time", $_POST["wpholidays-time"]);
    }   
}
add_action("save_post", "save_custom_wpholidays_meta_box", 10, 3);
