<?php
// Control core classes for avoid errors
if (class_exists('CSF')) {
//
// Set a unique slug-like ID
    $prefix = 'form_meta';

//
// Create a metabox
    CSF::createMetabox($prefix, array(
    'title'     => 'Form Meta Box',
    'post_type' => 'form',
    'theme'     => 'light',
    ));

//
// Form Select option
    CSF::createSection($prefix, array(
    'title'  => 'Option Field',
    'fields' => array(


    // Form Select Label
    array(
      'id'    => 'form-option-field-label',
      'type'  => 'text',
      'title' => 'Option Field Label',
    ),

//
// Repeater Option Field
    array(
      'id'     => 'form-select-option',
      'type'   => 'repeater',
      'title'  => 'Add Form Options',
      'fields' => array(

      //
      // Option Label
        array(
          'id'      => 'form-option-label',
          'type'    => 'text',
          'title'   => 'Option Label',
        ),

        //
        // Upload Select
        array(
          'id'    => 'form-option',
          'type'  => 'upload',
          'title' => 'Option',
        ),

      ),
    ),

    )
    ));

//
// Select Field
    CSF::createSection($prefix, array(
    'title'  => 'Select Field',
    'fields' => array(

      //
    // Select Field label
    array(
      'id'    => 'form-select-field-label',
      'type'  => 'text',
      'title' => 'Select Field Label',
    ),


      //
    // Repeater Select Field
    array(
      'id'     => 'form-select-option',
      'type'   => 'repeater',
      'title'  => 'Add Form Options',
      'fields' => array(

        //
        // A Select field
        array(
          'id'      => 'form-select',
          'type'    => 'text',
          'title'   => 'Add Option',
        ),

      ),
    ),


    )
    ));




//
// Select Field
    CSF::createSection($prefix, array(
    'title'  => 'Radio Field',
    'fields' => array(

      //
      // Select Field label
      array(
        'id'    => 'form-radio-field-label',
        'type'  => 'text',
        'title' => 'Radio Field Label',
      ),


      //
      // Repeater Select Field
      array(
        'id'     => 'form-select-option',
        'type'   => 'repeater',
        'title'  => 'Add Radio Options',
        'fields' => array(

          //
          // A Select field
          array(
            'id'      => 'form-select',
            'type'    => 'text',
            'title'   => 'Add Option',
          ),

        ),
      ),

    )
    ));
}
