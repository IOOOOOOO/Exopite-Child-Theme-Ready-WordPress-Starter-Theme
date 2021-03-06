<?php
/**
 * exopite-starter functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package exopite-starter
 */
// Exit if accessed directly
defined('ABSPATH') or die( 'You cannot access this page directly.' );

/**
 * ----------------------------------------------------------------------------------------
 * 1.0 - Define constants.
 * ----------------------------------------------------------------------------------------
 */
define( 'THEMEROOT', get_template_directory() );
define( 'TEMPLATEURI', get_template_directory_uri() );
define( 'SCRIPTS', THEMEROOT . '/js' );
define( 'INC', THEMEROOT . '/include' );

if ( ! function_exists( 'exopite_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function exopite_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on exopite-starter, use a find and replace
	 * to change 'exopite-starter' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'exopite-starter', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'exopite-starter' ),
	) );

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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'exopite_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'exopite_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function exopite_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'exopite_content_width', 1100 );
}
add_action( 'after_setup_theme', 'exopite_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function exopite_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'exopite-starter' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'exopite-starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'exopite_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
require( INC . '/enqueue.php' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/include/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/include/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/include/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/include/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/include/jetpack.php';

/*
 * Include Theme Hook Alliance hooks.
 *
 * Source: https://github.com/zamoose/themehookalliance/blob/master/tha-theme-hooks.php
 *
 * Child theme authors and plugin developers need a consistent set of entry points to allow
 * for easy customization and altering of functionality. Core WordPress offers a suite of
 * [action hooks](http://codex.wordpress.org/Plugin_API/Action_Reference/) and
 * [template tags](http://codex.wordpress.org/Template_tags) but does not cover many of the
 * common use cases. The Theme Hook Alliance is a community-driven effort to agree on a set
 * of third-party action hooks that THA themes pledge to implement in order to give that
 * desired consistency.
 */
require( INC . '/tha-theme-hooks.php' );

/**
 * Add canonical URL to page
 *
 * A canonical URL allows you to tell search engines that certain similar URLs are actually one and the same
 * At Yoast, we have a strong preference for having a canonical link element on every page and Google has confirmed that’s best.
 *
 * @link http://www.thesempost.com/using-rel-canonical-on-all-pages-for-duplicate-content-protection/
 * @link https://yoast.com/rel-canonical/
 */
add_action( 'wp_head', 'exopite_add_canonical' );
if ( ! function_exists( 'exopite_add_canonical' ) ) {
    function exopite_add_canonical() {

        $exopite_settings = get_option( 'exopite_options' );

        if ( $exopite_settings['exopite-canonical-enabled'] ) {

            /*
             * Set get_the_permalink as canonical
             * https://www.mattcutts.com/blog/seo-advice-url-canonicalization/
             */
            echo '<link rel="canonical" href="' . esc_url( get_the_permalink() ) . '">';

        }

    }
}
