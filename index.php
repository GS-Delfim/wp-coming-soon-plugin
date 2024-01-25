<?php
/*
Plugin Name: Coming Soon Plugin by Growskills
Description: Redireciona usuários não logados para uma página "Coming Soon".
Version: 1.0
Author: Growskills
*/
add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_65b224d92ced7',
	'title' => 'block: Coming soon',
	'fields' => array(
		array(
			'key' => 'field_65b224d95068c',
			'label' => 'Coming soon',
			'name' => 'coming_soon',
			'aria-label' => '',
			'type' => 'textarea',
			'instructions' => 'put inside your html here.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'rows' => '',
			'placeholder' => '',
			'new_lines' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'growskills-extra',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );
} );




function growskills_maintenance(){
	if (!is_user_logged_in()) {
		require_once('coming-soon.php');
		die();
	}
}
	
add_action('get_header', 'growskills_maintenance');


	// function check_plugin_state() {
	// 	if (is_plugin_active(wp)) {
	// 		echo 'plugin is active';
	// 	}
	// 	else {
	// 		echo 'plugin is not active';
	// 	}
	// }
	// add_action('admin_init', 'check_plugin_state');