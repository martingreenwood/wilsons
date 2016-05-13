<?php
/**
 * wilsons functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wilsons
 */

if ( ! function_exists( 'wilsons_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wilsons_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on wilsons, use a find and replace
	 * to change 'wilsons' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wilsons', get_template_directory() . '/languages' );

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
	add_image_size( 'post', 274, 223, true );
	add_image_size( 'gallery', 780, 780, true );
	add_image_size( 'news', 550, 250, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'wilsons' ),
		'footer' => esc_html__( 'Footer', 'wilsons' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );
}
endif;
add_action( 'after_setup_theme', 'wilsons_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wilsons_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wilsons_content_width', 1170 );
}
add_action( 'after_setup_theme', 'wilsons_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wilsons_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wilsons' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wilsons_widgets_init' );


add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'cars',
		array(
			'labels' => array(
				'name' => __('Vehicles'),
				'singular_name' => __('Vehicle')
			),
			'supports' => array('title', 'editor', 'thumbnail'),
			'rewrite' => array('slug' => 'vehicle'),
			'public' => true,
			'has_archive' => true,
			'show_in_rest' => true,
		)
	);
}


add_action( 'init', 'vehicle_make', 0 );

function vehicle_make() {


  $labels = array(
    'name' => __( 'Vehicle Make' ),
    'singular_name' => __( 'Vehicle Make' ),
    'search_items' =>  __( 'Search Makes' ),
    'all_items' => __( 'All Makes' ),
    'parent_item' => __( 'Parent Make' ),
    'parent_item_colon' => __( 'Parent Make:' ),
    'edit_item' => __( 'Edit Make§' ), 
    'update_item' => __( 'Update Make' ),
    'add_new_item' => __( 'Add New Make' ),
    'new_item_name' => __( 'New Make' ),
    'menu_name' => __( 'Makes' ),
  );
  register_taxonomy('vehicle_make', array('cars'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'show_in_rest' => true,
  ));

}

add_action( 'init', 'vehicle_model_type', 0 );

function vehicle_model_type() {


  $labels = array(
    'name' => __( 'Vehicle Type' ),
    'singular_name' => __( 'Vehicle Type' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Edit Type' ), 
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type' ),
    'menu_name' => __( 'Types' ),

  );
  register_taxonomy('vehicle_type', array('cars'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'show_in_rest' => true,
  ));

}

function my_allow_meta_query( $valid_vars ) {
	
	$valid_vars = array_merge( $valid_vars, array( 'meta_key', 'meta_value' ) );
	return $valid_vars;
}
add_filter( 'rest_query_vars', 'my_allow_meta_query' );

/**
 * Enqueue scripts and styles.
 */
function wilsons_scripts() {

	wp_enqueue_style( 'wilsons-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'slickCSS', '//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css' );
	wp_enqueue_style( 'fancyCSS	', get_template_directory_uri() .'/js/fancyapps/source/jquery.fancybox.css');
	wp_enqueue_style( 'wilsons-style', get_stylesheet_uri() );

	wp_enqueue_script('jquery');

	wp_enqueue_script( 'wilsons-navigation', get_template_directory_uri() . '/js/navigation.js', '', '', true );
	wp_enqueue_script( 'fancyJS', get_template_directory_uri() . '/js/fancyapps/source/jquery.fancybox.pack.js', '', '', true );
	wp_enqueue_script( 'fancyJSMedia', get_template_directory_uri() . '/js/fancyapps/source//helpers/jquery.fancybox-media.js', '', '', true );
	wp_enqueue_script( 'matchheight', get_template_directory_uri() . '/js/jquery.matchHeight.js', '', '', true );
	wp_enqueue_script( 'slickJS', '//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js', '', '', true );
	wp_enqueue_script( 'wilsons-app', get_template_directory_uri() . '/js/app.js', '', '', true );
	wp_enqueue_script( 'wilsons-search', get_template_directory_uri() . '/js/search.js', '', '', true );

}
add_action( 'wp_enqueue_scripts', 'wilsons_scripts' );

/**
* Typekit
*/
function wilsons_typekit(){
	?> <script>
  (function(d) {
    var config = {
      kitId: 'qyo0bmb',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
	<?php 
}

add_action('wp_head', 'wilsons_typekit', 99 );


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


