<?php

add_shortcode('vc_slider_home', 'vc_slider_home_func');
function vc_slider_home_func($atts, $content)
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
    'post_type' => 'proyectos_slider',
    'order_by' => 'menu_order',
  );



  $args = array(
    'post_type' => 'proyectos_slider',
    'order_by' => 'menu_order',
  );


  $query = new WP_Query( $args );
  if ( $query->have_posts() ) {
  ?>  

<?php 
get_template_part( 'template-parts/content', 'more-info' );
?>

<a class="landing_kit-digital-btn" href="<?php _e("/kit-digital/"); ?>"><img src="/wp-content/themes/emfasi/assets/img-logo-kitdigital.png" alt="Logo kit digital"></a>

  <div class="cas-exit-home-container">
    <div class="cas-exit-home owl-carousel">
      <?php
        // The Loop
        while ( $query->have_posts() ) {
            $query->the_post();

            get_template_part( 'template-parts/content', 'slider-home');
        };

        wp_reset_postdata();
    ?>
    </div>
  </div>

  
  <?php
  }  
  ?>  

<?php
  $output = ob_get_contents();
  ob_end_clean();

  return $output;
}
