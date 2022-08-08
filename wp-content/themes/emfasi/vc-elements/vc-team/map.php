<?php
/*
Element Description: VC Title with subtitle
*/

vc_map(
  array(
    'name' => __('VC Team', 'emfasi'),
    'base' => 'vc_team',
    'description' => __('Widget Custom Team', 'emfasi'),
    'category' => __('Emfasi Widgets', 'emfasi'),
    'params' => array(
      array(
        'type' => 'param_group',
        'value' => '',
        'param_name' => 'team',
        // Note params is mapped inside param-group:
        'params' => array(         
          array(
          'type' => 'attach_image',
          'value' => '',
          'heading' => 'Image',
          'param_name' => 'team_image',
          ),
          array(
          'type' => 'textfield',
          'value' => '',
          'heading' => 'Nombre',
          'param_name' => 'team_name',
          ),
          array(
          'type' => 'textfield',
          'value' => '',
          'heading' => 'Cargo',
          'param_name' => 'team_charge',
          ),
          array(
          'type' => 'textarea',
          'value' => '',
          'heading' => 'Información',
          'param_name' => 'team_body',
          ),
          array(
          'type' => 'textfield',
          'value' => '',
          'heading' => 'Facebook',
          'param_name' => 'team_facebook',
          ),
          array(
          'type' => 'textfield',
          'value' => '',
          'heading' => 'Linkedin',
          'param_name' => 'team_linkedin',
          ),
        )
      )
        
    ),
  )
);
