<?php
/**
 * personalblogily functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package personalblogily
 */


if ( ! function_exists( 'personalblogily_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */

	function personalblogily_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on personalblogily, use a find and replace
		 * to change 'personalblogily' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'personalblogily', get_template_directory() . '/languages' );

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
		set_post_thumbnail_size( 300 );

		add_image_size( 'personalblogily-grid', 350 , 230, true );
		add_image_size( 'personalblogily-slider', 850 );
		add_image_size( 'personalblogily-small', 300 , 180, true );


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1'	=> esc_html__( 'Primary', 'personalblogily' ),
		) );



  /*
         * Add support for starter content
        */
        // Starter Content Begin
  $nav_items = array(
  	'home'                 => array(
  		'title'      => 'Home',
  		'url'    => '#',
  	),
  	'custom_blog'           => array(
  		'title'      => 'Blog',
  		'url'    => '#',
  	),
  	'custom_news'      => array(
  		'title'      => 'News',
  		'url'    => '#',
  	),
  	'custom_categories' => array(
  		'title'      => 'Categories',
  		'url'    => '#',
  	),
  	'custom_about'            => array(
  		'title'      => 'About',
  		'url'    => '#',
  	),
  	'custom_contact'            => array(
  		'title'      => 'Contact',
  		'url'    => '#',
  	),
  );
  
  $footer_widgets = array('custom' => array(
  	'custom_html',
  	array(
  		'title' => 'LOREM IPSUM',
  		'content' => '<p>Sed ut perspiciatis unde omnis iste natus voluptatem fringilla tempor dignissim at, pretium et arcu. Sed ut perspiciatis unde omnis iste tempor dignissim at, pretium et arcu natus voluptatem fringilla.</p>'
  	)
  ));

  $starter_content = array(
  	'attachments' => array(
  		'featured-image-nothing-breaks-new-york' => array(
  			'post_title'   => 'Featured Image 1',
  			'post_content' => 'Attachment Description',
  			'post_excerpt' => 'Attachment Caption',
  			'file'         => 'inc/starter_content/img/nothing-breaks-new-york.png',
  		),
  		'featured-image-getting-what-you-want' => array(
  			'post_title'   => 'Featured Image 2',
  			'post_content' => 'Attachment Description',
  			'post_excerpt' => 'Attachment Caption',
  			'file'         => 'inc/starter_content/img/getting-what-you-want.png',
  		),
  		'featured-image-are-you-sabotaging-your-creativity' => array(
  			'post_title'   => 'Featured Image 3',
  			'post_content' => 'Attachment Description',
  			'post_excerpt' => 'Attachment Caption',
  			'file'         => 'inc/starter_content/img/are-you-sabotaging-your-creativity.png',
  		),
  		'featured-image-what-ive-learned-from-road-trips' => array(
  			'post_title'   => 'Featured Image 4',
  			'post_content' => 'Attachment Description',
  			'post_excerpt' => 'Attachment Caption',
  			'file'         => 'inc/starter_content/img/what-ive-learned-from-road-trips.png',
  		),
  		'featured-image-how-to-write-10000-words-a-week' => array(
  			'post_title'   => 'Featured Image 5',
  			'post_content' => 'Attachment Description',
  			'post_excerpt' => 'Attachment Caption',
  			'file'         => 'inc/starter_content/img/how-to-write-10000-words-a-week.png',
  		),
  	),
  	'posts' => array(
  		'custom_post_1' => require dirname(__FILE__) . "/inc/starter_content/posts/nothing_beats_new_york.php",
  		'custom_post_2' => require dirname(__FILE__) . "/inc/starter_content/posts/getting_what_you_want.php",
  		'custom_post_3' => require dirname(__FILE__). "/inc/starter_content/posts/are_you_sabotaging_your_creativity.php",
  		'custom_post_4' => require dirname(__FILE__). "/inc/starter_content/posts/how-to-write-10000-words-a-week.php",
  		'custom_post_5' => require dirname(__FILE__). "/inc/starter_content/posts/what_ive_learned_from_road_trips.php",
  	),
  	'nav_menus' => array(
  		'menu-1' => array(
  			'name' => 'Primary',
  			'items' => $nav_items,
  		),
  	),
  	'widgets' => array(
  		'footerwidget-1' => $footer_widgets,
  		'footerwidget-2' => $footer_widgets,
  		'footerwidget-3' => $footer_widgets,
  		'sidebar-1' => array(
  			'custom_portrait' => array(
  				'custom_html',
  				array(
  					'content' => '<div style="text-align:center;">
  					<img src="'.get_template_directory_uri().'/inc/starter_content/img/portrait.png">
  					<p style="text-align:center;margin-bottom:0;">
  					Aliquam et elit eu nunc rhoncus viverra quis at felis et netus et malesuada fames ac turpis egestas. Aenean commodo ligula eget dolor.
  					</p>'
  				)
  			),
  			'custom_banner' => array(
  				'custom_html',
  				array(
  					'content' => '<img src="'.get_template_directory_uri().'/inc/starter_content/img/banner.png"/>'
  				)
  			),
  		),
  	)
  );
  
  add_theme_support('starter-content', $starter_content);
        // Starter Content End



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
//		add_theme_support( 'custom-background', apply_filters( 'personalblogily_custom_background_args', array(
//			'default-color' => '#f1f1f1',
//		'default-image' => '',
			//'default-image' => '%1$s/images/bg.png',
//			) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'personalblogily_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function personalblogily_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'personalblogily_content_width', 640 );
}
add_action( 'after_setup_theme', 'personalblogily_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function personalblogily_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'personalblogily' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'personalblogily' ),
		'before_widget' => '<section id="%1$s" class="fbox swidgets-wrap widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="swidget"><div class="sidebar-title-border"><h3 class="widget-title">',
		'after_title'   => '</h3></div></div>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget (1)', 'personalblogily' ),
		'id'            => 'footerwidget-1',
		'description'   => esc_html__( 'Add widgets here.', 'personalblogily' ),
		'before_widget' => '<section id="%1$s" class="fbox widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="swidget"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget (2)', 'personalblogily' ),
		'id'            => 'footerwidget-2',
		'description'   => esc_html__( 'Add widgets here.', 'personalblogily' ),
		'before_widget' => '<section id="%1$s" class="fbox widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="swidget"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget (3)', 'personalblogily' ),
		'id'            => 'footerwidget-3',
		'description'   => esc_html__( 'Add widgets here.', 'personalblogily' ),
		'before_widget' => '<section id="%1$s" class="fbox widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="swidget"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

}




add_action( 'widgets_init', 'personalblogily_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function personalblogily_scripts() {
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'personalblogily-style', get_stylesheet_uri() );
	wp_enqueue_script( 'personalblogily-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20170823', true );
	wp_enqueue_script( 'personalblogily-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20170823', true );	
	wp_enqueue_script( 'personalblogily-script', get_template_directory_uri() . '/js/script.js', array(), '20160720', true );
	wp_enqueue_script( 'personalblogily-flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'), '20150423', true );
	wp_enqueue_script( 'blogrid-accessibility', get_template_directory_uri() . '/js/accessibility.js', array(), '20160720', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'personalblogily_scripts' );

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

/**
 * Google fonts, credits can be found in readme.
 */

function personalblogily_google_fonts() {

	wp_enqueue_style( 'personalblogily-google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700,900|Merriweather:400,700', false ); 
}

add_action( 'wp_enqueue_scripts', 'personalblogily_google_fonts' );


/**
 * Dots after excerpt
 */

function personalblogily_excerpt( $more ) {
	return '...';
}
add_filter('excerpt_more', 'personalblogily_excerpt');



/**
 * Blog Pagination 
 */
if ( !function_exists( 'personalblogily_numeric_posts_nav' ) ) {
	
	function personalblogily_numeric_posts_nav() {
		
		$prev_arrow = is_rtl() ? 'Previous' : 'Next';
		$next_arrow = is_rtl() ? 'Next' : 'Previous';
		
		global $wp_query;
		$total = $wp_query->max_num_pages;
		$big = 999999999; // need an unlikely integer
		if( $total > 1 )  {
			if( !$current_page = get_query_var('paged') )
				$current_page = 1;
			if( get_option('permalink_structure') ) {
				$format = 'page/%#%/';
			} else {
				$format = '&paged=%#%';
			}
			the_posts_pagination(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 3,
				'type' 			=> 'list',
				'prev_text'		=> 'Previous',
				'next_text'		=> 'Next',
			) );
		}
	}

}
/**
 * Copyright and License for Upsell button by Justin Tadlock - 2016 © Justin Tadlock. customizer button https://github.com/justintadlock/trt-customizer-pro
 */
require_once( trailingslashit( get_template_directory() ) . 'justinadlock-customizer-button/class-customize.php' );







/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Personalblogily for publication on WordPress.org
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 *
 * Depending on your implementation, you may want to change the include call:
 *
 * Parent Theme:
 * require_once get_template_directory() . '/tgm/class-tgm-plugin-activation.php';
 *
 * Child Theme:
 * require_once get_stylesheet_directory() . '/tgm/class-tgm-plugin-activation.php';
 *
 * Plugin:
 * require_once dirname( __FILE__ ) . '/tgm/class-tgm-plugin-activation.php';
 */
require_once get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'personalblogily_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function personalblogily_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		array(
			'name'      => 'Superb Addons',
			'slug'      => 'superb-blocks',
			'required'  => true,
		),
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'personalblogily',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}








// Initialize information content
require_once trailingslashit(get_template_directory()) . 'inc/vendor/autoload.php';

use SuperbThemesThemeInformationContent\ThemeEntryPoint;

ThemeEntryPoint::init([
    'type' => 'classic', // block / classic
    'theme_url' => 'https://superbthemes.com/personalblogily/',
    'demo_url' => 'https://superbthemes.com/demo/personalblogily/',
    'features' => array(
    	array('title'=>'Customize All Fonts'),
    	array('title'=>'Customize All Colors'),
    	array('title'=>'Customize Footer Color'),
    	array('title'=>'Customize Navigation Color'),
    	array('title'=>'Make Posts & Pages Full-Width'),
    	array('title'=>'Add Recent Posts Widget'),
    	array('title'=>'Custom Copyright Text'),
    	array('title'=>'Remove "Tag" from tag page title'),
    	array('title'=>'Remove "Author" from author page title'),
    	array('title'=>'WooCommerce Cart in Navigation'),
    	array('title'=>'Show Post Category on Post Feed')
    )
  ]);
