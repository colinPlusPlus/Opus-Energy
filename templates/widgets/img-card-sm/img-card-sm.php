<?php

/**
* Widget Name: Small Image Card
*	Description: Business card wth background image and optional text
*	Author: Colin Williams 
*/

class Image_Card_Small_Widget extends SiteOrigin_Widget {
	
	function __construct() {

		
		//Call the parent constructor with the required arguments.
		parent::__construct(
			// The unique id for your widget.
			'img-card-sm',

			// The name of the widget for display purposes.
			__('Small Image Card', 'sage'),

			// The $widget_options array, which is passed through to WP_Widget.
			// It has a couple of extras like the optional help URL, which should link to your sites help or support page.
			array(
				'description' => __('Business card with background image and optional text', 'sage'),
				'panels_groups' => array('opus'),
			),

			//The $control_options array, which is passed through to WP_Widget
			array(
			),

			//The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
			array(
				'background_image' => array(
	        'type' => 'media',
	        'label' => __( 'Select an image', 'sage' ),
	        'choose' => __( 'Select image', 'sage' ),
	        'update' => __( 'Set image', 'sage' ),
	        'library' => 'image',
	        'fallback' => true
	  		),
	  		'header' => array(
					'type' => 'text',
					'label' => __('Title text', 'siteorigin-widgets'),
				),
				'text_area' => array(
	        'type' => 'textarea',
	        'label' => __( 'Type a message', 'widget-form-fields-text-domain' ),
	        'rows' => 4
	    	),
	    	'button' => array(
          'type' => 'select',
          'label' => __('Button Colour', 'sage'),
          'prompt' => __( 'Choose a Button Colour', 'sage' ),
          'options' => array(
            'btn-primary' => __('Pink', 'sage'),
            'btn-default' => __('Green', 'sage')
          )
        ),
        'button_text' => array(
          'type' => 'text',
          'label' => __( 'Button Text', 'sage' ),
          'prompt' => __( 'Button Text', 'sage' ),
        ),
        'url' => array(
	        'type' => 'link',
	        'label' => __('Button URL', 'sage'),
	        'default' => 'http://www.example.com'
    		)  
			),

			//The $base_folder path string.
			plugin_dir_path(__FILE__)
		);
	}

	function get_template_name($instance) {
		return 'img-card-sm-template';
	}
}
siteorigin_widget_register('img-card-sm', __FILE__, 'Image_Card_Small_Widget');