<?php

add_shortcode('vc_icontext', 'vc_icontext_func');
function vc_icontext_func($atts, $content)
{
  // Params extraction
  /* 
    icontext_icon
    icontext_text 
  */
  extract(
    shortcode_atts(
      array(
        'title'   => '',
        'subtitle' => '',
        'icontext'   => '',
      ),
      $atts
    )
  );

  $icontext = vc_param_group_parse_atts($icontext);

  ob_start();

  ?>

  <article>
    <div class="vc_icon_text vc_icon_text--container vc_carousel_icontext">
      <div class="container">
        <div class="cont--inner ">

        <div class="cont--title">
          <h2>
            <?php echo do_shortcode($title); ?>
          </h2>
        </div>

        <div class="cont--subtitle">
          <h4>
            <?php echo do_shortcode($subtitle); ?>
          </h4>
        </div>

        <div class="cont--items owl-carousel">

          <?php 
            foreach ($icontext as $item) {
          ?>
            <div class="vc_service_item">
              
              <div class="cont--image">
                <?php 
                  if (is_numeric($item['icontext_icon'])) {
                    $image_obj = wp_get_attachment_image($item['icontext_icon'], 'full');
                  }
                ?>
                  <?php echo $image_obj; ?>
              </div>
              <div class="cont--title">
                  <?php echo do_shortcode($item['icontext_text']); ?>
              </div>

            </div>
          <?php } ?>
        </div>
        </div>
      </div>
    </div>
  </article>
  

<?php
  $output = ob_get_contents();
  ob_end_clean();

  return $output;
}
