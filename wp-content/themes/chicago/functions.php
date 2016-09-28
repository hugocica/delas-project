<?php
/**
 * Chicago functions and definitions
 *
 * @package Catch Themes
 * @subpackage Chicago
 * @since Chicago 0.1
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 690; /* pixels */
}

if ( ! function_exists( 'chicago_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function chicago_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Chicago, use a find and replace
	 * to change 'chicago' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'chicago', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Add tyles the visual editor to resemble the theme style.
	add_editor_style( array( 'css/editor-style.css' ) );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	//@remove Remove check when WordPress 4.8 is released
	if ( function_exists( 'has_custom_logo' ) ) {
		/**
		* Setup Custom Logo Support for theme
		* Supported from WordPress version 4.5 onwards
		* More Info: https://make.wordpress.org/core/2016/03/10/custom-logo/
		*/
		add_theme_support( 'custom-logo' );
	}

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// Set default size.
	set_post_thumbnail_size( 300, 169, true ); // used in Archive Landecape Ratio 16:9

	// Add default size for single pages.
	add_image_size( 'chicago-single', '690', '388', true ); // used in Archive Landecape Ratio 16:9

	// Add default size for sliders.
	add_image_size( 'chicago-slider', '1680', '720', true ); // used in Featured Slider Ratio 21:9

	// Add default size for Jetpack logo.
	add_image_size( 'chicago-site-logo', '300', '150', false );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' 		=> __( 'Primary Menu', 'chicago' ),
		'social'  		=> __( 'Social Menu', 'chicago' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	//Get color Scheme
	$color_scheme = get_theme_mod( 'color_scheme', chicago_get_default_theme_options( 'color_scheme' ) );

	if ( 'light' == $color_scheme ) {
		$default_color = chicago_default_color_options('light');
		$default_color = $default_color['background_color'];
	}
	else if ( 'dark' == $color_scheme ) {
		$default_color = chicago_default_color_options('dark');
		$default_color = $default_color['background_color'];
	}
	else {
		$default_color = chicago_get_default_theme_options( 'background_color' );
	}

	add_theme_support( 'custom-background', apply_filters( 'chicago_custom_background_args', array(
		'default-color' => $default_color
	) ) );
}
endif; // chicago_setup
add_action( 'after_setup_theme', 'chicago_setup' );

/**
 * Enqueue scripts and styles.
 */
function chicago_scripts() {
	// Localize script (only few lines in helpers.js)
    wp_localize_script( 'chicago-helpers', 'chicago-vars', array(
 	    'author'   => __( 'Your Name', 'chicago' ),
 	    'email'    => __( 'E-mail', 'chicago' ),
		'url'      => __( 'Website', 'chicago' ),
		'comment'  => __( 'Your Comment', 'chicago' )
 	) );

	wp_enqueue_style( 'chicago-style', get_stylesheet_uri() );

	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/css/genericons/genericons.css', false, '3.3' );

	/**
	 * Enqueue the styles for the current color scheme for Chicago.
	 */
	$color_scheme = get_theme_mod( 'color_scheme', chicago_get_default_theme_options( 'color_scheme' ) );

	if ( 'pink' != $color_scheme ) {
		wp_enqueue_style( 'chicago-'. $color_scheme, get_template_directory_uri() . '/css/colors/'. $color_scheme .'.css', array(), null );
	}

	wp_enqueue_script( 'chicago-custom-scripts', get_template_directory_uri() . '/js/custom-scripts.js', array( 'jquery' ), '1.0.0', true );

	wp_enqueue_script( 'chicago-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0.0', true );

	wp_enqueue_script( 'chicago-helpers', get_template_directory_uri() . '/js/helpers.js', array( 'jquery' ), '1.0.0', true );

	wp_enqueue_script( 'chicago-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/**
	 * Loads up Cycle JS
	 */
	$featured_slider_option = get_theme_mod( 'featured_slider_option', chicago_get_default_theme_options( 'featured_slider_option' ) );

	if( 'disabled' != $featured_slider_option  ) {
		wp_register_script( 'jquery.cycle2', get_template_directory_uri() . '/js/jquery.cycle/jquery.cycle2.min.js', array( 'jquery' ), '2.1.5', true );

		/**
		 * Condition checks for additional slider transition plugins
		 */
		$featured_slide_transition_effect = get_theme_mod( 'featured_slide_transition_effect', chicago_get_default_theme_options( 'featured_slide_transition_effect' ) );

		// Scroll Vertical transition plugin addition
		if ( 'scrollVert' ==  $featured_slide_transition_effect ){
			wp_enqueue_script( 'jquery.cycle2.scrollVert', get_template_directory_uri() . '/js/jquery.cycle/jquery.cycle2.scrollVert.min.js', array( 'jquery.cycle2' ), '20140128', true );
		}
		// Flip transition plugin addition
		else if ( 'flipHorz' ==  $featured_slide_transition_effect || 'flipVert' ==  $featured_slide_transition_effect ){
			wp_enqueue_script( 'jquery.cycle2.flip', get_template_directory_uri() . '/js/jquery.cycle/jquery.cycle2.flip.min.js', array( 'jquery.cycle2' ), '20140128', true );
		}
		// Suffle transition plugin addition
		else if ( 'tileSlide' ==  $featured_slide_transition_effect || 'tileBlind' ==  $featured_slide_transition_effect ){
			wp_enqueue_script( 'jquery.cycle2.tile', get_template_directory_uri() . '/js/jquery.cycle/jquery.cycle2.tile.min.js', array( 'jquery.cycle2' ), '20140128', true );
		}
		// Suffle transition plugin addition
		else if ( 'shuffle' ==  $featured_slide_transition_effect ){
			wp_enqueue_script( 'jquery.cycle2.shuffle', get_template_directory_uri() . '/js/jquery.cycle/jquery.cycle2.shuffle.min.js', array( 'jquery.cycle2' ), '20140128 ', true );
		}
		else {
			wp_enqueue_script( 'jquery.cycle2' );
		}
	}

	/**
	 * Loads up Scroll Up script
	 */
	$disable_scrollup = get_theme_mod( 'disable_scrollup', chicago_get_default_theme_options( 'disable_scrollup' ) );

	if ( '1' != $disable_scrollup ) {
		wp_enqueue_script( 'chicago-scrollup', get_template_directory_uri() . '/js/scrollup.js', array( 'jquery' ), '20141223	', true  );
	}

	wp_enqueue_style( 'main_style', get_template_directory_uri() . '/css/main.css' );
}
add_action( 'wp_enqueue_scripts', 'chicago_scripts' );

/**
 * Enqueue scripts and styles for Metaboxes
 * @uses wp_register_script, wp_enqueue_script, and  wp_enqueue_style
 *
 * @action admin_print_scripts-post-new, admin_print_scripts-post, admin_print_scripts-page-new, admin_print_scripts-page
 *
 * @since Chicago 0.1
 */
function chicago_enqueue_metabox_scripts() {
    //Scripts
    wp_enqueue_script( 'chicago-metabox', get_template_directory_uri() . '/js/metabox.js', array( 'jquery', 'jquery-ui-tabs' ), '2013-10-05' );

	//CSS Styles
	wp_enqueue_style( 'chicago-metabox-tabs', get_template_directory_uri() . '/css/metabox-tabs.css' );
}
add_action( 'admin_print_scripts-post-new.php', 'chicago_enqueue_metabox_scripts', 11 );
add_action( 'admin_print_scripts-post.php', 'chicago_enqueue_metabox_scripts', 11 );
add_action( 'admin_print_scripts-page-new.php', 'chicago_enqueue_metabox_scripts', 11 );
add_action( 'admin_print_scripts-page.php', 'chicago_enqueue_metabox_scripts', 11 );

/**
 * Include Default Options for Chicago
 */
require get_template_directory() . '/inc/default-options.php';

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

/**
 * Include metabox options
 */
require get_template_directory() . '/inc/metabox.php';

/**
 * Include Structure for Chicago
 */
require get_template_directory() . '/inc/structure.php';

/**
 * Include featured slider
 */
require get_template_directory() . '/inc/breadcrumb.php';

/**
 * Include featured content
 */
require get_template_directory() . '/inc/featured-content.php';

/**
 * Include featured slider
 */
require get_template_directory() . '/inc/featured-slider.php';

/**
 * Include Widgets and Sidebars
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Migrate Logo to New WordPress core Custom Logo
 *
 *
 * Runs if version number saved in theme_mod "logo_version" doesn't match current theme version.
 */
function chicago_logo_migrate() {
	$ver = get_theme_mod( 'logo_version', false );

	// Return if update has already been run
	if ( version_compare( $ver, '1.2.4' ) >= 0 ) {
		return;
	}

	// If a logo has been set previously, update to use logo feature introduced in WordPress 4.5
	if ( function_exists( 'the_custom_logo' ) ) {
		/**
		 * Get Logo from Theme Mod
		 */
		$logo = get_theme_mod( 'logo', chicago_get_default_theme_options( 'logo' ) );
		if( '' != $logo ) {
			// Since previous logo was stored a URL, convert it to an attachment ID
			$logo = attachment_url_to_postid( $logo );

			if ( is_int( $logo ) ) {
				set_theme_mod( 'custom_logo', $logo );
			}
		}

  		// Update to match logo_version so that script is not executed continously
		set_theme_mod( 'logo_version', '1.2.4' );
	}

}
add_action( 'after_setup_theme', 'chicago_logo_migrate' );


/**
 * Migrate Custom Favicon to WordPress core Site Icon
 *
 * Runs if version number saved in theme_mod "site_icon_version" doesn't match current theme version.
 */
function chicago_site_icon_migrate() {
	$ver = get_theme_mod( 'site_icon_version', false );

	// Return if update has already been run
	if ( version_compare( $ver, '1.2.4' ) >= 0 ) {
		return;
	}

	// If a logo has been set previously, update to use logo feature introduced in WordPress 4.5
	if ( function_exists( 'has_site_icon' ) ) {
		/**
		 * Get Logo from Theme Mod
		 */
		$favicon = get_theme_mod( 'favicon' );
		if ( '' != $favicon ) {
			// Since previous logo was stored a URL, convert it to an attachment ID
			$site_icon = attachment_url_to_postid( $favicon );

			if ( is_int( $site_icon ) ) {
				update_option( 'site_icon', $site_icon );
			}
		}

	  	// Update to match site_icon_version so that script is not executed continously
		set_theme_mod( 'site_icon_version', '1.2.4' );
	}
}
add_action( 'after_setup_theme', 'chicago_site_icon_migrate' );
