<?php

/*
Widget Name: Inner Page Content Widget
Description: An Opus Energy Widget
Author: Colin Williams
*/

class Inner_Page_Content_Widget extends SiteOrigin_Widget {

  function __construct() {
    //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

    //Call the parent constructor with the required arguments.
    parent::__construct(
      // The unique id for your widget.
      'inner-page-content',

      // The name of the widget for display purposes.
      __('Inner Page Content Widget', 'sage'),

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
        'widget_title' => array(
          'type' => 'text',
          'label' => __( 'Inner Conent Title', 'sage' )
        ),   
        'some_tinymce_editor' => array(
          'type' => 'tinymce',
          'label' => __( 'Inner Conent', 'sage' )
        )
      ),
      //The $base_folder path string.
      plugin_dir_path(__FILE__)
    );
  }

  function get_template_name($instance) {
    return 'inner-page-template';
  }

}

siteorigin_widget_register('inner-page-content', __FILE__, 'Inner_Page_Content_Widget');