<?php
/**
 * The template for adding Custom Sidebars and Widgets
 *
 * @package Chicago
 * @subpackage Chicago
 * @since Chicago 0.1
 */

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function chicago_widgets_init() {
	//Primary Sidebar
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'chicago' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	$footer_sidebar_number = 3; //Number of footer sidebars
	
	for( $i=1; $i <= $footer_sidebar_number; $i++ ) {
		register_sidebar( array(
			'name'          => sprintf( __( 'Footer Area %d', 'chicago' ), $i ),
			'id'            => sprintf( 'footer-%d', $i ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s"><div class="widget-wrap">',
			'after_widget'  => '</div><!-- .widget-wrap --></aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
			'description'	=> sprintf( __( 'Footer %d widget area.', 'chicago' ), $i ),
		) );
	}
}
add_action( 'widgets_init', 'chicago_widgets_init' );
