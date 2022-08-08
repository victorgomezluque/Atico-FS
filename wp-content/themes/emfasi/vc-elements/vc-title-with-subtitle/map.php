<?php
/*
Element Description: VC Title with subtitle
*/

vc_map(
  array(
    'name' => __('VC Title with subtitle', 'emfasi'),
    'base' => 'vc_title_with_subtitle',
    'description' => __('Widget Custom Title with subtitle', 'emfasi'),
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
        'group' => 'Custom Group',
      ),  
      array(
        'type' => 'textfield',
        'holder' => 'h4',
        'class' => 'subtitle-class',
        'heading' => __( 'Subtitle', 'emfasi' ),
        'param_name' => 'subtitle',
        'admin_label' => false,
        'weight' => 0,
        'group' => 'Custom Group',
      ),  
    ),
  )
);
