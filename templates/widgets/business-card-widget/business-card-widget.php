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
                  'shop' => __( 'shop', 'widget-form-fields-text-domain' ),
                  //'that_thing' => __( 'That thing', 'widget-form-fields-text-domain' ),
                  //'the_other_thing' => __( 'The other thing', 'widget-form-fields-text-domain' ),
              )
          )
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
