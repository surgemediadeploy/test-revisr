<?php

// Register Custom Post Type
function quotes_post_type() {

  $labels = array(
    'name'                => _x( 'Quotes', 'Post Type General Name', 'text_domain' ),
    'singular_name'       => _x( 'Quote', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'           => __( 'Quotes', 'text_domain' ),
    'parent_item_colon'   => __( 'Parent Quote', 'text_domain' ),
    'all_items'           => __( 'All Quotes', 'text_domain' ),
    'view_item'           => __( 'View Quote', 'text_domain' ),
    'add_new_item'        => __( 'Add Quote', 'text_domain' ),
    'add_new'             => __( 'Add Quote', 'text_domain' ),
    'edit_item'           => __( 'Edit Quote', 'text_domain' ),
    'update_item'         => __( 'Update Quote', 'text_domain' ),
    'search_items'        => __( 'Search Quotes', 'text_domain' ),
    'not_found'           => __( 'no Quotes Found', 'text_domain' ),
    'not_found_in_trash'  => __( 'no Quotes Found in Trash', 'text_domain' ),
  );
  $args = array(
    'label'               => __( 'quote', 'text_domain' ),
    'description'         => __( 'quote for work', 'text_domain' ),
    'labels'              => $labels,
    'supports'            => array( 'title'),
    'taxonomies'          => array(),
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
    'capability_type'     => 'page',
  );
  register_post_type( 'quote', $args );

}

// Hook into the 'init' action
add_action( 'init', 'quotes_post_type', 0 );

?>