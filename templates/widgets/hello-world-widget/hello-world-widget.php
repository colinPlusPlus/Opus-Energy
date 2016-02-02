<?php

/*
Widget Name: Jumbotron Widget
Description: An example widget which displays 'Hello world!'.
Author: Me
*/

class Hello_World_Widget extends SiteOrigin_Widget {
    
    function __construct() {
        //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
    
        //Call the parent constructor with the required arguments.
        parent::__construct(
            // The unique id for your widget.
            'hello-world-widget',
    
            // The name of the widget for display purposes.
            __('Hello World Widget', 'sage'),
    
            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __('A hello world widget.', 'sage'),
            ),
    
            //The $control_options array, which is passed through to WP_Widget
            array(
            ),
    
            //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
            array(
                'text' => array(
                    'type' => 'text',
                    'label' => __('Hello world! goes here.', 'siteorigin-widgets'),
                    'default' => 'Hello world!'
                ),
            ),
    
            //The $base_folder path string.
            plugin_dir_path(__FILE__)
        );
    }

    function get_template_name($instance) {
        return 'hello-world-template';
    }

    function get_style_name($instance) {
        return '';
    }
}

siteorigin_widget_register('hello-world-widget', __FILE__, 'Hello_World_Widget');