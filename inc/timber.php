<?php

$timber = new \Timber\Timber();

if ( ! class_exists( 'Timber' ) ) {
  add_action( 'admin_notices', function() {
    echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url( admin_url( 'plugins.php#timber' ) ) . '">' . esc_url( admin_url( 'plugins.php') ) . '</a></p></div>';
  });

  add_filter('template_include', function($template) {
    return get_stylesheet_directory() . '/public/no-timber.html';
  });

  return;
}

Timber::$dirname = array( 'inc', 'templates', 'templates/views' );

class BlendidStarter extends TimberSite {

  function __construct() {
    add_theme_support( 'post-formats' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    add_filter( 'timber_context', array( $this, 'add_to_context' ) );
    add_filter( 'get_twig', array( $this, 'add_to_twig' ) );
    add_action( 'init', array( $this, 'register_post_types' ) );
    add_action( 'init', array( $this, 'register_taxonomies' ) );
    parent::__construct();
  }

  function register_post_types() {
    //this is where you can register custom post types
  }

  function register_taxonomies() {
    //this is where you can register custom taxonomies
  }

  function add_to_context( $context ) {
    $context['menu'] = new TimberMenu();
    $context['site'] = $this;
    $context['options'] = get_fields('options');
    $context['icons_path'] = \App\asset_path( 'images/icons.svg' );
    return $context;
  }

  function myfoo( $text ) {
    $text .= ' bar!';
    return $text;
  }

  function add_to_twig( $twig ) {
    /* this is where you can add your own functions to twig */
    $twig->addExtension( new Twig_Extension_StringLoader() );
    $twig->addFilter( 'myfoo', new Twig_SimpleFilter( 'myfoo', array($this, 'myfoo') ) );

    return $twig;
  }

}
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}

new BlendidStarter();
