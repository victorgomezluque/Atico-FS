<?php
/*
Element Description: VC Title with subtitle
*/

vc_map(
  array(
    'name' => __('VC Icon Text', 'emfasi'),
    'base' => 'vc_icontext',
    'description' => __('Widget Custom Icon text', 'emfasi'),
    'category' => __('Emfasi Widgets', 'emfasi'),
    'params' => array(
      array(
        'type' => 'textfield',
        'holder' => 'h2',
        'class' => 'title-class',
        'heading' => __( 'Title', 'emfasi' ),
        'param_name' => 'title',
        'admin_label' => false,
        'weight' => 0,
      ),  
      array(
        'type' => 'textfield',
        'holder' => 'h4',
        'class' => 'subtitle-class',
        'heading' => __( 'Subtitle', 'emfasi' ),
        'param_name' => 'subtitle',
        'admin_label' => false,
        'weight' => 0,
      ),  
      array(
        'type' => 'param_group',
        'value' => '',
        'param_name' => 'icontext',
        // Note params is mapped inside param-group:
        'params' => array(         
          array(
          'type' => 'attach_image',
          'value' => '',
          'heading' => 'icono',
          'param_name' => 'icontext_icon',
          ),
          array(
          'type' => 'textfield',
          'value' => '',
          'heading' => 'Información',
          'param_name' => 'icontext_text',
          ),
        )
      )
        
    ),
  )
);
