<?php
/**
 * The template for front page.
 *
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

if ( ! class_exists( 'Timber' ) ) {
  echo 'Timber not activated. Make sure you activate the plugin in <a href="/wp-admin/plugins.php#timber">/wp-admin/plugins.php</a>';
  return;
}
if ( isset( $post->hero_image_desktop ) && strlen( $post->hero_image ) ) {
    $post->hero_image = new Timber\Image( $post->hero_image );
}

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;

Timber::render( array( 'front-page.twig' ), $context );
