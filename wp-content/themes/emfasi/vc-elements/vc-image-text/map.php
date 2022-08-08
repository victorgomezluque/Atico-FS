<?php
/*
Element Description: VC Imagen + Texto 50%
*/

vc_map(
  array(
    'name' => __('VC Image text', 'emfasi'),
    'base' => 'vc_image_text',
    'description' => __('Widget Custom Image text', 'emfasi'),
    'category' => __('Emfasi Widgets', 'emfasi'),
    'params' => array(
      array(
        'type'        => 'dropdown',
        'heading'     => __('Style'),
        'param_name'  => 'style',
        'admin_label' => true,
        'value'       => array(
          'Left' => 'left',
          'Right' => 'right',
        ),
        'description' => __('Posicion del texto'),
        'std' => 'Left'
      ),
      array(
        "type" => "attach_image",
        "class" => "",
        "heading" => __("Imagen", "emfasi"),
        "param_name" => "image",
        "value" => '',
        "description" => __("", "emfasi"),
        'admin_label' => false,
        'holder' => "img",
      ),
      array(
        "type" => "textarea_html",
        "heading" => __("Text content", ""),
        "param_name" => "content",
        "holder" => "div",
      ),
      array(
        'type' => 'vc_link',
        'heading' => __( 'Link widget',  "emfasi" ),
        'param_name' => 'link_widget',
        'dependency' => array(
          'element' => 'link',
          'value' => array('custom')
        ),
        "description" => __( "Añadir enlace", "emfasi" ),
    ),


    ),
  )
);
