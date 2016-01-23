<?php

/*
Widget Name: Jumbotron Widget!
Description: Bootstrap Jumbotron
Author: Colin Williams
*/

class Jumbotron_Widget extends SiteOrigin_Widget {

	function __construct() {
		//Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

		//Call the parent constructor with the required arguments.
		parent::__construct(
		// The unique id for your widget.
			'jumbotron-widget',

			// The name of the widget for display purposes.
			__('Jumbotron Widget', 'sage'),

			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('A Jumbotron widget.', 'sage'),
			),

			//The $control_options array, which is passed through to WP_Widget
			array(
			),

			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'text' => array(
					'type' => 'text',
					'label' => __('Your text goes here.', 'siteorigin-widgets'),
					'default' => 'Hello world!'
				),
			),

			//The $base_folder path string.
			plugin_dir_path(__FILE__)
		);
	}

	function get_template_name($instance) {
		return 'jumbotron-template';
	}

}

siteorigin_widget_register('jumbotron-widget', __FILE__, 'Jumbotron_Widget');