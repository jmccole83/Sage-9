<?php

namespace App;

add_action( 'init', function () {
  // custom post types go here

  // Get Custom Post Type repeater field
  $cpts = get_field('cpts', 'option');

  if($cpts):
  foreach($cpts as $cpt) {

    $sanitized_post = sanitize_title_with_dashes($cpt['post_type_name']);

    $labels = array(
      'name'            => __( $cpt['post_type_name'], '' ),
      'all_items'       => __( $cpt['post_type_name'], '' ),
      'singular_name'   => __( $cpt['singular_name'], '' ),
      'add_new'         => __( 'Add New '.$cpt['singular_name'], '' ),
      'add_new_item'    => __( 'Add New '.$cpt['singular_name'], '' ),
    );

    $args = array(
      'label'                 => __( $cpt['post_type_name'], '' ),
      'labels'                => $labels,
      'description'           => $cpt['post_type_name'].' post type',
      'supports'              => array( 'title', 'editor', 'revisions', 'trackbacks', 'author', 'excerpt', 'thumbnail' ),
      'public'                => $cpt['public'],
      'show_ui'               => $cpt['show_ui'],
      'show_in_rest'          => $cpt['show_in_rest'],
      'rest_base'             => '',
      'has_archive'           => $cpt['has_archive'],
      'menu_icon'             => $cpt['dash_icon'],
      'exclude_from_search'   => $cpt['exclude_from_search'],
      'capability_type'       => 'post',
      'map_meta_cap'          => true,
      'hierarchical'          => $cpt['hierarchical'],
    );

    // register and rename
    register_post_type( $sanitized_post, $args );

    // register taxonomies
    if($cpt['custom_taxonomies']):
    foreach($cpt['custom_taxonomies'] as $tax) {

      $sanitized_tax = sanitize_title_with_dashes($tax['taxonomy_name']);

      $args = array(
        'hierarchical'      => true,
        'labels'            => array(
        'name'              => __( $tax['taxonomy_name'], '' ),
        'singular_name'     => __( $tax['taxonomy_name'], '' ),
        'add_new'           => __( $tax['taxonomy_name'], '' ),
        'add_new_item'      => __( $tax['taxonomy_name'], '' ),
        ),
        'capabilities'      => array(
          'manage_terms'    => 'manage_categories',
          'edit_terms'      => 'manage_categories',
          'delete_terms'    => 'manage_categories',
          'assign_terms'    => 'edit_posts'
        ),
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
      );
      register_taxonomy( $sanitized_tax, array( $sanitized_post ), $args );
    }
    endif;
  }
  endif;

});
