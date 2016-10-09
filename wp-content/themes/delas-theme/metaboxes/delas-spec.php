<?php
	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
	$template_file = str_replace( 'page-templates/', '', get_post_meta($post_id,'_wp_page_template',TRUE) );

	if ( $template_file == 'template-personagens.php' ) {
		$personagens = new WPAlchemy_MetaBox(
						array (
							'id' => '_personagens_metabox',
							'title' => 'Lista das Pessoas',
							'types' => array('page'), // added only for pages and to custom post type "events"
							'context' => 'normal', // same as above, defaults to "normal"
							'priority' => 'high', // same as above, defaults to "high"
							'template' => get_stylesheet_directory() . '/metaboxes/membros-meta.php'
						)
					);
	}
?>
