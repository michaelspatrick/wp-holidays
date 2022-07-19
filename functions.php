<?php
  // Our custom post type function
  function wp_holidays_create_posttype() {
    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Holiday Posts', 'Post Type General Name', 'twentytwenty' ),
        'singular_name'       => _x( 'Holiday Post', 'Post Type Singular Name', 'twentytwenty' ),
        'menu_name'           => __( 'Holiday Posts', 'twentytwenty' ),
        'parent_item_colon'   => __( 'Parent Holiday Post', 'twentytwenty' ),
        'all_items'           => __( 'All Holiday Posts', 'twentytwenty' ),
        'view_item'           => __( 'View Holiday Post', 'twentytwenty' ),
        'add_new_item'        => __( 'Add New Holiday Post', 'twentytwenty' ),
        'add_new'             => __( 'Add New', 'twentytwenty' ),
        'edit_item'           => __( 'Edit Holiday Post', 'twentytwenty' ),
        'update_item'         => __( 'Update Holiday Post', 'twentytwenty' ),
        'search_items'        => __( 'Search Holiday Post', 'twentytwenty' ),
        'not_found'           => __( 'Not Found', 'twentytwenty' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
    );
     
    // Set other options for Custom Post Type 
    $args = array(
        'label'               => __( 'dsi-holidays', 'twentytwenty' ),
        'description'         => __( 'Holiday Post Templates', 'twentytwenty' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'revisions' ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'dsi-holidays' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    );
     
    // Registering your Custom Post Type
    register_post_type( 'dsi-holidays', $args );
  }

  // Hooking up our function to theme setup
  add_action( 'init', 'wp_holidays_create_posttype', 0 );

