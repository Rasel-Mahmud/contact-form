<?php
// Control core classes for avoid errors
if (class_exists('CSF')) {
//
// Set a unique slug-like ID
    $prefix = 'form_builder';

//
// Create options
    CSF::createOptions($prefix, array(
    'menu_title' => 'Form Settings',
    'menu_slug'  => 'form-settings',
    'framework_title'   => 'Form Builder Settings',
    'theme'      => 'light',
    'show_bar_menu'           => false,
    'show_sub_menu'           => true,
    'show_in_network'         => true,
    'show_in_customizer'      => false,

    'show_search'             => false,
    'show_reset_all'          => false,
    'show_reset_section'      => false,
    'show_footer'             => true,
    'show_all_options'        => false,
    'show_form_warning'       => true,
    'sticky_header'           => true,
    'save_defaults'           => true,
    'ajax_save'               => true,
    'menu_icon'               => 'dashicons-editor-table',
    ));

//
// Create a section
    CSF::createSection($prefix, array(
    'title'  => 'Tab Title 1',
    'fields' => array(

//
// A text field
    array(
    'id'    => 'opt-text',
    'type'  => 'text',
    'title' => 'Simple Text',
    ),

    )
    ));

//
// Create a section
    CSF::createSection($prefix, array(
    'title'  => 'Tab Title 2',
    'fields' => array(

// A textarea field
    array(
    'id'    => 'opt-textarea',
    'type'  => 'textarea',
    'title' => 'Simple Textarea',
    ),

    )
    ));
}
