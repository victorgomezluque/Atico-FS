<?php
/*
Element Description: VC Imagen + Texto
*/

vc_map( 
  array(
      'name' => __('VC Carousel', 'emfasi'),
      'base' => 'vc_carousel',
      'description' => __('Another simple VC box', 'emfasi'), 
      'category' => __('Emfasi Widgets', 'emfasi'),             
      'params' => array(   
               
          array(
              'type' => 'dropdown',
              'heading' => __( 'Selector Carousel',  "emfasi" ),
              'param_name' => 'select_carousel',
              'value' => get_dropdown_posts('carousel'),
              "description" => __( "Selecciona un Carousel", "emfasi" ),
          ),
          
      ),
  )
);                                



function get_dropdown_posts($post_name) {
$posts = get_posts([
          'post_type' => $post_name,
          'order' => 'ASC'
      ]);

$result = array();

foreach ($posts as $post) {
  $result[$post->post_title] = $post->ID;
}
return $result;

}