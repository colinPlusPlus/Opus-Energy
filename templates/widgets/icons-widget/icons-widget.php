<?php

/*
Widget Name: Opus Energy Icon Widget
Description: An Opus Energy Widget
Author: Colin Williams
*/

class Icon_Widget extends SiteOrigin_Widget {

  function __construct() {
    //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

    //Call the parent constructor with the required arguments.
    parent::__construct(
      // The unique id for your widget.
      'icon-widget',

      // The name of the widget for display purposes.
      __('Icon Widget', 'sage'),

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
       'icon_selection' => array(
          'type' => 'select',
          'prompt' => __( 'Choose an icon', 'sage' ),
          'options' => array(
            'icon-shop' => __( 'Shop Icon', 'sage' ),
            'icon-question-mark' => __( 'Question Mark', 'sage' ),
            'icon-document' => __( 'Document Icon', 'sage' ),
            'icon-chat' => __( 'Chat Icon', 'sage' ),
            'icon-conversation' => __( 'Conversation Icon', 'sage' ),
            'icon-electricity' => __( 'Electricity Icon', 'sage' ),
            'icon-gas' => __( 'Gas Icon', 'sage' ),
            'icon-office' => __( 'Office Icon', 'sage' ),
            'icon-meters' => __( 'Meters Icon', 'sage' ),
            'icon-moving-truck' => __( 'Moving Truck', 'sage' ),
            'icon-computer' => __( 'Computer Icon', 'sage' ),
            'icon-pound' => __( 'British Pound', 'sage' ),
            'icon-windmill' => __( 'Wind Energy', 'sage' ),
            'icon-switch-to-us-icon' => __( 'Switch To Us', 'sage' )
          )
        ),
       'icon_text' => array(
          'type' => 'text',
          'label' => __( 'Icon Text', 'sage' ),
          'prompt' => __( 'Icon Caption', 'sage' )
        ),  
        'button' => array(
          'type' => 'select',
          'prompt' => __( 'Choose a Button Colour', 'sage' ),
          'options' => array(
            'btn-primary' => __('Pink', 'sage'),
            'btn-default' => __('Green', 'sage')
          )
        ),
        'button_text' => array(
          'type' => 'text',
          'label' => __( 'Button Text', 'sage' )
        ),
        'url' => array(
          'type' => 'link',
          'label' => __('Button URL', 'sage')
        ),
        // 'some_icon' => array(
        //   'type' => 'icon',
        //   'label' => __('Select an icon', 'widget-form-fields-text-domain'),
        // )
      ),
    
      //The $base_folder path string.
      plugin_dir_path(__FILE__)
    );
  }

  function get_template_name($instance) {
    return 'icon-widget-template';
  }

}

siteorigin_widget_register('icon-widget', __FILE__, 'Icon_Widget');