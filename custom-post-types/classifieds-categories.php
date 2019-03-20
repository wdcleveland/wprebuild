<?php

// Register Custom Post Type Categories
function my_taxonomies_classified() {
  $labels = array(
    'name'              => _x( 'Classified Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Classified Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Classified Categories' ),
    'all_items'         => __( 'All Classified Categories' ),
    'parent_item'       => __( 'Parent Classified Category' ),
    'parent_item_colon' => __( 'Parent Classified Category:' ),
    'edit_item'         => __( 'Edit Classified Category' ),
    'update_item'       => __( 'Update Classified Category' ),
    'add_new_item'      => __( 'Add New Classified Category' ),
    'new_item_name'     => __( 'New Classified Category' ),
    'menu_name'         => __( 'Classified Categories' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'classified-type', 'classified', $args );
}
add_action( 'init', 'my_taxonomies_classified', 0 );
?>
