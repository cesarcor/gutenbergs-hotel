<?php

add_action('init', 'gh_rooms_post_type');
function gh_rooms_post_type(){

  $labels = array(
      'name' => 'Rooms',
      'singular' => 'Room',
      'add_new' => 'Add New Room',
      'all_items' => 'All Rooms',
      'add_new_item' => 'Add New Room',
      'edit_item' => 'Edit Room',
      'new_item' => 'New Room',
      'view_item' => 'View Room',
      'search_items' => 'Search Rooms',
      'not_found' => 'No Rooms Found',
      'not_found_in_trash' => 'No Rooms Found'
  );

  $params = array(
      'labels' => $labels,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-building',
      'public' => true,
      'publicly_queryable' => false,
      'query_var' => true,
      'has_archive' => false,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'revisions',
            'custom-fields'
      ),
      'taxonomies' => array(
            'category',
            'post_tag'),
      'exclude_from_search' => true
  );

  register_post_type('gh_rooms', $params);

}
