<?php

  function isfahan_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css');
    wp_enqueue_style('isfahan', get_template_directory_uri().'/css/isfahan.css');
    wp_enqueue_script('script', get_template_directory_uri().'/js/bundle.js');
  }

  add_action('wp_enqueue_scripts', 'isfahan_resources');
?>
