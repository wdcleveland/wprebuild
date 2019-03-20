<?php

// Register Custom Post Type
function my_custom_post_classified() {
  $labels = array(
    'name'               => _x( 'Classifieds', 'post type general name' ),
    'singular_name'      => _x( 'Classified', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Classified' ),
    'edit_item'          => __( 'Edit Classified' ),
    'new_item'           => __( 'New Classified' ),
    'all_items'          => __( 'All Classifieds' ),
    'view_item'          => __( 'View Classified' ),
    'search_items'       => __( 'Search Classifieds' ),
    'not_found'          => __( 'No classifieds found' ),
    'not_found_in_trash' => __( 'No classifieds found in the Trash' ),
    'parent_item_colon'  => ’,
    'menu_name'          => 'Classifieds'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our classifieds and classified specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'classified', $args );
}
add_action( 'init', 'my_custom_post_classified' );
?>
