<?php

// Register Custom Post Type Categories
function my_taxonomies_event() {
  $labels = array(
    'name'              => _x( 'Event Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Event Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Event Categories' ),
    'all_items'         => __( 'All Event Categories' ),
    'parent_item'       => __( 'Parent Event Category' ),
    'parent_item_colon' => __( 'Parent Event Category:' ),
    'edit_item'         => __( 'Edit Event Category' ),
    'update_item'       => __( 'Update Event Category' ),
    'add_new_item'      => __( 'Add New Event Category' ),
    'new_item_name'     => __( 'New Event Category' ),
    'menu_name'         => __( 'Event Categories' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'event-type', 'event', $args );
}
add_action( 'init', 'my_taxonomies_event', 0 );
?>
