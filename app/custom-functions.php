<?php

namespace App;

// Add after theme setup
add_action( 'after_setup_theme', function () {
    // Add extra Gutenberg alignment
    add_theme_support( 'align-wide' );
} );

// Font sizes in Gutenberg
add_theme_support(
    'editor-font-sizes',
    array(
      array(
          'name'      => __( 'Small', 'your-theme-text-domain' ),
          'shortName' => __( 'S', 'your-theme-text-domain' ),
          'size'      => 12,
          'slug'      => 'Small'
      ),
      array(
          'name'      => __( 'Body', 'your-theme-text-domain' ),
          'shortName' => __( 'R', 'your-theme-text-domain' ),
          'size'      => 16,
          'slug'      => 'body'
      ),
        array(
            'name'      => __( 'H6', 'your-theme-text-domain' ),
            'shortName' => __( 'H6', 'your-theme-text-domain' ),
            'size'      => 20,
            'slug'      => 'h6'
        ),
        array(
            'name'      => __( 'H5', 'your-theme-text-domain' ),
            'shortName' => __( 'H5', 'your-theme-text-domain' ),
            'size'      => 25,
            'slug'      => 'h5'
        ),
        array(
            'name'      => __( 'H4', 'your-theme-text-domain' ),
            'shortName' => __( 'H4', 'your-theme-text-domain' ),
            'size'      => 31.25,
            'slug'      => 'h4'
        ),
        array(
            'name'      => __( 'H3', 'your-theme-text-domain' ),
            'shortName' => __( 'H3', 'your-theme-text-domain' ),
            'size'      => 39.06,
            'slug'      => 'h3'
        ),
        array(
            'name'      => __( 'H2', 'your-theme-text-domain' ),
            'shortName' => __( 'H2', 'your-theme-text-domain' ),
            'size'      => 48.83,
            'slug'      => 'h2'
        ),
        array(
            'name'      => __( 'H1', 'your-theme-text-domain' ),
            'shortName' => __( 'H1', 'your-theme-text-domain' ),
            'size'      => 61.04,
            'slug'      => 'h1'
        ),
        array(
            'name'      => __( 'Display', 'your-theme-text-domain' ),
            'shortName' => __( 'Display', 'your-theme-text-domain' ),
            'size'      => 76.29,
            'slug'      => 'display'
        )
    )
);
