<?php
/**
 * Implement Default Theme/Customizer Options
 *
 * @package Catch Themes
 * @subpackage Chicago
 * @since Chicago 0.1
 */


/**
 * Returns the default options for chicago.
 *
 * @since Chicago 0.1
 */
function chicago_get_default_theme_options( $parameter = null ) {

	$default_theme_options = array(
		//Site Title an Tagline
		'logo'												=> get_template_directory_uri() . '/images/logo.png',
		'logo_alt_text' 									=> '',
		'logo_disable'										=> 1,

		//Header Image
		'enable_featured_header_image'						=> 'entire-site-page-post',
		'featured_image_size'								=> 'full',
		'featured_header_image_url'							=> home_url( '/ ' ),
		'featured_header_image_alt'							=> '',
		'featured_header_image_base'						=> 0,

		//Layout
		'theme_layout' 										=> 'left-sidebar',
		'content_layout'									=> 'excerpt-image-left',
		'single_post_image_layout'							=> 'disable',

		//Breadcrumb Options
		'breadcrumb_option'									=> 0,
		'breadcrumb_onhomepage'								=> 0,
		'breadcrumb_seperator'								=> '&raquo;',

		//Custom CSS
		'custom_css'										=> '',

		//Scrollup Options
		'disable_scrollup'									=> 0,

		//Excerpt Options
		'excerpt_length'									=> '30',
		'excerpt_more_text'									=> __( 'Read More ...', 'chicago' ),

		//Homepage / Frontpage Settings
		'front_page_category'								=> array(),

		//Pagination Options
		'pagination_type'									=> 'default',

		//Promotion Headline Options
		'promotion_headline_option'							=> 'disabled',
		'promotion_headline'								=> __( 'Chicago is a Responsive WordPress Theme', 'chicago' ),
		'promotion_subheadline'								=> __( 'This is promotion headline. You can edit this from Appearance -> Customize -> Theme Options -> Promotion Headline Options', 'chicago' ),
		'promotion_headline_button'							=> __( 'Buy Now', 'chicago' ),
		'promotion_headline_url'							=> esc_url( 'http://catchthemes.com/' ),
		'promotion_headline_target'							=> 1,

		//Search Options
		'search_text'										=> __( 'Search...', 'chicago' ),

		//Basic Color Options
		'color_scheme' 										=> 'pink',
		'background_color'									=> '#f5f5f5',
		'header_textcolor'									=> '#33384a',

		//Featured Content Options
		'featured_content_option'							=> 'disabled',
		'featured_content_layout'							=> 'layout-three',
		'featured_content_position'							=> 1,
		'featured_content_headline'							=> '',
		'featured_content_subheadline'						=> '',
		'featured_content_type'								=> 'demo-featured-content',
		'featured_content_number'							=> '3',
		'featured_content_show'								=> 'excerpt',

		//Featured Slider Options
		'featured_slider_option'							=> 'disabled',
		'featured_slider_image_loader'						=> 'true',
		'featured_slide_transition_effect'					=> 'fadeout',
		'featured_slide_transition_delay'					=> '4',
		'featured_slide_transition_length'					=> '1',
		'featured_slider_type'								=> 'demo-featured-slider',
		'featured_slide_number'								=> '4',

		//Reset all settings
		'reset_all_settings'								=> 0,
	);

	if ( null == $parameter ) {
		return apply_filters( 'chicago_default_theme_options', $default_theme_options );
	}
	else {
		return $default_theme_options[ $parameter ];
	}
}

/**
 * Returns an array of feature header enable options
 *
 * @since Chicago 0.1
 */
function chicago_enable_featured_header_image_options() {
	$enable_featured_header_image_options = array(
		'homepage' 		=> array(
			'value'	=> 'homepage',
			'label' => __( 'Homepage / Frontpage', 'chicago' ),
		),
		'exclude-homepage' 		=> array(
			'value'	=> 'exclude-home',
			'label' => __( 'Excluding Homepage', 'chicago' ),
		),
		'exclude-home-page-post' 	=> array(
			'value' => 'exclude-home-page-post',
			'label' => __( 'Excluding Homepage, Page/Post Featured Image', 'chicago' ),
		),
		'entire-site' 	=> array(
			'value' => 'entire-site',
			'label' => __( 'Entire Site', 'chicago' ),
		),
		'entire-site-page-post' 	=> array(
			'value' => 'entire-site-page-post',
			'label' => __( 'Entire Site, Page/Post Featured Image', 'chicago' ),
		),
		'pages-posts' 	=> array(
			'value' => 'pages-posts',
			'label' => __( 'Pages and Posts', 'chicago' ),
		),
		'disable'		=> array(
			'value' => 'disable',
			'label' => __( 'Disabled', 'chicago' ),
		),
	);

	return apply_filters( 'chicago_enable_featured_header_image_options', $enable_featured_header_image_options );
}

/**
 * Returns an array of layout options registered for chicago.
 *
 * @since Chicago 0.1
 */
function chicago_layouts() {
	$layout_options = array(
		'left-sidebar' 	=> array(
			'value' => 'left-sidebar',
			'label' => __( 'Primary Sidebar, Content', 'chicago' ),
		),
		'right-sidebar' => array(
			'value' => 'right-sidebar',
			'label' => __( 'Content, Primary Sidebar', 'chicago' ),
		),
		'no-sidebar' => array(
			'value' => 'no-sidebar',
			'label' => __( 'No Sidebar ( Content Width )', 'chicago' ),
		)
	);
	return apply_filters( 'chicago_layouts', $layout_options );
}

/**
 * Returns an array of featured slider image loader options
 *
 * @since Chicago 0.1
 */
function chicago_featured_slider_image_loader() {
	$eatured_slider_image_loader = array(
		'true' => array(
			'value' 				=> 'true',
			'label' 				=> __( 'True', 'chicago' ),
		),
		'wait' => array(
			'value' 				=> 'wait',
			'label' 				=> __( 'Wait', 'chicago' ),
		),
		'false' => array(
			'value' 				=> 'false',
			'label' 				=> __( 'False', 'chicago' ),
		),
	);

	return apply_filters( 'eatured_slider_image_loader', $eatured_slider_image_loader );
}


/**
 * Returns an array of content layout options registered for chicago.
 *
 * @since Chicago 0.1
 */
function chicago_get_archive_content_layout() {
	$layout_options = array(
		'excerpt-image-left' => array(
			'value' => 'excerpt-image-left',
			'label' => __( 'Show Excerpt', 'chicago' ),
		),
		'full-content' => array(
			'value' => 'full-content',
			'label' => __( 'Show Full Content (No Featured Image)', 'chicago' ),
		),
	);

	return apply_filters( 'chicago_get_archive_content_layout', $layout_options );
}

/**
 * Returns an array of feature image size
 *
 * @since Chicago 0.1
 */
function chicago_featured_image_size_options() {
	$featured_image_size_options = array(
		'featured-image'		=> array(
			'value' => 'featured-image',
			'label' => __( 'Featured Image', 'chicago' ),
		),
		'slider'		=> array(
			'value' => 'slider',
			'label' => __( 'Slider', 'chicago' ),
		),
		'full' 		=> array(
			'value'	=> 'full',
			'label' => __( 'Full Image', 'chicago' ),
		),
	);

	return apply_filters( 'chicago_featured_image_size_options', $featured_image_size_options );
}

/**
 * Returns an array of pagination schemes registered for chicago.
 *
 * @since Chicago 0.1
 */
function chicago_get_pagination_types() {
	$pagination_types = array(
		'default' => array(
			'value' => 'default',
			'label' => __( 'Default(Older Posts/Newer Posts)', 'chicago' ),
		),
		'numeric' => array(
			'value' => 'numeric',
			'label' => __( 'Numeric', 'chicago' ),
		),
		'infinite-scroll-click' => array(
			'value' => 'infinite-scroll-click',
			'label' => __( 'Infinite Scroll (Click)', 'chicago' ),
		),
		'infinite-scroll-scroll' => array(
			'value' => 'infinite-scroll-scroll',
			'label' => __( 'Infinite Scroll (Scroll)', 'chicago' ),
		),
	);

	return apply_filters( 'chicago_get_pagination_types', $pagination_types );
}


/**
 * Returns an array of content featured image size.
 *
 * @since Chicago 0.1
 */
function chicago_single_post_image_layout_options() {
	$single_post_image_layout_options = array(
		'featured-image' => array(
			'value' => 'featured-image',
			'label' => __( 'Featured Image', 'chicago' ),
		),
		'slider' => array(
			'value' => 'slider',
			'label' => __( 'Slider', 'chicago' ),
		),
		'full-size' => array(
			'value' => 'full-size',
			'label' => __( 'Full size', 'chicago' ),
		),
		'disable' => array(
			'value' => 'disable',
			'label' => __( 'Disabled', 'chicago' ),
		),
	);
	return apply_filters( 'chicago_single_post_image_layout_options', $single_post_image_layout_options );
}

/**
 * Returns an array of color schemes registered for chicago.
 *
 * @since Chicago 0.1
 */
function chicago_color_schemes() {
	$color_scheme_options = array(
		'pink' => array(
			'value' 				=> 'pink',
			'label' 				=> __( 'Pink', 'chicago' ),
		),
		'light' => array(
			'value' 				=> 'light',
			'label' 				=> __( 'Light', 'chicago' ),
		),
		'dark' => array(
			'value' 				=> 'dark',
			'label' 				=> __( 'Dark', 'chicago' ),
		),
	);

	return apply_filters( 'chicago_color_schemes', $color_scheme_options );
}

/**
 * Returns an array of metabox layout options registered for chicago.
 *
 * @since Chicago 0.1
 */
function chicago_metabox_layouts() {
	$layout_options = array(
		'default' 	=> array(
			'id' 	=> 'chicago-layout-option',
			'value' => 'default',
			'label' => __( 'Default', 'chicago' ),
		),
		'left-sidebar' 	=> array(
			'id' 	=> 'chicago-layout-option',
			'value' => 'left-sidebar',
			'label' => __( 'Primary Sidebar, Content', 'chicago' ),
		),
		'right-sidebar' => array(
			'id' 	=> 'chicago-layout-option',
			'value' => 'right-sidebar',
			'label' => __( 'Content, Primary Sidebar', 'chicago' ),
		),
		'no-sidebar'	=> array(
			'id' 	=> 'chicago-layout-option',
			'value' => 'no-sidebar',
			'label' => __( 'No Sidebar ( Content Width )', 'chicago' ),
		),
	);
	return apply_filters( 'chicago_layouts', $layout_options );
}

/**
 * Returns an array of metabox header featured image options registered for chicago.
 *
 * @since Chicago 0.1
 */
function chicago_metabox_header_featured_image_options() {
	$header_featured_image_options = array(
		'default' => array(
			'id'		=> 'chicago-header-image',
			'value' 	=> 'default',
			'label' 	=> __( 'Default', 'chicago' ),
		),
		'enable' => array(
			'id'		=> 'chicago-header-image',
			'value' 	=> 'enable',
			'label' 	=> __( 'Enable', 'chicago' ),
		),
		'disable' => array(
			'id'		=> 'chicago-header-image',
			'value' 	=> 'disable',
			'label' 	=> __( 'Disable', 'chicago' )
		)
	);
	return apply_filters( 'header_featured_image_options', $header_featured_image_options );
}

/**
 * Returns an array of metabox featured image options registered for chicago.
 *
 * @since Chicago 0.1
 */
function chicago_metabox_featured_image_options() {
	$featured_image_options = array(
		'default' => array(
			'id'	=> 'chicago-featured-image',
			'value' => 'default',
			'label' => __( 'Default', 'chicago' ),
		),
		'featured-image'		=> array(
			'id'	=> 'chicago-featured-image',
			'value' => 'featured-image',
			'label' => __( 'Featured Image', 'chicago' ),
		),
		'slider'		=> array(
			'id'	=> 'chicago-featured-image',
			'value' => 'slider',
			'label' => __( 'Slider', 'chicago' ),
		),
		'full' 		=> array(
			'id'	=> 'chicago-featured-image',
			'value'	=> 'full',
			'label' => __( 'Full Image', 'chicago' ),
		),
		'disable' => array(
			'id' 	=> 'chicago-featured-image',
			'value' => 'disable',
			'label' => __( 'Disable Image', 'chicago' )
		)
	);
	return apply_filters( 'featured_image_options', $featured_image_options );
}

/**
 * Returns an array of featured content options registered for chicago.
 *
 * @since Chicago 0.1
 */
function chicago_featured_content_layout_options() {
	$featured_content_layout_option = array(
		'layout-three' 		=> array(
			'value'	=> 'layout-three',
			'label' => __( '3 columns', 'chicago' ),
		),
		'layout-four' 	=> array(
			'value' => 'layout-four',
			'label' => __( '4 columns', 'chicago' ),
		),
	);

	return apply_filters( 'chicago_featured_content_layout_options', $featured_content_layout_option );
}

/**
 * Returns an array of featured content show registered for chicago.
 *
 * @since Chicago 1.0
 */
function chicago_featured_content_show() {
	$featured_content_show_option = array(
		'excerpt' 		=> array(
			'value'	=> 'excerpt',
			'label' => __( 'Show Excerpt', 'chicago' ),
		),
		'full-content' 	=> array(
			'value' => 'full-content',
			'label' => __( 'Show Full Content', 'chicago' ),
		),
		'hide-content' 	=> array(
			'value' => 'hide-content',
			'label' => __( 'Hide Content', 'chicago' ),
		),
	);

	return apply_filters( 'chicago_featured_content_show', $featured_content_show_option );
}

/**
 * Returns an array of feature content types registered for chicago.
 *
 * @since Chicago 0.1
 */
function chicago_featured_content_types() {
	$featured_content_types = array(
		'demo-featured-content' => array(
			'value' => 'demo-featured-content',
			'label' => __( 'Demo Featured Content', 'chicago' ),
		),
		'featured-page-content' => array(
			'value' => 'featured-page-content',
			'label' => __( 'Featured Page Content', 'chicago' ),
		)
	);

	return apply_filters( 'chicago_featured_content_types', $featured_content_types );
}

/**
 * Returns an array of slider layout options registered for chicago.
 *
 * @since Chicago 0.1
 */
function chicago_featured_slider_options() {
	$featured_slider_options = array(
		'homepage' 		=> array(
			'value'	=> 'homepage',
			'label' => __( 'Homepage / Frontpage', 'chicago' ),
		),
		'entire-site' 	=> array(
			'value' => 'entire-site',
			'label' => __( 'Entire Site', 'chicago' ),
		),
		'disabled'		=> array(
			'value' => 'disabled',
			'label' => __( 'Disabled', 'chicago' ),
		),
	);

	return apply_filters( 'chicago_featured_slider_options', $featured_slider_options );
}

/**
 * Returns an array of feature slider types registered for chicago.
 *
 * @since Chicago 0.1
 */
function chicago_featured_slider_types() {
	$featured_slider_types = array(
		'demo-featured-slider' => array(
			'value' => 'demo-featured-slider',
			'label' => __( 'Demo Featured Slider', 'chicago' ),
		),
		'featured-page-slider' => array(
			'value' => 'featured-page-slider',
			'label' => __( 'Featured Page Slider', 'chicago' ),
		)
	);

	return apply_filters( 'chicago_featured_slider_types', $featured_slider_types );
}


/**
 * Returns an array of feature slider transition effects
 *
 * @since Chicago 0.1
 */
function chicago_featured_slide_transition_effects() {
	$featured_slide_transition_effects = array(
		'fade' 		=> array(
			'value'	=> 'fade',
			'label' => __( 'Fade', 'chicago' ),
		),
		'fadeout' 	=> array(
			'value'	=> 'fadeout',
			'label' => __( 'Fade Out', 'chicago' ),
		),
		'none' 		=> array(
			'value' => 'none',
			'label' => __( 'None', 'chicago' ),
		),
		'scrollHorz'=> array(
			'value' => 'scrollHorz',
			'label' => __( 'Scroll Horizontal', 'chicago' ),
		),
		'scrollVert'=> array(
			'value' => 'scrollVert',
			'label' => __( 'Scroll Vertical', 'chicago' ),
		),
		'flipHorz'	=> array(
			'value' => 'flipHorz',
			'label' => __( 'Flip Horizontal', 'chicago' ),
		),
		'flipVert'	=> array(
			'value' => 'flipVert',
			'label' => __( 'Flip Vertical', 'chicago' ),
		),
		'tileSlide'	=> array(
			'value' => 'tileSlide',
			'label' => __( 'Tile Slide', 'chicago' ),
		),
		'tileBlind'	=> array(
			'value' => 'tileBlind',
			'label' => __( 'Tile Blind', 'chicago' ),
		),
		'shuffle'	=> array(
			'value' => 'shuffle',
			'label' => __( 'Suffle', 'chicago' ),
		)
	);

	return apply_filters( 'chicago_featured_slide_transition_effects', $featured_slide_transition_effects );
}

/**
 * Returns the default options for Chicago light and dark theme.
 *
 * @since Chicago 1.1
 */
function chicago_default_color_options( $color_scheme ) {
	if ( 'light' == $color_scheme ) {
		$color_options = array(
			//Basic Color Options
			'background_color'	=> '#f2f2f2',
			'header_textcolor'	=> '#404040',
		);
	}
	else if ( 'dark' == $color_scheme ) {
		$color_options = array(
			//Basic Color Options
			'background_color'	=> '#111111',
			'header_textcolor'	=> '#dddddd',
		);
	}
	return apply_filters( 'chicago_default_color_options', $color_options );
}