<?php
/**
 * lykk functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lykk
 */

if ( ! function_exists( 'lykk_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lykk_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on lykk, use a find and replace
		 * to change 'lykk' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lykk', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );



		// Image sizes
		add_image_size( 'full_wide', 1168, 360, true );
		add_image_size( 'product', 500, 500, true );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'lykk' ),
			'front_submenu' => esc_html__( 'Submenu', 'lykk' )
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
		add_theme_support( 'custom-background', apply_filters( 'lykk_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'lykk_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lykk_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'lykk_content_width', 640 );
}
add_action( 'after_setup_theme', 'lykk_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lykk_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'lykk' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'lykk' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'lykk_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lykk_scripts() {
	wp_enqueue_style( 'lykk-style', get_stylesheet_uri() );

	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/app/css/main.min.css', array(), '1.0');

	wp_deregister_script( 'jquery' );

    wp_enqueue_script( 'lykk-main-script', get_template_directory_uri() . '/app/js/scripts.min.js', array(), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'lykk_scripts' );

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}
if (function_exists('acf_set_options_page_menu')){
    acf_set_options_page_menu('LYKK Настройки');
}


function create_post_type() {


    register_post_type( 'equipment',
        array(
            'labels' => array(
                'name' => __( 'Оборудование' ),
                'singular_name' => __( 'Оборудование' )
            ),
            'public' => true,
            'has_archive' => true,
            'hierarchical' => true,
            'supports' => array('title','author','thumbnail'),
            'menu_icon' => 'dashicons-thumbs-up'
        )
    );
    register_post_type( 'projects',
        array(
            'labels' => array(
                'name' => __( 'Реализованные проекты' ),
                'singular_name' => __( 'Проект' )
            ),
            'public' => true,
            'has_archive' => true,
            'hierarchical' => true,
            'supports' => array('title','editor','author','thumbnail'),
            'menu_icon' => 'dashicons-book-alt'
        )
    );

}
add_action( 'init', 'create_post_type' );

function create_custom_taxes(){

    register_taxonomy('equipments', array('equipment'), array(
        'label'                 => 'Виды оборудования',
        'labels'                => array(
            'name'              => 'Виды оборудования',
            'singular_name'     => 'Вид',
        ),
        'description'           => 'Виды оборудования',
        'hierarchical'          => true,
    ) );
}

add_action('init', 'create_custom_taxes');


// Add shortcode for custom menu [directions_menu_code]
    function directions_menu($attr){
        $plates = get_field('direction_menu', 'options');

        $html = '<div class="row about-company">';
        foreach ($plates as $plate) {
			$html .= '<div class="col-lg-3 col-md-6">';
			$html .= $plate['link']?'<a href="' . $plate['link'] . '">':'';
			$html .= '<div class="about-company__plate d-flex">';
			$html .= '<div class="about-company__icon-holder"><span class="' . $plate['icon'] . '"></span></div>';
			$html .= '<div class="about-company__card-text">' . $plate['title'] . '</div>';
			$html .= '</div>';
			$html .= $plate['link']?'</a>':'';
			$html .= '</div>';
        }
		$html .= '</div>';
        return $html;
    }
    add_shortcode('directions_menu_code', 'directions_menu');