<?php 

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
'extra-menu-two' => __( 'Extra Menu Two' ),
'extra-menu-three' => __( 'Extra Menu Three' ),
'extra-menu-four' => __( 'Extra Menu Four' ),
'extra-menu-five' => __( 'Extra Menu Five' ),
'extra-menu-six' => __( 'Extra Menu Six' ),
'extra-menu-seven' => __( 'Extra Menu Seven' ),
'extra-menu-eight' => __( 'Extra Menu Eight' ),
'extra-menu-nine' => __( 'Extra Menu Nine' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
require_once('wp_bootstrap_navwalker.php');

/**
 * Custom functions for visual/text editor
 */
require get_template_directory() . '/inc/visual.php';
require get_template_directory() . '/inc/cta.php';

add_theme_support( 'post-thumbnails' ); 
add_post_type_support( 'page', 'excerpt' );
/**
 * Add ACF Options page.
 */

if( function_exists('acf_add_options_page') ) {
  acf_add_options_page('Sponsors');
}


function theme_scripts() {
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap');
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css' );
	
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/new/js/slick.min.js', array( 'jquery' ), '20120206', true );
    wp_enqueue_script( 'theme', get_template_directory_uri() . '/new/js/theme.js', array( 'jquery' ), '20120206', true );
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  } 
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
 
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  } 
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]>', $content);
  return $content;
}

add_image_size( 'custom-lrg', 800, 240 );
add_image_size( 'custom-lrg-md', 520, 390,array( 'center', 'center') );
add_image_size( 'custom-md', 185, 138.5 ,array( 'center', 'center') );
add_image_size( 'custom-blog', 200, 150,array( 'center', 'center') );

function add_categories_to_pages() {
register_taxonomy_for_object_type( 'category', 'page' );
}
add_action( 'init', 'add_categories_to_pages' );
function add_page_tag() {
register_taxonomy_for_object_type( 'post_tag', 'page' );
}
add_action( 'init', 'add_page_tag');

// Change jQuery version to Cloudflare one, commented the other similar call in footer.php
function change_jQuery_version() {
	wp_deregister_script('jquery');
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), null );
// 	wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'change_jQuery_version');

