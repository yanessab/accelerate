<?php
/**
 * Accelerate Marketing Child functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */


//Custom post types function

function create_custom_post_types() {
 //create a case study custom post type
      register_post_type( 'case_studies',
          array(
              'labels' => array(
                  'name' => __( 'Case Studies' ),
                  'singular_name' => __( 'Case Study' )
              ),
              'public' => true,
              'has_archive' => true,
              'rewrite' => array( 'slug' => 'case-studies' ),
          )
      );

//create an about service custom post type
      register_post_type( 'about_services',
          array(
              'labels' => array(
                  'name' => __( 'Services' ),
                  'singular_name' => __( 'Service' )
              ),
              'public' => true,
              'menu_icon' => 'dashicons-universal-access',
              'has_archive' => false,
              'rewrite' => array( 'slug' => 'about-services' ),
          )
      );
  }
  add_action( 'init', 'create_custom_post_types' );

function accelerate_child_theme_support() {

  // Post thumbnails support
  add_theme_support('post-thumbnails');

  // Let WordPress take care of outputting the title
	add_theme_support( 'title-tag' );

  // image size for case studies on front-page
  add_image_size('front-page-featured-work', 300, 200, true);

 	}

  add_action( 'after_setup_theme', 'accelerate_child_theme_support' );

// but change the separator from '-' to '|'
	function accelerate_child_custom_title_separator($sep) {
		$sep = '|';
		return $sep;
	}

  add_filter('document_title_separator', 'accelerate_child_custom_title_separator');

  /* Create custom title for site */
  function accelerate_child_custom_title($title) {
      // 'Accelerate' only for front page
  	if ( is_front_page()) {
  		$title = get_bloginfo('name');
  		return $title;
  	}
      // WORK | Accelerate for case studies page
  	if ( is_post_type_archive( 'case_studies' ) ) {
  		$work_title = "WORK";
  		$site_title = get_bloginfo('name');
  		$sep = " | ";
  		$title = $work_title . $sep . $site_title;
  		return $title;
  	}
  }
  add_filter( 'pre_get_document_title', 'accelerate_child_custom_title', 10 );

// Reverse Case Studies Archive order
function reverse_archive_order( $query ){

 if( !is_admin() && $query->is_post_type_archive('case_studies')  && $query->is_main_query() ) {
 $query->set('order', 'ASC');
 }
}

add_action( 'pre_get_posts', 'reverse_archive_order' );

/*about page custom post type
function about_services_init() {
    $args = array(
      'label' => 'About Services',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'page',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'about'),
        'query_var' => true,
        'menu_icon' => 'dashicons-universal-access',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'page-attributes',)
        );
    register_post_type( 'about-services', $args );
}
add_action( 'init', 'about_services_init' );
*/

// Remove 'Accelerate' in the description - call in footer.php ONLY
function green_accelerate_footer(){
  add_filter( 'option_blogdescription', 'accelerate_change_description_footer', 10, 2 );

  function accelerate_change_description_footer( $description ) {
    $description = str_replace('Accelerate', '', $description);
    return $description;
  }
};

add_filter( 'body_class','accelerate_body_classes' );

function accelerate_theme_child_widget_init() {

	register_sidebar( array(
	    'name' =>__( 'Homepage sidebar', 'accelerate-theme-child'),
	    'id' => 'sidebar-2',
	    'description' => __( 'Appears on the static front page template', 'accelerate-theme-child' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget' => '</aside>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	) );

}
add_action( 'widgets_init', 'accelerate_theme_child_widget_init' );

function accelerate_body_classes( $classes ) {

  if (is_page('contact') ) {
    $classes[] = 'contact';
  }

    return $classes;
}

// changes excerpt symbol
function custom_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');
