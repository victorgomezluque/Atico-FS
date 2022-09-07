<?php
/*
Element Description: VC Title with subtitle
*/

vc_map(
  array(
    'name' => __('VC Info two columns', 'emfasi'),
    'base' => 'vc_infotwocolumns',
    'description' => __('Widget Custom Info two columns', 'emfasi'),
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
        'param_name' => 'icotextbody',
        'heading' => __( 'Columna izquierda', 'emfasi' ),
        // Note params is mapped inside param-group:
        'params' => array(         
          array(
          'type' => 'attach_image',
          'value' => '',
          'heading' => 'icono',
          'param_name' => 'icotextbody_icon',
          ),
          array(
          'type' => 'textfield',
          'value' => '',
          'heading' => 'Información',
          'param_name' => 'icotextbody_text',
          ),
          array(
          'type' => 'textarea',
          'value' => '',
          'heading' => 'Información',
          'param_name' => 'icotextbody_textarea',
          ),
        )
      ),
      array(
        'type' => 'param_group',
        'value' => '',
        'param_name' => 'listoverlay',
        'heading' => __( 'Columna derecha', 'emfasi' ),
        // Note params is mapped inside param-group:
        'params' => array(         
          array(
          'type' => 'textfield',
          'value' => '',
          'heading' => 'Título',
          'param_name' => 'listoverlay_text',
          ),
          array(
          'type' => 'textfield',
          'value' => '',
          'heading' => 'SubTítulo',
          'param_name' => 'listoverlay_subtitle',
          ),
          array(
          'type' => 'textarea',
          'value' => '',
          'heading' => 'Información',
          'param_name' => 'listoverlay_textarea',
          ),
        )
      )        
    ),
  )
);
