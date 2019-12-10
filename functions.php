<?php

/*******************************************
 ****** Inclusions de scripts et styles ****
 *******************************************/
/**
 ** activation theme parent
 **/
add_action( 'wp_enqueue_scripts', 'enqueue_style_parent' );
function enqueue_style_parent() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

/**
 ** Ajout des scripts et styles tardifs
 **/
/*add_action('wp_enqueue_scripts', 'enqueue_scripts_child', 20);
function enqueue_scripts_child() {
  wp_register_script('customJS', get_stylesheet_directory_uri() . '/path/to/file.js', array('jquery'),'1.1', true);
  wp_enqueue_script('customJS');
  wp_enqueue_style( 'responsive-child', get_stylesheet_directory_uri() . '/path/to/file.css' );
}*/
