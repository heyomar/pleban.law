<?php
/**
 * cleanup.php
 *
 * This section contains code from Roots and influenced by many developers. This
 * is some of my favorite code in Roots as I was unaware of most of it before I
 * read the Roots source. - PG
 *
 * @package Offset\Cleanup
 * @author Paul Graham <paul@bytefair.com>
 * @license http://opensource.org/licenses/MIT
 * @since 0.1.0
 */
/**
 * Removes uneeded meta tags generated by WordPress
 *
 * @since 0.1.0
 */
function offset_head_scrubber()
{
  remove_action( 'wp_head', 'feed_links', 2 );
  remove_action( 'wp_head', 'feed_links_extra', 3 );
  remove_action( 'wp_head', 'rsd_link' );
  remove_action( 'wp_head', 'wlwmanifest_link' );
  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
  remove_action( 'wp_head', 'wp_generator' );
  remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
}
add_action( 'init', 'offset_head_scrubber' );
/**
 * Eliminates the generator element from RSS feeds
 *
 * @since 0.1.0
 */
add_filter( 'the_generator', '__return_false' );
/**
 * Eliminates the generator element from RSS feeds
 *
 * @since 0.1.0
 * @author Roots Team
 *
 * @param string Accepts <link rel="stylesheet"> elements
 * @return string Modified stylesheet link
 */
function offset_clean_style_tag( $input )
{
  preg_match_all( "!<link rel='stylesheet'\s?(id='[^']+')?\s+href='(.*)' type='text/css' media='(.*)' />!", $input, $matches );
  // Only display media if it is meaningful
  $media = $matches[3][0] !== '' && $matches[3][0] !== 'all' ? ' media="' . $matches[3][0] . '"' : '';
  return '<link rel="stylesheet" href="' . $matches[2][0] . '"' . $media . '>' . "\n";
}
add_filter( 'style_loader_tag', 'offset_clean_style_tag' );
/**
 * Repairs the XML-ified self-closing tags that are uneeded in HTML
 *
 * @since 0.1.0
 * @author Roots Team
 *
 * @param string img or input reference
 * @return string img or input with self-closing tag replaced
 */
function offset_remove_self_closing_tags( $input )
{
  return str_replace(' />', '>', $input);
}
add_filter( 'get_avatar',          'offset_remove_self_closing_tags' ); // <img />
add_filter( 'comment_id_fields',   'offset_remove_self_closing_tags' ); // <input />
add_filter( 'post_thumbnail_html', 'offset_remove_self_closing_tags' ); // <img />
/**
 * Sets the excerpt length of articles according to a static variable defined in
 * lib/define.php
 *
 * @since 0.1.0
 * @author Roots Team
 *
 * @return int Desired word count in excerpts
 */
function offset_excerpt_length()
{
  return EXCERPT_LENGTH;
}
add_filter( 'excerpt_length', 'offset_excerpt_length' );
/**
 * Repairs the XML-ified self-closing rel="canonical" tags
 *
 * @since 0.1.0
 * @author Roots Team
 *
 */
function offset_rel_canonical()
{
  global $wp_the_query;
  if ( !is_singular() ) {
    return;
  }
  if ( !$id = $wp_the_query->get_queried_object_id() ) {
    return;
  }
  $link = get_permalink($id);
  echo "\t<link rel=\"canonical\" href=\"$link\">\n";
}
add_action( 'init', 'offset_rel_canonical' );
/**
 * Cleans up the body classes a bit
 *
 * @since 0.1.0
 * @author Roots Team
 *
 * @param array Original body classes
 * @return array Modified body classes
 */
function offset_body_class( $classes )
{
  // Add post/page slug
  if (is_single() || is_page() && !is_front_page()) {
    $classes[] = basename( get_permalink() );
  }
  // Remove unnecessary classes
  $home_id_class = 'page-id-' . get_option( 'page_on_front' );
  $remove_classes = array(
    'page-template-default',
    $home_id_class
  );
  $classes = array_diff( $classes, $remove_classes );
  return $classes;
}
add_filter( 'body_class', 'offset_body_class' );
/**
 * Kills self-pinging trackbacks when you interlink articles
 *
 * @since 0.1.0
 *
 * @param array Trackback links
 */
function kill_self_ping( &$links )
{
  $home = home_url();
  foreach ( $links as $l ) {
    if ( 0 === strpos( $link, $home ) ) {
      unset( $links[$l] );
    }
  }
}
add_action( 'pre_ping', 'kill_self_ping' );
/**
 * strips inline image sizes from display to ensure responsiveness
 *
 * @since 0.1.0
 *
 * @param string Image elements
 * @return string Modified image element with stripped dimensions
 */
function remove_thumbnail_dimensions( $html )
{
  $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
  return $html;
}
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'the_content', 'remove_thumbnail_dimensions', 10 );


function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
