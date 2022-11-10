<?php

namespace App;

add_action( 'init', function () {
  // custom post types go here

  // Projects
  // $labels = array(
  //   'name'            => __( 'Projects', '' ),
  //   'all_items'       => __( 'Projects', '' ),
  //   'singular_name'   => __( 'Project', '' ),
  //   'add_new'         => __( 'Add Project', '' ),
  //   'add_new_item'    => __( 'Add Project', '' ),
  // );
  //
  // $args = array(
  //   'label'                 => __( 'Projects', '' ),
  //   'labels'                => $labels,
  //   'description'           => 'Project post type',
  //   'supports'              => array( 'title', 'revisions', 'thumbnail' ),
  //   'public'                => false,
  //   'show_ui'               => true,
  //   'show_in_rest'          => true,
  //   'rest_base'             => '',
  //   'has_archive'           => true,
  //   'show_in_menu'          => true,
  //   'menu_icon'             => 'dashicons-location-alt',
  //   'exclude_from_search'   => false,
  //   'capability_type'       => 'post',
  //   'map_meta_cap'          => true,
  //   'hierarchical'          => false,
  // );
  // // rename to projects
  // register_post_type( 'projects', $args );
  //
  // // register project categories
  // $args = array(
  //   'hierarchical'      => true,
  //   'labels'            => array(
  //   'name'              => __( 'Project category', '' ),
  //   'singular_name'     => __( 'Project category', '' ),
  //   'add_new'           => __( 'Add Project category', '' ),
  //   'add_new_item'      => __( 'Add Project category', '' ),
  //   ),
  //   'capabilities'      => array(
  //     //'manage_terms' => '',
  //     //'edit_terms' => '',
  //     //'delete_terms' => '',
  //     'assign_terms'    => 'edit_posts'
  //   ),
  //   'public'            => true,
  //   'show_ui'           => true,
  //   'show_admin_column' => true,
  //   'query_var'         => true,
  //   'show_in_rest'      => true,
  // );
  // register_taxonomy( 'project-category', array( 'projects' ), $args );


});
