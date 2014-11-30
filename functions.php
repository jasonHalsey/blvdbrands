<?php

function register_my_menu() {
  register_nav_menu('primary',__( 'primary' ));
}
add_action( 'init', 'register_my_menu' );

/*  Remove Admin Bar
/* ------------------------------------ */ 
add_filter('show_admin_bar', '__return_false');

/*  Add Support For Thumbnails on Portfolio Projects
/* ------------------------------------ */ 
add_theme_support( 'post-thumbnails', array( 'portfolio' ) );   

/*  Enqueue css
/* ------------------------------------ */ 
function blvd_styles() 
{
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'blvd_styles' ); 

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}


function wpb_adding_scripts() {
  wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js');
  wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr.js');
  wp_enqueue_script('modernizr');
  wp_enqueue_script('scripts');
}
add_action( 'wp_footer', 'wpb_adding_scripts' );  

?>
