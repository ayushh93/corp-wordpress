<?php 
add_action('init', 'corp_banner_post_type', 0);
add_action('init', 'corp_client_post_type', 0);
add_action('init', 'corp_testimonial_post_type', 0);
add_action('init', 'corp_team_post_type', 0);




function corp_banner_post_type() {
      // Labels for the Post Type
    $labels = array(
      'name'                => _x( 'banners', 'Post Type General Name', 'corp' ),
      'singular_name'       => _x( 'banner', 'Post Type Singular Name', 'corp' ),
      'menu_name'           => __( 'banners', 'corp' ),
      'parent_item_colon'   => __( 'Parent banner', 'corp' ),
      'all_items'           => __( 'All banners', 'corp' ),
      'view_item'           => __( 'View banner', 'corp' ),
      'add_new_item'        => __( 'Add New banner', 'corp' ),
      'add_new'             => __( 'Add New banner', 'corp' ),
      'edit_item'           => __( 'Edit banner', 'corp' ),
      'update_item'         => __( 'Update banner', 'corp' ),
      'search_items'        => __( 'Search banner', 'corp' ),
      'not_found'           => __( 'No banners found', 'corp' ),
      'not_found_in_trash'  => __( 'Not found in trash', 'corp' ),
    );
    // Another Customizations
    $args = array(
        'label'   => __('banners','corp' ),
        'description' => __('banners for corp', 'corp'),
        'labels'  => $labels,
        'supports' => array('title', 'thumbnail', 'editor'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menus' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 15,
        'menu_icon' => 'dashicons-layout',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'capability_type' => 'page',
    );
    // register the post Type
    register_post_type( 'banners', $args);
}

function corp_client_post_type() {
  // Labels for the Post Type
$labels = array(
  'name'                => _x( 'clients', 'Post Type General Name', 'corp' ),
  'singular_name'       => _x( 'client', 'Post Type Singular Name', 'corp' ),
  'menu_name'           => __( 'clients', 'corp' ),
  'parent_item_colon'   => __( 'Parent client', 'corp' ),
  'all_items'           => __( 'All clients', 'corp' ),
  'view_item'           => __( 'View client', 'corp' ),
  'add_new_item'        => __( 'Add New client', 'corp' ),
  'add_new'             => __( 'Add New client', 'corp' ),
  'edit_item'           => __( 'Edit client', 'corp' ),
  'update_item'         => __( 'Update client', 'corp' ),
  'search_items'        => __( 'Search client', 'corp' ),
  'not_found'           => __( 'No clients found', 'corp' ),
  'not_found_in_trash'  => __( 'Not found in trash', 'corp' ),
);
// Another Customizations
$args = array(
    'label'   => __('clients','corp' ),
    'description' => __('clients for corp', 'corp'),
    'labels'  => $labels,
    'supports' => array('title', 'thumbnail',),
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menus' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 15,
    'menu_icon' => 'dashicons-groups',
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'capability_type' => 'page',
);
// register the post Type
register_post_type( 'clients', $args);
}


function corp_testimonial_post_type() {
  // Labels for the Post Type
$labels = array(
  'name'                => _x( 'testimonials', 'Post Type General Name', 'corp' ),
  'singular_name'       => _x( 'testimonial', 'Post Type Singular Name', 'corp' ),
  'menu_name'           => __( 'testimonials', 'corp' ),
  'parent_item_colon'   => __( 'Parent testimonial', 'corp' ),
  'all_items'           => __( 'All testimonials', 'corp' ),
  'view_item'           => __( 'View testimonial', 'corp' ),
  'add_new_item'        => __( 'Add New testimonial', 'corp' ),
  'add_new'             => __( 'Add New testimonial', 'corp' ),
  'edit_item'           => __( 'Edit testimonial', 'corp' ),
  'update_item'         => __( 'Update testimonial', 'corp' ),
  'search_items'        => __( 'Search testimonial', 'corp' ),
  'not_found'           => __( 'No testimonials found', 'corp' ),
  'not_found_in_trash'  => __( 'Not found in trash', 'corp' ),
);
// Another Customizations
$args = array(
    'label'   => __('testimonials','corp' ),
    'description' => __('testimonials for corp', 'corp'),
    'labels'  => $labels,
    'supports' => array('title', 'thumbnail', 'excerpt'),
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menus' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 15,
    'menu_icon' => 'dashicons-id',
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'capability_type' => 'page',
);
// register the post Type
register_post_type( 'testimonials', $args);
}

function corp_team_post_type() {
  // Labels for the Post Type
$labels = array(
  'name'                => _x( 'teams', 'Post Type General Name', 'corp' ),
  'singular_name'       => _x( 'team', 'Post Type Singular Name', 'corp' ),
  'menu_name'           => __( 'teams', 'corp' ),
  'parent_item_colon'   => __( 'Parent team', 'corp' ),
  'all_items'           => __( 'All teams', 'corp' ),
  'view_item'           => __( 'View team', 'corp' ),
  'add_new_item'        => __( 'Add New team', 'corp' ),
  'add_new'             => __( 'Add New team', 'corp' ),
  'edit_item'           => __( 'Edit team', 'corp' ),
  'update_item'         => __( 'Update team', 'corp' ),
  'search_items'        => __( 'Search team', 'corp' ),
  'not_found'           => __( 'No teams found', 'corp' ),
  'not_found_in_trash'  => __( 'Not found in trash', 'corp' ),
);
// Another Customizations
$args = array(
    'label'   => __('teams','corp' ),
    'description' => __('teams for corp', 'corp'),
    'labels'  => $labels,
    'supports' => array('title', 'thumbnail', 'excerpt'),
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menus' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 15,
    'menu_icon' => 'dashicons-groups',
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'capability_type' => 'page',
);
// register the post Type
register_post_type( 'teams', $args);
}
?>