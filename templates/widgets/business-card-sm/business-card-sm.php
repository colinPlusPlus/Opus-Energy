<?php

/*
Widget Name: Business Card Sidebar Widget
Description: An Opus Energy Widget
Author: Colin Williams
*/

class Small_Business_Card_Widget extends SiteOrigin_Widget {

  function __construct() {
    //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

    //Call the parent constructor with the required arguments.
    parent::__construct(
      // The unique id for your widget.
      'business-card-sm',

      // The name of the widget for display purposes.
      __('Business Card Sidebar Widget', 'sage'),

      // The $widget_options array, which is passed through to WP_Widget.
      // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
      array(
          'description' => __('An Opus Energy Widget', 'sage'),
          'panels_groups' => array('opus'),
      ),

      //The $control_options array, which is passed through to WP_Widget
      array(
      ),

      //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
      array(
        'header_section' => array(
        'type' => 'section',
        'label' => __( 'Business Card Header' , 'asge' ),
        'hide' => false,
        'fields' => array(
          'widget_title' => array(
            'type' => 'text',
            'label' => __( 'Business Card Title' )
            )
          )
        ),
        'body_section' => array(
          'type' => 'section',
          'label' => __( 'Business Card Text' , 'sage' ),
          'hide' => false,
          'fields' => array(
            'body_text' => array(
              'type' => 'textarea',
              'label' => __( 'Type a message', 'sage' ), 
              'rows' => 2
            )
          )
        ),
        'button_section' => array(
          'type' => 'section',
          'label' => __('Select a Button Color and Text', 'sage'),
          'hide' => false,
          'fields' => array(
            'button_selection_footer' => array(
              'type' => 'select',
              'prompt' => __( 'Choose a Button Colour', 'sage' ),
              'options' => array(
                'btn-primary' => __('Pink', 'sage'),
                'btn-default' => __('Green', 'sage')
              )
            ),
            'button_text_footer' => array(
              'type' => 'text',
              'prompt' => __( 'Button Text', 'sage' ),
            ),
            'url' => array(
              'type' => 'link',
              'label' => __('Button URL', 'sage'),
              'default' => 'http://www.example.com'
            ),        
          )
        ),
      ),

      //The $base_folder path string.
      plugin_dir_path(__FILE__)
    );
  }

  function get_template_name($instance) {
    return 'business-card-sm-template';
  }

}

siteorigin_widget_register('business-card-sm', __FILE__, 'Small_Business_Card_Widget');