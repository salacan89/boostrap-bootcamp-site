<?php
require_once 'lib/classes/nav-walker-bs5.php';
require_once 'lib/setup.php';
require_once 'lib/assets.php';
require_once 'lib/navigation.php';
require_once 'lib/helpers.php';
// require_once 'lib/language/translation.php'; // translation - uncomment if needed+


function site_post_types () {
  // Instructors Post Type
        register_post_type('instructors', array(
                'show_in_rest' => true,
                'supports' => array('title', 'editor', 'thumbnail'),
                'public' => true,
                'labels' => array(
                  'name' => 'Instructors',
                  'add_new_item' => 'Add New Instructor',
                  'edit_item' => 'Edit Instructor',
                  'all_items' => 'All Instructors',
                  'singular_name' => 'Instructor'
                ),
                'menu_icon' => 'dashicons-welcome-learn-more'
              ));
  // Events Post Type 
  register_post_type('events', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Event',
      'singular_name' => 'Event'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));           
}

add_action('init', 'site_post_types');

