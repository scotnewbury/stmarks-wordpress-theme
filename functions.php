<?php

// add CSS and JS files

// adding CSS and JS files

function stmarks_setup() {
  wp_enqueue_style ( 'google-fonts', '//fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed');
  wp_enqueue_style ( 'style', get_stylesheet_uri());
  wp_enqueue_script ( 'font-awesome', '//kit.fontawesome.com/a5a1e9343b.js' );
  wp_enqueue_script ( 'main', get_theme_file_uri('/js/main.js'), NULL, '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'stmarks_setup');

// adding Theme Support

function stmarks_init() {
  add_theme_support ('post-thumbnails');
  add_theme_support ('title-tag');
  add_theme_support ('html5', 
    array ('comment-list', 'comment-form', 'search-form'));
}

add_action('after_setup_theme', 'stmarks_init');

// Sidebar

function gt_widgets() {
  register_sidebar (
    array (
      'name' => 'Main Sidebar',
      'id' => 'main_sidebar',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    )
  );
}

add_action('widgets_init', 'gt_widgets');

// Filters for search

function search_filter($query) {
  if($query -> is_search()) {
    $query->set('post_type', array('post'));
  }
}

add_filter('pre_get_posts', 'search_filter');

// Filter out the featured image on single post page

function my_post_image_html( $html, $post_id, $post_image_id ) {
  if(is_single()) {
  return '';
  } else
  
  return $html;
  }
  
  add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );

?>
