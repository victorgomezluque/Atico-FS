<?php

add_shortcode('vc_projects', 'vc_projects_func');
function vc_projects_func($atts, $content)
{
  // Params extraction
  /* 
    icontext_icon
    icontext_text 
  */
  extract(
    shortcode_atts(
      array(
      ),
      $atts
    )
  );


  ob_start();

  //$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $total_posts = array(
    'post_type' => 'projects',
    'order_by' => 'menu_order',
  );


  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

  $args = array(
    'post_type' => 'projects',
    'order_by' => 'menu_order',
    'paged'         => $paged
  );


  $query = new WP_Query( $args );
  if ( $query->have_posts() ) {
  ?>  

<?php 
get_template_part( 'template-parts/content', 'more-info' );
?>

  <div class="grid-index grid-index-full-bg projects-grid-index" id="horitzontal-scroll">
  <?php
      // The Loop
      while ( $query->have_posts() ) {
          $query->the_post();

          get_template_part( 'template-parts/content', 'projects');
      };

      wp_reset_postdata();
  ?>

  </div>

  
  <?php
  }  
  ?>  

<?php
  $output = ob_get_contents();
  ob_end_clean();

  return $output;
}
