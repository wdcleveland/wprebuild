<?php

// Register Custom Post Type
function my_custom_post_employee() {
  $labels = array(
    'name'               => _x( 'Employees', 'post type general name' ),
    'singular_name'      => _x( 'Employee', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Employee' ),
    'edit_item'          => __( 'Edit Employee' ),
    'new_item'           => __( 'New Employee' ),
    'all_items'          => __( 'All Employees' ),
    'view_item'          => __( 'View Employee' ),
    'search_items'       => __( 'Search Employees' ),
    'not_found'          => __( 'No employees found' ),
    'not_found_in_trash' => __( 'No employees found in the Trash' ),
    'parent_item_colon'  => ’,
    'menu_name'          => 'Employees'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our employees and employee specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'employee', $args );
}
add_action( 'init', 'my_custom_post_employee' );
?>
