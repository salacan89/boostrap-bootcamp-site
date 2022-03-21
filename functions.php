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
      'supports' =>  array(''),                 
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

 /**
       * Add ACF Options page.
       */

      if( function_exists('acf_add_options_page') ) {
        acf_add_options_page();
        }


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

