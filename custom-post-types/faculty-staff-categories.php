<?php

// Register Custom Post Type Categories
function my_taxonomies_employee() {
  $labels = array(
    'name'              => _x( 'Employee Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Employee Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Employee Categories' ),
    'all_items'         => __( 'All Employee Categories' ),
    'parent_item'       => __( 'Parent Employee Category' ),
    'parent_item_colon' => __( 'Parent Employee Category:' ),
    'edit_item'         => __( 'Edit Employee Category' ),
    'update_item'       => __( 'Update Employee Category' ),
    'add_new_item'      => __( 'Add New Employee Category' ),
    'new_item_name'     => __( 'New Employee Category' ),
    'menu_name'         => __( 'Employee Categories' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'department', 'employee', $args );
}
add_action( 'init', 'my_taxonomies_employee', 0 );
?>
