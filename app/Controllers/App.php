<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    /**
     * Primary Nav Menu arguments
     * @return array
     */
    public function primarymenu() {
      $args = array(
        'theme_location'        => 'primary_navigation',
        'menu_class'              => 'navbar-nav',
        'walker'                        => new \App\wp_bootstrap4_navwalker(),
      );
      return $args;
    }

    public function logo()
    {
      return get_field('logo', 'option');
    }

    public function alt_logo()
    {
      return get_field('alt_logo', 'option');
    }

    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    // Header Scripts
    public function header_scripts() {
      return get_field('header_scripts', 'option');
    }

    // Footer Scripts
    public function footer_scripts() {
      return get_field('footer_scripts', 'option');
    }

    // Header Style
    public function header_style() {
      return get_field('header_style', 'option');
    }

    // Hamburger Style
    public function hamburger_style() {
      return get_field('hamburger_style', 'option');
    }

    // Hamburger Breakpoint
    public function hamburger_breakpoint() {
      return get_field('hamburger_breakpoint', 'option');
    }
}
