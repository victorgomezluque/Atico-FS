<?php

add_shortcode('vc_collaborator', 'vc_collaborator_func');
function vc_collaborator_func($atts, $content)
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
  $args = array(
    'post_type' => 'collaborator',
    'order_by' => 'menu_order'
  );


  $query = new WP_Query( $args );
  if ( $query->have_posts() ) {
  ?>

<?php 
get_template_part( 'template-parts/content', 'more-info' );
?>

  <div class="grid-index collaborator-grid-index">
  <?php
      // The Loop
      while ( $query->have_posts() ) {
          $query->the_post();

					get_template_part( 'template-parts/content', 'collaborator');
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
