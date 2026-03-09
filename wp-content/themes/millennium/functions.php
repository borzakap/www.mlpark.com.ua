<?php
/**
 * Millennium functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Millennium
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function millennium_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Millennium, use a find and replace
		* to change 'millennium' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'millennium', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			// 'menu-1' => esc_html__( 'Primary', 'millennium' ),
			'header' => esc_html__( 'Header', 'millennium' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'millennium_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'millennium_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function millennium_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'millennium_content_width', 640 );
}
add_action( 'after_setup_theme', 'millennium_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function millennium_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'millennium' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'millennium' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'millennium_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function millennium_scripts() {
	wp_enqueue_style( 'millennium-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'millennium-style', 'rtl', 'replace' );

	wp_enqueue_script( 'millennium-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.js', array(), _S_VERSION, true );
	wp_enqueue_script('gsap', get_template_directory_uri() . '/js/anim/gsap.min.js', [], null, true);
	wp_enqueue_script('gsap-scrollTriger', get_template_directory_uri() . '/js/anim/ScrollTrigger.min.js', [], null, true);
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', [], null, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'millennium_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_action( 'init', 'millennium_commercial_init' );

function millennium_commercial_init() {
    $labels = array(
        'name'                  => _x( 'Комерційна нерухомість', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Комерційна нерухомість', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Комерційна нерухомість', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Комерційна нерухомість', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Додати нову', 'textdomain' ),
        'add_new_item'          => __( 'Додати нову', 'textdomain' ),
        'new_item'              => __( 'Додати нову', 'textdomain' ),
        'edit_item'             => __( 'Редагувати', 'textdomain' ),
    );
 
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'menu_icon'          => 'dashicons-store',
		'show_ui'            => true,
		'show_in_menu'       => true,
        'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'commercial' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		// 'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail' ),
	);

	register_post_type( 'commercial', $args );
}

add_action( 'init', 'millennium_news_init' );

function millennium_news_init() {
    $labels = array(
        'name'                  => _x( 'Новини', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Новини', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Новини', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Новини', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Додати новину', 'textdomain' ),
        'add_new_item'          => __( 'Додати новину', 'textdomain' ),
        'new_item'              => __( 'New entry', 'textdomain' ),
        'edit_item'             => __( 'Редагувати', 'textdomain' ),
    );
 
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'menu_icon'          => 'dashicons-media-document',
		'show_ui'            => true,
		'show_in_menu'       => true,
        'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'news' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail' ),
		'taxonomies'         => array( 'types' ),
	);

	register_post_type( 'news', $args );
}

// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'crunchify_create_deals_custom_taxonomy', 0 );

//create a custom taxonomy name it "type" for your posts
function crunchify_create_deals_custom_taxonomy() {

	$labels = array(
		'name'          => _x( 'Категорія', 'taxonomy general name' ),
		'singular_name' => _x( 'Категорія', 'taxonomy singular name' ),
		'search_items'  => __( 'Пошук' ),
		'all_items'     => __( 'Всі' ),
		// 'parent_item' => __( 'Parent Type' ),
		// 'parent_item_colon' => __( 'Parent Type:' ),
		'edit_item'     => __( 'Редагувати' ),
		// 'update_item' => __( 'Update Type' ),
		'add_new_item'  => __( 'Додати нову' ),
		'new_item_name' => __( 'New Type Name' ),
		'menu_name'     => __( 'Категорія' ),
	);

	register_taxonomy( 'types', array( 'deals' ), array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
        'show_in_rest'      => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'type' ),
	) );
}



add_action( 'init', 'millennium_apartment_init' );

function millennium_apartment_init() {
    $labels = array(
        'name'                  => _x( 'Квартири', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Квартири', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Квартири', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Квартири', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Додати квартиру', 'textdomain' ),
        'add_new_item'          => __( 'Додати квартиру', 'textdomain' ),
        'new_item'              => __( 'Нова', 'textdomain' ),
        'edit_item'             => __( 'Редагувати', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
	'publicly_queryable' => true,
	'menu_icon'   		 => 'dashicons-admin-home',
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'apartment' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
	'supports'           => array( 'title', 'thumbnail' ),
    );
 
    register_post_type( 'apartment', $args );
}


if ( !function_exists('get_min_max_properties_area')) {
    function get_min_max_properties_area() {
        global $wpdb;

        $data = [];
        $query = $wpdb->prepare( "SELECT min( cast( meta_value as UNSIGNED ) ), max( cast( meta_value as UNSIGNED ) ) FROM {$wpdb->postmeta} LEFT JOIN {$wpdb->posts} ON {$wpdb->posts}.ID = {$wpdb->postmeta}.post_id WHERE meta_key='%s' and {$wpdb->posts}.post_type != 'revision'", 'area' );
        $result = $wpdb->get_row($query, 'ARRAY_N' );
        $data['min'] = $result[0];
        $data['max'] = $result[1];

        return $data;
    }
}


// add_action( 'admin_menu', 'remove_acf_menu', 15 );

 function remove_acf_menu() {
 	remove_menu_page( 'edit.php?post_type=acf-field-group' );
 }

function remove_plugin_updatesacf( $value ) {
	unset( $value->response['advanced-custom-fields-pro/acf.php'] );

	return $value;
}

add_filter( 'site_transient_update_plugins', 'remove_plugin_updatesacf' );

function remove_menus(){
	remove_menu_page( 'edit.php' );  
	remove_menu_page( 'edit-comments.php' );                  
  }
  add_action( 'admin_menu', 'remove_menus' );



  function custom_tax_query_change( $query ) {
	if ( ! is_admin() && $query->is_tax( 'types' ) ) {
		 $query->set( 'posts_per_page', 7 );
	}
}
add_action( 'pre_get_posts', 'custom_tax_query_change' );  



if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Налаштування',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

}

add_filter( 'wpcf7_autop_or_not', '__return_false' );


