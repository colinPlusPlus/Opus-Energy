<?php

/*
Widget Name: Business Card Widget
Description: Business Card Widget
Author: Colin Williams
*/

class Business_Card_Widget extends SiteOrigin_Widget {

  function __construct() {
    //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

    //Call the parent constructor with the required arguments.
    parent::__construct(
      // The unique id for your widget.
      'business-card-widget',

      // The name of the widget for display purposes.
      __('Business Card Widget', 'sage'),

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
          // 'some_icon' => array(
          // 'type' => 'icon',
          // 'label' => __('Select an icon', 'widget-form-fields-text-domain'),
          // ),
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
            'a_repeater' => array(
              'type' => 'repeater',
              'label' => __( 'Business Card Text' , 'sage' ),
              'item_name'  => __( 'Repeater item', 'siteorigin-widgets' ),
              'fields' => array(
                'body_text' => array(
                  'type' => 'textarea',
                  'label' => __( 'Type a message', 'sage' ), 
                  'rows' => 3
                )
              )
            ),
          )
        ),
        'button_section' => array(
          'type' => 'section',
          'label' => __('Select a Button Color and Text', 'sage'),
          'hide' => false,
          'fields' => array(
            'button_selection_body' => array(
              'type' => 'select',
              'label' => 'Choose a button for the body section',
              'prompt' => __( 'Choose a Button Colour', 'sage' ),
              'options' => array(
                'btn-primary' => __('Pink', 'sage'),
                'btn-default' => __('Green', 'sage')
              )
            ),
            'button_text_body' => array(
              'type' => 'text',
              'prompt' => __( 'Button Text', 'sage' ),
            ),
            'body_url' => array(
              'type' => 'link',
              'label' => __('Button Body URL', 'sage'),
              'default' => 'http://www.example.com'
            ),          
            'button_selection_footer' => array(
              'type' => 'select',
              'label' => 'Choose a button for the footer section',
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
            'footer_url' => array(
              'type' => 'link',
              'label' => __('Footer Button URL', 'sage'),
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
    return 'business-card-template';
  }

}

siteorigin_widget_register('business-card-widget', __FILE__, 'Business_Card_Widget');