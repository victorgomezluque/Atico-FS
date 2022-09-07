<?php

add_shortcode('vc_services', 'vc_services_func');
function vc_services_func($atts, $content)
{
  // Params extraction
  /* 
    icontext_icon
    icontext_text 
  */
  extract(
    shortcode_atts(
      array(),
      $atts
    )
  );


  ob_start();

  $taxonomies = get_terms(array(
    'taxonomy' => 'services',
    'hide_empty' => false
  ));

  if (!empty($taxonomies)) :
?>

    <div class="cont--services-grid">
      <?php

      $args = array(
        'post_type' => 'services',

      );

      $query = new WP_Query($args);
      if ($query->have_posts()) {

      ?>
        <div class="services-index">
          <?php
          // The Loop
          while ($query->have_posts()) {
            $query->the_post();

            get_template_part('template-parts/content', 'services');
          };
          wp_reset_postdata();
          ?>
        </div>
      <?php
      }


      ?>
    </div>
<?php

get_template_part('template-parts/content', 'more-info');

  endif;

  $output = ob_get_contents();
  ob_end_clean();

  return $output;
}
