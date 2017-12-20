<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', 11);
function my_theme_enqueue_styles() {
  wp_enqueue_style( 'child-style', get_stylesheet_uri() );
  wp_enqueue_script( 'theme_js', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '1.0', true );
}
?>
