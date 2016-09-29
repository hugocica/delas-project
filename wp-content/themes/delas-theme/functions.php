<?php

// remove a barra do menu no admin no front-end
show_admin_bar( false );

// adicona as tags de css e os scripts js
function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.1', 'all');
  wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '1.1', 'all');
  // wp_enqueue_style( '1200', get_template_directory_uri() . '/css/1200.css', array(), '1.1', 'all');
  // wp_enqueue_style( '1024', get_template_directory_uri() . '/css/1024.css', array(), '1.1', 'all');

  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);

    // if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    //   wp_enqueue_script( 'comment-reply' );
    // }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// registra o menu primário
register_nav_menu( 'primary-menu', 'Primary Menu' );

?>
