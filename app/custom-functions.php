<?php

namespace App;

// Add after theme setup
add_action( 'after_setup_theme', function () {
  // Add extra Gutenberg alignment
  add_theme_support( 'align-wide' );
  // Disable custom font sizes
  add_theme_support( 'disable-custom-font-sizes' );
  // Add custom line height
  add_theme_support( 'custom-line-height' );
  // Add responsive embeds support
  add_theme_support( 'responsive-embeds' );
  // Add custom padding
  add_theme_support( 'custom-spacing' );
  // Add appearance tools
  add_theme_support( 'appearance-tools' );
} );

// Font sizes in Gutenberg
add_theme_support(
    'editor-font-sizes',
    array(
      array(
          'name'      => __( 'Small', 'sage' ),
          'shortName' => __( 'S', 'sage' ),
          'size'      => 12,
          'slug'      => 'Small'
      ),
      array(
          'name'      => __( 'Body', 'sage' ),
          'shortName' => __( 'R', 'sage' ),
          'size'      => 16,
          'slug'      => 'body'
      ),
        array(
            'name'      => __( 'H6', 'sage' ),
            'shortName' => __( 'H6', 'sage' ),
            'size'      => 20,
            'slug'      => 'h6'
        ),
        array(
            'name'      => __( 'H5', 'sage' ),
            'shortName' => __( 'H5', 'sage' ),
            'size'      => 25,
            'slug'      => 'h5'
        ),
        array(
            'name'      => __( 'H4', 'sage' ),
            'shortName' => __( 'H4', 'sage' ),
            'size'      => 31.25,
            'slug'      => 'h4'
        ),
        array(
            'name'      => __( 'H3', 'sage' ),
            'shortName' => __( 'H3', 'sage' ),
            'size'      => 39.06,
            'slug'      => 'h3'
        ),
        array(
            'name'      => __( 'H2', 'sage' ),
            'shortName' => __( 'H2', 'sage' ),
            'size'      => 48.83,
            'slug'      => 'h2'
        ),
        array(
            'name'      => __( 'H1', 'sage' ),
            'shortName' => __( 'H1', 'sage' ),
            'size'      => 61.04,
            'slug'      => 'h1'
        ),
        array(
            'name'      => __( 'Display', 'sage' ),
            'shortName' => __( 'Display', 'sage' ),
            'size'      => 76.29,
            'slug'      => 'display'
        )
    )
);

// ACF Pro Options Page(s)
if( function_exists('acf_add_options_page') ) {

  $option_page = acf_add_options_page(array(
    'page_title' 	=> 'Theme Settings',
    'menu_title' 	=> 'Theme Settings',
    'menu_slug' 	=> 'them-settings',
    'capability' 	=> 'edit_posts',
    'icon_url'    => 'dashicons-welcome-view-site',
    'redirect'    => false,
    'position'    => 2,
	));

	$option_page = acf_add_options_page(array(
    'page_title' 	=> 'Custom Post Type Manager',
    'menu_title' 	=> 'Custom Post Type Manager',
    'menu_slug' 	=> 'custom-post-types',
    'capability' 	=> 'edit_posts',
    'icon_url'    => 'dashicons-welcome-widgets-menus',
    'redirect'    => false,
    'position'    => 3,
	));

  add_action( 'after_setup_theme', function () {
    // Add custom colours to palette
    $colours = get_field('colours', 'options');
    foreach($colours as $col) {
      $name     = esc_attr__($col['name'], 'default');
      $slug     = sanitize_title_with_dashes($col['name']);
      $colour   = $col['colour'];
      $newColorPalette[] = array('name' => $name, 'slug' => $slug, 'color' => $colour);
    }
    add_theme_support( 'editor-color-palette', $newColorPalette );

    // Enable Gutenberg in WooCommerce product
    if ( class_exists( 'woocommerce' ) ) {
      if( get_field('use_gutenberg', 'options') ):
        add_filter( 'use_block_editor_for_post_type', function ( $can_edit, $post_type ) {

            if ( $post_type == 'product' ) {
                $can_edit = true;
            }
            return $can_edit;
        }, 10, 2 );
      endif;
    }
  });

}
