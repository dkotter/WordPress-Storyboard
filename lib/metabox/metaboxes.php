<?php

// Creating custom metaboxes
add_filter( 'cmb_meta_boxes', 'dkk_create_metaboxes' );

function dkk_create_metaboxes( $meta_boxes ) {
	$prefix = '_dkk_';
	$meta_boxes = array();
	$meta_boxes[] = array(
		'id' => 'storyboard-options',
		'title' => 'Storyboard Options',
		'pages' => array('post'), // post type
		'context' => 'normal',
		'priority' => 'low',
		'show_names' => true, // Show field names left of input
		'fields' => array(
			array(
				'name' => 'Script',
				'id' => $prefix.'script',
				'type' => 'text'
			),
			array(
				'name' => 'Shot Description',
				'id' => $prefix.'shot_description',
				'type' => 'text'
			),
			array(
				'name' => 'Sound FX',
				'id' => $prefix.'sound_fx',
				'type' => 'text'
			),
			array(
	      	'name' => 'Story Board',
	      	'id' => $prefix . 'story_board',
	      	'type' => 'file'
	      ),
	      array(
				'name' => 'Music File',
				'id' => $prefix.'music_file',
				'type' => 'file'
			),
		),
	);
	return $meta_boxes;
}

add_action('init','be_initialize_cmb_meta_boxes',9999);
function be_initialize_cmb_meta_boxes() {
    if (!class_exists('cmb_Meta_Box')) {
        require_once('init.php');
    }
}

?>