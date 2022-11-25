<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
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
// Rename posts in the admin menu
if( function_exists('acf_add_options_page') ) {

  $rename = get_field('rename_posts', 'option');

  if($rename) {

    add_action( 'admin_menu', function() {
      $new_name = get_field('posts_new_name', 'option');
      $singular_name = get_field('post_singular_name', 'option');
      global $menu;
      global $submenu;
      $submenu['edit.php'][5][0]   = $new_name;
      $submenu['edit.php'][10][0]  = 'Add new '.$singular_name;
      $submenu['edit.php'][16][0]  = 'Tags';
      $menu[5][0]                  = $new_name;
    }  );


    // Rename the buttons/labels in the Post section
    add_action( 'init', function() {
      $new_name = get_field('posts_new_name', 'option');
      $singular_name = get_field('post_singular_name', 'option');
      global $wp_post_types;
      $labels                      = &$wp_post_types['post']->labels;
      $labels->name                = $new_name;
      $labels->singular_name       = $singular_name;
      $labels->add_new             = 'Add '.$singular_name;
      $labels->add_new_item        = 'Add '.$singular_name;
      $labels->edit_item           = 'Edit '.$singular_name;
      $labels->new_item            = $singular_name;
      $labels->view_item           = 'View '.$new_name;
      $labels->search_items        = 'Search '.$new_name;
      $labels->not_found           = 'No '.$new_name.' found';
      $labels->not_found_in_trash  = 'No '.$new_name.' found in Trash';
      $labels->all_items           = 'All '.$new_name;
      $labels->menu_name           = $new_name;
      $labels->name_admin_bar      = $new_name;
    }  );
  }
}
