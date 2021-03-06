<?php

/**
 * SSWS functions and definitions.
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SSWS
 */

 if ( ! function_exists( 'ssws_setup' ) ) :
 	/**
 	 * Sets up theme defaults and registers support for various WordPress features.
 	 *
 	 * Note that this function is hooked into the after_setup_theme hook, which
 	 * runs before the init hook. The init hook is too late for some features, such
 	 * as indicating support for post thumbnails.
 	 */
 	function ssws_setup() {
 		/*
 		 * Make theme available for translation.
 		 * Translations can be filed in the /languages/ directory.
 		 * If you're building a theme based on SSWS, use a find and replace
 		 * to change 'ssws2019' to the name of your theme in all the template files.
 		 */
 		load_theme_textdomain( 'ssws2019', get_template_directory() . '/languages' );

 		// Create Navigation MENU
 		register_nav_menu( 'primary', esc_html__( 'Main Menu', 'ssws2019' ) );
    register_nav_menus( array(
    	'primary' => 'Main Menu',
    	'secondary' => 'Footer Menu',
    ) );

 		/*
 		 * Let WordPress manage the document title.
 		 * By adding theme support, we declare that this theme does not use a
 		 * hard-coded <title> tag in the document head, and expect WordPress to
 		 * provide it for us.
 		 */
 		add_theme_support( 'title-tag' );

 		/*
 		 * Switch default core markup for search form, comment form, and comments
 		 * to output valid HTML5.
 		 */
 		add_theme_support( 'html5', array(
 			'search-form',
 			'comment-form',
 			'comment-list',
 			'gallery',
 			'caption',
 		) );

    /**
     * Register widget area.
     *
     * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
     */
    function ssws_widgets_init() {
    	register_sidebar( array(
    		'name'          => __( 'Left Sidebar', 'ssws2019' ),
    		'id'            => 'sidebar-1',
    		'description'   => __( 'Add widgets here to appear in your left sidebar on blog posts and archive pages.', 'ssws2019' ),
    		'before_widget' => '<section id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</section>',
    		'before_title'  => '<h2 class="widget-title">',
    		'after_title'   => '</h2>',
    	) );

      register_sidebar( array(
    		'name'          => __( 'Right Sidebar', 'ssws2019' ),
    		'id'            => 'sidebar-2',
    		'description'   => __( 'Add widgets here to appear in your right sidebar on blog posts and archive pages.', 'ssws2019' ),
    		'before_widget' => '<section id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</section>',
    		'before_title'  => '<h2 class="widget-title">',
    		'after_title'   => '</h2>',
    	) );

    	// register_sidebar( array(
    	// 	'name'          => __( 'Footer Left', 'ssws2019' ),
    	// 	'id'            => 'sidebar-3',
    	// 	'description'   => __( 'Add widgets here to appear in your footer.', 'ssws2019' ),
    	// 	'before_widget' => '<section id="%1$s" class="widget %2$s">',
    	// 	'after_widget'  => '</section>',
    	// 	'before_title'  => '<h2 class="widget-title">',
    	// 	'after_title'   => '</h2>',
    	// ) );
      //
    	// register_sidebar( array(
    	// 	'name'          => __( 'Footer Right', 'ssws2019' ),
    	// 	'id'            => 'sidebar-4',
    	// 	'description'   => __( 'Add widgets here to appear in your footer.', 'ssws2019' ),
    	// 	'before_widget' => '<section id="%1$s" class="widget %2$s">',
    	// 	'after_widget'  => '</section>',
    	// 	'before_title'  => '<h2 class="widget-title">',
    	// 	'after_title'   => '</h2>',
    	// ) );
    }
    add_action( 'widgets_init', 'ssws_widgets_init' );

    /**
     * Handles JavaScript detection.
     *
     * Adds a `js` class to the root `<html>` element when JavaScript is detected.
     *
     * @since SSWS 1.0
     */
    function ssws_javascript_detection() {
    	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
    }
    add_action( 'wp_head', 'ssws_javascript_detection', 0 );

    /**
     * Add preconnect for Google Fonts.
     *
     * @since SSWS 1.0
     *
     * @param array  $urls           URLs to print for resource hints.
     * @param string $relation_type  The relation type the URLs are printed.
     * @return array $urls           URLs to print for resource hints.
     */
    function ssws_resource_hints( $urls, $relation_type ) {
    	if ( wp_style_is( 'ssws-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
    		$urls[] = array(
    			'href' => 'https://fonts.gstatic.com',
    			'crossorigin',
    		);
    	}

    	return $urls;
    }
    add_filter( 'wp_resource_hints', 'ssws_resource_hints', 10, 2 );

 	}
 endif;
 add_action( 'after_setup_theme', 'ssws_setup' );

/**
 * Enqueue scripts and styles.
 */

function ssws_scripts(){
  wp_enqueue_style( 'ssws-style', get_stylesheet_uri() );

    wp_register_script('imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), '20190211', true );
    wp_register_script('TweenMax', get_template_directory_uri() . '/js/TweenMax.min.js', array(), '20190211', true );
    wp_register_script('demo', get_template_directory_uri() . '/js/demo.js', array(), '20190211', true );

    // wp_enqueue_script('demo', get_template_directory_uri() . '/js/demo.js', array(), '20190211', true );
    // wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), '20190211', true );
    // wp_enqueue_script('TweenMax', get_template_directory_uri() . '/js/TweenMax.min.js', array(), '20190211', true );
    
    wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', $ver = false, $in_footer = true );
    wp_enqueue_script( 'TweenMax', get_template_directory_uri() . '/js/TweenMax.min.js', $ver = false, $in_footer = true );
    wp_enqueue_script( 'demo', get_template_directory_uri() . '/js/demo.js', $ver = false, $in_footer = true );
}

add_action( 'wp_enqueue_scripts', 'ssws_scripts' );

//
// IMAGES
//

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images.
 *
 * @since SSWS 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function ssws_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	if ( 740 <= $width ) {
		$sizes = '(max-width: 706px) 89vw, (max-width: 767px) 82vw, 740px';
	}

	if ( is_active_sidebar( 'sidebar-1' ) || is_archive() || is_search() || is_home() || is_page() ) {
		if ( ! ( is_page() && 'one-column' === get_theme_mod( 'page_options' ) ) && 767 <= $width ) {
			 $sizes = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
		}
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'ssws_content_image_sizes_attr', 10, 2 );

/**
 * Filter the `sizes` value in the header image markup.
 *
 * @since SSWS 1.0
 *
 * @param string $html   The HTML image tag markup being filtered.
 * @param object $header The custom header object returned by 'get_custom_header()'.
 * @param array  $attr   Array of the attributes for the image tag.
 * @return string The filtered header image HTML.
 */
function ssws_header_image_tag( $html, $header, $attr ) {
	if ( isset( $attr['sizes'] ) ) {
		$html = str_replace( $attr['sizes'], '100vw', $html );
	}
	return $html;
}
add_filter( 'get_header_image_tag', 'ssws_header_image_tag', 10, 3 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails.
 *
 * @since SSWS 1.0
 *
 * @param array $attr       Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size       Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function ssws_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( is_archive() || is_search() || is_home() ) {
		$attr['sizes'] = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
	} else {
		$attr['sizes'] = '100vw';
	}

	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'ssws_post_thumbnail_sizes_attr', 10, 3 );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
