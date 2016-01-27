<?php

namespace Roots\Sage\Setup;

use Roots\Sage\Assets;

// Start the engine
//include_once( get_template_directory() . '/lib/init.php' );

/**
 * Theme setup
 */
function setup() {
  // Enable features from Soil when plugin is activated
  // https://roots.io/plugins/soil/
  add_theme_support('soil-clean-up');
  add_theme_support('soil-nav-walker');
  add_theme_support('soil-nice-search');
  add_theme_support('soil-jquery-cdn');
  add_theme_support('soil-relative-urls');

  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/sage-translations
  load_theme_textdomain('sage', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus([
    'primary_navigation' => __('Primary Navigation', 'sage')
  ]);

  // Enable post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Enable post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Enable HTML5 markup support
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

  // Use main stylesheet for visual editor
  // To add custom styles edit /assets/styles/layouts/_tinymce.scss
  add_editor_style(Assets\asset_path('styles/main.css'));
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Register sidebars
 */
function widgets_init() {
  register_sidebar([
    'name'          => __('Primary', 'sage'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

  register_sidebar([
    'name'          => __('Footer', 'sage'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');

/**
 * Determine which pages should NOT display the sidebar
 */
function display_sidebar() {
  static $display;

  isset($display) || $display = !in_array(true, [
    // The sidebar will NOT be displayed if ANY of the following return true.
    // @link https://codex.wordpress.org/Conditional_Tags
    is_404(),
    is_front_page(),
    is_page_template('template-custom.php'),
  ]);

  return apply_filters('sage/display_sidebar', $display);
}

/**
 * Theme assets
 */
function assets() {
  wp_enqueue_style('sage/css', Assets\asset_path('styles/main.css'), false, null);

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_enqueue_script('sage/js', Assets\asset_path('scripts/main.js'), ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);


//* Add new image sizes
add_image_size( 'featured-image', 358, 200, TRUE );
add_image_size( 'home-top', 750, 600, TRUE );
add_image_size( 'header', 1920, 9999, TRUE );

//* Add support for custom header
add_theme_support( 'custom-header', array(
  'height'          => 96,
  'width'           => 261,
) );


//* Remove comment form allowed tags
// add_filter( 'comment_form_defaults', 'enterprise_remove_comment_form_allowed_tags' );
// function enterprise_remove_comment_form_allowed_tags( $defaults ) {

//   $defaults['comment_notes_after'] = '';
//   return $defaults;

// }

/* Custom Post Types
**************************************/

add_action( 'init', __NAMESPACE__ . '\\custom_post_types' );
function custom_post_types() {
  register_post_type( 'News',
    array(
      'labels' => array(
        'name' => __( 'News' ),
        'singular_name' => __( 'News' )
      ),
      'public' => true,
      'rewrite' => array('slug' => 'news'),
      'has_archive' => true,
      'menu_icon' => 'dashicons-media-text'
    )
  );

  register_post_type( 'Industry news',
    array(
      'labels' => array(
        'name' => __( 'Industry news' ),
        'singular_name' => __( 'Industry news' )
      ),
      'public' => true,
      'rewrite' => array('slug' => 'industry-news'),
      'has_archive' => true,
      'menu_icon' => 'dashicons-media-document'
    )
  );

  register_post_type( 'People',
    array(
      'labels' => array(
        'name' => __( 'People' ),
        'singular_name' => __( 'People' )
      ),
    'public' => true,
    'hierarchical' => true,
    'has_archive' => false,
    'menu_icon' => 'dashicons-admin-users'
    )
  );
  register_post_type( 'Newsletters',
    array(
      'labels' => array(
        'name' => __( 'Newsletters' ),
        'singular_name' => __( 'Newsletters' )
      ),
    'public' => true,
    'rewrite' => array('slug' => 'corporate/newsletter'),
    'hierarchical' => true,
    'supports' => array('title','editor','thumbnail','page-attributes'),
    'has_archive' => false,
    'menu_icon' => 'dashicons-analytics'
    )
  );

  register_post_type( 'Testimonials',
      array(
        'labels' => array(
          'name' => __( 'Testimonials' ),
          'singular_name' => __( 'Testimonials' )
        ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-smiley'
      )
    );

  register_post_type( 'Case Studies',
    array(
      'labels' => array(
        'name' => __( 'Case Studies' ),
        'singular_name' => __( 'Case Studies' )
      ),
    'public' => true,
    'rewrite' => array('slug' => 'case-studies'),
    'has_archive' => true,
    'menu_icon' => 'dashicons-chart-line'
    )
  );

  register_post_type( 'Partners',
    array(
      'labels' => array(
        'name' => __( 'Partners' ),
        'singular_name' => __( 'Partner' )
      ),
    'public' => true,
    'rewrite' => array('slug' => 'partner'),
    'has_archive' => false,
    'hierarchical' => true,
    'menu_icon' => 'dashicons-groups'
    )
  );
}

add_post_type_support( 'People', 'page-attributes' );


//* Modify the WordPress read more link
add_filter( 'excerpt_more', function( $more ){
  return '<p> <a class="read-more" href="' . get_permalink( get_the_ID() ) . '">'
          . __( 'Read More', 'sage' ) . '</a></p>';
});

//* Modify the length of post excerpts
add_filter( 'excerpt_length', function( $length ) {
  return 50; // pull first 50 words
});

/**
 * Register Site Origin Widgets Location
 *
 **/

add_filter('siteorigin_widgets_widget_folders', function($folders){
    $folders[] = get_template_directory(). '/templates/widgets/';
    return $folders;
});
